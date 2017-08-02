<?php

/*
  Plugin Name: Responsive Tabs with  Accordions
  Plugin URI: https://www.oxilab.org/
  Description: Responsive Tabs with  Accordions is essayist way to awesome WordPress responsive Content Tabs Plugin with many features.
  Author: Biplob Adhikari
  Author URI: http://www.oxilab.org/
  Version: 1.1.2
 */
if (!defined('ABSPATH'))
    exit;

$content_tabs_ultimate_version = '1.1.2';
define('content_tabs_ultimate_plugin_url', plugin_dir_path(__FILE__));
add_shortcode('ctu_ultimate_oxi', 'ctu_ultimate_oxi_shortcode');
include content_tabs_ultimate_plugin_url . 'admin/public-data.php';

function ctu_ultimate_oxi_shortcode($atts) {
    extract(shortcode_atts(array('id' => ' ',), $atts));
    $styleid = $atts['id'];
    ctu_ultimate_oxi_shortcode_function($styleid);
}

add_action('vc_before_init', 'content_tabs_ultimate_VC_extension');
add_shortcode('ctu_ultimate_oxi_VC', 'ctu_ultimate_oxi_VC_shortcode');

function ctu_ultimate_oxi_VC_shortcode($atts) {
    extract(shortcode_atts(array(
        'id' => ''
                    ), $atts));
    $styleid = $atts['id'];
    $data = ctu_ultimate_oxi_shortcode_function($styleid);
    return $data;
}

function content_tabs_ultimate_VC_extension() {
    vc_map(array(
        "name" => __("Content Tabs"),
        "base" => "ctu_ultimate_oxi_VC",
        "category" => __("Content"),
        "params" => array(
            array(
                "type" => "textfield",
                "holder" => "div",
                "heading" => __("ID"),
                "param_name" => "id",
                "description" => __("Input your Tabs ID in input box")
            ),
        )
    ));
}

add_action('admin_menu', 'content_tabs_menu');

function content_tabs_menu() {
    add_menu_page('Content Tabs', 'Content Tabs', 'manage_options', 'content-tabs-ultimate', 'content_tabs_ultimate_home');
    add_submenu_page('content-tabs-ultimate', 'List All ', 'List All', 'manage_options', 'content-tabs-ultimate', 'content_tabs_ultimate_home');
    add_submenu_page('content-tabs-ultimate', 'New Items', 'New Items', 'manage_options', 'content-tabs-ultimate-new', 'content_tabs_ultimate_new');
    add_submenu_page('content-tabs-ultimate', 'Other Plugins', 'Other Plugins', 'manage_options', 'content_tabs_ultimate-other-plugins', 'content_tabs_ultimate_other_plugins');
    
}

function content_tabs_ultimate_home() {
    if (!current_user_can('manage_options')) {
        wp_die(__('You do not have sufficient permissions to access this page.'));
    }
    include content_tabs_ultimate_plugin_url . 'home.php';
}

function content_tabs_ultimate_new() {
    if (!current_user_can('manage_options')) {
        wp_die(__('You do not have sufficient permissions to access this page.'));
    }
    include content_tabs_ultimate_plugin_url . 'admin.php';
}
function content_tabs_ultimate_other_plugins(){
     if (!current_user_can('manage_options')) {
        wp_die(__('You do not have sufficient permissions to access this page.'));
    }
    include content_tabs_ultimate_plugin_url . 'other-plugins/other-plugins.php';
}
function content_tabs_custom_post_type_icon() {
    ?>
    <style type='text/css' media='screen'>
        #adminmenu #toplevel_page_content-tabs-ultimate  div.wp-menu-image:before {
            content: "\f163";
        }
    </style>
    <?php

}

add_action('admin_head', 'content_tabs_custom_post_type_icon');

register_activation_hook(__FILE__, 'content_tabs_ultimate_install');

function ctu_html_special_charecter($data) {
    $data = str_replace("\'", "'", $data);
    $data = str_replace('\"', '"', $data);
    return $data;
}
function ctu_admin_special_charecter($data) {
    $data = str_replace("\'", "&#039;", $data);
    $data = str_replace('\"', '&quot;', $data);
    return $data;
}

function ctu_font_familly_special_charecter($data) {
    $data = str_replace('+', ' ', $data);
    return $data;
}

function content_tabs_ultimate_install() {
    global $wpdb;
    global $content_tabs_ultimate_version;

    $table_name = $wpdb->prefix . 'content_tabs_ultimate_style';
    $table_list = $wpdb->prefix . 'content_tabs_ultimate_list';

    $charset_collate = $wpdb->get_charset_collate();

    $sql1 = "CREATE TABLE $table_name (
		id mediumint(5) NOT NULL AUTO_INCREMENT,
                                name varchar(50) NOT NULL,
		style_name varchar(10) NOT NULL,
                                css varchar(1000) NOT NULL,
		PRIMARY KEY  (id)
	) $charset_collate;";
    $sql2 = "CREATE TABLE $table_list (
		id mediumint(5) NOT NULL AUTO_INCREMENT,
                               styleid mediumint(6) NOT NULL,
		title varchar(100),
                                files text,
                                css varchar(100),
		PRIMARY KEY  (id)
	) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta($sql1);
    dbDelta($sql2);

    add_option('content_tabs_ultimate_version', $content_tabs_ultimate_version);
}
