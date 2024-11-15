<?php get_header(); ?>
<section class="page-post">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-12">
                <?php while (have_posts()) : the_post() ?>
                    <article class="">
                        <h2 class="fs-3 fw-bolder mt-5">
                            <?php echo esc_html(get_the_title()); ?>
                        </h2>
                        <p class="">
                            <?php echo wp_trim_words(get_the_content()); ?>
                        </p>
                    </article>
                <?php endwhile ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>