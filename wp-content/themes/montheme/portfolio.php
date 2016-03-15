<?php get_header(); ?>


<!-- Portfolio -->
<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h2>Nos travaux</h2>
                <hr class="small">
                <div class="row">
                    <?php $my_query = new WP_Query(array('post_type' => 'projet', 'posts_per_page' => '-1')); ?>
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
            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>


<?php get_footer(); ?>
