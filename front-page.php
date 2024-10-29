<?php get_header(); ?>
<main>
    <!-- templates resposnaveis pelos headers mobile e desktop -->
    <?php get_template_part('template_parts/template-slide-main'); ?>
    <?php get_template_part('template_parts/template-slide-mobile'); ?>

    <!-- templates responsavel pela section de bem - vindo -->
    <?php get_template_part('template_parts/template-welcome'); ?>

    <!-- templates responsavel pela section sobre a escola -->
    <?php get_template_part('template_parts/template-about'); ?>

    <!-- templates responsavel pela section sobre as classes infantis -->
    <?php get_template_part('template_parts/template-classes'); ?>

     <!-- templates responsavel pela section nossos numeros -->
     <?php get_template_part('template_parts/template-ours-numbers'); ?>
    
    
    <!-- templates responsavel pela section galery -->
    <?php get_template_part('template_parts/template-teacher'); ?>

   

    <!-- templates responsavel pela section ultimas noticias -->
    <?php get_template_part('template_parts/template-latest-news'); ?>


</main>
<?php get_footer(); ?>