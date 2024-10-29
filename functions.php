<?php
require_once get_template_directory() . '/inc/customizer.php';
//funcao para carregar os arquivos de estilo e javascript
function load_scripts()
{
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), 1.0, 'all');
    wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-min', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js');
    wp_enqueue_script('ours-numbers', get_template_directory_uri() . '/assets/js/ours-numbers.js');
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

    //  Esse recurso permite selecionar uma imagem de destque no post criados
    add_theme_support('post-thumbnails');
    
}
add_action('widgets_init', 'educacao_infantil_sidebars');


//função para registrar o Custom Post Type (CPT)
function create_turmas_cpt(){

    // Array para definir os rótulos (labels) que serão exibidos no painel adm
    $labels = array(
        'name' => _x('Turmas', 'Post Type General Name', 'textdomain'),
        'singular_name' => _x('Turma', 'Post Type Singular Name', 'textdomain'),
        'menu_name' => __('Turmas', 'textdomain'),
        'name_admin_bar' => __('Turma', 'textdomain'),
        'archives' => __('Arquivo de Turmas', 'textdomain'),
        'attributes' => __('Atributos de Turmas', 'textdomain'),
        'parent_item_colon' => __('Turma Parente:', 'textdomain'),
        'all_items' => __('Todas as Turmas', 'textdomain'),
        'add_new_item' => __('Adicionar Nova Turma', 'textdomain'),
        'add_new' => __('Adicionar Nova', 'textdomain'),
        'new_item' => __('Nova Turma', 'textdomain'),
        'edit_item' => __('Editar Turma', 'textdomain'),
        'update_item' => __('Atualizar Turma', 'textdomain'),
        'view_item' => __('Ver Turma', 'textdomain'),
        'view_items' => __('Ver Turmas', 'textdomain'),
        'search_items' => __('Procurar Turmas', 'textdomain'),
        'not_found' => __('Não Encontrado', 'textdomain'),
        'not_found_in_trash' => __('Não Encontrado no Lixo', 'textdomain'),
    );

    // Este array define as configurações e o comportamento do Custom Post Type
    $args = array(
        'label' =>__('Turma', 'textdomain'),
        'description' =>__('Custom POst Type para tipos de turmas', 'textdomain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',

    );

    register_post_type('turmas', $args);
}



add_action('init', 'create_turmas_cpt');










//função para registrar o Custom Post Type (CPT) da secão professores
function create_teacher_cpt(){

    // Array para definir os rótulos (labels) que serão exibidos no painel adm
    $labels = array(
        'name' => _x('Professores', 'Post Type General Name', 'textdomain'),
        'singular_name' => _x('Professor', 'Post Type Singular Name', 'textdomain'),
        'menu_name' => __('Professores', 'textdomain'),
        'name_admin_bar' => __('Professor', 'textdomain'),
        'archives' => __('Arquivo de Professores', 'textdomain'),
        'attributes' => __('Atributos de Professores', 'textdomain'),
        'parent_item_colon' => __('Professore Parente:', 'textdomain'),
        'all_items' => __('Todos os Professores', 'textdomain'),
        'add_new_item' => __('Adicionar Novo Professor', 'textdomain'),
        'add_new' => __('Adicionar Novo', 'textdomain'),
        'new_item' => __('Novo Professor', 'textdomain'),
        'edit_item' => __('Editar Professor', 'textdomain'),
        'update_item' => __('Atualizar Professor', 'textdomain'),
        'view_item' => __('Ver Professor', 'textdomain'),
        'view_items' => __('Ver Professores', 'textdomain'),
        'search_items' => __('Procurar Professores', 'textdomain'),
        'not_found' => __('Não Encontrado', 'textdomain'),
        'not_found_in_trash' => __('Não Encontrado no Lixo', 'textdomain'),
    );

    // Este array define as configurações e o comportamento do Custom Post Type
    $args = array(
        'label' =>__('Professor', 'textdomain'),
        'description' =>__('Custom POst Type para tipos de professores', 'textdomain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',

    );

    register_post_type('professores', $args);
}

add_action('init', 'create_teacher_cpt');

