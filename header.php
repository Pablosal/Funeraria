<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>

    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
<div class="ALL">
    <div class="clearfix">
      <span><i class="fas fa-phone-alt"></i>+569 75842226</span>
      <span><i class="fas fa-home"></i>Abierto las 24 horas.</span>
      <span><i class="fas fa-map-marker-alt"></i> Pisagua 245, Curacautin</span>
    </div>
    <nav id="nav" role="navigation">
      <div class="mini-wrap">
        <?php if(has_custom_logo()){
          the_custom_logo();
        }else{?>
          <a href="<?php echo esc_url(home_url('/'))?>" class="brand-logo"
            ><?php esc_html(bloginfo('name'));?></a>
        <?php }?>
      </div>
      <div class="nav-wrapper">
      <div class="wrapy">
          <?php wp_nav_menu(array('theme_location'=>'main-menu'));?>
      </div>


        
      </div>
    </nav>
</div>

    