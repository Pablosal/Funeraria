<?php


function funeraria_assets(){
    wp_enqueue_style('funeraria-material', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css');
    wp_enqueue_style('funeraria-stylesheet', get_template_directory_uri(). '/dist/assets/css/bundle.css', array('funeraria-material'),'1.0.0', 'all');
    wp_enqueue_script('funeraria-font-awesome','https://kit.fontawesome.com/016776174e.js');
    wp_enqueue_script('funeraria-scripts', get_template_directory_uri(). '/dist/assets/js/bundle.js', array('jquery'), 'all');
    wp_enqueue_script('funeraria-scripts', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js');
}

add_action('wp_enqueue_scripts', 'funeraria_assets');




?>