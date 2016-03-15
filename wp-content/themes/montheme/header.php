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
    <link href="<?php bloginfo( 'template_directory' ); ?>/css/mystyle.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php bloginfo( 'template_directory' ); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

</head>

<body>

<!-- Header -->
<header id="top" class="header">
    <nav id="navigation">
        <ul>
            <li>
                <a href="">Accueil</a>
            </li>
            <li>
                <a href="">Qui sommes-nous ?</a>
            </li>
            <li>
                <a href="">Portfolio</a>
            </li>
            <li>
                <a href="">Contact</a>
            </li>
        </ul>
    </nav>
</header>