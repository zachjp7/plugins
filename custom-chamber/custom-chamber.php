<?php
/*
Plugin Name: Custom Chamber Plugin
Plugin URI: 
Description: This is a custom plugin to help with layout of the chamber members.
Author: Zach Parkhurst
Author URI: 
Version: 1.0
*/

add_filter( 'theme_page_templates', 'pt_add_page_template_to_dropdown' );

/**
* Add page templates.
*
* @param  array  $templates  The list of page templates
*
* @return array  $templates  The modified list of page templates
*/
function sf_add_page_template_to_dropdown( $templates )
{
   $templates[plugin_dir_path( __FILE__ ) . 'templates/custom-member-template.php'] = __( 'Page Template From Plugin', 'text-domain' );

   return $templates;
}