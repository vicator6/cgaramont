<?php
/*
    Template Name: partenaires
*/
?>


<?php get_header(); ?>


<div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="row">

                <div class="col-md-12">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>

            </div>

        <?php endwhile; endif; ?>
    </div>

<?php get_footer(); ?>