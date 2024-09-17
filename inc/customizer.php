<?php

function customize_kid_education($wp_customize)
{
    // Seção para o Slide
    $wp_customize->add_section(
        'section_carousel',
        array(
            'title'       => __('Configuração do slide', 'your-text'),
            'description' => __('Configure o conteudo do slide', 'your-text'),
            'priority'    => 30,
        )
    );

    $wp_customize->add_setting(
        'setting_carousel_slide_count',
        array(
            'default'           => 3,
            'sanitize_callback' => 'absint',
        )
    );

    $wp_customize->add_control(
        'setting_carousel_slide_count',
        array(
            'label'       => __('Selecione o número de slides', 'your-textdomain'),
            'section'     => 'section_carousel',
            'type'        => 'number',
            'input_attrs' => array('min' => 1, 'max' => 10),
        )
    );

    // esse laço exibe os conteúdos que compoe os slides
    for ($i = 1; $i <= get_theme_mod('setting_carousel_slide_count', 3); $i++) {

        // Imagem do slide
        $wp_customize->add_setting(
            "carousel_image_$i",
            array(
                'default'           => '',
                'sanitize_callback' => 'esc_url_raw',
            )
        );

        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            "carousel_image_$i",
            array(
                'label'    => __("Imagem do Slide $i", 'your-textdomain'),
                'section'  => 'section_carousel',
                'settings' => "carousel_image_$i",
            )
        ));

        // Título do slide
        $wp_customize->add_setting(
            "carousel_title_$i",
            array(
                'default'           => '',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );

        $wp_customize->add_control(
            "carousel_title_$i",
            array(
                'label'   => __("Título do Slide $i", 'your-textdomain'),
                'section' => 'section_carousel',
                'type'    => 'text',
            )
        );

        // Descrição do slide
        $wp_customize->add_setting(
            "carousel_description_$i",
            array(
                'default'           => '',
                'sanitize_callback' => 'sanitize_textarea_field',
            )
        );

        $wp_customize->add_control(
            "carousel_description_$i",
            array(
                'label'   => __("Descrição do Slide $i", 'your-textdomain'),
                'section' => 'section_carousel',
                'type'    => 'textarea',
            )
        );

        // texto botão
        $wp_customize->add_setting(
            "carousel_text_button_$i",
            array(
                'default'           => '',
                'sanitize_callback' => 'sanitize_textarea_field',
            )
        );

        $wp_customize->add_control(
            "carousel_text_button_$i",
            array(
                'label'   => __("Texto do botao $i", 'your-textdomain'),
                'section' => 'section_carousel',
                'type'    => 'text',
            )
        );

        // Link do botão do slide
        $wp_customize->add_setting(
            "carousel_button_link_$i",
            array(
                'default'           => '',
                'sanitize_callback' => 'esc_url_raw',
            )
        );

        $wp_customize->add_control(
            "carousel_button_link_$i",
            array(
                'label'   => __("Link do Botão no Slide $i", 'your-textdomain'),
                'section' => 'section_carousel',
                'type'    => 'url',
            )
        );
    }
}

add_action('customize_register', 'customize_kid_education');
