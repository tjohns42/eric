<!DOCTYPE html>
<!-- Begin header.php --> 
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Description of Website Goes here">
<meta name="keywords" content="keyword, keyword, keyword">
<meta name="author" content="Tyler Johnson">
<title>
    <?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
</title>
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cinzel:700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="wp-content/themes/theme/css/jquery.lightbox-0.5.css" type="text/css" media="all" />
<link rel="stylesheet" href="wp-content/themes/theme/css/flexslider.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="all" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="container">
  <header>
    <div class="logo">
      <a href="<?php echo get_option('home'); ?>">
        <img src="wp-content/themes/theme/images/logo.png" height="224" width="250" alt="">
      </a>
    </div>
    <h1>
      <a href="<?php echo get_option('home'); ?>"><span class="one">Mississippi</span><span class="two">Youth Hip Hop Summit</span></a>
    </h1>
    <?php wp_nav_menu( array( 'menu_class' => 'nav', 'container' => 'nav' ) ); ?>
  </header>
<!-- End header.php -->