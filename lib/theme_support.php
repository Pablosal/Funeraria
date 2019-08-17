<?php

    function funeraria_theme_support(){
        add_theme_support('post-formats',array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
            'gallery',
            'audio',
        ));
        add_theme_support( 'post-thumbnails' ); 
    }
    add_action('after_setup_theme','funeraria_theme_support');

    ?>