<section class="classes">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-3 text-center">
                <h1 class="mt-5 mb-3 fs-2 fw-bolder">Nossas Turmas</h1>
                <p class="mx-auto lh-base paragraph-custom">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi atque alias quis voluptas at fugiat impedit, iusto iure culpa repellat numquam quod eum aut recusandae exercitationem cumque quidem neque aliquam!
                </p>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3 shadow-lg p-3 mb-5 bg-body rounded mx-4 widget-image-custom">
                <div>
                    <?php if (is_active_sidebar('classe-infantil-um')) : ?>
                        <div id="class-infantil">
                            <?php dynamic_sidebar('classe-infantil-um'); ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3 shadow-lg p-3 mb-5 bg-body rounded mx-4 widget-image-custom">
                <div>
                    <?php if (is_active_sidebar('classe-infantil-dois')) : ?>
                        <div id="class-infantil">
                            <?php dynamic_sidebar('classe-infantil-dois'); ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3 shadow-lg p-3 mb-5 bg-body rounded mx-4 widget-image-custom">
                <div>
                    <?php if (is_active_sidebar('classe-infantil-tres')) : ?>
                        <div id="class-infantil">
                            <?php dynamic_sidebar('classe-infantil-tres'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

