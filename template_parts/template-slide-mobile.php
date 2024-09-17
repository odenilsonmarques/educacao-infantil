<div class="">
    <section class="d-block d-lg-none">
        <div class="p-3 border rounded m-3">
            <h1>Fique Tranquilo, a Gente Cuida de Tudo!</h1>
            <p>Seu seguro e assistência prontinhos na sua conta de luz. Sem complicação, sem dor de cabeça.</p>
            <a href="http://localhost:9020/nossos-planos/" class="btn btn-primary btn-lg mb-3 border-0" tabindex="-1" role="button" aria-disabled="true">Dá uma olhada nos planos</a>

            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner rounded">
                    <?php for ($i = 1; $i <= get_theme_mod('setting_carousel_slide_count', 3); $i++) : ?>
                        <div class="image-wrapper carousel-item <?php echo $i === 1 ? 'active' : ''; ?>">
                            <img src="<?php echo esc_url(get_theme_mod("carousel_image_$i")); ?>" alt="Slide <?php echo $i; ?>" class="img-fluid custom-image rounded">
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>

    </section>
</div>

