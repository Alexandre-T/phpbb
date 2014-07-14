<?php
/**
*
* @package Enable HTML
* @copyright (c) 2008 EXreaction
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'acl_u_html'		=> array('lang' => 'Peut poster du HTML dans les messages.<br /><em>Ceci autorise toutes les balises HTML, y compris les scripts, ce qui entraîne une faille de sécurité majeure. Ce privilège ne doit <strong>jamais</strong> être octroyé à tous les utilisateurs.</em>', 'cat' => 'post'),
	'acl_f_html'		=> array('lang' => 'Peut poster du HTML dans les messages.<br /><em>Ceci autorise toutes les balises HTML, y compris les scripts, ce qui entraîne une faille de sécurité majeure. Ce privilège ne doit <strong>jamais</strong> être octroyé à tous les utilisateurs.</em>', 'cat' => 'content'),
));
?>
