<section class="classes" id="turmas">
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
                        <div class="card mb-3 border-0 ">
                            <div class="row g-0">
                                <div class="col-md-6 text-lg-end text-center"> <!-- Centraliza a imagem em dispositivos móveis -->

                                    <?php
                                    if (has_post_thumbnail()) :
                                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                                    else :
                                        $thumbnail_url = get_template_directory_uri() . '/assets/img/placeholder.png';
                                    endif;
                                    ?>
                                    <img src="<?php echo $thumbnail_url; ?>" alt="<?php the_title(); ?>" class="img-fluid rounded custom-image-size me-lg-3 mb-3 mb-md-0">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 align-self-center text-center text-md-start"> <!-- Centraliza o conteúdo em dispositivos móveis -->
                                    <div class="card-body ms-3" style="max-width: 400px;">
                                        <h2 class="fs-3"><?php echo get_the_title() ? get_the_title() : 'Titulo Padrão'; ?></h2>
                                        <p><?php echo get_the_excerpt() ? get_the_excerpt() : 'Parágrafo pradrão'; ?></p>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-class-custom text-white">Agende sua visita!</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php else : // Para as turmas em posição ímpar 
                    ?>
                        <div class="card mb-3 border-0 mt-5 mb-5">
                            <div class="row g-0">
                                <div class="col-md-5 offset-md-1 align-self-center text-center text-md-start order-2 order-md-1">
                                    <div class="card-body ms-md-5" style="max-width: 400px;">
                                        <h2 class="fs-3"><?php echo get_the_title() ? get_the_title() : 'Titulo Padrão'; ?></h2>
                                        <p><?php echo get_the_excerpt() ? get_the_excerpt() : 'Parágrafo pradrão'; ?></p>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-class-custom text-white">Agende sua visita!</a>
                                    </div>
                                </div>
                                <div class="col-md-6 text-center text-md-start order-1 order-md-2">

                                    <?php
                                    if (has_post_thumbnail()) :
                                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                                    else :
                                        $thumbnail_url = get_template_directory_uri() . '/assets/img/placeholder.png';
                                    endif;
                                    ?>
                                    
                                    <img src="<?php  echo $thumbnail_url;('large'); ?>" alt="<?php the_title(); ?>" class="img-fluid rounded custom-image-size mx-auto d-block ms-lg-4">
                                   
                                </div>
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