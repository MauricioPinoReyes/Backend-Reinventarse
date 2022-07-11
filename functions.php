<?php

function reinventarse_sitio_agregar_css_js(){
/*wp_enqueue_style('style', get_stylesheet_uri());*/
    wp_enqueue_style( 'css', get_template_directory_uri() . '/css/style.css');                                            
    wp_enqueue_style( 'font-awesone-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'); 
    wp_enqueue_style( 'slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css');
    wp_enqueue_style( 'slick-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css');
    

    wp_enqueue_script('jquery-js',  get_template_directory_uri() . '/js/jquery-3.1.0.min.js');
    wp_enqueue_script('app-js',  get_template_directory_uri() . '/js/app.js' , array('jquery-js'), '1.0', true);   
    wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array( 'app-js' ), '1.14', true);

}
add_action( 'wp_enqueue_scripts', 'reinventarse_sitio_agregar_css_js');