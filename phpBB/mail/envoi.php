<?php
//Je bloque l'utilisation de cette page
die('');
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
//Entrez ici le fichier contenant les adresses email
const DESTINATAIRES_FILE = 'vegas.local.php';
//Entrez ici le modèle de contenu HTML du mail
const TEMPLATE_FILE = 'template.html';
const SITE = 'Vegas-Elevation';

//Chargement du fichier de template, il retourne une variable globale $destinataires 
is_file(DESTINATAIRES_FILE) or die ('Le template mentionné n\'existe pas');
$template = file_get_contents(__DIR__ . '/' . '../language/fr/email/' . TEMPLATE_FILE .'.txt');
!empty($template) or die('Le template mentionné est vide');

//Chargement du fichier, il retourne une variable globale $destinataires 
is_file(DESTINATAIRES_FILE) or die ('Le fichier contenant les adresses email n\'existe pas');
include DESTINATAIRES_FILE;
//On teste le retour
is_array($destinataires) or die('Le fichier mentionné ne retourne pas de tableau de destinataires');
count($destinataires) or die('Le fichier mentionné ne contient aucun destinataire');


//TOUT EST OK ON COMMENCE

//entête simpliste
echo "<!DOCTYPE html>\r\n<html lang=\"fr\"><html><meta charset=\"utf-8\"><body><p>";
echo 'Le fichier '. DESTINATAIRES_FILE . ' contient ' .count($destinataires). ' destinataires.'."<br/>";

//On commence avec le premier
if (isset($_GET['contact'])){
    $contact = (int)$_GET['contact'];
}else{
    $contact = 0;
}

//paramétrage des variables
$username  = $destinataires[$contact]['username'];
$useremail = $destinataires[$contact]['user_email'];

//test des variables
!empty($username)  or die("Le contact n°$contact ne contient pas de nom. Format du fichier destinataire invalide");
!empty($useremail) or die("Le contact n°$contact ne contient pas de mail. Format du fichier destinataire invalide");

//Préparation du modele
$template = str_replace('{USERNAME}',  $username,  $template);
$template = str_replace('{USEREMAIL}', $useremail, $template);
$template = str_replace('{SITE}',  SITE,  $template);

//On teste la variable de validation
if (isset($_GET['validation']) && '1' == $_GET['validation']){
    $headers="From: vegas@jeuforum.fr\nReply-To: vegas@jeuforum.fr";
    //ACTIVATION DE PHPBB
    define('IN_PHPBB', true);
    $phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : '../';
    $phpEx = substr(strrchr(__FILE__, '.'), 1);
    include($phpbb_root_path . 'common.' . $phpEx);
    include($phpbb_root_path . 'includes/functions_messenger.' . $phpEx);
    // Start session management
    $user->session_begin();
    $auth->acl($user->data);
    error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
    include_once($phpbb_root_path . 'includes/functions_messenger.' . $phpEx);
    $messenger = new messenger(false);
    $messenger->template(TEMPLATE_FILE, 'fr');
    $messenger->subject($username. ', venez découvrir la saison 3 de Vegas');
    $messenger->to($useremail, $username);
    $messenger->cc('vegas@jeuforum.fr', $username);
    $messenger->mode('html');
    $messenger->assign_vars(array(
        'USERNAME'    => $username,
        'USEREMAIL'   => $useremail,
        'SITE'        => SITE,
    ));
    $messenger->send();
    $messenger->save_queue();
    
    echo "Mail envoyé à $username / $useremail. </br>";
    echo '<a href="envoi.php?contact='.++$contact.'">OUI Passer au contact suivant </a></p></body></html>';
    
}else{
    echo 'Voulez-vous envoyer ce mail à <b>'.$username.'</b> / '.'<a href="mailto:'.$useremail.'">'.$useremail.'</a> ?<br/> <a href="envoi.php?contact='.$contact.'&validation=1">OUI</a> <a href="envoi.php?contact='.($contact+1).'">NON, passez au suivant</a></p>';
    
    echo $template;
    
    echo '</body></html>';
}