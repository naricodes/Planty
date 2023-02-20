<?php
// Exit if accessed directly
if (!defined('ABSPATH'))
    exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')):
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

if (!function_exists('chld_thm_cfg_parent_css')):
    function chld_thm_cfg_parent_css()
    {
        wp_enqueue_style('chld_thm_cfg_parent', trailingslashit(get_template_directory_uri()) . 'style.css', array());
    }
endif;
add_action('wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10);

// END ENQUEUE PARENT ACTION


// link for admin

function wp_admin_link_for_admins($items, $args)
{
    if (is_admin() || current_user_can('manage_options')) {
        $items .= '<li id="menu-item-185" class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a href="' . admin_url() . '" class="show-title hfe-menu-item"> Admin </a></li>';
    }
    return $items;
}
// 10 is a priority rule
// 2 is the number of argument(s)
add_filter('wp_nav_menu_items', 'wp_admin_link_for_admins', 10, 2);

function nm_stylesheet()
{
    wp_enqueue_style('my-stylesheet', get_template_directory_uri() . 'style.css');
}
add_action('wp_enqueue_scripts', 'nm_stylesheet');





