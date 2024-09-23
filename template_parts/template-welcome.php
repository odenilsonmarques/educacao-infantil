<section class="welcome">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-3 text-center">
                <h1 class="mt-5 mb-3 fs-2 fw-bolder"><?php echo esc_html(get_theme_mod('set_welcome_title', 'Título padrão')); ?></h1>
                <p class="mx-auto lh-base paragraph-custom">
                    <?php echo esc_html(get_theme_mod('set_welcome_description', 'Parágrafo padrão')); ?>
                </p>
            </div>
        </div>
        <div class="row justify-content-center text-center mt-5">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3 shadow p-3 mb-5 bg-body rounded">
                <div class="image-custom-item-1 mb-3">
                    <img src="<?php echo esc_url(get_theme_mod("set_welcome_image_first")); ?>" alt="imagem" class="img-fluid rounded-circle">
                </div>
                <h5 class="mb-3"><?php echo esc_html(get_theme_mod('set_title_first_div', 'Título')); ?></h5>
                <p class="text-item">
                    <?php echo esc_html(get_theme_mod('set_description_first_div', 'Parágrafo')); ?>
                </p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3 shadow p-3 mb-5 bg-body rounded">
                <div class="image-custom-item-2 mb-3">
                    <img src="<?php echo esc_url(get_theme_mod("set_welcome_image_second")); ?>" alt="imagem" class="img-fluid rounded-circle">
                </div>
                <h5 class="mb-3"><?php echo esc_html(get_theme_mod('set_title_second_div', 'Título')); ?></h5>
                <p class="text-item">
                    <?php echo esc_html(get_theme_mod('set_description_second_div', 'Parágrafo')); ?>
                </p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3 shadow p-3 mb-5 bg-body rounded ">
                <div class="image-custom-item-3 mb-3">
                    <img src="<?php echo esc_url(get_theme_mod("set_welcome_image_third")); ?>" alt="imagem" class="img-fluid rounded-circle">
                </div>
                <h5 class="mb-3"><?php echo esc_html(get_theme_mod('set_title_third_div', 'Título')); ?></h5>
                <p class="text-item">
                    <?php echo esc_html(get_theme_mod('set_description_third_div', 'Parágrafo')); ?>
                </p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3 shadow p-3 mb-5 bg-body rounded">
                <div class="image-custom-item-4 mb-3">
                    <img src="<?php echo esc_url(get_theme_mod("set_welcome_image_fourth")); ?>" alt="imagem" class="img-fluid rounded-circle">
                </div>
                <h5 class="mb-3"><?php echo esc_html(get_theme_mod('set_title_fourth_div', 'Título')); ?></h5>
                <p class="text-item">
                    <?php echo esc_html(get_theme_mod('set_description_fourth_div', 'Parágrafo')); ?>
                </p>
            </div>
        </div>
    </div>
</section>