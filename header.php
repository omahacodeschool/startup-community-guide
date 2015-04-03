<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php bloginfo( 'name' ); ?> | Welcome</title>
  
  
<!--Foundations Style Sheet -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/foundation-5.5.1/css/foundation.css" media="screen" />
    
<!-- Style Sheet -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />

       
  <script src="js/vendor/modernizr.js"></script>

    
  <!--Satisfy -->
  <link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
  
  <!--Oswald -->
  <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>

  <!--Noto -->
  <link href='http://fonts.googleapis.com/css?family=Noto+Serif' rel='stylesheet' type='text/css'>
    
  <!--FONT AWESOME-->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/font-awesome/css/font-awesome.min.css">
    
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
      
      
</head>

<body>
  <div class="height-50 white bottom-shadow">
    <div class="row"> <!-- This may be unneccesary-->
      <div class="centered top-margin-push width-40">
        <img src="<?php bloginfo('template_directory'); ?>/images/black402logo600px.png">
      </div><!-- end image -->
      
      <!--visible nav -->
      <nav class="header-nav centered">
        <ul>
          <li><a href="#welcome">Welcome Guide</a></li><li><a href="#about">About Omaha</a></li><li><a href="#">Startup</a></li><li><a href="#map">Map</a></li>
        </ul>
      </nav>
      <!--js nav -->      
      <nav class="fixed">
        <ul>
          <li><a href="#">Welcome Guide</a></li><li><a href="#">About Omaha</a></li><li><a href="#">Startup</a></li><li><a href="#">Map</a></li>
        </ul>
      </nav>
    
    </div><!--end first row-->
  </div><!--end height-50 wrapper-->