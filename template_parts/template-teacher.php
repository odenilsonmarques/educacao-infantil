<section class="teacher" id="professores">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="mt-5 mb-5 fs-2 fw-bolder">Nossos Professores</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <?php
            $args = array(
                'post_type' => 'professores',
                'posts_per_page' => -1,
            );

            $teacher_query = new WP_Query($args);

            if ($teacher_query->have_posts()) :
                while ($teacher_query->have_posts()) : $teacher_query->the_post(); ?>

                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center text-center">
                        <div class="card border-0">
                            <?php
                            if (has_post_thumbnail()) :
                                $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                            else :
                                $thumbnail_url = get_template_directory_uri() . '/assets/img/placeholder.png';
                            endif;
                            ?>
                            <img src="<?php echo $thumbnail_url; ?>" class=" img-fluid rounded" alt="<?php the_title(); ?>">

                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php echo get_the_title() ? get_the_title() : 'Titulo Padrao'; ?>
                                </h5>
                                <p class="card-text">
                                    <?php echo wp_trim_words(get_the_content(), 15, ' [...]') ? get_the_content() : 'Conteúdo padrão para o professor.'; ?>
                                </p>
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