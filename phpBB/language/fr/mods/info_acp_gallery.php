<?php
/**
*
* info_acp_gallery [French]
*
* @package phpBB Gallery
* @version $Id: info_acp_gallery.php 182 2009-09-17 09:51:35Z lagunapower $
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
	'ACP_GALLERY_ALBUM_MANAGEMENT'		=> 'Gestion de l\'album',
	'ACP_GALLERY_ALBUM_PERMISSIONS'		=> 'Permissions',
	'ACP_GALLERY_ALBUM_PERMISSIONS_COPY'=> 'Copier les permissions',
	'ACP_GALLERY_CLEANUP'				=> 'Nettoyage de la galerie-photos',
	'ACP_GALLERY_CONFIGURE_GALLERY'		=> 'Configuration générale',
	'ACP_GALLERY_LOGS'					=> 'Journaux de la galerie-photos',
	'ACP_GALLERY_LOGS_EXPLAIN'			=> 'Toutes les actions des modérateurs de la galerie-photos sont listés ici, comme l\'approbation, la désapprobation, le verrouillage, le déverrouillage, la fermeture des rapports et la suppression de photos.',
	'ACP_GALLERY_MANAGE_ALBUMS'			=> 'Gestion des albums',
	'ACP_GALLERY_OVERVIEW'				=> 'Aperçu',
	'ACP_IMPORT_ALBUMS'					=> 'Importer des photos',

	'GALLERY'							=> 'Galerie-photos',
	'GALLERY_EXPLAIN'					=> 'Galerie-photos',
	'GALLERY_HELPLINE_ALBUM'			=> 'Photo de la galerie-photos: [album]id_de_l_image[/album], avec ce BBCode vous pourrez ajouter une image de la galerie-photos dans vos messages.',

	// A little line where you can give yourself some credits on the translation.
	//'GALLERY_TRANSLATION_INFO'			=> 'English "phpBB Gallery"-Translation by <a href="http://www.flying-bits.org/">nickvergessen</a>',
	'GALLERY_TRANSLATION_INFO'			=> 'Traduction française par <a href="http://www.renault-laguna.com/">LagunaPower</a>',

	'IMAGES'							=> 'Photos',
	'IMG_BUTTON_UPLOAD_IMAGE'			=> 'Envoyer une photo',

	'PERSONAL_ALBUM'					=> 'Album personnel',
	'PHPBB_GALLERY'						=> 'phpBB Gallery',

	'TOTAL_IMAGES_OTHER'				=> 'Nombre de photos <strong>%d</strong>',
	'TOTAL_IMAGES_ZERO'					=> 'Nombre de photos <strong>0</strong>',
));

?>