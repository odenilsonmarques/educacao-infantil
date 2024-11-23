<section class="welcome">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="mt-5 mb-3 fs-2 fw-bolder"><?php echo esc_html(get_theme_mod('set_welcome_title', 'Título padrão')); ?></h2>
                <p class="mx-auto lh-base paragraph-custom">
                    <?php echo esc_html(get_theme_mod('set_welcome_description', 'Parágrafo padrão')); ?>
                </p>
            </div>
        </div>
        <div class="row justify-content-center text-center mt-5 mb-5">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="card shadow p-3 mb-5 bg-body rounded d-flex flex-column align-items-center">
                    <div class="image-custom-item-1 mb-3">
                        <?php
                        // Verifica se a imagem foi definida no customizer
                        $welcome_image = get_theme_mod("set_welcome_image_first");
                        if ($welcome_image) {
                            // Exibe a imagem definida
                            echo '<img src="' . esc_url($welcome_image) . '" alt="imagem" class="img-fluid rounded-circle">';
                        } else {
                            // Se não foi definida, exibe a imagem padrão
                            echo '<img src="' . get_template_directory_uri() . '/assets/img/placeholder.png" alt="imagem padrão" class="img-fluid rounded-circle">';
                        }
                        ?>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title mb-3"><?php echo esc_html(get_theme_mod('set_title_first_div', 'Título')); ?></h5>
                        <p class="card-text">
                            <?php echo esc_html(get_theme_mod('set_description_first_div', 'Parágrafo')); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="card shadow p-3 mb-5 bg-body rounded d-flex flex-column align-items-center">
                    <div class="image-custom-item-2 mb-3">
                        <?php
                        // Verifica se a imagem foi definida no customizer
                        $welcome_image = get_theme_mod("set_welcome_image_second");
                        if ($welcome_image) {
                            // Exibe a imagem definida
                            echo '<img src="' . esc_url($welcome_image) . '" alt="imagem" class="img-fluid rounded-circle">';
                        } else {
                            // Se não foi definida, exibe a imagem padrão
                            echo '<img src="' . get_template_directory_uri() . '/assets/img/placeholder-attachment.png" alt="imagem padrão" class="img-fluid rounded-circle">';
                        }
                        ?>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title mb-3"><?php echo esc_html(get_theme_mod('set_title_second_div', 'Título')); ?></h5>
                        <p class="card-text">
                            <?php echo esc_html(get_theme_mod('set_description_second_div', 'Parágrafo')); ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="card shadow p-3 mb-5 bg-body rounded d-flex flex-column align-items-center">
                    <div class="image-custom-item-3 mb-3">
                        <?php
                        // Verifica se a imagem foi definida no customizer
                        $welcome_image = get_theme_mod("set_welcome_image_third");
                        if ($welcome_image) {
                            // Exibe a imagem definida
                            echo '<img src="' . esc_url($welcome_image) . '" alt="imagem" class="img-fluid rounded-circle">';
                        } else {
                            // Se não foi definida, exibe a imagem padrão
                            echo '<img src="' . get_template_directory_uri() . '/assets/img/default.png" alt="imagem padrão" class="img-fluid rounded-circle">';
                        }
                        ?>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title mb-3"><?php echo esc_html(get_theme_mod('set_title_third_div', 'Título')); ?></h5>
                        <p class="card-text">
                            <?php echo esc_html(get_theme_mod('set_description_third_div', 'Parágrafo')); ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="card shadow p-3 mb-5 bg-body rounded d-flex flex-column align-items-center">
                    <div class="image-custom-item-4 mb-3">
                        <?php
                        // Verifica se a imagem foi definida no customizer
                        $welcome_image = get_theme_mod("set_welcome_image_fourth");
                        if ($welcome_image) {
                            // Exibe a imagem definida
                            echo '<img src="' . esc_url($welcome_image) . '" alt="imagem" class="img-fluid rounded-circle">';
                        } else {
                            // Se não foi definida, exibe a imagem padrão
                            echo '<img src="' . get_template_directory_uri() . '/assets/img/default.png" alt="imagem padrão" class="img-fluid rounded-circle">';
                        }
                        ?>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title mb-3"><?php echo esc_html(get_theme_mod('set_title_fourth_div', 'Título')); ?></h5>
                        <p class="card-text">
                            <?php echo esc_html(get_theme_mod('set_description_fourth_div', 'Parágrafo')); ?>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>