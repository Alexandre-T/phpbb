<?php
/**
*
* gallery_mcp [French]
*
* @package phpBB Gallery
* @version $Id: gallery_mcp.php 182 2009-09-17 09:51:35Z lagunapower $
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
	'CHOOSE_ACTION'					=> 'Choisissez l\'action désirée',

	'GALLERY_MCP_MAIN'				=> 'Principal',
	'GALLERY_MCP_QUEUE'				=> 'En attente',
	'GALLERY_MCP_QUEUE_DETAIL'		=> 'Détails de l\'image',
	'GALLERY_MCP_REPORTED'			=> 'Photos rapportées',
	'GALLERY_MCP_REPO_DONE'			=> 'Rapports clos',
	'GALLERY_MCP_REPO_OPEN'			=> 'Rapports ouverts',
	'GALLERY_MCP_REPO_DETAIL'		=> 'Détails du rapport',
	'GALLERY_MCP_UNAPPROVED'		=> 'Photos attendant approbation',
	'GALLERY_MCP_APPROVED'			=> 'Photos approuvées',
	'GALLERY_MCP_LOCKED'			=> 'Photos verrouillées',
	'GALLERY_MCP_VIEWALBUM'			=> 'Voir l\'album',

	'IMAGE_REPORTED'				=> 'Cette image est rapportée.',
	'IMAGE_UNAPPROVED'				=> 'Cette image est en attente d\'approbation.',

	'MODERATE_ALBUM'				=> 'Modérer l\'album',

	'QUEUE_A_APPROVE'				=> 'Approuver l\'image',
	'QUEUE_A_APPROVE2'				=> 'Approuver l\'image ?',
	'QUEUE_A_APPROVE2_CONFIRM'		=> 'Etes-vous sûr de vouloir approuver cette image ?',
	'QUEUE_A_DELETE'				=> 'Supprimer l\'image',
	'QUEUE_A_DELETE2'				=> 'Supprimer l\'image ?',
	'QUEUE_A_DELETE2_CONFIRM'		=> 'Etes-vous sûr de vouloir supprimer cette image ?',
	'QUEUE_A_LOCK'					=> 'Verrouiller l\'image',
	'QUEUE_A_LOCK2'					=> 'Verrouiller l\'image ?',
	'QUEUE_A_LOCK2_CONFIRM'			=> 'Etes-vous sûr de vouloir verrouiller cette image ?',
	'QUEUE_A_MOVE'					=> 'Déplacer l\'image',
	'QUEUE_A_UNAPPROVE'				=> 'Refuser l\'image',
	'QUEUE_A_UNAPPROVE2'			=> 'Refuser l\'image ?',
	'QUEUE_A_UNAPPROVE2_CONFIRM'	=> 'Etes-vous sûr de vouloir refuser cette image ?',

	'QUEUE_STATUS_0'				=> 'Cette image est en attente d\'approbation.',
	'QUEUE_STATUS_1'				=> 'Cette image est acceptée.',
	'QUEUE_STATUS_2'				=> 'Cette image est verrouillée.',

	'QUEUES_A_APPROVE'				=> 'Approuver les photos',
	'QUEUES_A_APPROVE2'				=> 'Approuver les photos ?',
	'QUEUES_A_APPROVE2_CONFIRM'		=> 'Etes-vous sûr de vouloir approuver ces photos ?',
	'QUEUES_A_DELETE'				=> 'Supprimer les photos',
	'QUEUES_A_DELETE2'				=> 'Supprimer les photos ?',
	'QUEUES_A_DELETE2_CONFIRM'		=> 'Etes-vous sûr de vouloir supprimer ces photos ?',
	'QUEUES_A_LOCK'					=> 'Verrouiller les photos',
	'QUEUES_A_LOCK2'				=> 'Verrouiller les photos ?',
	'QUEUES_A_LOCK2_CONFIRM'		=> 'Etes-vous sûr de vouloir verrouiller ces photos ?',
	'QUEUES_A_MOVE'					=> 'Déplacer les photos',
	'QUEUES_A_UNAPPROVE'			=> 'Refuser les photos',
	'QUEUES_A_UNAPPROVE2'			=> 'Refuser les photos ?',
	'QUEUES_A_UNAPPROVE2_CONFIRM'	=> 'Etes-vous sûr de vouloir refuser ces photos ?',

	'REPORT_A_CLOSE'				=> 'Fermer le rapport',
	'REPORT_A_CLOSE2'				=> 'Fermer le rapport ?',
	'REPORT_A_CLOSE2_CONFIRM'		=> 'Etes-vous sûr de vouloir fermer ce rapport ?',
	'REPORT_A_DELETE'				=> 'Supprimer le rapport',
	'REPORT_A_DELETE2'				=> 'Supprimer le rapport ?',
	'REPORT_A_DELETE2_CONFIRM'		=> 'Etes-vous sûr de vouloir supprimer ce rapport ?',
	'REPORT_A_OPEN'					=> 'Ouvrir le rapport',
	'REPORT_A_OPEN2'				=> 'Ouvrir le rapport ?',
	'REPORT_A_OPEN2_CONFIRM'		=> 'Etes-vous sûr de vouloir ouvrir ce rapport ?',

	'REPORT_STATUS_1'				=> 'Ce rapport doit être examiné.',
	'REPORT_STATUS_2'				=> 'Ce rapport est clos.',

	'REPORTS_A_CLOSE'				=> 'Fermer les rapports',
	'REPORTS_A_CLOSE2'				=> 'Fermer les rapports ?',
	'REPORTS_A_CLOSE2_CONFIRM'		=> 'Etes-vous sûr de vouloir fermer ces rapports ?',
	'REPORTS_A_DELETE'				=> 'Supprimer les rapports',
	'REPORTS_A_DELETE2'				=> 'Supprimer les rapports ?',
	'REPORTS_A_DELETE2_CONFIRM'		=> 'Etes-vous sûr de vouloir supprimer ces rapports ?',
	'REPORTS_A_OPEN'				=> 'Ouvrir les rapports',
	'REPORTS_A_OPEN2'				=> 'Ouvrir les rapports ?',
	'REPORTS_A_OPEN2_CONFIRM'		=> 'Etes-vous sûr de vouloir ouvrir ces rapports ?',

	'REPORT_MOD'					=> 'Edité par',
	'REPORTED_IMAGES'				=> 'Photos rapportées',
	'REPORTER'						=> 'Rapporteur',
	'REPORTER_AND_ALBUM'			=> 'Rapporteur & Album',

	'WAITING_APPROVED_IMAGE'		=> array(
		0			=> 'Aucune photo approuvée.',
		1			=> 'Au total il y a <span style="font-weight: bold;">1</span> photo approuvée.',
		2			=> 'Au total il y a <span style="font-weight: bold;">%s</span> photos approuvées.',
	),
	'WAITING_LOCKED_IMAGE'			=> array(
		0			=> 'Aucune photo verrouillée.',
		1			=> 'Au total il y a <span style="font-weight: bold;">1</span> photo verrouillée.',
		2			=> 'Au total il y a <span style="font-weight: bold;">%s</span> photos verrouillées.',
	),
	'WAITING_REPORTED_DONE'			=> array(
		0			=> 'Aucun rapport examiné.',
		1			=> 'Au total il y a <span style="font-weight: bold;">1</span> rapport examiné.',
		2			=> 'Au total il y a <span style="font-weight: bold;">%s</span> rapports examinés.',
	),
	'WAITING_REPORTED_IMAGE'		=> array(
		0			=> 'Aucun rapport à examiner.',
		1			=> 'Au total il y a <span style="font-weight: bold;">1</span> rapport à examiner.',
		2			=> 'Au total il y a <span style="font-weight: bold;">%s</span> rapports à examiner.',
	),
	'WAITING_UNAPPROVED_IMAGE'		=> array(
		0			=> 'Aucune photo en attente d\'approbation.',
		1			=> 'Au total il y a <span style="font-weight: bold;">1</span> photo en attente d\'approbation.',
		2			=> 'Au total il y a <span style="font-weight: bold;">%s</span> photos en attente d\'approbation.',
	),
));

?>