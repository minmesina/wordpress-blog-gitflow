<?php
/**
 * Created by PhpStorm.
 * User: Jasmin-Mesina
 * Date: 6/24/2017
 * Time: 5:57 PM
 */

function stayhungry_resources(){

    wp_enqueue_style('style',get_stylesheet_uri());

}
add_action('wp_enqueue_scripts','stayhungry_resources');
/**
 * Navigation
 */
register_nav_menus( array(
	'primary' => __('Primary Menu'),
	'footer' => __('Footer Menu'),
));