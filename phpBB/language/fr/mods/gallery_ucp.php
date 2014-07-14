<?php
/**
*
* gallery_ucp [French]
*
* @package phpBB Gallery
* @version $Id: gallery_ucp.php 1355 2010-01-20 23:29:09Z nickvergessen translate by LagunaPower$
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
	'ALBUMS'						=> 'Albums',
	'ALBUM_DESC'					=> 'Description de l\'album',
	'ALBUM_NAME'					=> 'Nom de l\'album',
	'ALBUM_PARENT'					=> 'Album-parent',
	'ATTACHED_SUBALBUMS'			=> 'Sous-albums liés',

	'CREATE_PERSONAL_ALBUM'			=> 'Créer mon album personnel',
	'CREATE_SUBALBUM'				=> 'Créer un sous-album',
	'CREATE_SUBALBUM_EXP'			=> 'Vous pouvez lier un nouvel sous-album à votre galerie personnelle.',
	'CREATED_SUBALBUM'				=> 'Le sous-album a bien été créé',

	'DELETE_ALBUM'					=> 'Supprimer l\'album',
	'DELETE_ALBUM_CONFIRM'			=> 'Etes-vous sûr de vouloir supprimer l\'album avec tous ses sous-albums et ses photos ?',
	'DELETED_ALBUMS'				=> 'Les albums ont bien été supprimés',

	'EDIT'							=> 'Editer',
	'EDIT_ALBUM'					=> 'Editer l\'album',
	'EDIT_SUBALBUM'					=> 'Editer le sous-album',
	'EDIT_SUBALBUM_EXP'				=> 'D\'ici vous pouvez éditer vos albums.',
	'EDITED_SUBALBUM'				=> 'L\'album a bien été édité',

	'GOTO'							=> 'Aller à',

	'MANAGE_SUBALBUMS'				=> 'Gestion de vos sous-albums',
	'MISSING_ALBUM_NAME'			=> 'Svp, indiquez un nom d\'album',

	'NEED_INITIALISE'				=> 'Vous n\'avez pas encore d\'album personnel.',
	'NO_ALBUM_STEALING'				=> 'Vous n\'êtes pas autorisé à gérer les albums d\'autres membres !',
	'NO_FAVORITES'					=> 'Vous n\'avez pas de favoris.',
	'NO_MORE_SUBALBUMS_ALLOWED'		=> 'Vous avez atteint le maximum de sous-albums autorisés pour votre album personnel',
	'NO_PARENT_ALBUM'				=> '&laquo;-- aucun parent',
	'NO_PERSALBUM_ALLOWED'			=> 'Vous n\'êtes pas autorisé à créer votre album personnel',
	'NO_PERSONAL_ALBUM'				=> 'Vous n\'avez pas encore d\'album personnel. D\'ici vous pouvez en créer un avec quelques sous-albums.<br />Dans les albums personnels, seul son propriétaire peut y envoyer des images.',
	'NO_SUBALBUMS'					=> 'Aucun album lié',
	'NO_SUBSCRIPTIONS'				=> 'Vous n\'êtes abonné à aucune photo.',

	'PARSE_BBCODE'					=> 'Parser les BBCodes',
	'PARSE_SMILIES'					=> 'Parser les smileys',
	'PARSE_URLS'					=> 'Parser les liens',
	'PERSONAL_ALBUM'				=> 'Album personnel',

	'REMOVE_FROM_FAVORITES'			=> 'Supprimer des favoris',

	'UNSUBSCRIBE'					=> 'Arrêter l\'abonnement',

	'YOUR_FAVORITE_IMAGES'			=> 'D\'ici vous pouvez voir vos photos favorites. Vous pouvez les supprimer si vous ne les aimez plus.',
	'YOUR_SUBSCRIPTIONS'			=> 'D\'ici vous pouvez voir les albums et les photos auquels vous êtes abonnés.',

	'VIEWEXIFS_DEFAULT'				=> 'Voir les données EXIF par défaut',
	
	'WATCH_CHANGED'					=> 'Options enregistrées',
	'WATCH_COM'						=> 'Approuver par défaut la souscription aux commentaires des images',
	'WATCH_FAVO'					=> 'Approuver par défaut la souscription aux photos favorites',
	'WATCH_NOTE'					=> 'Cette option concernera uniquement les nouvelles photos. Toutes les autres photos auront besoin d\'être ajoutées par l\'option "S\'abonner à la photo."',
	'WATCH_OWN'						=> 'S\'abonner par défaut à ses propres photos',
));

?>