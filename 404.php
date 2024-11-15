<?php get_header(); ?>
<section class="page-post">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-12 text-center">
                <h4>Página não encontrada !</h4>
                <img src="<?php echo get_template_directory_uri();?>/assets/img/404.svg" alt="404" class="img-fluid mt-5 mb-5">

                <p><a href="<?php echo home_url(); ?>" class="text-decoration-none text-primary fw-bold">Ir para página inicial</a></p>
            </div>

        </div>
    </div>
</section>
<?php get_footer(); ?>