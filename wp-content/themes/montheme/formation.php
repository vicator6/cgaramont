<?php
/*
    Template Name: Formation
*/
?>


<?php get_header(); ?>


<!-- Main -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php $my_query = new WP_Query(array('post_type' => 'projet', 'posts_per_page' => '1')); ?>
                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <?php $idencours = get_the_ID(); ?>
                <div id="txt_qsn">
                    <h3>Description</h3>
                    <p>
                      <?php  the_content(); ?>
                    </p>
                    <h3>Infos principales</h3>
                    <ul class="infos">
                        <li>
                            Création : <b><?php the_field('creation') ?></b>
                        </li>
                        <li>
                            Client : <b><?php the_field('client') ?></b>
                        </li>
                        <li>
                            Livrable : <b><?php the_field('livrable') ?></b>
                        </li>
                    </ul>
                    <br/>
                    <a href="" class="btn btn-info">Voir le projet</a>
                </div>
            </div>
            <div class="col-md-5 col-md-offset-1">
                <div id="img_qsn">






                                <a href="<?php the_permalink(); ?>">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail('medium', array('class' => 'img-responsive img-portfolio')); ?>
                                    <?php else: ?>
                                        <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/defo.jpg" alt=""/>
                                    <?php endif; ?>

                    <?php endwhile; ?>










                </div>
            </div>
        </div>
    </div>
</section>

<section id="more_projets">
    <div class="container">
        <h2>Tous les autres projets</h2>
        <div class="row">






            <?php $my_query = new WP_Query(array('post_type' => 'post', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => '10', 'post__not_in' => array($idencours))); ?>
            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <div class="col-md-2">
                    <div class="projet">
                        <a href="<?php the_permalink(); ?>">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('small', array('class' => 'img-responsive')); ?>
                            <?php else: ?>
                                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/defo.jpg" alt=""/>
                            <?php endif; ?>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>


        </div>
    </div>
</section>


<?php get_footer(); ?>