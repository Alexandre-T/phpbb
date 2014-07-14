<?php
/**
*
* exif_data [French]
*
* @package phpBB Gallery / NV Exif Data
* @version $Id: exif_data.php 182 2009-09-17 09:51:35Z lagunapower $
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
	'EXIF-DATA'					=> 'Infos EXIF',
	'EXIF_APERTURE'				=> 'Nombre-F',
	'EXIF_CAM_MODEL'			=> 'Mod�le d\'appareil-photo',
	'EXIF_DATE'					=> 'Photo prise le',
	'EXIF_EXPOSURE'				=> 'Vitesse de fermeture',
		'EXIF_EXPOSURE_EXP'			=> '%s Secs',// 'EXIF_EXPOSURE' unit
	'EXIF_EXPOSURE_BIAS'		=> 'Angle d\'exposition',
		'EXIF_EXPOSURE_BIAS_EXP'	=> '%s EV',// 'EXIF_EXPOSURE_BIAS' unit
	'EXIF_EXPOSURE_PROG'		=> 'Programme d\'exposition',
		'EXIF_EXPOSURE_PROG_0'		=> 'Non d�fini',
		'EXIF_EXPOSURE_PROG_1'		=> 'Manuel',
		'EXIF_EXPOSURE_PROG_2'		=> 'Programme normal',
		'EXIF_EXPOSURE_PROG_3'		=> 'Priorit� d\'ouverture',
		'EXIF_EXPOSURE_PROG_4'		=> 'Priorit� de fermeture',
		'EXIF_EXPOSURE_PROG_5'		=> 'Creative program (biased toward depth of field)',
		'EXIF_EXPOSURE_PROG_6'		=> 'Action program (biased toward fast shutter speed)',
		'EXIF_EXPOSURE_PROG_7'		=> 'Mode portrait (pour des photos en gros plan avec le fond hors-cadre)',
		'EXIF_EXPOSURE_PROG_8'		=> 'Mode panoramique (pour des photos panoramiques avec un fond cadr�)',
	'EXIF_FLASH'				=> 'Flash',
		'EXIF_FLASH_CASE_0'			=> 'Le flash ne s\'est pas d�clench�',
		'EXIF_FLASH_CASE_1'			=> 'Le flash s\'est d�clench�',
		'EXIF_FLASH_CASE_5'			=> 'Lumi�re-retour non d�tect�e',
		'EXIF_FLASH_CASE_7'			=> 'Lumi�re-retour d�tect�e',
		'EXIF_FLASH_CASE_8'			=> 'Activ�, le flash ne s\'est pas d�clench�',
		'EXIF_FLASH_CASE_9'			=> 'Le flash s\'est d�clench�, mode flash obligatoire',
		'EXIF_FLASH_CASE_13'		=> 'Le flash s\'est d�clench�, mode flash obligatoire, lumi�re-retour non d�tect�e',
		'EXIF_FLASH_CASE_15'		=> 'Le flash s\'est d�clench�, mode flash obligatoire, lumi�re-retour d�tect�e',
		'EXIF_FLASH_CASE_16'		=> 'Le flash ne s\'est pas d�clench�, mode flash obligatoire',
		'EXIF_FLASH_CASE_20'		=> 'D�sactiv�, le flash ne s\'est pas d�clench�, lumi�re-retour non d�tect�e',
		'EXIF_FLASH_CASE_24'		=> 'Le flash ne s\'est pas d�clench�, mode automatique',
		'EXIF_FLASH_CASE_25'		=> 'Le flash s\'est d�clench�, mode automatique',
		'EXIF_FLASH_CASE_29'		=> 'Le flash s\'est d�clench�, mode automatique, lumi�re-retour non d�tect�e',
		'EXIF_FLASH_CASE_31'		=> 'Le flash s\'est d�clench�, mode automatique, lumi�re-retour d�tect�e',
		'EXIF_FLASH_CASE_32'		=> 'Aucune fonction flash',
		'EXIF_FLASH_CASE_48'		=> 'D�sactiv�, aucune fonction flash',
		'EXIF_FLASH_CASE_65'		=> 'Le flash s\'est d�clench�, mode r�duction yeux-rouges',
		'EXIF_FLASH_CASE_69'		=> 'Le flash s\'est d�clench�, mode r�duction yeux-rouges, lumi�re-retour non detect�e',
		'EXIF_FLASH_CASE_71'		=> 'Le flash s\'est d�clench�, mode r�duction yeux-rouges, lumi�re-retour detect�e',
		'EXIF_FLASH_CASE_73'		=> 'Le flash s\'est d�clench�, mode flash obligatoire, mode r�duction yeux-rouges',
		'EXIF_FLASH_CASE_77'		=> 'Le flash s\'est d�clench�, mode flash obligatoire, mode r�duction yeux-rouges, lumi�re-retour non d�tect�e',
		'EXIF_FLASH_CASE_79'		=> 'Le flash s\'est d�clench�, mode flash obligatoire, mode r�duction yeux-rouges, lumi�re-retour d�tect�e',
		'EXIF_FLASH_CASE_80'		=> 'D�sactiv�, mode r�duction yeux-rouges',
		'EXIF_FLASH_CASE_88'		=> 'Mode automatique, le flash ne s\'est pas d�clench�, mode r�duction yeux-rouges',
		'EXIF_FLASH_CASE_89'		=> 'Le flash s\'est d�clench�, mode automatique, mode r�duction yeux-rouges',
		'EXIF_FLASH_CASE_93'		=> 'Le flash s\'est d�clench�, mode automatique, lumi�re-retour non d�tect�e, mode r�duction yeux-rouges',
		'EXIF_FLASH_CASE_95'		=> 'Le flash s\'est d�clench�, mode automatique, lumi�re-retour d�tect�e, mode r�duction yeux-rouges',
	'EXIF_FOCAL'				=> 'Largeur de lentille',
		'EXIF_FOCAL_EXP'			=> '%s mm',// 'EXIF_FOCAL' unit
	'EXIF_ISO'					=> 'ISO speed rating',
	'EXIF_METERING_MODE'		=> 'Mode de mesure',
		'EXIF_METERING_MODE_0'		=> 'Inconnu',
		'EXIF_METERING_MODE_1'		=> 'Moyen',
		'EXIF_METERING_MODE_2'		=> 'Center-weighted average',
		'EXIF_METERING_MODE_3'		=> 'Spot',
		'EXIF_METERING_MODE_4'		=> 'Multi-Spot',
		'EXIF_METERING_MODE_5'		=> 'Pattern',
		'EXIF_METERING_MODE_6'		=> 'Partiel',
		'EXIF_METERING_MODE_255'	=> 'Autre',
	'EXIF_NOT_AVAILABLE'		=> 'non disponible',
	'EXIF_WHITEB'				=> 'Balance des blancs',
		'EXIF_WHITEB_AUTO'			=> 'Auto',
		'EXIF_WHITEB_MANU'			=> 'Manuel',

	'SHOW_EXIF'					=> 'montrer/masquer',
));

?>