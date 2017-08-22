<?php
/*
  Plugin Name: MM Dashboard Customizer
  Plugin URI: http://maroun.me/plugins/mm-dashboard-customizer
  Description: A (really) easy/simple plugin that allows multiple dashboard customization options including: Login page, Dashboard widgets, Header (top bar), Footer (bottom bar), general options...
  Version: 1.2
  Author: Maroun Melhem
  Author URI: http://maroun.me
 */

if (!defined('ABSPATH')) {
  exit;
}

/***************************************************************/
/***************************************************************/

/*Includes start*/

/*Main functions start*/
include(plugin_dir_path( __FILE__ ) . 'includes/main/main-functions.php');
/*Main functions end*/

/***************************************************************/

/*Options functions start*/
include(plugin_dir_path( __FILE__ ) . 'includes/options/options-functions.php');
/*Options functions end*/

/***************************************************************/

/*SRC functions start*/
include(plugin_dir_path( __FILE__ ) . 'includes/src/src-functions.php');
/*SRC functions end*/

/***************************************************************/

/*AJAX functions start*/
include(plugin_dir_path( __FILE__ ) . 'includes/ajax/ajax.php');
/*AJAX functions end*/

/***************************************************************/

/*Includes end*/

/***************************************************************/
/***************************************************************/

/*Add settings link to plugin page start*/
function mmdc_add_settings_link( $links ) {
  $settings_link = '<a href='.admin_url('admin.php?page=mm-dashboard-customizer&tab=login').'>' . __( 'Settings' ) . '</a>';
  array_push( $links, $settings_link );
  return $links;
}
$plugin = plugin_basename( __FILE__ );
add_filter("plugin_action_links_$plugin", 'mmdc_add_settings_link' );
/*Add settings link to plugin page end*/

/*Get plugin URL start*/
function mmdc_get_plugin_base_url(){
  return plugin_dir_path( __FILE__ );
}
/*Get plugin URL end*/

/***************************************************************/
/***************************************************************/