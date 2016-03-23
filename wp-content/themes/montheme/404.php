<?php get_header(); ?>


<div id="subnav">
    <div id="pages">

        <ul>
            <?php if (get_option('evid_home_link') == 'on') { ?>
                <li><a href="<?php bloginfo('url'); ?>" title="home again woohoo"><?php _e('Home', 'eVid') ?></a></li>
            <?php }; ?>
            <?php if (get_option('evid_swap_navbar') == 'false') { ?>
                <?php echo $page_menu; ?>
            <?php } else { ?>
                <?php if ($category_menu <> '<li>No categories</li>') echo($category_menu); ?>
            <?php } ?>
            <li><a title="Tous les podcasts WordPress Channel" href="https://wpchannel.com/tag/podcasts" rel="tag">Podcasts</a>
            </li>
        </ul>
        <div>
            <div id="search">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</div>
<div id="wrapper2">

    <div id="container-fluid">

        <div id="left-div" style="width:950px;min-height:0;">

            <div class="row">

                <div class="col-md-12 col-md-offset-3 text-center"></br></br>



                <h1>Oups, Erreur 404</h1>
                <div>Ceci est une erreur dite 404 ! En termes simples, la page ne peut être trouvée... Je vous
                    invite dès à présent à utiliser les outils de recherche et / ou de navigation pour parvenir au
                    contenu souhaité.
                </div>

                <h2><a href="<?php echo home_url(); ?>">Retour à la page d'accueil</a></h2>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>