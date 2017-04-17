<?php
/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        StanleyWP
 * @author         Brad Williams & Carlos Alvarez
 * @copyright      2011 - 2014 Gents Themes
 * @license        license.txt
 * @version        Release: 3.0.3
 * @link           http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
 * @since          available since Release 1.0
 */
?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>

<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<meta name="google-site-verification" content="Uzx0CaWVVspafuUfCbdH3e7Hp6tCF1NsUz_Er421Odo" />

<title><?php wp_title('&#124;', true, 'right'); ?><?php bloginfo('name'); ?> | <?php bloginfo( 'description' ) ?></title>
<?php if( bi_get_data('custom_favicon') !== '' ) : ?>
        <link rel="icon" type="image/png" href="<?php echo bi_get_data('custom_favicon'); ?>" />
    <?php endif; ?>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php get_template_directory_uri();?>/js/html5shiv.js"></script>
      <script src="<?php get_template_directory_uri();?>/js/respond.min.js"></script>
    <![endif]-->

<link href="<?php echo get_template_directory_uri(); ?>/css/hamburgers.css" rel="stylesheet">

<?php wp_head(); ?>


<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WCJ5XBZ');</script>

</head>

<body <?php body_class(); ?>>

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WCJ5XBZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<?php gents_container(); // before container hook ?>


    <?php gents_header(); // before header hook ?>
    <header>

    <?php gents_in_header(); // header hook ?>

<nav role="navigation">
    <div class="navbar navbar-inverse navbar-static-top">
        <div class="container">

           <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
            <div class="navbar-header">

            <button class="hamburger hamburger--elastic navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-responsive-collapse">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>

            <script>
              var $hamburger = jQuery(".hamburger");
              $hamburger.on("click", function(e) {
                $hamburger.toggleClass("is-active");
                // Do something else, like open/close menu
              });
            </script>

           <?php if( bi_get_data('custom_logo') !== '' ) { ?>
            <div id="logo"><a href="<?php echo home_url(); ?>/" title="<?php bloginfo( 'name' ); ?>" rel="home">
                <img src="<?php echo bi_get_data('custom_logo'); ?>" alt="<?php bloginfo( 'name' ) ?>" />
            </a></div>
            <?php } else { ?>
            <?php if (is_front_page()) { ?>
            <a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage"><b><?php bloginfo( 'name' ) ?></b></a>
            <?php } else { ?>
            <a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage"><b><?php bloginfo( 'name' ) ?></b></a>
            <?php } } ?>
        </div>
          <div class="navbar-collapse collapse navbar-responsive-collapse">
			   <?php

                $args = array(
                    'theme_location' => 'top-bar',
                    'depth'      => 2,
                    'container'  => false,
                    'menu_class'     => 'nav navbar-nav navbar-right',
                    'walker'     => new Bootstrap_Walker_Nav_Menu()
                );

                wp_nav_menu($args);

            ?>

          </div>
        </div>
     </div>
</nav>


    </header><!-- end of header -->
    <?php gents_header_end(); // after header hook ?>

	<?php gents_wrapper(); // before wrapper ?>

        <div id="wrapper" class="clearfix">

    <?php gents_in_wrapper(); // wrapper hook ?>
