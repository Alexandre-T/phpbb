<?php
/**
*
* @package phpBB3
* @author Alexandre TRANCHANT
* @version $Id$
* @copyright (c) 2009 Alexandre TRANCHANT
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit();
}

/**
 * Display video listes.
 *
 * @return bool
 */
function partenaire_mod()
{
	/**
	 * Fonction de comparaison sur le titre
	 * @param $a
	 * @param $b
	 */
	function comparaisonPartenaire($a,$b) {
	    return strcmp($a['titre'],$b['titre']);
	}
	
	//Initialisation
	global $template,$user,$phpEx,$phpbb_root_path;
	$partenaires = array();

	$user->add_lang('mods/partenaire');

	//Chargement du fichier de configuration
	$nomFichier = $phpbb_root_path.'partenaires'.DIRECTORY_SEPARATOR.'partenaire.csv';
	//Ouverture du fichier
	$fichier = fopen($nomFichier, 'r');  	
	//Parcours du fichier
	$clef = 0;
	for ($ligne = fgetcsv($fichier,null,';'); !feof($fichier); $ligne = fgetcsv($fichier,null,';')) {
		if (!empty($ligne[0])){
			//création du tableau
	  		$clef++;
	  		//fichier;lien;titre
	  		$partenaires[$clef]['fichier']=$ligne[0];
	  		$partenaires[$clef]['lien']=$ligne[1];
	  		$partenaires[$clef]['titre']=$ligne[2];
		}
	}
  	unset($partenaires[1]);
  	//Suppression de la ligne de commentaire
  	usort($partenaires,"comparaisonPartenaire");
  	
	// assign the videos to the template.
	foreach($partenaires as $partenaire){
		$template->assign_block_vars('lien_partenaires',array(
			'IMAGE'		=>	$phpbb_root_path.'/partenaires/'.$partenaire['fichier'],
			//'CATEGORIE'	=>	str_replace(array('&amp;', '&quot;', "'", '&lt;', '&gt;'), array('&', '"', "\'", '<', '>'),$partenaire['categorie']),
			'TITRE'		=>  str_replace(array('&amp;', '&quot;', "'", '&lt;', '&gt;'), array('&', '"', "\'", '<', '>'),$partenaire['titre']),
			'URL'		=>  $partenaire['lien'],
		));
	}
	
	//Assignation du lien général vers les vidéos	
	$template->assign_var('S_PARTENAIRE',count($partenaires));
	return $partenaires;
}


?>