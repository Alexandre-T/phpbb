<?php
/**
*
* @package phpBB3
* @version $Id$
* @copyright (c) Alexandre TRANCHANT
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();

//Chargement de la langue
$user->add_lang('mods/clan', FALSE, FALSE);

//Chargement de la liste des clans
$sql = $db->sql_build_query('SELECT', array(
	'SELECT'	=> 'g.group_id, g.group_name, g.group_colour, g.group_type',
	'FROM' => array(
		GROUPS_TABLE => 'g',
	),
	'WHERE' => 'g.group_id in ('.GROUPE_SKJALDMEYJAR.','.GROUPE_INSOUMIS.','.GROUPE_INFILTRES.','.GROUPE_IZANAGHIS.','.GROUPE_VESTALES.','.GROUPE_ASMODEENS.','. GROUPE_TEMPLIERS .')',
	'ORDER BY' => 'g.group_name ASC'
));
$result_clan = $db->sql_query($sql);

$rang = 0;
while ($row = $db->sql_fetchrow($result_clan))
{
	$template->assign_block_vars('clans', array(
		'ID'			=> 	$row['group_id'],
		'RANG'			=> 	$rang++,
		'NAME'			=>  $row['group_name'],
		'GROUP_COLOUR'	=>  $row['group_colour'],
		'GROUP_TYPE'	=>  $row['group_type']
	));	
	
	
	//Chargement de la liste des avatars

	//requête SQL
	$sql = $db->sql_build_query('SELECT', array(
		'SELECT'	=> 'u.user_avatar, u.user_avatar_type,u.user_avatar_width div 2 as user_avatar_width, u.user_avatar_height div 2 as user_avatar_height, u.user_id, u.group_id as default_group, u.username, u.username_clean, u.user_colour, u.user_rank, u.user_posts, u.user_allow_pm, g.group_id, g.group_name, g.group_colour, g.group_type',

		'FROM'		=> array(
			USERS_TABLE		 => 'u',
			GROUPS_TABLE	 => 'g',
			USER_GROUP_TABLE => 'ugm'
		),

		'WHERE'		=> 'u.group_id = g.group_id AND u.user_id = ugm.user_id and ugm.group_id = '. $row['group_id'] ,

		'ORDER_BY'	=> 'ugm.group_leader DESC, u.username_clean ASC'
	));
	$result = $db->sql_query($sql);
	//Préparation du tableau
	while ($row2 = $db->sql_fetchrow($result))
	{
		
		$template->assign_block_vars('clans.avatars', array(
			'AVATAR_IMG'	=> get_user_avatar($row2['user_avatar'], $row2['user_avatar_type'], $row2['user_avatar_width'], $row2['user_avatar_height']),
			'USER_FULL'		=> get_username_string('full', $row2['user_id'], $row2['username'], $row2['user_colour'], $row2['username']),
			'USER_COLOUR'	=> get_username_string('colour', $row2['user_id'], $row2['username'], $row2['user_colour'], $row2['username']),
			'USER_NAME'		=> get_username_string('username', $row2['user_id'], $row2['username'], $row2['user_colour'], $row2['username']),
			'U_USER'		=> get_username_string('profile', $row2['user_id'], $row2['username'], $row2['user_colour'], $row2['username']),	
		));
	}
	$db->sql_freeresult($result);
	
}
$db->sql_freeresult($result_clan);

$sql = $db->sql_build_query('SELECT', array(
		'SELECT'	=> 'u.user_avatar, u.user_avatar_type,u.user_avatar_width div 2 as user_avatar_width, u.user_avatar_height div 2 as user_avatar_height, u.user_id, u.group_id as default_group, u.username, u.username_clean, u.user_colour, u.user_rank, u.user_posts, u.user_allow_pm, g.group_id, g.group_name, g.group_colour, g.group_type',

		'FROM'		=> array(
			USERS_TABLE		 => 'u',
			GROUPS_TABLE	 => 'g',
			USER_GROUP_TABLE => 'ugm'
		),

	'WHERE'		=> 'u.group_id = g.group_id AND u.user_id = ugm.user_id and ugm.group_id = ' .GROUPE_ACTIF. ' and '
			     . 'NOT EXISTS (' . $db->sql_build_query('SELECT',array(
			     		'SELECT' => ' 1 ',
						'FROM'		=> array(
							USER_GROUP_TABLE => 'ugm2'
						),
						'WHERE'		=> 'u.user_id = ugm2.user_id and ugm2.group_id in ('.GROUPE_SKJALDMEYJAR.','.GROUPE_INSOUMIS.','.GROUPE_INFILTRES.','.GROUPE_IZANAGHIS.','.GROUPE_VESTALES.','.GROUPE_ASMODEENS.','. GROUPE_TEMPLIERS .') ' ,		
		)).')',
		'ORDER_BY'	=> 'u.username_clean ASC'
));
$result_sansclan = $db->sql_query($sql);
while ($row2 = $db->sql_fetchrow($result_sansclan))
{
	$template->assign_block_vars('sansclan', array(
		'AVATAR_IMG'	=> get_user_avatar($row2['user_avatar'], $row2['user_avatar_type'], $row2['user_avatar_width'], $row2['user_avatar_height']),
		'USER_FULL'		=> get_username_string('full', $row2['user_id'], $row2['username'], $row2['user_colour'], $row2['username']),
		'USER_COLOUR'	=> get_username_string('colour', $row2['user_id'], $row2['username'], $row2['user_colour'], $row2['username']),
		'USER_NAME'		=> get_username_string('username', $row2['user_id'], $row2['username'], $row2['user_colour'], $row2['username']),
		'U_USER'		=> get_username_string('profile', $row2['user_id'], $row2['username'], $row2['user_colour'], $row2['username']),	
	));
}
$db->sql_freeresult($result);



//Construction de l'entête
page_header($user->lang['CLAN_TITRE']);

//Appel de la bonne page
$template->set_filenames(array(
	'body' => 'clan.html')
);
//Création de la jumpbox
make_jumpbox(append_sid("{$phpbb_root_path}viewforum.$phpEx"));

//Construction du pied de page
page_footer();

?>