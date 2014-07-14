<?php
/** 
*
* contexte [Standard french]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'AVATAR_TITRE' => 'Avatars utilisés',
	'AVATAR_PRIS'  => 'Les avatars déjà pris sur Gehinnom',
	'AVATAR_EXPLICATIONS'	 => 'Chaque personnage est illustré par un avatar. À la création de votre personnage, veuillez choisir un avatar parmi les célébrités. Mais veillez à ce que cet avatar ne soit pas présent dans la liste ci-dessous !',
	'AVATAR_AUCUN'	 => 'Aucun joueur n\'a encore réservé d\'avatars',
	'AVATAR_AVERTISSEMENT' => 'Avertissement',
	'AVATAR_RENSEIGNE' => 'Les joueurs suivants sont priés de renseigner le nom de leur avatar dans le profil le plus rapidement possible.',
	'AUTRES_AVATARS_TITRE' => 'Avatars réservés',
	'AUTRES_AVATARS_DESCRIPTION' => 'Certains personnages ont été particulièrement actifs. Aujourd\'hui, ils sont loin de Vegas, décédés ici ou sur les ruines de Gehinnom. Il est régulièrement fait référence à ces personnages et pour éviter toute confusion dans les RPs, leurs avatars et leurs prénoms restent réservés et ne peuvent donc pas être choisis par un nouveau joueur.'
));

?>
