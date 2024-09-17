<!-- Offcanvas -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="background-color:#fff">
    <div class="offcanvas-header">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" width="" height="" class="d-inline-block align-text-top">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" style="color:#fff"></button>
    </div>
    <div class="main-menu offcanvas-body">
        <ul class="navbar-nav mx-auto">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main_menu',
                'container' => 'ul',
                'container_class' => 'navbar-nav',
                'menu_class' => 'navbar-nav',
                'fallback_cb' => '__return_false',
                'items_wrap' => '%3$s', // Remove o container <ul> padrão do wp_nav_menu
            ));
            ?>
        </ul>
        
    </div>
</div>

<style>
    .offcanvas-body li {
        margin-top: 10px;
    }
</style>