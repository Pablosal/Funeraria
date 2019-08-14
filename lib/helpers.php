<?php
function funeraria_post_meta(){
    /* translators: %s: Post Date */
    printf(esc_html__(' %s','Funeraria'),
    '<a href="'. esc_url(get_permalink()). '"><time datetime="' .esc_attr(get_the_date('c')).'">'. esc_html(get_the_date()). '</time></a>'
);


}
function funeraria_readmore_link(){
    /* translators: %s: Post Author */
    echo '<a href="' . esc_url(get_permalink()).'" title="'. the_title_attribute(['echo'=> false]).'">';
    
    echo  'Read More <span class="u-screen-reader-text">About ' .get_the_title(). '</span>';
    echo '</a>';
}


?>