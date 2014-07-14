<?php
/**
*
* install [English]
*
* @package language
* @version $Id: gallery_install.php 44 2008-12-18 17:05:11Z bstat $
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

$lang = array_merge($lang, array(
	'AFTER_INSTALL_GOTO'				=> 'Aller sur %sGallery%s',

	'EXAMPLE_ALBUM1'					=> 'Votre première catégorie',
	'EXAMPLE_ALBUM2'					=> 'Votre premier album',
	'EXAMPLE_ALBUM2_DESC'				=> 'Description de votre premier album.',
	'EXAMPLE_DESC'						=> 'Merci d’avoir installé phpBB Gallery v%s aka. &quot;DB-Bird&quot;.<br />'
											. 'Cette image est juste un exemple, vous pouvez la supprimer.',
	'EXAMPLE_DESC_UID'					=> '1vrbfkfh',

	'INSTALLER_CHMOD'					=> 'Vérification du CHMOD',
	'INSTALLER_CHMOD_EXPLAIN'			=> 'Le répertoire suivant a besoin d’un CHMOD 777 pour permettre le fonctionnement de phpBB Gallery.',
	'INSTALLER_CHMOD_UNWRITABLE'		=> 'Non modifiable',
	'INSTALLER_CHMOD_WRITABLE'			=> 'Modifiable',

	'INSTALLER_CONVERT'					=> 'Convertion',
	'INSTALLER_CONVERT_NOTE'			=> 'Convertir le MOD vers v%s',
	'INSTALLER_CONVERT_PREFIX'			=> 'Prefixe de l’installation phpBB2',
	'INSTALLER_CONVERT_SUCCESSFUL'		=> 'Convertion du MOD vers v%s réalisée avec succès.<br />Maintenant, vous devez copier les images des répertoires album/upload et album/upload/cache de votre installation phpbb2 dans les répertoires correspondants de phpBB3.<br />VOus pouvez maintenant supprimer le répertoire d’installation.',
	'INSTALLER_CONVERT_UNSUCCESSFUL'	=> 'La convertion du MOD vers v%s a <strong>echouée</strong>.',
	'INSTALLER_CONVERT_UNSUCCESSFUL2'	=> 'Vous n’avez pas renseigné le préfixe de votre installation phpbb2.',
	'INSTALLER_CONVERT_WELCOME'			=> 'Bienvenue dans le menu de convertion',
	'INSTALLER_CONVERT_WELCOME_NOTE'	=> 'Lorsque vous choisissez de convertir le MOR, nous essayons de copier les données de votre ancienne installation phpbb2.',

	'INSTALLER_DELETE'					=> 'Suppression',
	'INSTALLER_DELETE_NOTE'				=> 'Supprimé',
	'INSTALLER_DELETE_BBCODE'			=> 'Choisir le BBCode',
	'INSTALLER_DELETE_SUCCESSFUL'		=> 'Suppression du MOD réalisée avec succès.<br />Vous pouvez maintenant supprimer tous les fichiers.',
	'INSTALLER_DELETE_UNSUCCESSFUL'		=> '<strong>Impossible</strong> de supprimer le MOD.',
	'INSTALLER_DELETE_WELCOME'			=> 'Vous souhaitez vraiement supprimer phpBB Gallery ?',
	'INSTALLER_DELETE_WELCOME_NOTE'		=> 'Lorsque vous décidez de supprimer le MOD, nous supprimons toutes les données sql enregistrées par l’installation.',

	'INSTALLER_INTRO'					=> 'Introduction',
	'INSTALLER_INTRO_WELCOME'			=> 'Bienvenue dans l’installation du MOD',
	'INSTALLER_INTRO_WELCOME_NOTE'		=> 'Merci de choisir ce que vous voulez faire.',

	'INSTALLER_INSTALL'					=> 'Installation',
	'INSTALLER_INSTALL_MENU'			=> 'Menu installation',
	'INSTALLER_INSTALL_SUCCESSFUL'		=> 'L’installation du MOD v%s a été réalisée avec succès.<br />Vous devez maintenant supprimer le répertoire install_gallery/ .',
	'INSTALLER_INSTALL_UNSUCCESSFUL'	=> 'L’installation du MOD v%s a été un <strong>échec</strong>.',
	'INSTALLER_INSTALL_VERSION'			=> 'Installation du MOD v%s',
	'INSTALLER_INSTALL_WELCOME'			=> 'Bienvenue dans le menu d’installation',
	'INSTALLER_INSTALL_WELCOME_NOTE'	=> 'Quand vous choisissez d’installer le MOD, toutes les bases de données des anciennes versions seront supprimées.',

	'INSTALLER_UPDATE'					=> 'Mise à jour',
	'INSTALLER_UPDATE_MENU'				=> 'Menu de mise à jour',
	'INSTALLER_UPDATE_NOTE'				=> 'Mise à jour du MOD depuis la version  v%s vers la version v%s',
	'INSTALLER_UPDATE_SUCCESSFUL'		=> 'La mise à jour du MOD depuis la version  v%s vers la version v%s a été réalisée avec succès.<br />Vous devez maintenant supprimer le répertoire install_gallery/ .',
	'INSTALLER_UPDATE_UNSUCCESSFUL'		=> 'La mise à jour du MOD depuis la version  v%s vers la version v%s a été un <strong>échec</strong>.',
	'INSTALLER_UPDATE_VERSION'			=> 'Mettre à jour le MOD depuis la version v',
	'INSTALLER_UPDATE_WELCOME'			=> 'Bienvenue dans le menu de mise à jour',

	'MISSING_PARENT_MODULE'				=> 'Le module #%s est absent en tant que module parent pour "%s".',

	'WARNING'							=> 'Attention',
));

?>