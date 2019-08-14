<?php
function funeraria_custom_post_type(){
    register_post_type('obituario', 
    array(
        'rewrite' => array('slug'=>'obituario'),
        'labels' => array(
            'name'=>'Obituario',
            'singular_name'=>'Obituario',
            'add_new_item'=>'Añadir Nuevo Obituario',
            'edit_item'=>'Editar Obituario',
        ),
        'menu-icon'=>'dashicons-universal-access',
        'public'=>true,
        'has_archive'=>true,
        'supports'=>array(
            'title','thumbnail','editor','exerpt','comments'
        )
        ));
}
add_action('init', 'funeraria_custom_post_type')

?>