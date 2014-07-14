<?php
/**
*
* info_ucp_gallery [French]
*
* @package phpBB Gallery
* @version $Id: info_ucp_gallery.php 182 2009-09-17 09:51:35Z lagunapower $
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

$lang = array_merge($lang, array(
	'UCP_GALLERY'						=> 'Galerie-photos',
	'UCP_GALLERY_FAVORITES'				=> 'Gestion des favoris',
	'UCP_GALLERY_PERSONAL_ALBUMS'		=> 'Gestion des albums personnels',
	'UCP_GALLERY_SETTINGS'				=> 'Options',
	'UCP_GALLERY_WATCH'					=> 'Gestion des souscriptions',
));

?>