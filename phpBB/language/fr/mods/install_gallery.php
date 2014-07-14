<?php
/**
*
* install_gallery [French]
*
* @package phpBB Gallery
* @version $Id: install_gallery.php 1364 2010-02-09 17:41:21Z nickvergessen translate by LagunaPower $
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
	'BBCODES_NEEDS_REPARSE'		=> 'le BBCode a besoin d\'être reconstruit.',

	'CAT_CONVERT'				=> 'convertir de phpBB2',
	'CAT_CONVERT_TS'			=> 'convertir de TS Gallery',
	'CAT_UNINSTALL'				=> 'Désintaller phpBB Gallery',

	'CHECK_TABLES'				=> 'Vérifier les tables',
	'CHECK_TABLES_EXPLAIN'		=> 'Les tables suivantes doivent exister pour qu\'elles puissent être converties.',

	'CONVERT_SMARTOR_INTRO'			=> 'Convertisseur de l\'„Album-MOD“ de Smartor vers „phpBB Gallery“',
	'CONVERT_SMARTOR_INTRO_BODY'	=> 'Avec ce convertisseur vous pouvez convertir vos albums, photos, notes et commentaires de l\' <a href="http://www.phpbb.com/community/viewtopic.php?f=16&t=74772">Album-MOD</a> de Smartor (version testée: 2.0.56) et du <a href="http://www.phpbbhacks.com/download/5028">Full Album Pack</a> (version testée: 1.4.1) vers phpBB Gallery.<br /><br /><strong>Note:</strong> les <strong>permissions</strong> ne <strong>seront pas copiées</strong>.',
	'CONVERT_TS_INTRO'				=> 'Convertisseur de „TS Gallery“ vers „phpBB Gallery“',
	'CONVERT_TS_INTRO_BODY'			=> 'Avec ce convertisseur vous pouvez convertir vos albums, photos, notes et commentaires de <a href="http://www.phpbb.com/community/viewtopic.php?f=70&t=610509">TS Gallery</a> (version testée:0.2.1) vers phpBB Gallery.<br /><br /><strong>Note:</strong> les <strong>permissions</strong> ne <strong>seront pas copiées</strong>.',
	'CONVERT_COMPLETE_EXPLAIN'		=> 'La conversion de votre album-photos précédent vers phpBB Gallery v%s s\'est bien déroulée.<br />Svp, assurez-vous que tout s\'est passé correctement et que tout fonctionne avant d\'activer votre forum, en supprimant le dossier install.<br /><br /><strong>Svp, veuillez noter que les permissions ne sont pas copiées.</strong><br /><br />Vous devriez également nettoyer votre base de données des vieilles entrées, où il manque des photos. Cela peut-être fait dans ".MODs > phpBB Gallery > Nettoyer la galerie-photos".',

	'CONVERTED_ALBUMS'			=> 'Les albums ont bien été copiés.',
	'CONVERTED_COMMENTS'		=> 'Les commentaires ont bien été copiés.',
	'CONVERTED_IMAGES'			=> 'Les photos ont bien été copiées',
	'CONVERTED_MISC'			=> 'Diverses choses converties.',
	'CONVERTED_PERSONALS'		=> 'Les albums personnels ont bien été copiés.',
	'CONVERTED_RATES'			=> 'Les notes ont bien été copiées.',
	'CONVERTED_RESYNC_ALBUMS'	=> 'Statistiques resynchronisées.',
	'CONVERTED_RESYNC_COMMENTS'	=> 'Commentaires resynchronisés.',
	'CONVERTED_RESYNC_COUNTS'	=> 'Compteurs d\'images resynchronisés.',
	'CONVERTED_RESYNC_RATES'	=> 'Notes resynchronisées.',

	'FILE_DELETE_FAIL'				=> 'Le fichier ne peut pas être supprimé, vous devez le faire manuellement',
	'FILE_STILL_EXISTS'				=> 'Le fichier existe encore',
	'FILES_REQUIRED_EXPLAIN'		=> '<strong>Obligatoire</strong> - Pour fonctionner correctement phpBB Gallery doit pouvoir accéder et écrire dans certains fichiers ou répertoires. Si vous voyez “Non-autorisé en écriture”, vous devrez changer les permissions du fichier ou du répertoire pour autoriser phpBB à y écrire.',
	'FILES_DELETE_OUTDATED'			=> 'Supprimer les fichiers périmés',
	'FILES_DELETE_OUTDATED_EXPLAIN'	=> 'Quand vous cliquez sur Supprimer, ils sont complètement supprimés et ne pourront être restaurés !<br /><br />Svp notez :<br />Si vous avez plus d\'un thème ou d\'une langue installé, vous devrez supprimer les fichiers à la main.',
	'FILES_OUTDATED'				=> 'Fichiers périmés',
	'FILES_OUTDATED_EXPLAIN'		=> '<strong>Périmés</strong> - Pour empêcher les tentatives de hacking de votre forum, svp supprimez les fichiers suivants.',
	'FOUND_INSTALL'					=> 'Installation déja existante',
	'FOUND_INSTALL_EXPLAIN'			=> '<strong>Installation déja existante</strong> - Une installation de la gallerie a été détectée! Si vous continuez, voous perdrez toutes les données existantes. Touts les albums, images et commentaires seront supprimés! <strong>Une  %1$supdate%2$s est recommandée.</strong>',
	'FOUND_VERSION'					=> 'Version détectée',
	'FOUNDER_CHECK'					=> 'Vous êtes Fondateur',
	'FOUNDER_NEEDED'				=> 'Vous devez être Fondateur!',

	'INSTALL_CONGRATS_EXPLAIN'	=> 'Vous avez bien installé phpBB Gallery v%s !<br/><br/><strong>Svp, maintenant supprimez, déplacez ou renommez le répertoire install avant d\'utiliser votre forum. Si le répertoire est toujours présent, seul le panneau d\'administration (ACP) sera accessible.</strong>',
	'INSTALL_INTRO_BODY'		=> 'Avec cette option, il est possible d\'installer phpBB Gallery sur votre forum.',

	'GOTO_GALLERY'				=> 'Aller à phpBB Gallery',
	'GOTO_INDEX'				=> 'Retourner à l\'index du forum',
	
	'MISSING_CONSTANTS'			=> 'Avant de lancer le script d\'installation, vous devez uploader vos fichiers édités, particulièrement includes/constants.php.',
	'MODULES_CREATE_PARENT'		=> 'Créer un module parent standard',
	'MODULES_PARENT_SELECT'		=> 'Choisir un module parent',
	'MODULES_SELECT_4ACP'		=> 'Choisir un module parent pour "le panneau d\'administration"',
	'MODULES_SELECT_4LOG'		=> 'Choisir un module parent pour "les journaux de la galerie-photos"',
	'MODULES_SELECT_4MCP'		=> 'Choisir un module parent pour "le panneau de modération"',
	'MODULES_SELECT_4UCP'		=> 'Choisir un module parent pour "le panneau de l\'utilisateur"',
	'MODULES_SELECT_NONE'		=> 'Aucun module parent',

	'NO_INSTALL_FOUND'			=> 'Aucune installtion détectée!',
	
	'OPTIONAL_EXIFDATA'				=> 'Fonction "exif_read_data" existante',
	'OPTIONAL_EXIFDATA_EXP'			=> 'exif-module non chargé ou non installé.',
	'OPTIONAL_EXIFDATA_EXPLAIN'		=> 'Si cette fonctionction existe, les données EXIF seront affichées sur la page de l\'image.',
	'OPTIONAL_IMAGEROTATE'			=> 'Fonction "imagerotate" existante',
	'OPTIONAL_IMAGEROTATE_EXP'		=> 'Vous devez mettre à jour votre version de GD, qui est actuellement "%s".',
	'OPTIONAL_IMAGEROTATE_EXPLAIN'	=> 'Si cette fonctionction existe, Vous pouvez faire pivoter les images lors du transfert et de les éditer.',

	'PAYPAL_DEV_SUPPORT'				=> '</p><div class="errorbox">
	<h3>Author Notes</h3>
	<p>Creating, maintaining and updating this MOD required/requires a lot of time and effort, so if you like this MOD and have the desire to express your thanks through a donation, that would be greatly appreciated. My Paypal ID is <strong>nickvergessen@gmx.de</strong>, or contact me for my mailing address.<br /><br />The suggested donation amount for this MOD is 25,00€ (but any amount will help).</p><br />
	<a href="http://www.flying-bits.org/go/paypal"><input type="submit" value="Make PayPal-Donation" name="paypal" id="paypal" class="button1" /></a>
</div><p>',
	'PHP_SETTINGS'				=> 'Paramètres PHP',
	'PHP_SETTINGS_EXP'			=> 'Ces paramètres et les configurations PHP sont nécessaires pour installer et exécuter la galerie.',
	'PHP_SETTINGS_OPTIONAL'		=> 'Paramètres PHP Optionnels',
	'PHP_SETTINGS_OPTIONAL_EXP'	=> 'Ces paramètres PHP <strong>NE SONT PAS</strong> nécessaire pour une utilisation normale, mais donneront quelques fonctionnalités supplémentaires.',

	'REQ_GD_LIBRARY'			=> 'Installation de la librairie GD',
	'REQUIREMENTS_EXPLAIN'		=> 'Avant de commencer l\'installation complète, phpBB va accomplir une série de tests sur la configuration de votre serveur et de vos fichiers pour s\'assurer que vous puissiez installer et utiliser phpBB Gallery. Svp, assurez-vous de lire attentivement les résultats et ne tentez aucune installation avant que tous les tests requis ne soient validés.',

	'STAGE_ADVANCED_EXPLAIN'		=> 'Svp, choisissez un module parent pour les modules de la galerie-photos. En général, vous n\'avez rien à changer (Laissez à "Aucun module-parent").',
	'STAGE_COPY_TABLE'				=> 'Copier les tables de la base de données',
	'STAGE_COPY_TABLE_EXPLAIN'		=> 'Les bases de données des informations album et utilisateurs sont les même pour TS Gallery et phpBB Gallery. Nous en créons donc une copie avant de pouvoir convertir ces informations.',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'Les bases de données utilisées par phpBB Gallery ont été crées et remplies avec quelques informations de base. Allez à l\'écran suivant pour finaliser l\'installation de phpBB Gallery.',
	'STAGE_DELETE_TABLES'			=> 'Nettoyage de la base de données',
	'STAGE_DELETE_TABLES_EXPLAIN'	=> 'Le contenu de la base de données DU MOD  Gallery-MOD a été éffacé. Cilquez sur suivant pour terminer la désintallation phpBB Gallery.',
	'SUPPORT_BODY'					=> 'Un support complet (en anglais) vous sera fourni pour la version stable actuelle de phpBB Gallery, gratuitement. Ceci inclut :</p><ul><li>l\'installation</li><li>la configuration</li><li>les questions techniques</li><li>les problèmes liés aux bugs découverts dans le MOD</li><li>les mises à jour des versions Release Candidate (RC) vers la dernière version stable</li><li>la conversion de l\'Album-MOD pour phpBB 2.0.x de Smartoir vers phpBB Gallery pour phpBB3</li><li>la conversion de TS Gallery vers phpBB Gallery</li></ul><p>L\'utilisation de version Beta n\'est pas recommandée. S\'il y a des mises à jours, il est fortement recommandé de le faire rapidement.</p><p>Le support est donné sur les forums suivants:</p><ul><li><a href="http://www.flying-bits.org/">flying-bits.org - Forum du créateur du MOD: nickvergessen</a></li><li><a href="http://www.phpbb.de/">phpbb.de</a></li><li><a href="http://www.phpbb.com/">phpbb.com</a></li></ul><p>',

	'TABLE_ALBUM'				=> 'table y compris les photos',
	'TABLE_ALBUM_CAT'			=> 'table y compris les albums',
	'TABLE_ALBUM_COMMENT'		=> 'table y compris les commentaires',
	'TABLE_ALBUM_CONFIG'		=> 'table y compris la configuration',
	'TABLE_ALBUM_RATE'			=> 'table y compris les notes',
	'TABLE_EXISTS'				=> 'existe',
	'TABLE_MISSING'				=> 'est manquante',
	'TABLE_PREFIX_EXPLAIN'		=> 'Préfixe de l\'installation phpBB2',

	'UNINSTALL_INTRO'					=> 'Désinstallation',
	'UNINSTALL_INTRO_BODY'				=> 'Avec cette option, il est possible de supprimer phpBB Gallery de votre forum.<br /><br /><strong>ATTENTION: Touts les albums, images et commentaires seront définitivement supprimés!</strong>',
	'UNINSTALL_REQUIREMENTS'			=> 'Conditions requises',
	'UNINSTALL_REQUIREMENTS_EXPLAIN'	=> 'Avant de procéder à la désinstallation, vous devriez faire des tests pour vous assurez que vous etes autorisés à désintaller phpBB Gallery.',
	'UNINSTALL_START'					=> 'Désintaller',
	'UNINSTALL_FINISHED'				=> 'Désintalation terminée',
	'UNINSTALL_FINISHED_EXPLAIN'		=> 'Désinstalation de phpBB Galleryavec succès.<br/><br/><strong>Maintenant annulez les changements effectués par le install.xml et supprimés les fichiers de la gallery..</strong>',

	'UPDATE_INSTALLATION_EXPLAIN'	=> 'D\'ici vous pouvez mettre à jour votre version de phpBB Gallery.',

	'VERSION_NOT_SUPPORTED'		=> 'Désolé, mais les mises à jour d\'une version < (inférieure à) 0.2.0 ne sont pas supportées avec ce script d\'installation.',
));

?>