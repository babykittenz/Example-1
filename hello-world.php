<?php 
   /** 
   *Plugin Name: Hello World
   *Plugin URI: https://hello-world.com
   *Description: Example of Plugin Troubleshooting
   *Version: 1.0
   *Author: Michael Kidby
   *Author URI: https://example.com
   *License: GPL2
    * @package exampledomain
   **/

    /**  QUESTION ONE **/

    /**  Preventing Direct Access **/
    defined( 'ABSPATH' ) || exit;

    /**
     * Load translations (if any) for the plugin from the /languages/ folder.
     * 
     * @link https://developer.wordpress.org/reference/functions/load_plugin_textdomain/
     */
    add_action( 'init', 'millmountain_load_textdomain' );
  
    function millmountain_load_textdomain() {
        load_plugin_textdomain( 'exampledomain', false, basename( __DIR__ ) . '/languages' );
    }

    add_filter('the_content', 'hello_world');

    function hello_world ( $content ){
        return "<h1>Hello World</h1>" . $content;
    }

?>


<!--
    - Added the plugin initiation at the top of the file
    - Disable direct access to the file
    - Allow for Translation
    - Continue with plugin code
-->

