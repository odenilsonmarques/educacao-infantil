<?php get_header(); ?>
<section class="sigle-post">
    <div class="container">

        <div class="row justify-content-start">
            <?php while (have_posts()) : the_post() ?>
                <div class="col-lg-8 mb-5 mt-5 d-flex flex-column align-items-start">
                    <div class="mb-2">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" class="img-fluid  rounded" alt="<?php the_title(); ?>" style="height: 400px; object-fit: cover;">
                        <?php endif; ?>
                    </div>

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
                    <h2 class="fs-3 fw-bolder">
                        <?php echo esc_html(get_the_title()); ?>
                    </h2>
                    <p class="content-single-post-custom">
                        <?php echo wp_trim_words(get_the_content()); ?>
                    </p>
                </div>
            <?php endwhile ?>
            <div class="col-12 col-md-4 title-articles mt-4 rounded ">
                <h4 class="mb-3 p-2 mt-2">Outras notícias</h4>
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page'    =>  4,
                    'orderby'           => 'date',
                    'order'             => 'DESC'
                );

                $postList = new WP_Query($args);

                if ($postList->have_posts()) :
                    while ($postList->have_posts()) : $postList->the_post();
                ?>
                        <div class="card border-0 p-2">
                            <div class="row">

                                <div class="col-3 col-md-3 d-flex align-items-start">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail(array(100, 100), array('class' => 'rounded')); ?>
                                    </a>

                                    
                                </div>
                                <div class="col-9 col-md-9">
                                    <div class="card-body">
                                        <p class="fw-bolder card-title fs-6"><?php the_title(); ?></p>
                                        <small class="text-muted"><?php echo get_the_date(); ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <?php endwhile;
                    wp_reset_postdata(); // Adicione este reset
                else : ?>
                    <div class="col-12">
                        <p>nada encontrado</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </div>
</section>
<?php get_footer(); ?>