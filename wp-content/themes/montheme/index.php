<?php get_header(); ?>


    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Nos services</h2>
                    <div class="row">

                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                <span class="fa-stack fa-4x">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-<?php the_field('icon'); ?> fa-stack-1x text-primary" style="color: #337ab7;;"></i>
                                </span>
                                    <h4>
                                        <strong><?php the_title(); ?></strong>
                                    </h4>
                                    <p> <?php the_content(); ?></p>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>





                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Callout -->
    <aside class="callout">
        <div class="text-vertical-center">
            <h1><?php $blog_title = get_bloginfo('name'); echo $blog_title; ?> </h1>
        </div>
    </aside>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Nos travaux</h2>
                    <hr class="small">
                    <div class="row">


                        <?php $my_query = new WP_Query(array('post_type' => 'projet', 'posts_per_page' => '4')); ?>
                        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                            <div class="col-md-6">
                                <div class="portfolio-item">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <?php the_post_thumbnail('medium', array('class' => 'img-responsive img-portfolio')); ?>
                                        <?php else: ?>
                                            <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/defo.jpg" alt=""/>
                                        <?php endif; ?>
                                    </a>
                                </div>
                            </div>
                        <?php endwhile; ?>

                    </div>
                    <!-- /.row (nested) -->
                    <a href="<?php the_permalink('portfolio'); ?>" class="btn btn-dark">Voir tous les travaux</a>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

<?php get_footer(); ?>