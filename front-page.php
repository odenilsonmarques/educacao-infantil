<?php get_header(); ?>
<main>
    <!-- templates resposnaveis pelos headers mobile e desktop -->
    <?php get_template_part('template_parts/template-slide-main'); ?>
    <?php get_template_part('template_parts/template-slide-mobile'); ?>

    <!-- templates responsavel pela section de bem - vindo -->
    <?php get_template_part('template_parts/template-welcome'); ?> 
    
    <!-- templates responsavel pela section sobre a escola -->
    <?php get_template_part('template_parts/template-about'); ?>
</main>
<?php get_footer(); ?>