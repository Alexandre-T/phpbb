<?php
/**
*
* gallery_acp [French]
*
* @package phpBB Gallery
* @version $Id: gallery_acp.php 1368 2010-02-24 16:24:36Z nickvergessen translate by LagunaPower $
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
	'ACP_GALLERY_CLEANUP_EXPLAIN'	=> 'D\'ici vous pouvez éliminer quelques éléments restants.',
	'ACP_GALLERY_OVERVIEW'			=> 'phpBB Gallery',
	'ACP_GALLERY_OVERVIEW_EXPLAIN'	=> 'D\'ici vous pouvez voir quelques statistiques sur votre galerie-photos.',
	'ACP_IMPORT_ALBUMS'				=> 'Importer des photos',
	'ACP_IMPORT_ALBUMS_EXPLAIN'		=> 'D\'ici vous pouvez importer des photos en masse du répertoire gallery/images/import/. Cependant avant d\'importer des photos, svp assurez-vous de les redimensionner à la main. Pour des choix multiples, maintenez la touche CTRL enfoncée pendant ces choix',


	'ADD_ALBUM_ON_TOP'				=> 'Ajouter l\'album tout en haut',
	'ADD_PERMISSIONS'				=> 'Ajouter des permissions',
	'ALBUM_ADMIN'					=> 'Gestion de l\'Album',
	'ALBUM_ADMIN_EXPLAIN'			=> 'Dans phpBB Gallery les catégories n’existent plus, tout est basé sur la notion d\'album. Chaque album peut contenir un nombre illimité de sous-albums et vous pouvez déterminer s’ils peuvent contenir ou non des messages (c’est-à-dire se comporter ou non comme une ancienne catégorie.). Vous pouvez individuellement ajouter, éditer, supprimer, verrouiller, déverrouiller des albums et régler certains paramètres. Si vos photos se désynchronisent, vous pouvez également resynchroniser un album. <strong>Vous devez copier ou régler les permissions appropriées pour les nouveaux albums créés afin qu\'ils soient visibles.</strong>',
	'ALBUM_AUTH_TITLE'				=> 'Permissions de l\'album',
	'ALBUM_CREATED'					=> 'L\'album a bien été créé.',
	'ALBUM_DELETE'					=> 'Supprimer l\'album',
	'ALBUM_DELETE_EXPLAIN'			=> 'Le formulaire ci-dessous vous autorise à supprimer un album et de décider où vous voulez mettre les photos qu\'il contenait',
	'ALBUM_DELETED'					=> 'L\'album a bien été supprimé.',
	'ALBUM_DESC'					=> 'Description',
	'ALBUM_DESC_EXPLAIN'			=> 'Chaque équivalent HTML entré ici sera affichée tel quel.',
	'ALBUM_DESC_TOO_LONG'			=> 'La description de l\'album est trop longue, elle doit être inférieure à 4000 caractères.',
	'ALBUM_EDIT_EXPLAIN'			=> 'Le formulaire ci-dessous vous autorise à personnaliser cet album. Svp, veuillez noter que les outils de modération sont définis par les permissions d\'album pour chaque ' . /*utilisateur ou */ 'groupe d\'utilisateurs.',
	'ALBUM_ID'						=> 'ID de l\'album',
	'ALBUM_IMAGE'					=> 'Image de l\'album',
	'ALBUM_IMAGE_EXPLAIN'			=> 'Emplacement, relatif au répertoire racine de phpBB, d’une image supplémentaire à associer à cet album.',
	'ALBUM_NAME_EMPTY'				=> 'Vous devez indiquer un nom pour cet album.',
	'ALBUM_NO_TYPE_CHANGE_TO_CONTEST'	=> 'Un album non-destiné aux concours ne peut pas être changé en un album-coucours.',
	'ALBUM_PARENT'					=> 'Album parent',
	'ALBUM_PASSWORD'				=> 'Mot de passe de l\'album',
	'ALBUM_PASSWORD_EXPLAIN'		=> 'Ajoute un mot de passe pour cet album, utilisez de préférence le système de permissions.',
	'ALBUM_PASSWORD_CONFIRM'		=> 'Confirmation du mot de passe',
	'ALBUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Uniquement si un mot de passe a été saisi.',
	'ALBUM_RESYNCED'				=> 'L\'album “%s” a bien été resynchronisé',
	'ALBUM_SETTINGS'				=> 'Configuration de l\'album',
	'ALBUM_STATUS'					=> 'Statut de l\'album',
	'ALBUM_TYPE'					=> 'Type d\'album',
	'ALBUM_TYPE_CAT'				=> 'Catégorie',
	'ALBUM_TYPE_CONTEST'			=> 'Concours',
	'ALBUM_TYPE_UPLOAD'				=> 'Album',
	'ALBUM_UPDATED'					=> 'L\'album a bien été mis à jour.',
	'ALBUM_WATERMARK'				=> 'Afficher le watermark',
	'ALBUM_WATERMARK_EXPLAIN'		=> 'Si cette option est réglée sur <samp>Non</samp>, le watermark ne sera jamais affiché, indépendant des permissions!',
	'ALBUM_WITH_CONTEST_NO_TYPE_CHANGE'	=> 'Un album-coucours ne peut pas être changé en un album non-destiné aux concours.',
	'ALBUMS'						=> 'Albums',

	'CACHE_DIR_SIZE'				=> 'Taille du répertoire cache/',
	'CHANGE_AUTHOR'					=> 'Changer l\'expéditeur en Anonyme',
	'CHECK'							=> 'Vérifier',
	'CHECK_AUTHOR_EXPLAIN'			=> 'Aucune image sans expéditeur valide trouvée.',
	'CHECK_COMMENT_EXPLAIN'			=> 'Aucun commentaire sans expéditeur valide trouvé.',
	'CHECK_ENTRY_EXPLAIN'			=> 'Vous devriez lancer une vérification, pour chercher des fichiers sans entrée dans la base de données.',
	'CHECK_PERSONALS_EXPLAIN'		=> 'Aucun album personnel sans propriétaire valide trouvé.',
	'CHECK_PERSONALS_BAD_EXPLAIN'	=> 'Aucun album personnel trouvé.',
	'CHECK_SOURCE_EXPLAIN'			=> 'Aucune entrée. Vous devriez lancer une vérification pour vous en assurez.',
	'CLEAN_AUTHORS_DONE'			=> 'Photos sans expéditeur valide supprimée.',
	'CLEAN_CHANGED'					=> 'Expéditeur changé en "Anonyme".',
	'CLEAN_COMMENTS_DONE'			=> 'Coommentaire sans expéditeur valide supprimé.',
	'CLEAN_ENTRIES_DONE'			=> 'Fichiers sans entrée dans la base de données supprimés.',
	'CLEAN_GALLERY'					=> 'Nettoyer la galerie',
	'CLEAN_GALLERY_ABORT'			=> 'Nettoyage interrompu !',
	'CLEAN_PERSONALS_DONE'			=> 'Albums personnels sans propriétaire valide supprimés.',
	'CLEAN_PERSONALS_BAD_DONE'		=> 'Albums personnels des utilisateurs sélectionnés supprimés.',
	'CLEAN_SOURCES_DONE'			=> 'Photos sans fichier supprimées.',
	'COLS_PER_PAGE'					=> 'Nombre de colonnes sur la page des miniatures',
	'COMMENT'						=> 'Commentaire',
	'COMMENT_ID'					=> 'ID du commentaire',
	'COMMENT_SYSTEM'				=> 'Activer le système de commentaires',
	'CONFIRM_CLEAN'					=> 'Cette étape ne peut pas être annulée !',
	'CONFIRM_CLEAN_AUTHORS'			=> 'Supprimer les photos sans expéditeur valide ?',
	'CONFIRM_CLEAN_COMMENTS'		=> 'Supprimer les commentaires sans expéditeur valide ?',
	'CONFIRM_CLEAN_ENTRIES'			=> 'Supprimer les fichiers sans entrée dans la base de données ?',
	'CONFIRM_CLEAN_PERSONALS'		=> 'Supprimer les albums personnels sans propriétaire valide ?<br /><strong>» %s</strong>',
	'CONFIRM_CLEAN_PERSONALS_BAD'	=> 'Supprimer les albums personnels des utilisateurs sélectionnés ?<br /><strong>» %s</strong>',
	'CONFIRM_CLEAN_SOURCES'			=> 'Supprimer les photos sans fichier ?',
	'CONTEST_DATE_EXPLAIN'			=> 'Svp, entrez la date sous le format AAAA-MM-JJ.',
	'CONTEST_END'					=> 'Fin du concours',
	'CONTEST_END_BEFORE_RATING'		=> 'La fin du concours ne pas doit précéder le début des votes au concours.',
	'CONTEST_END_BEFORE_START'		=> 'La fin du concours ne pas doit précéder le début du concours.',
	'CONTEST_END_EXPLAIN'			=> 'Une fois le concours terminé, les membres ne peuvent plus voter pour les photos.',
	'CONTEST_END_INVALID'			=> 'Date de fin de concours invalide (%s). Svp, entrez la date sous le format AAAA-MM-JJ.',
	'CONTEST_RATING'				=> 'Début des votes',
	'CONTEST_RATING_BEFORE_START'	=> 'Le début des votes au concours ne pas doit précéder le début du concours.',
	'CONTEST_RATING_EXPLAIN'		=> 'Après le "Début des votes", les utilisateurs ne peuvent plus envoyer de photos.',
	'CONTEST_RATING_INVALID'		=> 'Date de début des votes au concours invalide (%s). Svp, entrez la date sous le format AAAA-MM-JJ.',
	'CONTEST_SETTINGS'				=> 'Configuration du concours',
	'CONTEST_START'					=> 'Début du concours',
	'CONTEST_START_EXPLAIN'			=> 'Au début du concours, les utilisateurs sont autorisés à envoyer des photos.',
	'CONTEST_START_INVALID'			=> 'Date de début de concours invalide (%s). Svp, entrez la date sous le format AAAA-MM-JJ.',
	'COPY_PERMISSIONS'				=> 'Copier les permissions de',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Si vous choisissez de copier les permissions, l\'album aura les mêmes permissions que celui que vous choisissez ici. Si aucun album n\'est choisi comme modèle, vous aurez à définir les permissions par la suite.',
	'COPY_PERMISSIONS_ALBUM_FROM_EXPLAIN'	=> 'Album source d\'où vous voulez copier les permissions.',
	'COPY_PERMISSIONS_ALBUM_TO_EXPLAIN'		=> 'Album destination où vous voulez appliquer les permissions.',
	'COPY_PERMISSIONS_CONFIRM'		=> 'Attention cette opération effacera toutes les autorisations existantes des albums sélectionnés.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Si vous choisissez de copier les permissions, l\'album aura les mêmes permissions que celui que vous choisissez ici. Toutes les permissions que vous aviez précédemment définie pour cet album, seront remplacées par les nouvelles permissions de l\'album que vous choisissez ici. Si aucun album n\'est choisi comme modèle, les permissions actuelles seront conservées.',
	'COPY_PERMISSIONS_FROM'			=> 'Copier les permissions de',
	'COPY_PERMISSIONS_SUCCESSFUL'	=> 'Permissions appliquées avec succès aux albums sélectionnés.',
	'COPY_PERMISSIONS_TO'			=> 'Appliquer les permissions à',
	'CREATE_ALBUM'					=> 'Créer un nouvel album',

	'DECIDE_MOVE_DELETE_CONTENT'	=> 'Supprimer le contenu ou déplacer vers l\'album',
	'DECIDE_MOVE_DELETE_SUBALBUMS'	=> 'Supprimer les sous-albums ou déplacer vers l\'album',
	'DEFAULT_SORT_EXPLAIN'			=> 'Si vous sélectionnez <samp>Defaut</samp>, le tri par défaut défini dans la configuration est choisi.',
	'DEFAULT_SORT_METHOD'			=> 'Méthode de tri par défaut',
	'DEFAULT_SORT_ORDER'			=> 'Ordre de tri par défaut',
	'DELETE_ALBUM_SUBS'				=> 'Svp, supprimez les sous-albums en premier',
	'DELETE_ALL_IMAGES'				=> 'Supprimer les photos',
	'DELETE_IMAGES'					=> 'Supprimer les photos',
	'DELETE_PERMISSIONS'			=> 'Supprimer les permissions',
	'DELETE_SUBALBUMS'				=> 'Supprimer les sous-albums et leur photos',
	'DISP_BIRTHDAYS'				=> 'Afficher les anniversaires',
	'DISP_EXIF_DATA'				=> 'Afficher les information Exif',
	'DISP_EXIF_DATA_EXP'			=> 'Cette fonction n\'est pas disponible.',
	'DISP_FAKE_THUMB'				=> 'Voir les miniatures dans la liste d\'albums',
	'DISP_LOGIN'					=> 'Afficher l\'écran de connexion',
	'DISP_LOGIN_EXP'				=> 'Invités seulement',
	'DISP_PERSONAL_ALBUM_PROFILE'	=> 'Afficher le lien vers l\'album personnel dans les profils des utilisateurs',
	'DISP_STATISTIC'				=> 'Afficher les statistiques de la galerie',
	'DISP_TOTAL_IMAGES'				=> 'Afficher "Total des photos" sur index.' . $phpEx,
	'DISP_USER_IMAGES_PROFILE'		=> 'Afficher les statistiques avec les photos envoyées dans les profils des utilisateurs',
	'DISP_VIEWTOPIC_ICON'			=> 'Afficher le bouton vers l\'album personnel sur viewtopic.' . $phpEx,
	'DISP_VIEWTOPIC_IMAGES'			=> 'Afficher le compteur de photos sur viewtopic.' . $phpEx,
	'DISP_VIEWTOPIC_LINK'			=> 'Lier le compteur de photos aux photos de l\'utilisateur',
	'DISP_WHOISONLINE'				=> 'Afficher le "Qui est en ligne ?"',
	'DISPLAY_IN_RRC'				=> 'Afficher les photos de cet album dans les photos récentes/aléatoires',
	'DONT_COPY_PERMISSIONS'			=> 'Ne pas copier les permissions',

	'EDIT_ALBUM'					=> 'Editer l\'album',

	'FAKE_THUMB_SIZE'				=> 'Taille de la miniature',
	'FAKE_THUMB_SIZE_EXP'			=> 'Si vous voulez les redimensionner à leur taille réelle, rappellez-vous les 16 pixels pour la bande noire d\'infos sous la photo',

	'GALLERY_ALBUMS_TITLE'			=> 'Outils des albums de la galerie',
	'GALLERY_CONFIG'				=> 'Configuration générale',
	'GALLERY_CONFIG_EXPLAIN'		=> 'D\'ici, vous pouvez modifier les options de phpBB Gallery. Pour des choix multiples dans les listes à ascenseur, maintenez la touche CTRL enfoncée pendant ces choix.',
	'GALLERY_CONFIG_UPDATED'		=> 'La configuration a bien été mise à jour.',
	'GALLERY_INDEX'					=> 'Index de la galerie',
	'GALLERY_PURGE_CACHE_EXPLAIN'	=> 'Si vous utilisez l\'option Cache des miniatures, vous devez purger le cache des miniatures après avoir changer votre configuration pour les miniatures dans "Configuration générale" pour qu\'elles soient régénérées.',
	'GALLERY_STATS'					=> 'Statistiques de la galerie-photos',
	'GALLERY_VERSION'				=> 'Version de la galerie-photos',
	'GD_VERSION'					=> 'Optimisation pour version GD',
	'GENERAL_ALBUM_SETTINGS'		=> 'Configuration générale de l\'album',
	'GIF_ALLOWED'					=> 'Autoriser l\'envoi de fichiers GIF',
	'GUPLOAD_DIR_SIZE'				=> 'Taille du répertoire upload/',

	'HACKING_ATTEMPT'				=> 'Hacking attempt!',
	'HANDLE_IMAGES'					=> 'Que faire avec ces photos',
	'HANDLE_SUBS'					=> 'Que faire avec ces sous-albums',
	'HOTLINK_ALLOWED'				=> 'Sites autorisés pour les liens directs',
	'HOTLINK_ALLOWED_EXP'			=> 'Les sites doivent être séparés seulement par une virgule (pas d\'espace). Ex : "flying-bits.org,phpbb.com,phpbb-fr.com"',
	'HOTLINK_PREVENT'				=> 'Prévention des liens directs',

	'IMAGE_DESC_MAX_LENGTH'			=> 'Longueur maximale de l\'image de commentaire/description (octets)',
	'IMAGE_ID'						=> 'ID de la photo',
	'IMAGE_SETTINGS'				=> 'Configuration des photos',
	'IMAGES_PER_DAY'				=> 'Photos par jour',
	'IMPORT_ALBUM'					=> 'Album vers lequel importer les photos',
	'IMPORT_DEBUG_MES'				=> '%1$s photos importées. Il y a encore %2$s photos restantes.',
	'IMPORT_DIR_EMPTY'				=> 'Le répertoire %s est vide. Vous devez envoyer des photos avant de pouvoir les importer.',
	'IMPORT_FINISHED'				=> 'La totalité des %1$s photos a bien été importée.',
	'IMPORT_MISSING_ALBUM'			=> 'Svp, veuillez choisir un album vers lequels importer les photos.',
	'IMPORT_SELECT'					=> 'Choisissez les photos que vous désirez importer. Les photos qui seront importées avec succès seront supprimées automatiquement du dossier. Toutes les autres photos seront encore disponibles.',
	'IMPORT_SCHEMA_CREATED'			=> 'Le schéma d\'importation a bien été crée, svp, veuillez attendre le temps que les photos soient importées.',
	'IMPORT_USER'					=> 'envoyé par',
	'IMPORT_USER_EXP'				=> 'D\'ici vous pouvez attribuer ces photos à un autre utilisateur.',
	'INDEX_SETTINGS'				=> 'Configuration de gallery/index.' . $phpEx,
	'INFO_LINE'						=> 'Afficher la taille du fichier sur les miniatures',
	'INHERIT_PERMISSIONS_ALBUM'		=> 'Hériter des permissions d\'un autre album',
	'INHERIT_PERMISSIONS_VICTIM'	=> 'Hériter des permissions d\'un autre réglage',

	'JPG_ALLOWED'					=> 'Autoriser l\'envoi de fichiers JPG',
	'JPG_QUALITY'					=> 'Qualité JPG',
	'JPG_QUALITY_EXP'				=> 'Lorsque vous pivotez ou redimensionnez l\'image, la taille du fichier peut grossir. Avec cette option vous pouvez réduire la qualité, pour économiser de l\'espace disque.',

	'LIST_INDEX'					=> 'Lister le sous-album dans la légende de l\'album-parent',
	'LIST_INDEX_EXPLAIN'			=> 'Affiche cet album sur l’index et ailleurs comme lien dans la légende de son album-parent si l’option “Lister les sous-albums dans la légende” est activée.',
	'LIST_SUBALBUMS'				=> 'Lister les sous-albums dans la légende',
	'LIST_SUBALBUMS_EXPLAIN'		=> 'Affiche les sous-albums de cet album sur l’index et ailleurs comme lien dans la légende de son album-parent si l’option “Lister le sous-album dans la légende de l\'album-parent” est activée.',
	'LOCKED'						=> 'Verrouillé',
	'LOOK_UP_ALBUM'					=> 'Sélectionner un album',
	'LOOK_UP_ALBUMS_EXPLAIN'		=> 'Vous pouvez sélectionner un ou plusieurs albums.',

	'MANAGE_CRASHED_ENTRIES'		=> 'Gérer les entrées erronées',
	'MANAGE_CRASHED_IMAGES'			=> 'Gérer les photos erronées',
	'MANAGE_PERSONALS'				=> 'Gérer les albums personnels',
	'MAX_IMAGES_PER_ALBUM'			=> 'Nombre maximum de photos pour chaque album',
	'MAX_IMAGES_PER_ALBUM_EXP'		=> 'Mettre à -1 pour illimité',
	'MEDIUM_CACHE'					=> 'Mettre en cache les photos redimensionnées sur l\'index de la galerie-photos',
	'MEDIUM_DIR_SIZE'				=> 'Taille du répertoire medium/',
	'MISSING_ALBUM_NAME'			=> 'Vous devez entrer un nom pour cet album.',
	'MISSING_AUTHOR'				=> 'Photos sans expéditeur valide',
	'MISSING_AUTHOR_C'				=> 'Commentaires sans expéditeur valide',
	'MISSING_ENTRY'					=> 'Fichiers sans entrées dans la base de données',
	'MISSING_IMPORT_SCHEMA'			=> 'Le schéma d\'importation indiqué (%s) n\'a pas été trouvé.',
	'MISSING_OWNER'					=> 'Albums personnels sans propriétaire valide',
	'MISSING_OWNER_EXP'				=> 'Les sous-albums, photos et commentaires seront également supprimés.',
	'MISSING_SOURCE'				=> 'Photos sans fichiers',
	'MOVE_IMAGES_TO'				=> 'Déplacer les photos vers',
	'MOVE_SUBALBUMS_TO'				=> 'Déplacer les sous-albums vers',

	'NEW_ALBUM_CREATED'				=> 'Le nouvel album a bien été créé',
	'NO_ALBUM_SELECTED'				=> 'Vous devez choisir au moins un album.',
	'NO_DESTINATION_ALBUM'			=> 'Vous n\'avez pas spécifier l\'album de destination.',
	'NO_FILE_SELECTED'				=> 'Vous devez choisir au moins un fichier.',
	'NO_PERMISSIONS_SELECTED'		=> 'Vous devez choisir au moins un album ou un système personnalisé de permissions.',
	'NO_VICTIM_SELECTED'			=> 'Vous devez choisir au moins un utilisateur ou un groupe.',
	'NO_INHERIT'					=> 'Ne pas copier les permissions',
	'NO_PARENT_ALBUM'				=> 'Aucun parent',
	'NO_SUBALBUMS'					=> 'Aucun album lié',
	'NUMBER_ALBUMS'					=> 'Nombre d\'albums',
	'NUMBER_IMAGES'					=> 'Nombre de photos',
	'NUMBER_PERSONALS'				=> 'Nombre d\'albums personnels',

	'OWN_PERSONAL_ALBUMS'			=> 'Propre albums personnels',

	'PERMISSION'					=> 'Permissions',
	'PERMISSION_NEVER'				=> 'Jamais',
	'PERMISSION_NO'					=> 'Non',
	'PERMISSION_SETTING'			=> 'Réglages',
	'PERMISSION_YES'				=> 'Oui',

	'PERMISSION_A_LIST'				=> 'Peut voir l\'album',
	'PERMISSION_ALBUM_COUNT'		=> 'Nombre maximum de sous-albums personnels',
	'PERMISSION_ALBUM_UNLIMITED'	=> 'Nombre illimité de sous-albums personnels',
	'PERMISSION_C'					=> 'Commentaires',
	'PERMISSION_C_DELETE'			=> 'Peut supprimer ses propres commentaires',
	'PERMISSION_C_EDIT'				=> 'Peut éditer ses propres commentaires',
	'PERMISSION_C_POST'				=> 'Peut commenter une photo',
	'PERMISSION_C_READ'				=> 'Peut lire les commentaires',
	'PERMISSION_I'					=> 'Photos',
	'PERMISSION_I_APPROVE'			=> 'Peut envoyer des photos sans approbation',
	'PERMISSION_I_COUNT'			=> 'Nombre maximum de photos qui peuvent être envoyées',
	'PERMISSION_I_DELETE'			=> 'Peut supprimer ses propres photos',
	'PERMISSION_I_EDIT'				=> 'Peut éditer ses propres photos',
	'PERMISSION_I_LOCK'				=> 'Peut verrouiller les photos',
	'PERMISSION_I_RATE'				=> 'Peut noter les photos',
	'PERMISSION_I_RATE_EXPLAIN'		=> 'Les invités et l\'expéditeur de la photo ne peuvent <samp>JAMAIS</samp> noter les photos.',
	'PERMISSION_I_REPORT'			=> 'Peut rapporter des photos',
	'PERMISSION_I_UNLIMITED'		=> 'Peut envoyer un nombre illimité de photos',
	'PERMISSION_I_UPLOAD'			=> 'Peut envoyer des photos',
	'PERMISSION_I_UPLOAD_EXPLAIN'	=> 'Cette permission est aussi utilisée pour déterminer si un utilisateur peut déplacer les images d\'un album lorsqu\'il possède des droits de modération dans d\'autres forums.',
	'PERMISSION_I_VIEW'				=> 'Peut voir des photos',
	'PERMISSION_I_WATERMARK'		=> 'Peut voir des photos sans protection de l\'image',//NDT : Watermark: protection de l'image par superposition d'une image avec un copyright par exemple.
	'PERMISSION_M'					=> 'Modération',
	'PERMISSION_MISC'				=> 'Divers', //Miscellaneous
	'PERMISSION_M_COMMENTS'			=> 'Peut modérer les commentaires',
	'PERMISSION_M_DELETE'			=> 'Peut supprimer les photos',
	'PERMISSION_M_EDIT'				=> 'Peut éditer les photos',
	'PERMISSION_M_MOVE'				=> 'Peut déplacer les photos',
	'PERMISSION_M_REPORT'			=> 'Peut gérer les rapports',
	'PERMISSION_M_STATUS'			=> 'Peut approuver et verrouiller les photos',

	'PERMISSION_EMPTY'				=> 'Vous n\'avez pas configurer toutes les permissions.',
	'PERMISSIONS'					=> 'Permissions',
	'PERMISSIONS_COPY'				=> 'Copier les permissions d\'un album',
	'PERMISSIONS_COPY_EXPLAIN'		=> 'Ici vous pouvez copier les permissions d\'un album vers un ou plusieurs autres albums.',
	'PERMISSIONS_EXPLAIN'			=> 'D\'ici vous pouvez définir à quels albums, tels utilisateurs et tels groupes peuvent accéder.',
	'PERMISSIONS_STORED'			=> 'Les permissions ont bien été sauvegardées.',
	'PERSONAL_ALBUM_INDEX'			=> 'Afficher les albums personnels sur l\'index de la galerie-photos',
	'PERSONAL_ALBUM_INDEX_EXP'		=> 'Si "Non", il y aura le lien directement au-dessous.',
	'PGALLERIES_PER_PAGE'			=> 'Nombre d\'albums personnels par page',
	'PHPBB_INTEGRATION'				=> 'Intégration phpBB',
	'PNG_ALLOWED'					=> 'Autoriser l\'envoi de fichiers PNG',
	'PURGED_CACHE'					=> 'Purger le cache',

	'RATE_SCALE'					=> 'Echelle de notation',
	'RATE_SYSTEM'					=> 'Activer le système de notation',
	'REDIRECT_ACL'					=> 'Vous pouvez maintenant %sdéfinir les permissions%s pour cet album.',
	'REMOVE_IMAGES_FOR_CAT'			=> 'Vous devez d\'abord retirer les photos de cet album, avant de pouvoir le changer en catégorie.',
	'RESET_RATING'					=> 'Réinitialiser les notes de l\'album',
	'RESET_RATING_COMPLETED'		=> 'Les notes ont bien été supprimées.',
	'RESET_RATING_CONFIRM'			=> 'Voulez-vous vraiment supprimer toutes les notes sur les photos de l\'album "%s" ?',
	'RESET_RATING_EXPLAIN'			=> 'Efface toutes les notes de toutes les photos dans l\'album indiqué. Entrez l\'ID de l\'album dans le champ de droite.',
	'RESIZE_IMAGES'					=> 'Redimensionner les photos trop importantes',
	'RESYNC_IMAGECOUNTS'			=> 'Resynchroniser le compte des photos',
	'RESYNC_IMAGECOUNTS_CONFIRM'	=> 'Etes-vous sur de vouloir resynchroniser le compte des photos ?',
	'RESYNC_IMAGECOUNTS_EXPLAIN'	=> 'Seules les photos existantes seront prises en compte.',
	'RESYNC_LAST_IMAGES'			=> 'Rafraîchir la "Dernière photo"',
	'RESYNC_PERSONALS'				=> 'Resynchroniser les IDs des albums personnels',
	'RESYNC_PERSONALS_CONFIRM'		=> 'Etes-vous sur de vouloir resynchroniser les IDs des album personnels ?',
	'RESYNCED_IMAGECOUNTS'			=> 'Le compte des photos a bien été resynchronisé',
	'RESYNCED_LAST_IMAGES'			=> 'La "Dernière photo" a bien été rafraîchie',
	'RESYNCED_PERSONALS'			=> 'les IDs des album personnels ont bien été resynchronisées',
	'ROTATE_IMAGES'					=> 'Autoriser la rotation des photos',
	'ROTATE_IMAGES_EXP'				=> 'Cette fonction n\'est pas disponible.',
	'ROWS_PER_PAGE'					=> 'Nombre de rangs sur la page des miniatures',

	'RRC_DISPLAY_ALBUMNAME'			=> 'Nom de l\'album',
	'RRC_DISPLAY_COMMENTS'			=> 'Commentaires',
	'RRC_DISPLAY_IMAGENAME'			=> 'Nom de la photo',
	'RRC_DISPLAY_IMAGETIME'			=> 'Date de la photo',
	'RRC_DISPLAY_IMAGEVIEWS'		=> 'Nombre de vues',
	'RRC_DISPLAY_IP'				=> 'IP de l\'utilisateur',
	'RRC_DISPLAY_NONE'				=> 'Aucune',
	'RRC_DISPLAY_OPTIONS'			=> 'Quelles valeurs doivent-être affichées sous les miniatures ? ',
	'RRC_DISPLAY_USERNAME'			=> 'Nom d\'utilisateur',
	'RRC_DISPLAY_RATINGS'			=> 'Notes',
	'RRC_GINDEX'					=> 'Option "Photos Récentes/aléatoires et Commentaires"',
	'RRC_GINDEX_COLUMNS'			=> 'Colonnes',
	'RRC_GINDEX_COMMENTS'			=> 'Replier les commentaires',
	'RRC_GINDEX_CONTESTS'			=> 'Nombre de concours',
	'RRC_GINDEX_CROWS'				=> 'Nombre de commentaires',
	'RRC_GINDEX_MODE'				=> 'Mode',
	'RRC_GINDEX_MODE_EXP'			=> '<FONT COLOR="#FF0000">Attention: Les "Photos aléatoires" peuvent mettre du temps à se charger sur les bases de données importantes !</FONT>',
	'RRC_GINDEX_PGALLERIES'			=> 'Voir les photos des albums personnels',
	'RRC_GINDEX_ROWS'				=> 'Rangs',
	'RRC_MODE_COMMENTS'				=> 'Commentaires',
	'RRC_MODE_NONE'					=> 'Aucun',
	'RRC_MODE_RANDOM'				=> 'Photos aléatoires',
	'RRC_MODE_RECENT'				=> 'Photos récentes',
	'RRC_PROFILE_COLUMNS'			=> 'Colonnes',
	'RRC_PROFILE_MODE'				=> 'Mode de l\'option "Photos récentes/aléatoires" dans les profils',
	'RRC_PROFILE_MODE_EXP'			=> '<FONT COLOR="#FF0000">Attention: Les "Photos aléatoires" peuvent mettre du temps à se charger sur les bases de données importantes !</FONT>',
	'RRC_PROFILE_ROWS'				=> 'Rangs',

	'RSZ_HEIGHT'					=> 'Hauteur maximale au visionnage de la photo',
	'RSZ_WIDTH'						=> 'Largeur maximale au visionnage de la photo',

	'SEARCH_SETTINGS'				=> 'Paramètres de recherche',
	'SELECT_ALBUM'					=> 'Choisir l\'album',
	'SELECT_GROUPS'					=> 'Choisir les groupes',
	'SELECT_PERM_SYS'				=> 'Choisir le système de permissions',
	'SELECT_PERMISSIONS'			=> 'Choisir les permissions',
	'SELECTED_ALBUMS'				=> 'Albums choisis',
	'SELECTED_ALBUM_NOT_EXIST'		=> 'L\'album choisi n\'existe pas.',
	'SELECTED_GROUPS'				=> 'Groupes choisis',
	'SELECTED_PERM_SYS'				=> 'Système de permissions choisi',
	'SET_PERMISSIONS'				=> '<br />Définir <a href="%s">les permissions</a> maintenant.',
	'SHORTED_IMAGENAMES'			=> 'Limiter les noms de photos à ... caractères',
	'SHORTED_IMAGENAMES_EXP'		=> 'Si le nom d\'une photo est trop long et ne comporte pas d\'espace, la mise en page du forum peut être compromise.',
	'SORRY_NO_STATISTIC'			=> 'Désolé, cette valeur des statistiques n\'est pas encore disponible.',
	'SYNC_IN_PROGRESS'				=> 'Resynchronisation en cours...',
	'SYNC_IN_PROGRESS_EXPLAIN'		=> 'Resynchronisation du groupe de photos %1$d/%2$d en cours.',

	'THUMBNAIL_CACHE'				=> 'Cache des miniatures',
	'THUMBNAIL_QUALITY'				=> 'Qualité des miniatures (1-100)',
	'THUMBNAIL_SETTINGS'			=> 'Réglages des miniatures',

	'UC_IMAGE_NAME'					=> 'Nom de la photo',
	'UC_IMAGE_ICON'					=> 'Icône de la dernière photo',
	'UC_IMAGEPAGE'					=> 'Photo sur la page des photos (avec commentaires et notes)',
	'UC_LINK_CONFIG'				=> 'Configuration des liens',
	'UC_LINK_HIGHSLIDE'				=> 'Ouvrir le plug-in Highslide',
	'UC_LINK_IMAGE'					=> 'Ouvrir la photo',
	'UC_LINK_IMAGE_PAGE'			=> 'Ouvrir la page des photos (avec commentaires et notes)',
	'UC_LINK_LYTEBOX'				=> 'Ouvrir le plug-in Lytebox',
	'UC_LINK_NONE'					=> 'Aucun lien',
	'UC_LINK_SHADOWBOX'				=> 'Ouvrir le plug-in Shadowbox',
	'UC_THUMBNAIL'					=> 'Miniature',
	'UC_THUMBNAIL_EXP'				=> 'Aussi utilisé pour le BBCode.',
	'UNLOCKED'						=> 'Déverrouillé',
	'UPDATE_BBCODE'					=> 'Mettre à jour le BBCode',
	'UPLOAD_IMAGES'					=> 'Envoi de multiples photos',

	'VIEW_IMAGE_URL'				=> 'Voir l\'URL de la photo sur la page des photos',

	'WATERMARK'						=> 'Protection de l\'image',
	'WATERMARK_HEIGHT'				=> 'Hauteur minimum pour afficher la protection de l\'image',
	'WATERMARK_HEIGHT_EXP'			=> 'Afin d\'éviter que les petites photos soient couvertes par la protection de l\'image, you devez entrer ici une hauteur minimum pour la photo. Si l\'image est plus petite que cette valeur, la protection de l\'image ne sera pas affichée.',
	'WATERMARK_IMAGES'				=> 'Photos de protection de l\'image',
	'WATERMARK_OPTIONS'				=> 'Réglages de la protection de l\'image',
	'WATERMARK_POSITION'			=> 'Position de la protection de l\'image',
	'WATERMARK_POSITION_BOTTOM'		=> 'bas',
	'WATERMARK_POSITION_CENTER'		=> 'centre',
	'WATERMARK_POSITION_LEFT'		=> 'gauche',
	'WATERMARK_POSITION_MIDDLE'		=> 'milieu',
	'WATERMARK_POSITION_RIGHT'		=> 'droite',
	'WATERMARK_POSITION_TOP'		=> 'haut',																					 
	'WATERMARK_SOURCE'		 		=> 'Fichier-source de la protection de l\'image (relatif au répertoire-racine de votre forum phpBB)',
	'WATERMARK_WIDTH'				=> 'Largeur minimum pour afficher la protection de l\'image',
	'WATERMARK_WIDTH_EXP'			=> 'Afin d\'éviter que les petites photos soient couvertes par la protection de l\'image, you devez entrer ici une largeur minimum pour la photo. Si l\'image est plus petite que cette valeur, la protection de l\'image ne sera pas affichée.'
));

/**
* A copy of Handyman` s MOD version check, to view it on the gallery overview
*/
$lang = array_merge($lang, array(
	'ANNOUNCEMENT_TOPIC'	=> 'Annonce d\'une nouvelle version',
	'CURRENT_VERSION'		=> 'Version actuelle',
	'DOWNLOAD_LATEST'		=> 'Télécharger la dernière version',
	'LATEST_VERSION'		=> 'Dernière version',
	'NO_INFO'					=> 'Le serveur pour la dernière version est indisponible',
	'NOT_UP_TO_DATE'			=> '%s n\'est pas à jour',
	'RELEASE_ANNOUNCEMENT'	=> 'Sujet de l\'annonce de mise à jour',
	'UP_TO_DATE'			=> '%s est à jour',
	'VERSION_CHECK'			=> 'Vérification de la version du MOD',
));

?>