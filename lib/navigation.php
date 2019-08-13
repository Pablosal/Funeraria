<?php


function funeraria_register_menus(){
    register_nav_menus(array(
        'main_menu'=> esc_html__('Main Menu','funeraria'),
        'footer_menu'=> esc_html__('Footer Menu','funeraria'),
    ));
}

add_action('init', 'funeraria_register_menus');