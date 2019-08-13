<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>

    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
    <div class="clearfix">
      <span><i class="fas fa-phone-alt"></i>+569 75842226</span>
      <span><i class="fas fa-home"></i>Abierto las 24 horas.</span>
      <span><i class="fas fa-map-marker-alt"></i> Pisagua 245, Curacautin</span>
    </div>
    <nav id="nav" role="navigation">
      <div class="nav-wrapper">
      <div class="mini-wrap">
        <a href="#!" class="brand-logo"
          ><img
            src="./assets/Img/Logotipos-03.png"
            height="60px"
            alt="logo compañia"
        /></a>
      </div>
      <div class="wrapy">
          <?php wp_nav_menu(array('theme_location'=>'main-menu'));?>
      </div>


        
      </div>
    </nav>

    