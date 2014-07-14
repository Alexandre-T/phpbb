<?php
/**
*
* info_acp_gallery_logs [French]
*
* @package phpBB Gallery
* @version $Id: info_acp_gallery_logs.php 182 2009-09-17 09:51:35Z lagunapower $
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
	'LOG_ALBUM_ADD'							=> '<strong>Nouvel album créé</strong><br />» %s',
	'LOG_ALBUM_DEL_ALBUM'					=> '<strong>Album supprimé</strong><br />» %s',
	'LOG_ALBUM_DEL_ALBUMS'					=> '<strong>Album supprimé ainsi que ses sous-forums</strong><br />» %s',
	'LOG_ALBUM_DEL_MOVE_ALBUMS'				=> '<strong>Album supprimé et sous-forums déplacés</strong> vers %1$s<br />» %2$s',
	'LOG_ALBUM_DEL_MOVE_IMAGES'				=> '<strong>Album supprimé et photos déplacées </strong> vers %1$s<br />» %2$s',
	'LOG_ALBUM_DEL_MOVE_IMAGES_ALBUMS'		=> '<strong>Album supprimé et sous-forums et photos déplacés</strong> vers %1$s<br />» %2$s',
	'LOG_ALBUM_DEL_MOVE_IMAGES_MOVE_ALBUMS'	=> '<strong>Album supprimé, photos déplacées</strong> vers %1$s <strong>et sous-forums déplacés</strong> vers %2$s<br />» %3$s',
	'LOG_ALBUM_DEL_IMAGES'					=> '<strong>Album supprimé ainsi que les photos qu\'il contenait</strong><br />» %s',
	'LOG_ALBUM_DEL_IMAGES_ALBUMS'			=> '<strong>Album supprimé, ainsi que ses photos et sous-albums</strong><br />» %s',
	'LOG_ALBUM_DEL_IMAGES_MOVE_ALBUMS'		=> '<strong>Album supprimé ainsi que les photos qu\'il contenait, et sous-forums déplacés</strong> vers %1$s<br />» %2$s',
	'LOG_ALBUM_EDIT'						=> '<strong>Détails de l\'album édités</strong><br />» %s',
	'LOG_ALBUM_MOVE_DOWN'					=> '<strong>Album déplacé</strong> %1$s <strong>vers le bas</strong> %2$s',
	'LOG_ALBUM_MOVE_UP'						=> '<strong>Album déplacé</strong> %1$s <strong>vers le haut</strong> %2$s',
	'LOG_ALBUM_SYNC'						=> '<strong>Album resynchronisé</strong><br />» %s',

	'LOG_CLEAR_GALLERY'					=> 'Journaux de la galerie-photos nettoyés',

	'LOG_GALLERY_APPROVED'				=> '<strong>Photo acceptée</strong><br />» %s',
	'LOG_GALLERY_COMMENT_DELETED'		=> '<strong>Commentaire supprimé</strong><br />» %s',
	'LOG_GALLERY_COMMENT_EDITED'		=> '<strong>Commentaire édité</strong><br />» %s',
	'LOG_GALLERY_DELETED'				=> '<strong>Photo supprimée</strong><br />» %s',
	'LOG_GALLERY_EDITED'				=> '<strong>Photo éditée</strong><br />» %s',
	'LOG_GALLERY_LOCKED'				=> '<strong>Photo verrouillée</strong><br />» %s',
	'LOG_GALLERY_MOVED'					=> '<strong>Photo déplacée</strong><br />» de %1$s vers %2$s',
	'LOG_GALLERY_REPORT_CLOSED'			=> '<strong>Rapport clos</strong><br />» %s',
	'LOG_GALLERY_REPORT_DELETED'		=> '<strong>Rapport supprimé</strong><br />» %s',
	'LOG_GALLERY_REPORT_OPENED'			=> '<strong>Rapport réouvert</strong><br />» %s',
	'LOG_GALLERY_UNAPPROVED'			=> '<strong>Photo rejetée</strong><br />» %s',

	'LOGVIEW_VIEWALBUM'					=> 'Voir l\'album',
	'LOGVIEW_VIEWIMAGE'					=> 'Voir la photo',
));

?>