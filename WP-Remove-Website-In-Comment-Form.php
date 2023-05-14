<?php
/**
 * @package WP-Remove-Website-In-Comment-Form
 * @version 1.0.0
 */
/*
Plugin Name: WP-Remove-Website-In-Comment-Form
Plugin URI: https://github.com/JeromeTGH/WP-Remove-Website-In-Comment-Form
Description: Programme permettant d'enlever le champ "site web", des formulaires de commentaire Wordpress
Author: Jérôme TOMSKI
Version: 1.0.0
Author URI: https://github.com/JeromeTGH
*/

// ============================================
// Blocage des appels directs à cette extension
// ============================================
if (!function_exists('add_action')) {
	echo 'Ce plugin ne peut être appelé directement !';
	exit;
}


//=========================================================
// Retirer le champ "website url" du formulaire-commentaire
//=========================================================
function retirer_champ_website_du_formulaire_de_commentaire($fields){
    if(isset($fields['url']))
       unset($fields['url']);
       return $fields;
}
add_filter('comment_form_default_fields', 'retirer_champ_website_du_formulaire_de_commentaire');