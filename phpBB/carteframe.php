<?php 
/**
 *
 * @package phpBB3
 * @version $Id$
 * @copyright (c) 2005 phpBB Group
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 */

/**
 */

/**
 * @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('viewforum');

//Création des markers
//Aéroport
$markers[]=array(
	'CODE'			=> 'aeroport',
	'FA'			=> 'plane',
	'TITLE' 		=> 'Aéroport MacCarran',
	'DESCRIPTION'	=> 'L’aéroport international McCarran est le principal aéroport commercial de Las Vegas dans le Comté de Clark au Nevada. Heureusement pour les Nephilim, il se trouve sous l’influence du dôme',
	'FID'			=> 95,
	'LATITUDE'		=> 36.083518,
	'LONGITUDE'		=> -115.153763,
	'MARKER'		=> 'yellow_MarkerA.png',
);
//SouthStrip Boulevard
//Le mirage
$markers[]=array(
	'CODE'			=> 'mirage',
	'FA'			=> 'building', 
	'TITLE' 		=> 'Le mirage',
	'DESCRIPTION'	=> 'Le mythique casino du braquage de Danny Ocean et ses complices dans Ocean’s Eleven appartien à Matthew Tensmon, un ancien simulacre.',
	'FID'			=> 48,
	'LATITUDE'		=> 36.121104, 
	'LONGITUDE'		=> -115.174963,
	'MARKER'		=> 'blue_MarkerM.png',
		
);
//vierge ’
$markers[]=array(
	'CODE'			=> 'wynn', //Code javascript du lieu (doit être unique)
	'FA'			=> 'building', //Code de l'icone font-awesome
	'TITLE' 		=> 'Le Wynn', //Titre du lieu
	'DESCRIPTION'	=> 'Ce prestigieux hôtel qui possède un immense golf serait le siège de parrains de la mafia.', //Description lieu
	'FID'			=> 56,   //ID du forum
	'LATITUDE'		=> 36.126512, //Latitude du lieu
	'LONGITUDE'		=> -115.165951,   //Longitude du lieu
	'MARKER'		=> 'blue_MarkerW.png'  //Marker sur la map
);
$markers[]=array(
	'CODE'			=> 'venetian', //Code javascript du lieu (doit être unique)
	'FA'			=> 'building', //Code de l'icone font-awesome
	'TITLE' 		=> 'The Venetian', //Titre du lieu
	'DESCRIPTION'	=> '«The Venetian» se retrouve sous la coupe des asmodéens. Sous les fondations de l’hôtel se trouvent désormais les forges asmodéennes où les voleuses d’âmes sont créées.', //Description lieu
	'FID'			=> 14,   //ID du forum
	'LATITUDE'		=> 36.121070, //Latitude du lieu
	'LONGITUDE'		=> -115.169599,   //Longitude du lieu
	'MARKER'		=> 'blue_MarkerV.png'  //Marker sur la map blue_MarkerW.png
);

$markers[]=array(
	'CODE'			=> 'luxor', //Code javascript du lieu (doit être unique)
	'FA'			=> 'building', //Code de l'icone font-awesome
	'TITLE' 		=> 'Le Luxor', //Titre du lieu
	'DESCRIPTION'	=> 'Son ambiance égyptienne cache un royaume feutré et discret, mais surtout l’artefact permettant de générer le dôme de protection autour de Vegas.', //Description lieu
	'FID'			=> 90,   //ID du forum
	'LATITUDE'		=> 36.095586, //Latitude du lieu
	'LONGITUDE'		=> -115.176122,   //Longitude du lieu
	'MARKER'		=> 'blue_MarkerL.png'  //Marker sur la map blue_MarkerW.png
);
$markers[]=array(
	'CODE'			=> 'fashion', //Code javascript du lieu (doit être unique)
	'FA'			=> 'shopping-cart', //Code de l'icone font-awesome
	'TITLE' 		=> 'Fashion Show Mall', //Titre du lieu
	'DESCRIPTION'	=> 'Le Fashion Show Mall est le plus grand centre commercial du Nevada.', //Description lieu
	'FID'			=> 10,   //ID du forum
	'LATITUDE'		=> 36.127312, //Latitude du lieu
	'LONGITUDE'		=> -115.171564,   //Longitude du lieu
	'MARKER'		=> 'yellow_MarkerF.png'  //Marker sur la map blue_MarkerW.png
);
$markers[]=array(
	'CODE'			=> 'middlePark', //Code javascript du lieu (doit être unique)
	'FA'			=> 'quote-right', //Code de l'icone font-awesome
	'TITLE' 		=> 'Middle Park', //Titre du lieu
	'DESCRIPTION'	=> 'Jouxtant le cimetière de Woodlawn, ce parc est l’une des rares oasis artificielles de Vegas sans golfeurs', //Description lieu
	'FID'			=> 91,   //ID du forum
	'LATITUDE'		=> 36.187753,   //Latitude du lieu
	'LONGITUDE'		=> -115.129590,   //Longitude du lieu
	'MARKER'		=> 'green_MarkerP.png'  //Marker sur la map blue_MarkerW.png
);
$markers[]=array(
	'CODE'			=> 'citycouncil', //Code javascript du lieu (doit être unique)
	'FA'			=> 'institution', //Code de l'icone font-awesome
	'TITLE' 		=> 'Las Vegas City Council (Préfecture)', //Titre du lieu
	'DESCRIPTION'	=> 'Le Vegas City Council s’apparente à nos préfectures, et nos communautés de commune, un lien d’accueil au public mais surtout de hautes décisions.', //Description lieu
	'FID'			=> 92,   //ID du forum
	'LATITUDE'		=> 36.167537,   //Latitude du lieu
	'LONGITUDE'		=> -115.148461,   //Longitude du lieu
	'MARKER'		=> 'yellow_MarkerC.png'  //Marker sur la map blue_MarkerW.png
);
$markers[]=array(
	'CODE'			=> 'police', //Code javascript du lieu (doit être unique)
	'FA'			=> 'institution', //Code de l'icone font-awesome
	'TITLE' 		=> 'La Metropolitan Police', //Titre du lieu
	'DESCRIPTION'	=> 'La présence de casinos et de la mafia italo-américaine dans cette ville entraîne la présences de forts effectifs policiers.', //Description lieu
	'FID'			=> 9,   //ID du forum
	'LATITUDE'		=> 36.167748,  //Latitude du lieu
	'LONGITUDE'		=> -115.162020,   //Longitude du lieu
	'MARKER'		=> 'yellow_MarkerP.png'  //Marker sur la map blue_MarkerW.png
);
$markers[]=array(
	'CODE'			=> 'medicalCenter', //Code javascript du lieu (doit être unique)
	'FA'			=> 'hospital-o', //Code de l'icone font-awesome
	'TITLE' 		=> 'University Medical Center', //Titre du lieu
	'DESCRIPTION'	=> 'Une grande activité grouille au University Medical Center de Las Vegas. Mais ce lieu reste totalement profane. Les médecins y travaillant n’ont jamais rencontré de Nephilim.', //Description lieu
	'FID'			=> 182,   //ID du forum
	'LATITUDE'		=> 36.160248, //Latitude du lieu
	'LONGITUDE'		=> -115.167747,   //Longitude du lieu
	'MARKER'		=> 'yellow_MarkerH.png'  //Marker sur la map blue_MarkerW.png
);

$markers[]=array(
	'CODE'			=> 'hooverdam', //Code javascript du lieu (doit être unique)
	'FA'			=> 'building', //Code de l'icone font-awesome
	'TITLE' 		=> 'Barrage Hoover', //Titre du lieu
	'DESCRIPTION'	=> 'La construction du barrage créa une étendue d’eau artificielle, le lac Mead, qui s’étend sur environ 150 kilomètres.', //Description lieu
	'FID'			=> 69,   //ID du forum
	'LATITUDE'		=> 36.016026, //Latitude du lieu
	'LONGITUDE'		=> -114.737732,   //Longitude du lieu
	'MARKER'		=> 'green_MarkerH.png'  //Marker sur la map blue_MarkerW.png
);

$markers[]=array(
	'CODE'			=> 'courtHouse', //Code javascript du lieu (doit être unique)
	'FA'			=> 'institution', //Code de l'icone font-awesome
	'TITLE' 		=> 'Tribunaux : Federal Courthouse', //Titre du lieu
	'DESCRIPTION'	=> 'Ce quartier concentre tous les lieux de justice, le District Attorney, la Federal Courthouse, le Clark County Courthouse', //Description lieu
	'FID'			=> 163,   //ID du forum
	'LATITUDE'		=> 36.165027,   //Latitude du lieu
	'LONGITUDE'		=> -115.142341,   //Longitude du lieu
	'MARKER'		=> 'yellow_MarkerJ.png'  //Marker sur la map blue_MarkerW.png
);

$markers[]=array(
	'CODE'			=> 'church', //Code javascript du lieu (doit être unique)
	'FA'			=> 'institution', //Code de l'icone font-awesome
	'TITLE' 		=> 'La chapelle Saint-Syrien', //Titre du lieu
	'DESCRIPTION'	=> 'Cette chapelle est un des lieux de culte les plus proches du dôme. Ce n’est donc pas un hasard si elle est tant surveillée par les Nephilim, comme par les Elohim', //Description lieu
	'FID'			=> 96,   //ID du forum
	'LATITUDE'		=> 35.997550,   //Latitude du lieu
	'LONGITUDE'		=>  -114.965986,   //Longitude du lieu
	'MARKER'		=> 'yellow_MarkerC.png'  //Marker sur la map blue_MarkerW.png
);
$markers[]=array(
		'CODE'			=> 'primmValley', //Code javascript du lieu (doit être unique)
		'FA'			=> 'building', //Code de l'icone font-awesome
		'TITLE' 		=> 'Primm Valley', //Titre du lieu
		'DESCRIPTION'	=> 'Perdu dans le désert cette oasis offre un Golf Club et un lieu de détente loin de l’effervescence et de l’agitation de la ville.', //Description lieu
		'FID'			=> 100,   //ID du forum
		'LATITUDE'		=> 35.610026,   //Latitude du lieu
		'LONGITUDE'		=> -115.386491,   //Longitude du lieu
		'MARKER'		=> 'green_MarkerV.png'  //Marker sur la map blue_MarkerW.png
);

$markers[]=array(
		'CODE'			=> 'deathValley', //Code javascript du lieu (doit être unique)
		'FA'			=> 'sun', //Code de l'icone font-awesome
		'TITLE' 		=> 'La Vallée de la Mort', //Titre du lieu
		'DESCRIPTION'	=> 'Dunes de sable, 50°C à l’ombre quand on en trouve, nuit glaciale, voilà l’ambiance de la Vallée de la Mort. Au milieu de tout cela, une immense route où il est interdit de circuler seul, tant elle est dangereuse.', //Description lieu
		'FID'			=> 66,   //ID du forum
		'LATITUDE'		=> 36.502297,   //Latitude du lieu
		'LONGITUDE'		=> -117.080513,   //Longitude du lieu
		'MARKER'		=> 'green_MarkerD.png'  //Marker sur la map blue_MarkerW.png
);$markers[]=array(
	'CODE'			=> 'grandCanyon', //Code javascript du lieu (doit être unique)
	'FA'			=> 'sun', //Code de l'icone font-awesome
	'TITLE' 		=> 'Le Grand Canyon', //Titre du lieu
	'DESCRIPTION'	=> 'Le parc du Grand Canyon est l’un des sites le plus visités des États-Unis. Sa fréquentation ne cesse d’augmenter, une manne pour Caym...', //Description lieu
	'FID'			=> 68,   //ID du forum
	'LATITUDE'		=> 36.106891, //Latitude du lieu
	'LONGITUDE'		=> -112.112965,   //Longitude du lieu
	'MARKER'		=> 'green_MarkerG.png'  //Marker sur la map blue_MarkerW.png
);
$markers[]=array(
	'CODE'			=> 'erikaAndKurt', //Code javascript du lieu (doit être unique)
	'FA'			=> 'clock-o', //Code de l'icone font-awesome
	'TITLE' 		=> 'Dernières coordonnées', //Titre du lieu
	'DESCRIPTION'		=> 'Dernières coordonnées émises par la montre et les rangers de ', //Description lieu
	'FID'			=> 70,   //ID du forum
	'LATITUDE'		=> 39.167182,   //Latitude du lieu
	'LONGITUDE'		=> 73.476530,   //Longitude du lieu
	'MARKER'		=> 'blue_MarkerE.png'  //Marker sur la map blue_MarkerW.png
);
/*
//vierge ’
$markers[]=array(
	'CODE'			=> '', //Code javascript du lieu (doit être unique)
	'FA'			=> '', //Code de l'icone font-awesome
	'TITLE' 		=> '', //Titre du lieu
	'DESCRIPTION'	=> '', //Description lieu
	'FID'			=> ,   //ID du forum
	'LATITUDE'		=> ,   //Latitude du lieu
	'LONGITUDE'		=> ,   //Longitude du lieu
	'MARKER'		=> ''  //Marker sur la map blue_MarkerW.png
);
/*
TODO : 
*Créer le forum :
  Stratosphère
*vérifier l'usage du 
  art of danse
  dolls
  duplicity
  sakura no arashi
*ajouter des descriptions aux :
  art of danse
  dolls
  duplicity
  sakura no arashi

*/

foreach ($markers as $marker){
	$template->assign_block_vars('markers', $marker);
}

// Output page
page_header($user->lang['INDEX']);
$template->set_filenames(array(
		'body' => 'carteframe.html')
);
page_footer();

?>