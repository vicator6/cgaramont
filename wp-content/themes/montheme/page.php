<?php get_header(); ?>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="container-fluid" style="padding: 50px 0; background-image:linear-gradient(to bottom,#F4F4F4 0,#F2F2F2 100%);border-bottom: 1px solid #E5E5E5;">
                <div class="container">
                        <h1 class="pull-left"><?php the_title(); ?></h1>
                        <h2 class="pull-right"><div>
                                <?php // Breadcrumb navigation
                                    if (is_page() && !is_front_page() || is_single() || is_category()) {
                                        echo '<a title="Accueil - Lycée Claude Garamont" rel="nofollow" href="'.home_url().'">Accueil</a>';

                                        if (is_page()) {
                                            $ancestors = get_post_ancestors($post);

                                            if ($ancestors) {
                                                $ancestors = array_reverse($ancestors);

                                                foreach ($ancestors as $crumb) {
                                                    echo '<a href="'.get_permalink($crumb).'">'.get_the_title($crumb).'</a>';
                                                }
                                            }
                                        }

                                        if (is_single()) {
                                            $category = get_the_category();
                                            echo '<a href="'.get_category_link($category[0]->cat_ID).'">'.$category[0]->cat_name.'</a>';
                                        }

                                        if (is_category()) {
                                            $category = get_the_category();
                                            echo '/ '.$category[0]->cat_name;
                                        }

                                        // Current page
                                        if (is_page() || is_single()) {
                                            echo ' / '.get_the_title().'';
                                        }
                                    } elseif (is_front_page()) {
                                        // Front page
                                        echo '<a title="Accueil - Lycée Claude Garamont" rel="nofollow" href="'.home_url().'">Accueil</a>';
                                    }
                                    ?></p></div></h2>
                </div>
            </div>
    <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <p class="thumbnail-img"><?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?></p>
                    <?php endif; ?>
                    <?php the_content(); ?>
                </div>

            </div>
    </div>

        <?php endwhile; endif; ?>

<?php get_footer(); ?>