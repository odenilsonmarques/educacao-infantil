<section class="classes" id="professores">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-3 text-center">
                <h2 class="mt-5 mb-3 fs-2 fw-bolder">Nossos Professores</h2>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <?php
            $args = array(
                'post_type' => 'professores',
                'posts_per_page' => -1,
            );

            $teacher_query = new WP_Query($args);

            if ($teacher_query->have_posts()) :
                while ($teacher_query->have_posts()) : $teacher_query->the_post(); ?>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3 d-flex justify-content-center text-center">
                        <div class="card border-0">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" class="transparent-img img-fluid rounded" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <p class="card-text"><?php echo wp_trim_words(get_the_content(), 15, ' [...]'); ?></p>

                            </div>
                        </div>
                    </div>

                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p class="text-center">Nenhum professor encontrado.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<style>
    .transparent-img {
        opacity: 0.7;
        /* Ajuste o valor entre 0 (totalmente transparente) e 1 (totalmente opaco) */
    }
</style>