<?php
/**
 * Plugin Name: CPT Plugin
 * Description: PLugin to create Custom Posts.
 * Author:      Amira
 * License:     GNU General Public License v3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

// Prevents file from being loaded directly.
defined( 'ABSPATH' ) or die( 'Not Allowed.' );

/* Function to create Optiona Page 
 *
 * Function name: WebFx_Custom_Option_Page.
 * 
 * Input: None 
 * Output: None
 * Action: Create Theme Option Page
 *
 */


function WebFx_Custom_Option_Page() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Theme General Settings'),
            'menu_title'    => __('Theme Settings'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}

add_action( 'init', 'WebFx_Custom_Option_Page', 0 );

