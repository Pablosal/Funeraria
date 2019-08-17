<?php get_header();
/*Template Name: Obituario*/
$args = array(
  'post_type'=> 'obituario',
  'order' => 'DES',
  'posts_per_page' => 5
   );   
$the_query = new WP_Query($args)
?>
<div class="col">
    <div class="column">
    <?php if($the_query->have_posts()){?>
        <?php while($the_query->have_posts()) {?>
            <?php $the_query->the_post();?>
        <div class="col s12 m6 xl4  ">
          <div class="card ">
            <div class="background  card-content white-text center-align">
              <img src="<?php echo get_template_directory_uri(); ?> /Img/Logotipos-01.png" alt="fondo-marca" class="back" />
                <article class="centered" <?php post_class("c-post");?>>
                          <?php funeraria_post_meta()?>
                      <h2 class="card-title">
                              <?php the_title(); ?>
                      </h2>
                      <div>
                          <?php the_content();?>
                      </div>
                      <div>
                          <?php the_excerpt();?>
                      </div>
                      <div class="card-action">
                        <h5>Funeraria Isla Entrega sus condolencias</h5>
                      </div>
                </article>
              </div>
            </div>
          </div>
          <?php }?>
          <?php the_posts_pagination(); ?>
    <?php }else{?>
            <p><?php esc_html_e('Sorry no posts matched your criteria.','Funeraria')?></p>        
    <?php }?>

      <div class="row">
        <div class="col s12">
          <?php get_sidebar('primary-sidebar'); ?>    
        </div>
      </div>

<?php get_footer()?>