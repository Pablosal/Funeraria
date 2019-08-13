<?php get_header()?>
    <!--Seccion de Carousel-->
    <div class="carousel carousel-slider ">
      <a class="carousel-item"
        ><img src="./assets/Img/Frontis/20190802_164634.jpg"
      /></a>
      <a class="carousel-item" href="#two!"
        ><img src="https://lorempixel.com/800/400/food/2"
      /></a>
      <a class="carousel-item" href="#three!"
        ><img src="https://lorempixel.com/800/400/food/3"
      /></a>
      <a class="carousel-item" href="#four!"
        ><img src="https://lorempixel.com/800/400/food/4"
      /></a>
    </div>

    <!--Seccion de leer mas-->
    <h2 class="center-align">Funerarias Isla te informa</h2>
    <div id="Informacion" class="container row">
      <div class="col s12 m4">
        <div class="card ">
          <div class="card-image">
            <img
              class="card-image"
              src="./assets/Img/CuotaMuortoria/superintendencia.jpg"
            />
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <h5 class="center-align">
                ¿Sabes lo que es la Cuota Mortuoria y como obtenerla?
              </h5>
            </div>
            <div class="card-action center-align">
              <a class="waves-effect waves-light btn">Quiero Saber</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col  s12 m4">
        <div class="card ">
          <div class="card-image">
            <img
              class="card-image"
              src="./assets/Img/CuotaMuortoria/Repatriacion.jpeg"
            />
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <h5 class="center-align">
                ¿Que debo hacer en caso de una repatriacion?
              </h5>
            </div>
            <div class="card-action center-align">
              <a class="waves-effect waves-light btn">Quiero Saber</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12 m4">
        <div class="card ">
          <div class="card-image">
            <img
              class="card-image"
              src="./assets/Img/CuotaMuortoria/cementerio.jpg"
            />
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <h5 class="center-align">
                ¿Que tramites debo hacer en el cementerio?
              </h5>
            </div>
            <div class="card-action center-align">
              <a class="waves-effect waves-light btn">Quiero Saber</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Seccion de servicios-->
    <h3 class="center-align">Nuestros Servicios</h3>
    <div id="Servicios" class="container row ">
      <div class="col s12 m4">
        <div class="card ">
          <div class="card-image  center">
            <img
              class="card-image card-image--response "
              src="./assets/Img/Plano/mostrar2.png"
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
            <img
              class="card-image card-image--response"
              src="./assets/Img/Medio/mostrar.png"
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
            <img
              class="card-image card-image--response"
              src="./assets/Img/ElegantPresident/mostrar-l.png"
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





    <?php if(have_posts()){?>
        <?php while(have_posts()) {?>
            <?php the_post();?>
            <article <?php post_class("c-post");?>>
                <h2>
                    <a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <div>
                    <?php funeraria_post_meta()?>
                </div>
                <div>
                    <?php the_excerpt();?>
                    
                </div>
                    <?php funeraria_readmore_link();?>
            </article>
        <?php }?>
        <?php the_posts_pagination(); ?>
    <?php }else{?>
        <p><?php esc_html_e('Sorry no posts matched your criteria.','Funeraria')?></p>        
    <?php }?>

<?php get_footer()?>