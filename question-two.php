<?php

add_action('admin_menu', 'custom_menu');

$custom_menu_string = __( 'Custom Menu' , 'nba');

function custom_menu(){
  add_menu_page($custom_menu_string, $custom_menu_string, 'manage_options', 'custom-menu', 'custom_menu_page_display');
}

function custom_menu_page_display(){
  ?>
    <h1>Hello World</h1>
    <p>This is a custom page</p>
  <?php
}