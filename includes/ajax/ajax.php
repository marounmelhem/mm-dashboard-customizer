<?php
/**
 * Ajax
 *
 * @package  mm-dashboard-customizer
 * @developer  Maroun Melhem <http://maroun.me>
 * @version 1.0
 *
 */
if (!defined('ABSPATH')) {
    exit;
}
/***************************************************************/
/***************************************************************/

/***************************************************************/

add_action("wp_ajax_mmdc_reset_settings", "mmdc_reset_settings");
add_action("wp_ajax_nopriv_mmdc_reset_settings", "mmdc_reset_settings");
function mmdc_reset_settings()
{
    if (!wp_verify_nonce($_REQUEST['mmdc_reset_nonce'], "mmdc_reset_settings")) {
        exit("You think you are smart?");
    }

    $mmdc_options_to_delete = array(
        'mmdc_login_logo',
        'mmdc_login_bg',
        'mmdc_login_bg_color',
        'mmdc_login_btn_color',
        'mmdc_login_logo_url',
        'mmdc_login_logo_title',
        'mmdc_login_message',
        'mmdc_login_message_color',
        'mmdc_remove_help',
        'mmdc_remove_screen_options',
        'mmdc_widgets_welcome',
        'mmdc_widgets_glance',
        'mmdc_widgets_activity',
        'mmdc_widgets_draft',
        'mmdc_widgets_quick_draft',
        'mmdc_widgets_wp_news',
        'mmdc_widgets_plugins',
        'mmdc_remove_wp_topbar',
        'mmdc_remove_wp_edit_topbar',
        'mmdc_remove_new_topbar',
        'mmdc_change_howdy_topbar',
        'mmdc_wp_thankyou_footer_disable',
        'mmdc_wp_thankyou_footer',
        'mmdc_wp_version_disable'
    );

    foreach ($mmdc_options_to_delete as $mmdc_option_to_delete) {
        delete_option($mmdc_option_to_delete);
    }

    $result['type'] = "success";

    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        $result = json_encode($result);
        echo $result;
    } else {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
    die();
}

/***************************************************************/
/***************************************************************/
