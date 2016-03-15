<?php get_header(); ?>


    <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                    <h1 class="pull-right"><?php the_title(); ?></h1>
                    <h2 class="pull-right"></h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-12">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>

            </div>

        <?php endwhile; endif; ?>
    </div>

<?php get_footer(); ?>