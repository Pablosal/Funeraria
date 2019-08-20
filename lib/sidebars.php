<?php 
function funeraria_sidebar_widgets(){
    register_sidebar(array(
        'id'=>'primary-sidebar',
        'name'=>esc_html__('Primary Sidebar', 'Funeraria'),
        'description'=>esc_html__('Seleccion para colocar el formulario', 'Funeraria'),
        'before_widget'=>'<section id="%1$s" class="%2$s">',
        'after_widget'=>'</section>',
        'before_title'=>'<h5>',
        'after_title'=>'</h5>'
    ));
};

$services_layout = '3,3,3';
$columns = explode(',',$services_layout);

foreach ($columns as $i => $column) {
    register_sidebar(array(
        'id'=>'sec-sidebar-'.($i +1),
        'name'=>sprintf(esc_html__('Secondary Sidebar Column %s', 'Funeraria'),$i+1),
        'description'=>esc_html__('Sidebar dinamico para imagenes de ataudes', 'Funeraria'),
        'before_widget'=>'<section id="%1$s" class="%2$s">',
        'after_widget'=>'</section>',
        'before_title'=>'<h5>',
        'after_title'=>'</h5>'
    ));
}

    add_action('widgets_init', 'funeraria_sidebar_widgets');