<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<?php wp_head(); ?>
    <!--- basic page needs
    ================================================== -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>Vela IT Solutions</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#111111">
    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">
    <link rel="icon" href="icon.png" type="image/x-icon">
</head>

<body id="top" <?php body_class(); ?> >
    <!-- header
    ================================================== -->
    <header class="s-header">
        <div class="header-logo">
            <a class="site-logo" href="<?php echo site_url('/index.php') ?>">
                <img src="<?php echo get_theme_file_uri('images/logo.png') ?>" alt="Homepage">
            </a>
        </div>
        <nav class="header-nav">
            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>
            <div class="header-nav__content">
                <h3>Navigation</h3> 
                
                <?php
                        wp_nav_menu( array(
                            'theme_location' => 'top',
                            'menu_id'        => 'top-menu',
                            'container'      => 'ul',
                            'menu_class'     => 'header-nav__list'
                        ));
                    ?>  
                <!-- <ul class="header-nav__list">
                    <li class="current"><a class="smoothscroll"  href="#home" title="home">Home</a></li>
                    <li><a class="smoothscroll"  href="#about" title="about">About</a></li>
                    <li><a class="smoothscroll"  href="#services" title="services">Services</a></li>
                    <li><a class="smoothscroll"  href="#works" title="works">Works</a></li>
                    <li><a class="smoothscroll"  href="#clients" title="clients">Clients</a></li>
                    <li><a class="smoothscroll"  href="#contact" title="contact">Contact</a></li> -->
                </ul>
                <p>We are always ready for our next big challange... Or our next adventure!</p>
                <ul class="header-nav__social">
                    <li>
                        <a href="https://www.facebook.com/pg/velait/"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/vela_it"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/vela_it/"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div> <!-- end header-nav__content -->
        </nav>  <!-- end header-nav -->
        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>
    </header> <!-- end s-header -->