<?php get_header(); ?>
<section class="post">
    <div class="container">
        <div class="row">
            <?php
            while (have_posts()) : the_post()
            ?>

            <!-- aqui é apenas um ideai inicial -->
                <article>
                    <header>
                        <h1><?php the_title(); ?></h1>
                    </header>
                    <!-- exibe o conteudo do post -->
                    <?php the_content(); ?>
                </article>

            <?php
            endwhile;
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>






