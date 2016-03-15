<?php get_header(); ?>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="container-fluid" style="padding: 50px 0; background-image:linear-gradient(to bottom,#F4F4F4 0,#F2F2F2 100%);border-bottom: 1px solid #E5E5E5;">
                <div class="container">
                        <h1 class="pull-left"><?php the_title(); ?></h1>
                        <h2 class="pull-right">Test</h2>
                </div>
            </div>
    <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <p><?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?></p>
                    <?php endif; ?>
                    <?php the_content(); ?>
                </div>

            </div>
    </div>

        <?php endwhile; endif; ?>

<?php get_footer(); ?>