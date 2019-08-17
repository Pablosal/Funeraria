<?php get_header();
?>

    <div class="container center-align">
       <?php if(have_posts()){?>
        <?php while(have_posts()){?>
            <?php the_post(); 
                $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'medium'); 
                // var_dump($featured_img_url);
            
            ?>
        <div class="card">
            <div class="card-title">        
               <h2>
                    <?php the_title(); ?>
               </h2>
                 <p><?php get_the_post_thumbnail('medium'); ?></p>
            </div>

            <!-- <?php funeraria_post_meta();?> -->
            <?php the_content(null,true);?>
            
            <!-- <?php the_excerpt();?> -->
        </div>

        <?php } ?>
        <?php the_posts_pagination(); ?>
    <?php }else{?>
            <p><?php esc_html_e('Sorry no posts matched your criteria.','Funeraria')?></p>        
    <?php }?>
    </div>
<?php get_footer(); ?>