<section class="classes" id="turmas">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="mt-5 mb-5 fs-2 fw-bolder">Nossas Turmas</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center mb-5">
            <?php
            $args = array(
                'post_type' => 'turmas',
                'posts_per_page' => -1,
            );

            $turmas_query = new WP_Query($args);

            if ($turmas_query->have_posts()) :
                while ($turmas_query->have_posts()) : $turmas_query->the_post(); ?>
                    <div class="col">
                        <div class="card mb-3 border">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <?php
                                    if (has_post_thumbnail()) :
                                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                                    else :
                                        $thumbnail_url = get_template_directory_uri() . '/assets/img/placeholder.png';
                                    endif;
                                    ?>
                                    <img src="<?php echo $thumbnail_url; ?>" alt="<?php the_title(); ?>" class="img-fluid rounded-start custom-img-classes">
                                </div>

                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo get_the_title() ? get_the_title() : 'Título Padrão'; ?></h5>
                                        <p class="card-text">
                                            <?php
                                            $excerpt = get_the_excerpt() ? get_the_excerpt() : 'Texto padrão para a descrição da turma.';
                                            echo mb_strimwidth($excerpt, 0, 200, '...'); // Limita a 100 caracteres e adiciona "..." no final.
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>Nenhuma turma encontrada.</p>';
            endif;
            ?>
        </div>

    </div>
</section>