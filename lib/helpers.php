<?php
function funeraria_post_meta(){
    /* translators: %s: Post Date */
    printf(esc_html__('Posted On %s','Funeraria'),
    '<a href="'. esc_url(get_permalink()). '"><time datetime="' .esc_attr(get_the_date('c')).'">'. esc_html(get_the_date()). '</time></a>'
);
printf(esc_html__(' By %s', 'Funeraria'),
'<a href="'. esc_url(get_author_posts_url(get_the_author_meta('ID'))).'">'. esc_html(get_the_author()).'</a>'
);

}
function funeraria_readmore_link(){
    /* translators: %s: Post Author */
    echo '<a href="' . esc_url(get_permalink()).'" title="'. the_title_attribute(['echo'=> false]).'">';
    
    echo  'Read More <span class="u-screen-reader-text">About ' .get_the_title(). '</span>';
    echo '</a>';
}


?>