<?php
/**
*
* @package phpBB3
* @author Highway of Life ( David Lewis ) http://startrekguide.com
* @version $Id$
* @copyright (c) 2008 Star Trek Guide Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit();
}

/**
 * Display extra stats, rp, posts and topics.
 *
 * @return bool
 */
function rp_stats_mod()
{
	global $db, $template, $user;

	$user->add_lang('mods/rp_stats');

	// if the user is a bot, we won’t even process this function...
	if ($user->data['is_bot'])
	{
		return false;
	}
	
	// On ne compte que les utilisateurs du groupe actif
	$sql = 'SELECT count(user_id) as q
		FROM ' . USER_GROUP_TABLE . '
		WHERE group_id = '. GROUPE_ACTIF;
	$result = $db->sql_query($sql);
	$row = $db->sql_fetchrow($result);
	$total_actives = $row['q'];
	$db->sql_freeresult($result);
	
	// On compte les RPs actifs qui ne sont pas en post-it et qui ne sont pas verrouillés
	$sql = 'SELECT count(topic_id) as q
		FROM ' . TOPICS_TABLE . ' t
		INNER JOIN '. FORUMS_TABLE . ' f
		ON t.forum_id = f.forum_id
		WHERE topic_type = 0 and forum_rp = 1 and topic_status = 0';
	$result = $db->sql_query($sql);
	$row = $db->sql_fetchrow($result);
	$total_rps = $row['q'];
	$db->sql_freeresult($result);	
	
	// On compte les RPs actifs qui ne sont pas en post-it et qui sont verrouillés
	$sql = 'SELECT count(topic_id) as q
	 FROM ' . TOPICS_TABLE . ' t
	INNER JOIN '. FORUMS_TABLE . ' f
	ON t.forum_id = f.forum_id
	WHERE topic_type = 0 and forum_rp = 1 and topic_status = 1';
	$result = $db->sql_query($sql);
	$row = $db->sql_fetchrow($result);
	$total_archives = $row['q'];
	$db->sql_freeresult($result);
	
	$l_total_active_s  = ($total_actives <= 1 )  ? 'TOTAL_ACTIVES_ZERO' : 'TOTAL_ACTIVES_OTHER';
	$l_total_archive_s = ($total_archives <= 1 ) ? 'TOTAL_ARCHIVES_ZERO' : 'TOTAL_ARCHIVES_OTHER';
	$l_total_rp_s      = ($total_rps <= 1 )      ? 'TOTAL_RPS_ZERO' : 'TOTAL_RPS_OTHER';
	
	
	// assign the stats to the template.
	$template->assign_vars(array(
		'TOTAL_ACTIVES'	=> sprintf($user->lang[$l_total_active_s], $total_actives),
		'TOTAL_ARCHIVES'=> sprintf($user->lang[$l_total_archive_s], $total_archives),
		'TOTAL_RPS'		=> sprintf($user->lang[$l_total_rp_s], $total_rps),
	));

	return true;
}

?>