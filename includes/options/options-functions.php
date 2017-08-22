<?php
/**
 * Options Functions
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

/*Adding page to submenu start*/
function mmdc_register_options_page()
{
    add_menu_page("MM Dashboard Customizer", "MM Dashboard Customizer", "manage_options", "mm-dashboard-customizer", "dashboard_customizer_settings", "dashicons-editor-removeformatting", null, 99);
    add_submenu_page('mm-dashboard-customizer', 'Login Page (wp-login.php) Options', 'Login Page (wp-login.php) Options', '10', 'mm-dashboard-customizer&tab=login', '__return_null');
    add_submenu_page('mm-dashboard-customizer', 'General Options', 'General Options', '10', 'mm-dashboard-customizer&tab=general', '__return_null');
    add_submenu_page('mm-dashboard-customizer', 'Widgets Options', 'Widgets Options', '10', 'mm-dashboard-customizer&tab=widgets', '__return_null');
    add_submenu_page('mm-dashboard-customizer', 'Header Options', 'Header Options', '10', 'mm-dashboard-customizer&tab=header', '__return_null');
    add_submenu_page('mm-dashboard-customizer', 'Footer Options', 'Footer Options', '10', 'mm-dashboard-customizer&tab=footer', '__return_null');
    add_submenu_page('mm-dashboard-customizer', 'Reset All Options', 'Reset All Options', '10', 'mm-dashboard-customizer&tab=reset', '__return_null');
}

add_action("admin_menu", "mmdc_register_options_page");
/*Adding page to submenu end*/

/***************************************************************/
/***************************************************************/

/*Register settings page start*/

/***************************************************************/

/*Login logo functions start*/
function mmdc_login_logo_fcts()
{
    ?>
    <div class="mmdc_sizes">
        <ul>
            <li>Min recommended width: <b>64px</b></li>
            <li>Min recommended height: <b>64px</b></li>
            <li>Aspect ratio: <b>1:1</b></li>
        </ul>
    </div>
    <?php
    if (get_option('mmdc_login_logo')) {
        ?>
        <div class="mmdc_login_logo_set">
            <img src="<?php echo get_option('mmdc_login_logo'); ?>" alt="logo">
        </div>
        <input type="text"
               value="<?php if (get_option('mmdc_login_logo')): echo get_option('mmdc_login_logo'); endif; ?>"
               class="mmdc_login_logo mmdc_hidden" id="mmdc_login_logo" name="mmdc_login_logo">
        <button class="mmdc_login_logo_setter button">Change</button>
        <button class="mmdc_login_logo_remover button">Remove</button>
        <?php
    } else {
        ?>
        <div class="mmdc_login_logo_set mmdc_hidden">
            <img src="#" alt="logo">
        </div>
        <input type="text"
               value="<?php if (get_option('mmdc_login_logo')): echo get_option('mmdc_login_logo'); endif; ?>"
               class="mmdc_login_logo mmdc_hidden" id="mmdc_login_logo" name="mmdc_login_logo">
        <button class="mmdc_login_logo_setter button">Set Logo Here</button>
        <button class="mmdc_login_logo_remover button mmdc_hidden">Remove</button>
        <?php
    }
}

/*Login logo functions end*/

/***************************************************************/

/*Login background functions start*/
function mmdc_login_bg_fcts()
{
    ?>
    <div class="mmdc_sizes">
        <ul>
            <li>Min recommended width: <b>1200px</b></li>
            <li>Min recommended height: <b>1200px</b></li>
            <li>Aspect ratio: <b>2:1</b></li>
        </ul>
    </div>
    <?php
    if (get_option('mmdc_login_bg')) {
        ?>
        <div class="mmdc_login_logo_set bg">
            <img src="<?php echo get_option('mmdc_login_bg'); ?>" alt="logo">
        </div>
        <input type="text" value="<?php if (get_option('mmdc_login_bg')): echo get_option('mmdc_login_bg'); endif; ?>"
               class="mmdc_login_logo mmdc_hidden" id="mmdc_login_logo" name="mmdc_login_bg">
        <button class="mmdc_login_logo_setter button">Change</button>
        <button class="mmdc_login_logo_remover button">Remove</button>
        <?php
    } else {
        ?>
        <div class="mmdc_login_logo_set bg mmdc_hidden">
            <img src="#" alt="logo">
        </div>
        <input type="text" value="<?php if (get_option('mmdc_login_bg')): echo get_option('mmdc_login_bg'); endif; ?>"
               class="mmdc_login_logo mmdc_hidden" id="mmdc_login_logo" name="mmdc_login_bg">
        <button class="mmdc_login_logo_setter button">Set Logo Here</button>
        <button class="mmdc_login_logo_remover button mmdc_hidden">Remove</button>
        <?php
    }
}

/*Login background functions end*/

/***************************************************************/

/*Login bg color functions start*/
function mmdc_login_bg_color_fcts()
{
    ?>
    <input type="text" name="mmdc_login_bg_color"
           value="<?php if (get_option('mmdc_login_bg_color')): echo get_option('mmdc_login_bg_color'); endif; ?>"/>
    <?php
}

/*Login bg color functions end*/

/***************************************************************/

/*Login bg btns functions start*/
function mmdc_login_btn_color_fcts()
{
    ?>
    <input type="text" name="mmdc_login_btn_color"
           value="<?php if (get_option('mmdc_login_btn_color')): echo get_option('mmdc_login_btn_color'); endif; ?>"/>
    <?php
}

/*Login bg btns functions end*/

/***************************************************************/

/*Login URL functions start*/
function mmdc_login_logo_url_fcts()
{
    ?>
    <input type="text" name="mmdc_login_logo_url"
           placeholder="http://WordPress.org"
           value="<?php if (get_option('mmdc_login_logo_url')): echo get_option('mmdc_login_logo_url'); endif; ?>"/>
    <?php
}

/*Login URL functions end*/

/***************************************************************/

/*Login title functions start*/
function mmdc_login_logo_title_fcts()
{
    ?>
    <input type="text" name="mmdc_login_logo_title"
           placeholder="Powered by WordPress"
           value="<?php if (get_option('mmdc_login_logo_title')): echo get_option('mmdc_login_logo_title'); endif; ?>"/>
    <?php
}

/*Login title functions end*/

/***************************************************************/

/*Login message functions start*/
function mmdc_login_message_fcts()
{
    ?>
    <input type="text" name="mmdc_login_message"
           placeholder="Add custom message here"
           value="<?php if (get_option('mmdc_login_message')): echo get_option('mmdc_login_message'); endif; ?>"/>
    <?php
}

/*Login message functions end*/

/***************************************************************/

/*Login message functions start*/
function mmdc_login_message_color_fcts()
{
    ?>
    <input type="text" name="mmdc_login_message_color"
           value="<?php if (get_option('mmdc_login_message_color')): echo get_option('mmdc_login_message_color'); endif; ?>"/>
    <?php
}

/*Login message functions end*/

/***************************************************************/

/*General settings functions start*/

function mmdc_remove_help_fcts()
{
    ?>
    <input class="mmdc_switch_button" type="checkbox" name="mmdc_remove_help"
           value="1" <?php checked(1, get_option('mmdc_remove_help'), true); ?> />
    <?php
}

/***************************************************************/

function mmdc_remove_screen_options_fcts()
{
    ?>
    <input class="mmdc_switch_button" type="checkbox" name="mmdc_remove_screen_options"
           value="1" <?php checked(1, get_option('mmdc_remove_screen_options'), true); ?> />
    <?php
}

/*General settings functions end*/

/***************************************************************/

/*Widgets settings functions start*/

function mmdc_widgets_welcome_fcts()
{
    ?>
    <input class="mmdc_switch_button" type="checkbox" name="mmdc_widgets_welcome"
           value="1" <?php checked(1, get_option('mmdc_widgets_welcome'), true); ?> />
    <?php
}

/***************************************************************/

function mmdc_widgets_glance_fcts()
{
    ?>
    <input class="mmdc_switch_button" type="checkbox" name="mmdc_widgets_glance"
           value="1" <?php checked(1, get_option('mmdc_widgets_glance'), true); ?> />
    <?php
}

/***************************************************************/

function mmdc_widgets_activity_fcts()
{
    ?>
    <input class="mmdc_switch_button" type="checkbox" name="mmdc_widgets_activity"
           value="1" <?php checked(1, get_option('mmdc_widgets_activity'), true); ?> />
    <?php
}

/***************************************************************/

function mmdc_widgets_draft_fcts()
{
    ?>
    <input class="mmdc_switch_button" type="checkbox" name="mmdc_widgets_draft"
           value="1" <?php checked(1, get_option('mmdc_widgets_draft'), true); ?> />
    <?php
}

/***************************************************************/

function mmdc_widgets_quick_draft_fcts()
{
    ?>
    <input class="mmdc_switch_button" type="checkbox" name="mmdc_widgets_quick_draft"
           value="1" <?php checked(1, get_option('mmdc_widgets_quick_draft'), true); ?> />
    <?php
}

/***************************************************************/

function mmdc_widgets_wp_news_fcts()
{
    ?>
    <input class="mmdc_switch_button" type="checkbox" name="mmdc_widgets_wp_news"
           value="1" <?php checked(1, get_option('mmdc_widgets_wp_news'), true); ?> />
    <?php
}

/***************************************************************/

function mmdc_widgets_plugins_fcts()
{
    ?>
    <input class="mmdc_switch_button" type="checkbox" name="mmdc_widgets_plugins"
           value="1" <?php checked(1, get_option('mmdc_widgets_plugins'), true); ?> />
    <?php
}

/*Widgets settings functions end*/

/***************************************************************/

/*Header settings functions start*/

function mmdc_remove_wp_topbar_fcts()
{
    ?>
    <input class="mmdc_switch_button" type="checkbox" name="mmdc_remove_wp_topbar"
           value="1" <?php checked(1, get_option('mmdc_remove_wp_topbar'), true); ?> />
    <?php
}

/***************************************************************/

function mmdc_remove_wp_edit_topbar_fcts()
{
    ?>
    <input class="mmdc_switch_button" type="checkbox" name="mmdc_remove_wp_edit_topbar"
           value="1" <?php checked(1, get_option('mmdc_remove_wp_edit_topbar'), true); ?> />
    <?php
}

/***************************************************************/

function mmdc_remove_new_topbar_fcts()
{
    ?>
    <input class="mmdc_switch_button" type="checkbox" name="mmdc_remove_new_topbar"
           value="1" <?php checked(1, get_option('mmdc_remove_new_topbar'), true); ?> />
    <?php
}

/***************************************************************/

function mmdc_change_howdy_topbar_fcts()
{
    ?>
    <input type="text" name="mmdc_change_howdy_topbar"
           placeholder="Howdy, _USERNAME_"
           value="<?php if (get_option('mmdc_change_howdy_topbar')): echo get_option('mmdc_change_howdy_topbar'); endif; ?>"/>
    <?php
}

/*Header settings functions end*/

/***************************************************************/

/*Footer settings functions start*/

function mmdc_wp_thankyou_footer_disable_fcts()
{
    ?>
    <input class="mmdc_switch_button" type="checkbox" name="mmdc_wp_thankyou_footer_disable"
           value="1" <?php checked(1, get_option('mmdc_wp_thankyou_footer_disable'), true); ?> />
    <?php
}

/***************************************************************/

function mmdc_wp_thankyou_footer_fcts()
{
    ?>
    <input type="text" name="mmdc_wp_thankyou_footer"
        <?php if (get_option('mmdc_wp_thankyou_footer_disable')): echo 'class="mmdc_to_hide"';endif; ?>
           placeholder="Thank you for creating with WordPress"
           value="<?php if (get_option('mmdc_wp_thankyou_footer')): echo get_option('mmdc_wp_thankyou_footer'); endif; ?>"/>
    <?php
}

/***************************************************************/

function mmdc_wp_version_disable_fcts()
{
    ?>
    <input class="mmdc_switch_button" type="checkbox" name="mmdc_wp_version_disable"
           value="1" <?php checked(1, get_option('mmdc_wp_version_disable'), true); ?> />
    <?php
}

/***************************************************************/

/*Footer settings functions end*/

function mmdc_settings_fields()
{

    add_settings_section("mmdc-section-login", "Login Page (wp-login.php) Options", null, "mmdc-options-login");

    add_settings_field("mmdc_login_logo", "Change WordPress login page logo", "mmdc_login_logo_fcts", "mmdc-options-login", "mmdc-section-login");
    add_settings_field("mmdc_login_bg", "Change WordPress login page background image", "mmdc_login_bg_fcts", "mmdc-options-login", "mmdc-section-login");
    add_settings_field("mmdc_login_bg_color", "Change WordPress page login background color", "mmdc_login_bg_color_fcts", "mmdc-options-login", "mmdc-section-login");
    add_settings_field("mmdc_login_btn_color", "Change login/register buttons background color", "mmdc_login_btn_color_fcts", "mmdc-options-login", "mmdc-section-login");
    add_settings_field("mmdc_login_message_color", "Change all texts (<i>your custom message</i> if any,<br><i>Lost your password</i> text,<br><i>Back to blog</i>) colors here", "mmdc_login_message_color_fcts", "mmdc-options-login", "mmdc-section-login");
    add_settings_field("mmdc_login_logo_url", "Change login logo URL <i>http://WordPress.org</i> to: ", "mmdc_login_logo_url_fcts", "mmdc-options-login", "mmdc-section-login");
    add_settings_field("mmdc_login_logo_title", "Change login logo URL title <i>Powered by WordPress</i> to: ", "mmdc_login_logo_title_fcts", "mmdc-options-login", "mmdc-section-login");
    add_settings_field("mmdc_login_message", "Add custom message to the login form:", "mmdc_login_message_fcts", "mmdc-options-login", "mmdc-section-login");

    register_setting("mmdc-section-login", "mmdc_login_logo");
    register_setting("mmdc-section-login", "mmdc_login_bg");
    register_setting("mmdc-section-login", "mmdc_login_bg_color");
    register_setting("mmdc-section-login", "mmdc_login_btn_color");
    register_setting("mmdc-section-login", "mmdc_login_logo_url");
    register_setting("mmdc-section-login", "mmdc_login_logo_title");
    register_setting("mmdc-section-login", "mmdc_login_message");
    register_setting("mmdc-section-login", "mmdc_login_message_color");

    add_settings_section("mmdc-section-general", "General Options", null, "mmdc-options-general");

    add_settings_field("mmdc_remove_help", "Remove help options tab?", "mmdc_remove_help_fcts", "mmdc-options-general", "mmdc-section-general");
    add_settings_field("mmdc_remove_screen_options", "Remove screen options tab?", "mmdc_remove_screen_options_fcts", "mmdc-options-general", "mmdc-section-general");

    register_setting("mmdc-section-general", "mmdc_remove_help");
    register_setting("mmdc-section-general", "mmdc_remove_screen_options");


    add_settings_section("mmdc-section-widgets", "Widgets Options (Dashboard)", null, "mmdc-options-widgets");

    add_settings_field("mmdc_widgets_welcome", "Remove <i>Welcome to WordPress!</i> widget?", "mmdc_widgets_welcome_fcts", "mmdc-options-widgets", "mmdc-section-widgets");
    add_settings_field("mmdc_widgets_glance", "Remove <i>At a glance</i> widget?", "mmdc_widgets_glance_fcts", "mmdc-options-widgets", "mmdc-section-widgets");
    add_settings_field("mmdc_widgets_activity", "Remove <i>Recent Activity</i> widget?", "mmdc_widgets_activity_fcts", "mmdc-options-widgets", "mmdc-section-widgets");
    add_settings_field("mmdc_widgets_draft", "Remove <i>Recent Drafts</i> widget?", "mmdc_widgets_draft_fcts", "mmdc-options-widgets", "mmdc-section-widgets");
    add_settings_field("mmdc_widgets_quick_draft", "Remove <i>Quick Draft</i> widget?", "mmdc_widgets_quick_draft_fcts", "mmdc-options-widgets", "mmdc-section-widgets");
    add_settings_field("mmdc_widgets_wp_news", "Remove <i>WordPress Events and News</i> widget?", "mmdc_widgets_wp_news_fcts", "mmdc-options-widgets", "mmdc-section-widgets");
    add_settings_field("mmdc_widgets_plugins", "Remove <i>Plugins Activity</i> widget?", "mmdc_widgets_plugins_fcts", "mmdc-options-widgets", "mmdc-section-widgets");
    register_setting("mmdc-section-widgets", "mmdc_widgets_welcome");
    register_setting("mmdc-section-widgets", "mmdc_widgets_glance");
    register_setting("mmdc-section-widgets", "mmdc_widgets_activity");
    register_setting("mmdc-section-widgets", "mmdc_widgets_draft");
    register_setting("mmdc-section-widgets", "mmdc_widgets_quick_draft");
    register_setting("mmdc-section-widgets", "mmdc_widgets_wp_news");
    register_setting("mmdc-section-widgets", "mmdc_widgets_plugins");

    add_settings_section("mmdc-section-header", "Header (Top Bar) Options", null, "mmdc-options-header");

    add_settings_field("mmdc_remove_wp_topbar", "Remove wp logo from top bar?", "mmdc_remove_wp_topbar_fcts", "mmdc-options-header", "mmdc-section-header");
    add_settings_field("mmdc_remove_wp_edit_topbar", "Remove comments and edit buttons from top bar? ", "mmdc_remove_wp_edit_topbar_fcts", "mmdc-options-header", "mmdc-section-header");
    add_settings_field("mmdc_remove_new_topbar", "Remove + New button from top bar? ", "mmdc_remove_new_topbar_fcts", "mmdc-options-header", "mmdc-section-header");
    add_settings_field("mmdc_change_howdy_topbar", "Change <i>howdy</i> text to: ", "mmdc_change_howdy_topbar_fcts", "mmdc-options-header", "mmdc-section-header");

    register_setting("mmdc-section-header", "mmdc_remove_wp_topbar");
    register_setting("mmdc-section-header", "mmdc_remove_wp_edit_topbar");
    register_setting("mmdc-section-header", "mmdc_remove_new_topbar");
    register_setting("mmdc-section-header", "mmdc_change_howdy_topbar");

    add_settings_section("mmdc-section-footer", "Footer (Bottom Bar) Options", null, "mmdc-options-footer");

    add_settings_field("mmdc_wp_thankyou_footer_disable", "Disable <i>Thank you for creating with WordPress</i> text?", "mmdc_wp_thankyou_footer_disable_fcts", "mmdc-options-footer", "mmdc-section-footer");
    add_settings_field("mmdc_wp_thankyou_footer", "Change <i>Thank you for creating with WordPress</i> text to: ", "mmdc_wp_thankyou_footer_fcts", "mmdc-options-footer", "mmdc-section-footer");
    add_settings_field("mmdc_wp_version_disable", "Disable WordPress version text?", "mmdc_wp_version_disable_fcts", "mmdc-options-footer", "mmdc-section-footer");

    register_setting("mmdc-section-footer", "mmdc_wp_thankyou_footer_disable");
    register_setting("mmdc-section-footer", "mmdc_wp_thankyou_footer");
    register_setting("mmdc-section-footer", "mmdc_wp_version_disable");
}

add_action("admin_init", "mmdc_settings_fields");
/*Register settings page end*/

/***************************************************************/
/***************************************************************/

/*Plugin page start*/
function dashboard_customizer_settings()
{
    ?>
    <div class="wrap mmdc_plugin_options">
        <h3 class="title">MM Dashboard Customizer</h3>

        <p class="desc">A (really) easy/simple plugin that allows multiple dashboard customization options including:
            Login
            page, Dashboard widgets, Header (top bar), Footer (bottom bar), general options...</p>

        <div class="credits">
            <p>Developed by
                <<a href="http://maroun.me" target="_blank">Maroun Melhem</a>>
            </p>
            <p>
                Hire me / Suggest an update <a href="http://maroun.me/#contact" target="_blank">here</a>
            </p>
            <p>
                Report a bug or an issue <a href="https://wordpress.org/support/plugin/mm-dashboard-customizer" target="_blank">here</a>
            </p>
            <p>
                If you enjoy using the plugin, please add a <a href="https://wordpress.org/support/plugin/mm-dashboard-customizer/reviews/?rate=5#new-post" target="_blank">
                    <span class="dashicons dashicons-star-filled"></span>
                    <span class="dashicons dashicons-star-filled"></span>
                    <span class="dashicons dashicons-star-filled"></span>
                    <span class="dashicons dashicons-star-filled"></span>
                    <span class="dashicons dashicons-star-filled"></span>
                    review
                </a>
            </p>
        </div>
        <h2></h2>
        <?php settings_errors(); ?>

        <?php
        $active_tab = isset($_GET['tab']) ? $_GET['tab'] : 'login';
        ?>

        <h3 class="nav-tab-wrapper">
            <a href="<?php echo admin_url('admin.php?page=mm-dashboard-customizer&tab=login'); ?>"
               class="nav-tab <?php echo $active_tab == 'login' ? 'nav-tab-active' : ''; ?>">
                Login Page (wp-login.php) Options
            </a>
            <a href="<?php echo admin_url('admin.php?page=mm-dashboard-customizer&tab=general'); ?>"
               class="nav-tab <?php echo $active_tab == 'general' ? 'nav-tab-active' : ''; ?>">
                General Options
            </a>
            <a href="<?php echo admin_url('admin.php?page=mm-dashboard-customizer&tab=widgets'); ?>"
               class="nav-tab <?php echo $active_tab == 'widgets' ? 'nav-tab-active' : ''; ?>">
                Widgets Options (Dashboard)
            </a>
            <a href="<?php echo admin_url('admin.php?page=mm-dashboard-customizer&tab=header'); ?>"
               class="nav-tab <?php echo $active_tab == 'header' ? 'nav-tab-active' : ''; ?>">
                Header (Top Bar)
            </a>
            <a href="<?php echo admin_url('admin.php?page=mm-dashboard-customizer&tab=footer'); ?>"
               class="nav-tab <?php echo $active_tab == 'footer' ? 'nav-tab-active' : ''; ?>">
                Footer (Bottom Bar)
            </a>
            <a href="<?php echo admin_url('admin.php?page=mm-dashboard-customizer&tab=reset'); ?>"
               class="nav-tab <?php echo $active_tab == 'reset' ? 'nav-tab-active' : ''; ?>">
                Reset Plugin Settings
            </a>
        </h3>

        <form method="POST" action="options.php" class="settings_form">
            <?php
            if ($active_tab == 'login') {
                settings_fields("mmdc-section-login");
                do_settings_sections("mmdc-options-login");
                submit_button();
            } elseif ($active_tab == 'general') {
                settings_fields("mmdc-section-general");
                do_settings_sections("mmdc-options-general");
                submit_button();
            } elseif ($active_tab == 'widgets') {
                settings_fields("mmdc-section-widgets");
                do_settings_sections("mmdc-options-widgets");
                submit_button();
            } elseif ($active_tab == 'header') {
                settings_fields("mmdc-section-header");
                do_settings_sections("mmdc-options-header");
                submit_button();
            } elseif ($active_tab == 'footer') {
                settings_fields("mmdc-section-footer");
                do_settings_sections("mmdc-options-footer");
                submit_button();
            }
            ?>
        </form>
        <?php
        if ($active_tab == 'reset') {
            $dc_nonce = wp_create_nonce("mmdc_reset_settings");
            $dc_link = admin_url('admin-ajax.php?action=mmdc_reset_settings&mmdc_reset_nonce=' . $dc_nonce);
            ?>
            <div class="mmdc_reset_holder">
                <h2>Reset all plugin settings?</h2>
                <i class="mmdc_reset_warning">This cannot be undone!</i>
                <button data-url="<?php echo $dc_link; ?>" class="mmdc_reset button">RESET</button>
            </div>
            <div class="mmdc_loader_cont">
                <img src="<?php echo mmdc_get_plugin_base_url().'includes/src/images/loader.gif'; ?>"
                     class="mmdc_loader" alt="Loader"/>
            </div>
            <div class="mmdc_reset_return">
                <h3></h3>
                <h4>Redirecting in <b>3</b> seconds... (If you were not redirected in 3 seconds, <a
                            href="<?php echo admin_url('admin.php?page=mm-dashboard-customizer&tab=login'); ?>">click here</a>)</h4>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
}
/*Plugin page end*/

/***************************************************************/
/***************************************************************/

