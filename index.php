<?php get_header()?>



    <!--Seccion de Carousel-->
    
    <div class=" view">
    <img class=" view__image" src="<?php echo get_template_directory_uri(); ?>. ./Img\Frontis\Front.jpg"
          alt="superintendencia">
          <div class="overlay">
            <h1 class=" view__title">Te Acompañamos en todo momento </h1>
          </div>
    </div>
    <!--Seccion de leer mas-->
    <h2 class="center-align">Funerarias Isla te informa</h2>
    <div id="Informacion" class="container row">
    <?php $args = array(
      'order' => 'DES',
      'posts_per_page' => 3
      );   
    $the_query = new WP_Query($args);?>
    <div class=" center-align row">
          <?php if($the_query->have_posts()){?>
            <?php while($the_query->have_posts()){?>
                <?php $the_query->the_post(); 
                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'medium'); 
                    // var_dump($featured_img_url);
                ?>
          <div class="col s12 m4">
            <div class="card ">
              <div class="card-image">
                  <img src="<?php echo $featured_img_url ?>" height="290px" alt=" <?php the_title(); ?>">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h5 class="center-align">
                        <?php the_title(); ?>
                  </h5>
                </div>
                <div class="card-action center-align">
                  <a href="<?php the_permalink(); ?>" class="waves-effect waves-light btn">Quiero Saber</a>
                </div>
              </div>
            </div>
          </div>
            <?php } ?>
        <?php }else{?>
                <p><?php esc_html_e('No Hay ningun posteo, pronto escribiremos.','Funeraria')?></p>        
        <?php }?>
    </div>
    </div>

</div>
    <!--Seccion de servicios-->
    <h3 class="center-align">Nuestros Servicios</h3>
    <div id="Servicios" class="container row ">
      <div class="col s12 m4">
        <div class="card ">
          <div class="card-image  center">
          <img src="<?php echo get_template_directory_uri(); ?>. /Img/Servicios/plano.jpg"
              class="card-image card-image--response " alt="servicio-plano"
            />
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <h5 class="center-align">
                Servicio Plano
              </h5>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12 m4">
        <div class="card ">
          <div class="card-image center">
          <img src="<?php echo get_template_directory_uri(); ?>. /Img/Servicios/medio.jpg"
              class="card-image card-image--response " alt="servicio-plano"
            />
        </div>
          <div class="card-stacked">
            <div class="card-content">
              <h5 class="center-align">
                Servicio Medio
              </h5>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12 m4">
        <div class="card ">
          <div class="card-image center">
          <img src="<?php echo get_template_directory_uri(); ?>. /Img/Servicios/elegant.jpg"
              class="card-image card-image--response " alt="servicio-plano"
            />
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <h5 class="center-align">
                Servicio President
              </h5>
            </div>
          </div>
        </div>
      </div>

      <div class="center-align butto">
        <a class="waves-effect waves-light btn-large">Nuestros Servicios</a>
      </div>
    </div>







<?php get_footer()?>