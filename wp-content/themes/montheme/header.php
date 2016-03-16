<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <title>  <?php $blog_title = get_bloginfo('name'); ?> </title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php wp_head(); ?>
    <title><?php the_title();?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php bloginfo( 'template_directory' ); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <!-- Custom Fonts -->
    <link href="<?php bloginfo( 'template_directory' ); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/animate.css">

    <link rel="stylesheet"  href="<?php bloginfo( 'template_directory' ); ?>/css/style.css">

</head>

<body>

<!-- Header -->
<header id="top" class="header">
    <nav class="navbar navbar-default hm_navbar-default-modified">
        <div class="container-fluid hm_container-fluid-modified">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="nav-header_modified navbar-header">
                <button type="button" class="navbar-toggle-modified navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand nav-brand-modified" href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/img/Logo_nav_modified.png" alt="Logo Lycée Claude Garamont"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse hm_navbar-collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav hm_nav-modified navbar-nav">
                    <li><a href="<?php echo home_url();?>">Accueil <span class="sr-only">(current)</span></a></li>
                    <li><a href="<?php echo get_page_link(34); ?>">Be European</a></li>
                    <li><a href="<?php echo get_page_link(11); ?>">Lycée</a></li>
                    <li><a href="<?php echo get_page_link(48); ?>">Formations</a></li>
                    <li><a href="#">Entreprise</a></li>
                    <li><a href="#">Partenaires</a></li>
                    <li><a href="<?php echo get_page_link(126); ?>">Contact</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>