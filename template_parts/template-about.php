<section class="about" id=sobre-nos>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <h2 class="text-white fw-bolder mt-5 mb-4"><?php echo esc_html(get_theme_mod('set_about_title', 'Título padrão')); ?></h2>
                <p class="text-white mb-4">
                    <?php echo esc_html(get_theme_mod('set_about_description', 'Parágrafo padrão')); ?>
                </p>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="<?php echo esc_url(get_theme_mod("set_about_button_link")); ?>" class="btn btn-lg border-0 w-50 text-decoration-none fw-bolder fs-6 btn-about-custom" tabindex="-1" role="button" aria-disabled="true">
                        <?php echo esc_html(get_theme_mod("set_about_text_button", 'texto do botão')); ?>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 text-center">
                <?php
                // Verifica se a imagem foi definida
                $about_image = get_theme_mod("set_about_image");
                if ($about_image) {
                    // Exibe a imagem definida
                    echo '<img src="' . esc_url($about_image) . '" alt="Slide ' . $i . '" class="img-fluid about-image-custom">';
                } else {
                    // Exibe uma imagem padrão se nenhuma imagem foi definida

                    echo '<img src="' . get_template_directory_uri() . '/assets/img/placeholder-attachment.png" alt="Slide padrão ' . $i . '" class="img-fluid custom-image border">';
                }
                ?>
            </div>
        </div>
    </div>
</section>
