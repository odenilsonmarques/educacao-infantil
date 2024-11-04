<section class="slide-mobile d-block d-lg-none slide">
    <div class="p-2 border rounded m-3">
        <h5 class="fw-bolder fs-1 title-mobile-custom">
            <?php echo esc_html(get_theme_mod('set_carousel_mobile_title', 'Título Padrão')); ?>
        </h5>
        <p class="fw-normal">
            <?php echo esc_html(get_theme_mod('set_carousel_mobile_description', 'Descrição padrão do slide.')); ?>
        </p>
        <a href="<?php echo esc_url(get_theme_mod("set_carousel_button_link_mobile")); ?>" class="btn btn-lg mb-3 border-0 w-100 button-mobile-custom text-white fw-bold" tabindex="-1" role="button" aria-disabled="true">
            <?php echo esc_html(get_theme_mod("set_carousel_text_button_mobile", 'texto do botão')); ?>
        </a>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner rounded">
                <?php for ($i = 1; $i <= get_theme_mod('set_carousel_slide_count_mobile', 3); $i++) : ?>
                    <div class="image-wrapper carousel-item justify-content-center <?php echo $i === 1 ? 'active' : ''; ?>">
                        <img src="<?php echo esc_url(get_theme_mod("set_carousel_image_mobile_$i")); ?>" alt="Slide <?php echo $i; ?>" class="img-fluid custom-image-mobile rounded">
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>