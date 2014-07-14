<?php
/**
*
* @package Enable HTML
* @copyright (c) 2008 EXreaction
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

function enable_html_permission_self($forum_id = false)
{
	global $auth;

	if ($forum_id)
	{
		return ($auth->acl_get('u_html') || $auth->acl_get('f_html', $forum_id)) ? true : false;
	}
	else
	{
		return ($auth->acl_get('u_html')) ? true : false;
	}
}

function enable_html_permission($user_id, $user_row = false, $forum_id = false)
{
	static $html_permissions = array();
	global $user;

	if (!isset($user_row['user_id']))
	{
		$user_row['user_id'] = $user_id = (int) $user_id;
	}
	else
	{
		$user_id = $user_row['user_id'] = (int) $user_row['user_id'];
	}

	if ($user_id == ANONYMOUS)
	{
		return false;
	}
	else if ($user_id == $user->data['user_id'])
	{
		return enable_html_permission_self($forum_id);
	}

	if (!isset($html_permissions[$user_id]))
	{
		$html_permissions[$user_id] = array();
	}

	if ($forum_id && isset($html_permissions[$user_id][$forum_id]))
	{
		return $html_permissions[$user_id][$forum_id];
	}
	else if (!$forum_id && isset($html_permissions[$user_id][0]))
	{
		return $html_permissions[$user_id][0];
	}

	if ($user_row === false || !isset($user_row['user_type']) || !isset($user_row['user_permissions']))
	{
		global $db;
		$result = $db->sql_query('SELECT user_type, user_permissions, user_id FROM ' . USERS_TABLE . ' WHERE user_id = ' . $user_id);
		$user_row = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);

		if (!$user_row)
		{
			return false;
		}
	}

	if ($forum_id)
	{
        $new_auth = new auth();
		$new_auth->acl($user_row);
		$html_permissions[$user_id][$forum_id] = ($new_auth->acl_get('u_html') || $new_auth->acl_get('f_html', $forum_id)) ? true : false;
		unset($new_auth);

		return $html_permissions[$user_id][$forum_id];
	}
	else
	{
        $new_auth = new auth();
		$new_auth->acl($user_row);
		$html_permissions[$user_id][0] = ($new_auth->acl_get('u_html')) ? true : false;
		unset($new_auth);

		return $html_permissions[$user_id][0];
	}
}

function enable_html($text, $uid)
{
	if (strpos($text, '[html') === false)
	{
		return $text;
	}

	$text = str_replace(array('[html:' . $uid . ']', '[/html:' . $uid . ']'), array('[html]', '[/html]'), $text);

	$text_ary = explode('[html]', $text);
	$text = '';
	foreach ($text_ary as $tmp)
	{
		if (strpos($tmp, '[/html]'))
		{
			$tmp = explode('[/html]', $tmp, 2);
			$text .= htmlspecialchars_decode(str_replace(array("\r\n", "\n"), ' ', $tmp[0])) . $tmp[1];
		}
		else
		{
			$text .= $tmp;
		}
	}

	return str_replace(array('[html]', '[/html]'), '', $text);
}

?>