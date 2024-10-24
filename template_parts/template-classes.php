<section class="classes">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-3 text-center">
                <h2 class="mt-5 mb-3 fs-2 fw-bolder">Nossas Turmas</h2>
                <p class="mx-auto lh-base paragraph-custom">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi atque alias quis voluptas at fugiat impedit, iusto iure culpa repellat numquam quod eum aut recusandae exercitationem cumque quidem neque aliquam!
                </p>
            </div>
        </div>
        <div class="row justify-content-center mt-5">


            <?php
            $args = array(
                'post_type' => 'turmas',
                'posts_per_page' => -1,
            );
            $turmas_query = new WP_Query($args);
            if ($turmas_query->have_posts()) :
                $counter = 0; // contador para alternar entre esquerda e direita
                while ($turmas_query->have_posts()) : $turmas_query->the_post(); ?>
                    <?php if ($counter % 2 == 0) : // Para a primeira turma e as subsequentes em posição par 
                    ?>
                        <div class="row mb-5 mt-3">
                            <div class="col-6 text-end">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="img-fluid rounded custom-image-size me-3">
                                <?php endif; ?>
                            </div>
                            <div class="col-5 align-self-center">
                                <div class="ms-5">
                                    <h2 class="text-primary"><?php the_title(); ?></h2>
                                    <p class="" style="max-width: 50%;"><?php the_excerpt(); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-warning text-white">Agende sua visita!</a>
                                </div>
                            </div>
                        </div>
                    <?php else : // Para as turmas em posição ímpar 
                    ?>
                        <div class="row mb-5 mt-3">
                            <div class="col-1"></div>

                            <div class="col-5 align-self-center">
                                <div class="ms-5">
                                    <h2 class="text-primary"><?php the_title(); ?></h2>
                                    <p><?php the_excerpt(); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-warning text-white">Agende sua visita!</a>
                                </div>
                            </div>

                            <div class="col-6">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="img-fluid rounded custom-image-size ms-5">
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php $counter++; // Incrementa o contador 
                    ?>
            <?php endwhile;
                wp_reset_postdata();
            else :
                echo '<p>Nenhuma turma encontrada.</p>';
            endif;
            ?>

        </div>
    </div>
</section>