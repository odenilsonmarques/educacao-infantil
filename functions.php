<?php
require_once get_template_directory() . '/inc/customizer.php';
//funcao para carregar os arquivos de estilo e javascript
function load_scripts()
{
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), 1.0, 'all');
    wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-min', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js');
}
add_action('wp_enqueue_scripts', 'load_scripts');



//funcao para personalizar alguns campos no tema
function educacao_infantil_config()
{
    //ao definir essas propriedades o wp permite criar um recorte para ajustar a imagem. porem é sempre bom informar o tamanho correto da imagem.
    // add_theme_support('custom-logo', array(
    //     'height' => 100,
    //     'width' => 300,
    //     'flex-height' => true, // Permite altura flexível
    //     'flex-width'  => true, // Permite largura flexível
    // ));


    // registrando um menu dinamico
    register_nav_menus(
        array(
            'main_menu' => 'Menu principal',
            'footer_menu' => 'Menu rodape'
        )
    );
}
add_action('after_setup_theme', 'educacao_infantil_config');


//registrando widgets
function educacao_infantil_sidebars()
{
    register_sidebar(
        array(
            'name' => 'classe infantil um',
            'id'   => 'classe-infantil-um',
            'before_widget' => '<div class="class-infantil">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'name' => 'classe infantil dois',
            'id'   => 'classe-infantil-dois',
            'before_widget' => '<div class="class-infantil">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'name' => 'classe infantil tres',
            'id'   => 'classe-infantil-tres',
            'before_widget' => '<div class="class-infantil">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        )
    );
}
add_action('widgets_init', 'educacao_infantil_sidebars');
