<?php
/**
 * SRC Functions
 *
 * @package  mm-dashboard-customizer
 * @developer  Maroun Melhem <http://maroun.me>
 * @version 1.0
 *
 */
if (!defined('ABSPATH')) {
    exit;
}

/*Enqueue media library start*/
function mmdc_enqueue_media_uploader()
{
    wp_enqueue_media();
}
add_action("admin_enqueue_scripts", "mmdc_enqueue_media_uploader");
/*Enqueue media library end*/

/***************************************************************/
/***************************************************************/

/*Including SRC files start*/
function mmdc_dashboard_customizer_src_files()
{
    wp_enqueue_style('mmdc_dashboard_customizer_src_css', plugins_url('css/styles.css', __FILE__), array(), '1.0');
    wp_enqueue_style('mmdc_dashboard_customizer_src_spectrum_css', plugins_url('libraries/spectrum/spectrum.css', __FILE__), array(), '1.0');
    wp_enqueue_script('mmdc_dashboard_customizer_src_spectrum_js', plugins_url("libraries/spectrum/spectrum.js", __FILE__), array('jquery'), '1.0',true);
    wp_enqueue_style('mmdc_dashboard_customizer_src_switchery_css', plugins_url('libraries/switchery/switchery.min.css', __FILE__), array(), '1.0');
    wp_enqueue_script('mmdc_dashboard_customizer_src_switchery_js', plugins_url("libraries/switchery/switchery.min.js", __FILE__), array('jquery'), '1.0',true);
    wp_enqueue_script('mmdc_dashboard_customizer_src_js', plugins_url("js/scripts.js", __FILE__), array('jquery'), '1.0',true);
    $plugin_obj = array(
        'plugin_link' => admin_url('admin.php?page=mm-dashboard-customizer&tab=login'),
    );
    wp_localize_script('mmdc_dashboard_customizer_src_js', 'plugin_obj', $plugin_obj);
}

add_action('admin_enqueue_scripts', 'mmdc_dashboard_customizer_src_files');
/*Including SRC files end*/