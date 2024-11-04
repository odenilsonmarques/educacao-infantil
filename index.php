<?php get_header(); ?>
<section class="post">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-3 text-center">
                <h2 class="mt-3 mb-5 fs-2 fw-bolder">Bem -vindo ao nosso blog</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <?php
                // Defina o número de posts por página
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'posts_per_page' => 4, // Altere para a quantidade de posts desejada por página
                    'paged' => $paged
                );
                $query = new WP_Query($args);

                // Loop de posts
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                ?>
                    <div class="card mb-3 border-0" style="max-width: 100%;">
                        <div class="row g-0 p-2">
                            <div class="col-md-4">
                                <?php
                                if (has_post_thumbnail()) :
                                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                                else :
                                    $thumbnail_url = get_template_directory_uri() . '/assets/img/placeholder.png';
                                endif;
                                ?>
                                <img src="<?php echo esc_url($thumbnail_url); ?>" class="custom-img-list-page-blog rounded" <?php the_title_attribute(); ?>>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2 class="card-title fs-3"><?php the_title(); ?></h2>
                                    <p class="text-muted"><?php the_content(); ?></p>
                                    <p class="d-flex align-items-center content-sigle-post-intens-custom mt-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#23CC88" class="bi bi-person me-2" viewBox="0 0 16 16">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                        </svg>
                                        <span class="me-3"><?php echo esc_html(get_the_author()); ?></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#23CC88" class="bi bi-calendar2-week me-2" viewBox="0 0 16 16">
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z" />
                                            <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5zM11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                                        </svg>
                                        <span class="me-3"><?php echo esc_html(get_the_date()); ?></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#23CC88" class="bi bi-chat me-2" viewBox="0 0 16 16">
                                            <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105" />
                                        </svg>
                                        <span class="me-3"><?php echo get_comments_number(); ?></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile;
                    // Exibe a paginação
                    echo paginate_links(array(
                        'total' => $query->max_num_pages
                    ));
                else :
                    echo '<p>Nenhum post encontrado.</p>';
                endif;
                // Restaura a query global do WordPress
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
