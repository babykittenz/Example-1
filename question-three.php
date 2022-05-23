<?php 
   /** 
   *Plugin Name: Current Player Meta Update: URL
   *Plugin URI: https://nba.com
   *Description: Updating current players for the meta field player_tv_url in the custom post type Player
   *Version: 1.0
   *Author: Michael Kidby
   *Author URI: https://nba.com
   *License: GPL2
    * @package nba
   **/


    /**  Preventing Direct Access **/
    defined( 'ABSPATH' ) || exit;

    /**
     * Load translations (if any) for the plugin from the /languages/ folder.
     * 
     * @link https://developer.wordpress.org/reference/functions/load_plugin_textdomain/
     */
    add_action( 'init', 'nba_load_textdomain' );
  
    function nba_load_textdomain() {
        load_plugin_textdomain( 'nba', false, basename( __DIR__ ) . '/languages' );
    }

    //hooking into the activation of this file to call back the function nba_update_current_player_url_meta
    register_activation_hook( __FILE__,  'nba_update_current_player_url_meta' );
    // add_action( 'init', 'nba_update_current_player_url_meta' ); I would use this over register activation hook if we were afraid of losing the database for some reason.

    //callback function 
    function nba_update_current_player_url_meta(){

        //getting the post id for each custom post type player
        $players = new WP_Query(array(
            'post_type' => 'player',
            'post_status' => 'post_id',
            'posts_per_page' => -1,
        ));

       
        // looping through the array of the custom post type player
        foreach ($players as $player){

            //getting post id for each player
            $playerId = get_post_meta($player, 'player_external_id' , True);
            //getting post url
            $playerURl = get_post_meta($player, 'player_tv_url' , True);

            //if player URL is not defined then define it
            if (strlen($playerURL) == 0){

                //updating post meta of player tv url with the new url
                update_post_meta($player, 'player_tv_url', 'http://www.nba-player-tv.com/channel/' . $playerId);

            }

        }

    }