<?php 
$args = array(
  'order' => 'DES',
  'posts_per_page' => 3
   );   
$the_query = new WP_Query($args);
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'medium'); 
var_dump($featured_img_url)
?>
<div class="col  s12 m4">
        <div class="card ">
          <div class="card-image">
          <img src="<?php echo $featured_img_url ?>" alt="">
          </div>
            <?php the_content();?>
          <div class="card-stacked">
            <div class="card-content">
              <h5 class="center-align">
              <?php the_title();  ?>
              
              <?php get_post_type();?>
              </h5>
            </div>
            <div class="  card-content">

            <!-- <?php the_excerpt();?> -->
            </div>
            <div class="card-action center-align">
              <a class="waves-effect waves-light btn" href=" <?php echo get_the_permalink()?>">
               
                Saber Más
              </a>
            </div>
          </div>
        </div>
      </div>
