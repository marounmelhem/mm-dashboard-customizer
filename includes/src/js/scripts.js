/**
 * Plugin JS
 *
 * @package  mm-dashboard-customizer
 * @developer  Maroun Melhem <http://maroun.me>
 * @version 1.0
 *
 */
jQuery(document).ready(function ($) {
    /*Get plugin URL from DOM*/
    var plugin_link=plugin_obj.plugin_link;

    /*Switchery init*/
    var elems = Array.prototype.slice.call(document.querySelectorAll('.mmdc_switch_button'));
    if (elems) {
        elems.forEach(function (html) {
            var switchery = new Switchery(html, {
                color: '#C92432'
            });
        });
    }

    jQuery('.mmdc_plugin_options .settings_form tr').each(function () {
        if ($(this).find('input').hasClass('mmdc_to_hide')) {
            $(this).hide();
        }
    });

    jQuery('.mmdc_plugin_options input[name="mmdc_wp_thankyou_footer_disable"]').change(function () {
        if (jQuery(this).is(':checked')) {
            jQuery('.mmdc_plugin_options input[name="mmdc_wp_thankyou_footer"]').closest('tr').slideUp();
        } else {
            jQuery('.mmdc_plugin_options input[name="mmdc_wp_thankyou_footer"]').closest('tr').slideDown();
        }
    });

    /*spectrum init start*/
    jQuery(".mmdc_plugin_options input[name='mmdc_login_bg_color']").spectrum({
        preferredFormat: "rgb",
        showAlpha: true,
        allowEmpty: true
    });

    jQuery(".mmdc_plugin_options input[name='mmdc_login_message_color']").spectrum({
        preferredFormat: "rgb",
        allowEmpty: true
    });

    jQuery(".mmdc_plugin_options input[name='mmdc_login_btn_color']").spectrum({
        preferredFormat: "rgb",
        showAlpha: true,
        allowEmpty: true
    });
    /*spectrum init end*/


    /*Media library init start*/
    if (jQuery('.mmdc_plugin_options .mmdc_login_logo_setter').length > 0) {
        if (typeof wp !== 'undefined' && wp.media && wp.media.editor) {
            jQuery('.mmdc_plugin_options').on('click', '.mmdc_login_logo_setter', function (e) {
                e.preventDefault();
                var button = jQuery(this);
                var id = button.prev();
                wp.media.editor.send.attachment = function (props, attachment) {
                    var mmdc_img_url = attachment.url;
                    id.val(mmdc_img_url);
                    button.parent().find('.mmdc_login_logo_set img').attr('src', mmdc_img_url);
                    button.parent().find('.mmdc_login_logo_set').removeClass('mmdc_hidden');
                    button.parent().find('.mmdc_login_logo_set').slideDown();
                    button.html('Change');
                    button.parent().find('.mmdc_login_logo_remover').removeClass('mmdc_hidden');
                    button.parent().find('.mmdc_login_logo_remover').slideDown();
                };
                wp.media.editor.open(button);
                return false;
            });
        }
    }

    jQuery(document).on('click', '.mmdc_plugin_options .mmdc_login_logo_remover', function (e) {
        e.preventDefault();
        jQuery(this).parent().find('.mmdc_login_logo_set').slideUp();
        jQuery(this).parent().find('.mmdc_login_logo').val(null);
        jQuery(this).parent().find('.mmdc_login_logo_setter').html('Set Logo Here');
        jQuery(this).fadeOut();
    });
    /*Media library init end*/

    /*Reset all plugin settings start*/

    jQuery(document).on('click', '.mmdc_plugin_options .mmdc_reset', function (e) {
        e.preventDefault();
        if (confirm("You are absolutely sure?")) {
            var mmdc_reset_url = jQuery(this).attr('data-url');
            var mmdc_loader = jQuery('.mmdc_plugin_options .mmdc_loader');
            var mmdc_return = jQuery('.mmdc_plugin_options .mmdc_reset_return');
            var mmdc_return_html = jQuery('.mmdc_plugin_options .mmdc_reset_return h3');
            var mmdc_holder = jQuery('.mmdc_plugin_options .mmdc_reset_holder');

            mmdc_loader.slideDown();
            jQuery.ajax({
                type: "post",
                dataType: "json",
                url: mmdc_reset_url,
                data: {
                    action: "mmdc_reset_settings",
                },
                success: function (response) {
                    if (response.type == "success") {
                        mmdc_holder.slideUp();
                        mmdc_loader.slideUp();
                        mmdc_return_html.html('Settings successfully reset!');
                        mmdc_return.slideDown();
                        setTimeout(function () {
                            window.location.href=plugin_link;
                        }, 3000);
                    }
                },
                error: function () {
                    mmdc_loader.slideUp();
                    mmdc_return_html.html('An error occured!');
                    mmdc_return.slideDown();
                    setTimeout(function () {
                        window.location.href=plugin_link;
                    }, 3000);
                }
            });
        }
    });
    /*Reset all plugin settings start*/
});