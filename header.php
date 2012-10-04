<?php
/**
 * The Header for the theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />

    <title>
        <?php
        /*
         * Print the <title> tag based on what is being viewed.
         */
        global $page, $paged;

        wp_title( '|', true, 'right' );

        // Add the blog name.
        bloginfo( 'name' );

        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";

        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

        ?>
    </title>

    <meta name="description" content="Inclusive Vegetarian Cooking by Taylor Cook and James Seppi">
    <meta name="author" content="Coseppi Kitchen">


    <link rel="profile" href="http://gmpg.org/xfn/11" />

    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/carrot_green.png">

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script>
        $(function() {
            $('#featuredCarousel').carousel();
        });
    </script>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header role="banner">
        <hgroup class="title-unit">
            <h1 class="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    Coseppi <img src="<?php bloginfo('template_url'); ?>/img/carrot_green.png" alt="" width='42' height='42'/> Kitchen
                </a>
            </h1>
            <h2 class="site-subtitle"><?php bloginfo( 'description' ); ?></h2>
        </hgroup>
    

        <nav id="main-nav" role="navigation">
            <?php 
                $primary_nav_args = array(

                    'theme_location'  => 'primary',
                    'container'       => '', 
                    'container_class' => 'main-nav',
                    'menu_id'         => '', 
                    'menu_class'      => 'nav nav-pills', 
                    'echo'            => true,
                    'fallback_cb'     => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0
                );
            ?>
            <?php wp_nav_menu( $primary_nav_args ); ?>
        </nav>


        <!-- TODO: Make primary nav have this markup
        <div id="main-nav">
            <ul class="nav nav-pills">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">News</a></li>
                <li>
                    <a href="#">Recipes</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">link 1</a></li>
                        <li><a href="#">link 2</a></li>
                        <li><a href="#">link 3</a></li>
                    </ul>
                </li>

                <li><a href="#">Tips &amp; Techniques</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </div>-->
    </header>
    <div class="container">
        <div class="wrapper curved">
            <div class="row">


