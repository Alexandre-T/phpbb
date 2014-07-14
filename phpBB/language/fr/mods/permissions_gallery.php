<?php
/**
*
* permissions_gallery [French]
*
* @package phpBB Gallery
* @version $Id: permissions_gallery.php 182 2009-09-17 09:51:35Z lagunapower $
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
**/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang['permission_cat']['gallery'] = 'phpBB Gallery';

// Adding the permissions
$lang = array_merge($lang, array(
	'acl_a_gallery_manage'		=> array('lang' => 'Peut gérer les options de phpBB Gallery',	'cat' => 'gallery'),
	'acl_a_gallery_albums'		=> array('lang' => 'Peut ajouter/éditer des albums et leurs permissions',		'cat' => 'gallery'),
	'acl_a_gallery_import'		=> array('lang' => 'Peut utiliser les fonctions d\'importation',				'cat' => 'gallery'),
	'acl_a_gallery_cleanup'		=> array('lang' => 'Peut nettoyer phpBB Gallery',			'cat' => 'gallery'),
));
?>