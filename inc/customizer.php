<?php

function customize_kid_education($wp_customize)
{
    //Inicio------------- Seção para o Slide -------------------
    $wp_customize->add_section(
        'sec_carousel',
        array(
            'title'       => __('Configuração do slide', 'your-text'),
            'description' => __('Configure o conteudo do slide', 'your-text'),
            'priority'    => 30,
        )
    );

    $wp_customize->add_setting(
        'set_carousel_slide_count',
        array(
            'default'           => 3,
            'sanitize_callback' => 'absint',
        )
    );

    $wp_customize->add_control(
        'set_carousel_slide_count',
        array(
            'label'       => __('Selecione o número de slides', 'your-textdomain'),
            'section'     => 'sec_carousel',
            'type'        => 'number',
            'input_attrs' => array('min' => 1, 'max' => 10),
        )
    );

    // esse laço exibe os conteúdos que compoe os slides
    for ($i = 1; $i <= get_theme_mod('set_carousel_slide_count', 3); $i++) {

        // Imagem do slide
        $wp_customize->add_setting(
            "set_carousel_image_$i",
            array(
                'default'           => '',
                'sanitize_callback' => 'esc_url_raw',
            )
        );

        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            "set_carousel_image_$i",
            array(
                'label'    => __("Imagem do Slide $i", 'your-textdomain'),
                'section'  => 'sec_carousel',
                'settings' => "set_carousel_image_$i",
            )
        ));

        // Título do slide
        $wp_customize->add_setting(
            "set_carousel_title_$i",
            array(
                'default'           => '',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );

        $wp_customize->add_control(
            "set_carousel_title_$i",
            array(
                'label'   => __("Título do Slide $i", 'your-textdomain'),
                'section' => 'sec_carousel',
                'type'    => 'text',
            )
        );

        // Descrição do slide
        $wp_customize->add_setting(
            "set_carousel_description_$i",
            array(
                'default'           => '',
                'sanitize_callback' => 'sanitize_textarea_field',
            )
        );

        $wp_customize->add_control(
            "set_carousel_description_$i",
            array(
                'label'   => __("Descrição do Slide $i", 'your-textdomain'),
                'section' => 'sec_carousel',
                'type'    => 'textarea',
            )
        );

        // texto botão
        $wp_customize->add_setting(
            "set_carousel_text_button_$i",
            array(
                'default'           => '',
                'sanitize_callback' => 'sanitize_textarea_field',
            )
        );

        $wp_customize->add_control(
            "set_carousel_text_button_$i",
            array(
                'label'   => __("Texto do botao $i", 'your-textdomain'),
                'section' => 'sec_carousel',
                'type'    => 'text',
            )
        );

        // Link do botão do slide
        $wp_customize->add_setting(
            "set_carousel_button_link_$i",
            array(
                'default'           => '',
                'sanitize_callback' => 'esc_url_raw',
            )
        );

        $wp_customize->add_control(
            "set_carousel_button_link_$i",
            array(
                'label'   => __("Link do Botão no Slide $i", 'your-textdomain'),
                'section' => 'sec_carousel',
                'type'    => 'url',
            )
        );
    }
    //Fim------------- Seção para o Slide -------------------



    //Inicio------------- Seção para o Slide para telas pequenas -------------------
    $wp_customize->add_section(
        'sec_carousel_mobile',
        array(
            'title'       => __('Configuração do slide mobile', 'your-text'),
            'description' => __('Configure o conteudo do slide mobile', 'your-text'),
            'priority'    => 30,
        )
    );

    // título do slide (fora do laço)
    $wp_customize->add_setting(
        'set_carousel_mobile_title',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'set_carousel_mobile_title',
        array(
            'label'    => __('Título do Slide', 'your-textdomain'),
            'section'  => 'sec_carousel_mobile',
            'type'     => 'text',
        )
    );

    // descrição do slide (fora do laço)
    $wp_customize->add_setting(
        'set_carousel_mobile_description',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_textarea_field',
        )
    );

    $wp_customize->add_control(
        'set_carousel_mobile_description',
        array(
            'label'    => __('Descrição do Slide', 'your-textdomain'),
            'section'  => 'sec_carousel_mobile',
            'type'     => 'textarea',
        )
    );

    // texto botão
    $wp_customize->add_setting(
        "set_carousel_text_button_mobile",
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_textarea_field',
        )
    );

    $wp_customize->add_control(
        "set_carousel_text_button_mobile",
        array(
            'label'   => __("Texto do botao mobile", 'your-textdomain'),
            'section' => 'sec_carousel_mobile',
            'type'    => 'text',
        )
    );


    // Link
    $wp_customize->add_setting(
        "set_carousel_button_link_mobile",
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        "set_carousel_button_link_mobile",
        array(
            'label'   => __("Link do Botão no Slide mobile", 'your-textdomain'),
            'section' => 'sec_carousel_mobile',
            'type'    => 'url',
        )
    );


    // Campo para selecionar o número de slides
    $wp_customize->add_setting(
        'set_carousel_slide_count_mobile',
        array(
            'default'           => 3,
            'sanitize_callback' => 'absint',
        )
    );


    $wp_customize->add_control(
        'set_carousel_slide_count_mobile',
        array(
            'label'       => __('Selecione o número de imagens do slides', 'your-textdomain'),
            'section'     => 'sec_carousel_mobile',
            'type'        => 'number',
            'input_attrs' => array('min' => 1, 'max' => 10),
        )
    );

    // esse laço exibe os conteúdos que compoe os slides
    for ($i = 1; $i <= get_theme_mod('set_carousel_slide_count_mobile', 3); $i++) {

        // Imagem do slide
        $wp_customize->add_setting(
            "set_carousel_image_mobile_$i",
            array(
                'default'           => '',
                'sanitize_callback' => 'esc_url_raw',
            )
        );

        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            "set_carousel_image_mobile_$i",
            array(
                'label'    => __("Imagem do Slide $i", 'your-textdomain'),
                'section'  => 'sec_carousel_mobile',
                'settings' => "set_carousel_image_mobile_$i",
            )
        ));
    }
    //Fim------------- Seção para o Slide para telas pequenas -------------------


    //customizer para secao de boas-vindas
    $wp_customize->add_section(
        'sec_welcome',
        array(
            'title'       => __('Configuração da seção de boas-vindas', 'your-text'),
            'description' => __('Configure o conteudo da seção de boas-vidas', 'your-text'),
            'priority'    => 30,
        )
    );

    //título
    $wp_customize->add_setting(
        'set_welcome_title',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'set_welcome_title',
        array(
            'label'    => __('Título do seção', 'your-textdomain'),
            'section'  => 'sec_welcome',
            'type'     => 'text',
        )
    );

    //descrição
    $wp_customize->add_setting(
        'set_welcome_description',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_textarea_field',
        )
    );

    $wp_customize->add_control(
        'set_welcome_description',
        array(
            'label'    => __('Descrição da seção', 'your-textdomain'),
            'section'  => 'sec_welcome',
            'type'     => 'textarea',
        )
    );



     //Inicio------------- Seção de boas - vindas-------------------
    // imagem
    $wp_customize->add_setting(
        'set_welcome_image_first',
        array(
            'default'           => '', 
            'sanitize_callback' => 'esc_url_raw', 
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'set_welcome_image_first',
            array(
                'label'      => __('Defina a primeira imagem', 'your-textdomain'),
                'section'    => 'sec_welcome',
                'settings'   => 'set_welcome_image_first',
                'description' => __('Carregue uma imagem para a seção', 'your-textdomain'),
            )
        )
    );

    // Título
    $wp_customize->add_setting(
        'set_title_first_div',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'set_title_first_div',
        array(
            'label'    => __('Título', 'your-textdomain'),
            'section'  => 'sec_welcome',
            'type'     => 'text',
        )
    );

    // Descrição
    $wp_customize->add_setting(
        'set_description_first_div',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_textarea_field',
        )
    );

    $wp_customize->add_control(
        'set_description_first_div',
        array(
            'label'    => __('Descrição', 'your-textdomain'),
            'section'  => 'sec_welcome',
            'type'     => 'textarea',
        )
    );

    // Campos que compoem a segunda div da seção de boas - vindas
    // imagem
    $wp_customize->add_setting(
        'set_welcome_image_second',
        array(
            'default'           => '', // Defina um valor padrão, se necessário
            'sanitize_callback' => 'esc_url_raw', // Sanitização da URL da imagem
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'set_welcome_image_second',
            array(
                'label'      => __('Defina a segunda imagem', 'your-textdomain'),
                'section'    => 'sec_welcome',
                'settings'   => 'set_welcome_image_second',
                'description' => __('Carregue uma imagem para a seção', 'your-textdomain'),
            )
        )
    );

    // Título
    $wp_customize->add_setting(
        'set_title_second_div',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'set_title_second_div',
        array(
            'label'    => __('Título', 'your-textdomain'),
            'section'  => 'sec_welcome',
            'type'     => 'text',
        )
    );

    // Descrição
    $wp_customize->add_setting(
        'set_description_second_div',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_textarea_field',
        )
    );

    $wp_customize->add_control(
        'set_description_second_div',
        array(
            'label'    => __('Descrição', 'your-textdomain'),
            'section'  => 'sec_welcome',
            'type'     => 'textarea',
        )
    );


    // Campos que compoem a terceira div da seção de boas - vindas
    // imagem
    $wp_customize->add_setting(
        'set_welcome_image_third',
        array(
            'default'           => '', 
            'sanitize_callback' => 'esc_url_raw', 
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'set_welcome_image_third',
            array(
                'label'      => __('Defina a terceira imagem', 'your-textdomain'),
                'section'    => 'sec_welcome',
                'settings'   => 'set_welcome_image_third',
                'description' => __('Carregue uma imagem para a seção', 'your-textdomain'),
            )
        )
    );

    // Título
    $wp_customize->add_setting(
        'set_title_third_div',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'set_title_third_div',
        array(
            'label'    => __('Título', 'your-textdomain'),
            'section'  => 'sec_welcome',
            'type'     => 'text',
        )
    );

    // Descrição
    $wp_customize->add_setting(
        'set_description_third_div',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_textarea_field',
        )
    );

    $wp_customize->add_control(
        'set_description_third_div',
        array(
            'label'    => __('Descrição', 'your-textdomain'),
            'section'  => 'sec_welcome',
            'type'     => 'textarea',
        )
    );


    // Campos que compoem a quarta div da seção de boas - vindas
    //imagem
    $wp_customize->add_setting(
        'set_welcome_image_fourth',
        array(
            'default'           => '', // Defina um valor padrão, se necessário
            'sanitize_callback' => 'esc_url_raw', // Sanitização da URL da imagem
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'set_welcome_image_fourth',
            array(
                'label'      => __('Defina a quarta imagem', 'your-textdomain'),
                'section'    => 'sec_welcome',
                'settings'   => 'set_welcome_image_fourth',
                'description' => __('Carregue uma imagem para a seção', 'your-textdomain'),
            )
        )
    );

    // Título
    $wp_customize->add_setting(
        'set_title_fourth_div',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'set_title_fourth_div',
        array(
            'label'    => __('Título', 'your-textdomain'),
            'section'  => 'sec_welcome',
            'type'     => 'text',
        )
    );

    // Descrição
    $wp_customize->add_setting(
        'set_description_fourth_div',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_textarea_field',
        )
    );

    $wp_customize->add_control(
        'set_description_fourth_div',
        array(
            'label'    => __('Descrição', 'your-textdomain'),
            'section'  => 'sec_welcome',
            'type'     => 'textarea',
        )
    );
      //Fim------------- Seção de boas - vindas -------------------
}

add_action('customize_register', 'customize_kid_education');
