<section class="latests-news">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="mt-5 mb-5 fs-2 fw-bolder">Nossas últimas notícias</h2>
            </div>
        </div>
        <div class="row mb-5">
            <?php
            // consulta personalizada para pegar os três últimos posts
            $args = array(
                'post_type'         => 'post',
                'posts_per_page'    => 3,
                'orderby'           => 'date',
                'order'             => 'DESC'
            );

            // usando o objeto WP_Query para executar a consulta
            $posts = new WP_Query($args);

            if ($posts->have_posts()):
                while ($posts->have_posts()) : $posts->the_post();
            ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3 d-flex justify-content-center text-center">
                        <div class="card border" style="width:18rem">

                            <?php
                            if (has_post_thumbnail()) :
                                $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                            else :
                                $thumbnail_url = get_template_directory_uri() . '/assets/img/placeholder.png';
                            endif;
                            ?>

                            <img src="<?php echo esc_url($thumbnail_url); ?>" class="card-img-top" alt="<?php the_title_attribute(); ?>" height="200">

                            <div class="card-body">
                                <p class="author-date-custom">
                                    Por <?php the_author(); ?> -
                                    <?php
                                    // Obtém a inicial do mês
                                    $month_initial = substr(get_the_date('F'), 0, 3);

                                    // Exibe a inicial do mês e o ano
                                    echo $month_initial . ' ' . get_the_date('Y');
                                    ?>
                                </p>
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <p class="card-text"><?php echo wp_trim_words(get_the_content(), 15, ' [...]'); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-latest-custom border-0">Leia mais</a>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php else: ?>
                <p>Nada para mostrar</p>
            <?php endif; ?>
            <?php wp_reset_postdata(); // Reseta os dados da consulta personalizada 
            ?>
        </div>

    </div>
</section>