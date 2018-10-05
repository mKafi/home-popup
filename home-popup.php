<?php
/**
 * Plugin Name: Home page popup
 * Plugin URI: 
 * Description: Custom popup for home page 
 * Author: POPCorn IT team
 * Version: 1.0.1
 * Author URI: 
 * Text Domain: popcorn
 */

add_action('admin_menu', 'home_popup_settings');
function home_popup_settings() {
    add_menu_page( 'Home page popup', 'Home page popup', 'edit_posts', 'home-page-popup', 'home_page_popup', '', 24);
}

/**
 * Registering custom script and style
 */
add_action('init', 'register_script');
function register_script() {
    wp_register_script( 'popup_script', plugins_url('/js/popup.js', __FILE__), array('jquery'), '2.5.1' );
    wp_register_style( 'popup_style', plugins_url('/css/popup.css', __FILE__), false, '1.0.0', 'all');
}

/**
 * Using registered style and scripts
 */
add_action('wp_enqueue_scripts', 'enqueue_style');
function enqueue_style(){
   wp_enqueue_script('popup_script');
   wp_enqueue_style( 'popup_style' );
}

function home_page_popup(){
    if (!empty($_POST['image_url'])){
        $image_url = htmlspecialchars($_POST['image_url'], ENT_QUOTES);
        update_option('image_url', $image_url);
    }
    if (!empty($_POST['embeded_video'])){
        $embeded_video = htmlspecialchars($_POST['embeded_video'], ENT_QUOTES);
        update_option('embeded_video', $embeded_video);
    }
    if (!empty($_POST['popup_enable'])){
        $popup_enable = htmlspecialchars($_POST['popup_enable'], ENT_QUOTES);
        update_option('popup_enable', $popup_enable);
    }
    $image_url = get_option('image_url', '');
    $embeded_video = get_option('embeded_video', '');
    $popup_enable = get_option('popup_enable', '');
    include 'popup_display_form.php';		
}

function pop_corn_popup(){
	ob_start();	
	$image_url = get_option('image_url', '');
        $embeded_video = get_option('embeded_video', '');
        $popup_enable = get_option('popup_enable', '');
	include 'popup_popup.php';
	return ob_get_clean();
}
add_shortcode( 'show_popup', 'pop_corn_popup');