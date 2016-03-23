<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <title>  <?php $blog_title = get_bloginfo('name'); ?> </title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php wp_head(); ?>
    <title><?php the_title(); ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <!-- Custom Fonts -->
    <link href="<?php bloginfo('template_directory'); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
          rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/animate.css">

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">

</head>


<body>

<!-- Header -->
<header id="top" class="header">
    <nav class="navbar navbar-default hm_navbar-default-modified navbar-fixed-top">
        <div class="container-fluid hm_container-fluid-modified">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="nav-header_modified navbar-header">
                <button type="button" class="navbar-toggle-modified navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

                </button>
                <a class="navbar-brand nav-brand-modified" href="#"><img
                        src="<?php bloginfo('template_directory'); ?>/img/Logo_nav_modified.png"
                        alt="Logo Lycée Claude Garamont"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse hm_navbar-collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav hm_nav-modified navbar-nav">
                    <li><a href="<?php echo home_url(); ?>">Accueil <span class="sr-only">(current)</span></a></li>
                    <li class="dropdown">
                        <a href="<?php echo get_page_link(34); ?>" class="dropdown-toggle" data-toggle="dropdown">Be
                            European <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Erasmus +</a></li>
                            <li><a href="#">Une section Européenne</a></li>
                            <li><a href="#">L'Europe</a></li>
                            <li><a href="#">Le certificat DNL</a></li>
                            <li><a href="#">Etwinning</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Plus d'infos</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="<?php echo get_page_link(11); ?>" class="dropdown-toggle" data-toggle="dropdown"> Lycée
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">PRONOTE - Mode d'emploi</a></li>
                            <li><a href="#">Pourcentages de réussite</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Accès</a></li>
                            <li><a href="#">Claude Garamont</a></li>
                            <li><a href="#">Equipes éducatives</a></li>
                            <li><a href="#">Formulaires administratifs</a></li>
                            <li><a href="#">Partenaires</a></li>
                            <li><a href="#">Sorties</a></li>
                            <li><a href="#">Voyages et/ou sorties scolaires</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="<?php echo get_page_link(48); ?>" class="dropdown-toggle" data-toggle="dropdown">
                            Formations <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Bac Pro AMA CV Pluri Média</a></li>
                            <li><a href="#">BTS Design Graphique</a></li>

                            <li><a href="#">BTS FOENFNRDI</a>

                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                   data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                                   aria-controls="collapseTwo">
                                                    Bac Pro industrie graphique
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <p><a href=""> ufbzaiud</a></p>
                                                <p><a href=""> zegerge</a></p>
                                                <p><a href="">zegzgzgz </a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>

                            <li class="dropdown-submenu">
                                <a href="#"> BTS Industries Graphiques <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" tabindex="-1">BTS PG</a></li>
                                    <li><a href="#" tabindex="-1">BTS PI</a></li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">GRETA</a></li>
                            <li><a href="#">Démarches et Inscriptions</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="<?php echo get_page_link(94); ?>" class="dropdown-toggle" data-toggle="dropdown">
                            Ressources <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Cinéma et vidéo</a></li>
                            <li><a href="#">Couleur</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Dessin</a></li>
                            <li><a href="#">Enseignement général</a></li>
                            <li><a href="#">Fabrication</a></li>
                            <li><a href="#">Histoire de l'Art</a></li>
                            <li><a href="#">Infographie</a></li>
                            <li><a href="#">Photographie</a></li>
                            <li><a href="#">Pub</a></li>
                            <li><a href="#">Typographie et mise en page</a></li>
                        </ul>
                    </li>
                    <li><a href="">Marchés Publics</a></li>
                </ul>

                <div class="ac_float_social">
                    <i class="fa fa-twitter fa-2x ac_icons_position"></i> <i class="fa fa-facebook fa-2x"></i>
                </div>

            </div>

        </div>
    </nav>
    <!-- /.navbar-collapse -->

    <!-- /.container-fluid -->

</header>


