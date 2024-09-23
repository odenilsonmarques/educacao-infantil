<section class="slide-mobile-main d-none d-lg-block">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php for ($i = 0; $i < get_theme_mod('setting_carousel_slide_count', 3); $i++) : ?>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo $i === 0 ? 'active' : ''; ?>" aria-label="Slide <?php echo $i + 1; ?>"></button>
            <?php endfor; ?>
        </div>

        <div class="carousel-inner">
            <?php for ($i = 1; $i <= get_theme_mod('setting_carousel_slide_count', 3); $i++) : ?>
                <div class="image-wrapper carousel-item <?php echo $i === 1 ? 'active' : ''; ?>">
                    <img src="<?php echo esc_url(get_theme_mod("carousel_image_$i")); ?>" alt="Slide <?php echo $i; ?>" class="img-fluid custom-image">
                    <div class="carousel-caption text-start w-50">
                        <h5 class="text-white fw-bolder fs-1"><?php echo esc_html(get_theme_mod("carousel_title_$i")); ?></h5>
                        <p class="text-white fs-6"><?php echo esc_html(get_theme_mod("carousel_description_$i")); ?></p>
                        <a href="<?php echo esc_url(get_theme_mod("carousel_button_link_$i")); ?>" class="btn btn-lg border-0 w-50 text-white text-decoration-none fw-bolder fs-6" tabindex="-1" role="button" aria-disabled="true">
                            <?php echo esc_html(get_theme_mod("carousel_text_button_$i", 'texto do botão')); ?>
                        </a>
                    </div>
                </div>
            <?php endfor; ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#fff" width="32" height="32">
                    <path d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                </svg>
            </span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#fff" width="32" height="32">
                    <path d="M4.646 1.646a.5.5 0 0 0 0 .708L10.293 8l-5.647 5.646a.5.5 0 0 0 .708.708l6-6a.5.5 0 0 0 0-.708l-6-6a.5.5 0 0 0-.708 0z" />
                </svg>
            </span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>