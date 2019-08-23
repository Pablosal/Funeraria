<?php 
function funeraria_customize_register($wp_customize){
$wp_customize -> add_section('funeraria_footer_options',array(
    'title' => esc_html__('Footer Option','funeraria'),
    'description'=>esc_html__('Se puede cambiar aqui para el footer','funeraria'),
    'priority'=>30
));
$wp_customize->add_setting('funeraria_site_info',array(
    'default' => '',
    'sanitize_callback'=>'sanitize_text_field'
));
$wp_customize->add_control('funeraria_site_info',array(
    'type'=>'text',
    'label'=>esc_html__('Site info','funeraria'),
    'section' =>'funeraria_footer_options'
    
));
//Añadir configuracion
$wp_customize->add_setting('image-logo-2',array(
    'transport' => 'refresh',
    'height' => 100
));
$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'customizer_setting_one_control',array(
    'label'=>__('Image logo','funeraria'),
    'section' =>'funeraria_footer_options',
    'settings'=>'image-logo-2'

)));
// Añadir Seccion
$wp_customize -> add_section('funeraria_servicios_options',array(
    'title' => esc_html__('Servicios','funeraria'),
    'description'=>esc_html__('Modificar los servicios del lugar','funeraria'),
    'priority'=>50
));
//Añadir configuracion
$wp_customize->add_setting('image-option',array(
    'transport' => 'refresh',
    'height' => 325
));
//añadir control
$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'customizer_setting_two_control',array(
    'label'=>__('Image # 1','funeraria'),
    'section' =>'funeraria_servicios_options',
    'settings'=>'image-option'

)));

//Añadir configuracion
$wp_customize->add_setting('image-option-2',array(
    'transport' => 'refresh',
    'height' => 325
));
//añadir control
$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'customizer_setting_three_control',array(
    'label'=>__('Image # 2','funeraria'),
    'section' =>'funeraria_servicios_options',
    'settings'=>'image-option-2'

)));

//Añadir configuracion
$wp_customize->add_setting('image-option-3',array(
    'transport' => 'refresh',
    'height' => 325
));
//añadir control
$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'customizer_setting_four_control',array(
    'label'=>__('Image # 3','funeraria'),
    'section' =>'funeraria_servicios_options',
    'settings'=>'image-option-3'

)));
};
add_action('customize_register', 'funeraria_customize_register');

?>