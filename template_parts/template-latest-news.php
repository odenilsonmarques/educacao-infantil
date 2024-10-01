<section class="latests-news">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-3 text-center">
                <h2 class="mt-5 mb-3 fs-2 fw-bolder">Nossas últimas notícias</h2>
                <p class="mx-auto lh-base paragraph-custom">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ea facilis iste qui nihil iure autem tempora assumenda rerum libero, consequuntur voluptas. Aut, sequi excepturi veniam dolor impedit ad! Molestiae.
                </p>
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <?php
            // consulta personalizada para pegar os tres ultimos posts
            $args = array(
                'post_type'         =>  'post',
                'posts_per_page'    =>  3,
                'orderby'           => 'date',
                'order'             => 'DESC'
            );

            //usando o objeto wp_query para executar a consulta
            $posts = new WP_Query($args);

            if ($posts->have_posts()):
                while ($posts->have_posts()) : $posts->the_post();
            ?>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3 d-flex justify-content-center text-center">
                        <div class="card border" style="width: 19rem;">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" class="card-img-top" alt="<?php the_title(); ?>" height="200">
                            <?php endif; ?>
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

