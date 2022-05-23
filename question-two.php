<?php

add_action('admin_menu', 'custom_menu'); // hooking the callback function custom_menu to the admin menu

$custom_menu_string = __( 'Custom Menu' , 'nba'); // sanitizing title against text domain

function custom_menu(){ 
  add_menu_page($custom_menu_string, $custom_menu_string, 'manage_options', 'custom-menu', 'custom_menu_page_display');
  //wp function to add a menu page with a page title of Custom Menu, Menu title Custom Menu with a slug of custom-menu and a callback of the function custom_menu_page_display
}

function custom_menu_page_display(){
  ?>
  <!-- Page Output -->
    <h1>Hello World</h1>
    <p>This is a custom page</p>
  <?php
}