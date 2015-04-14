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
  
  

  
  
  
  
  <!--js nav -->      
      <div class="fixed_nav header-nav" id="jsNav">
        <ul>
          <?php

           query_posts(array(
            'post_type' => 'page'
           ));

           if ( have_posts() ) :
            while ( have_posts()) : the_post();
              $template_part = get_post_meta($post->ID, '_wp_page_template')[0];
      
              if ($template_part == 'page-lists.php') { ?>
              <li><a class="scroll_It" href="#<?php echo get_field('list_nav_anchor'); ?>"><?php echo get_field('list_nav'); ?></a></li>
              
              <?php
              }
              elseif ($template_part == 'page-map.php') { ?>
              <li><a class="scroll_It" href="#<?php echo get_field('map_nav_anchor'); ?>"><?php echo get_field('map_nav'); ?></a></li>
              <?php
              }
              elseif ($template_part == 'page-infographic.php') { ?>
              <li><a class="scroll_It" href="#<?php echo get_field('info_nav_anchor'); ?>"><?php echo get_field('info_nav'); ?></a></li>
              <?php
              }
            endwhile;
           endif;

           ?>
        </ul>
      </div>
  <!--end js nav -->
  
  <div class="height-50 white bottom-shadow">
    <div class="row"> <!-- This may be unneccesary-->
      <div class="centered top-margin-push width-40">
        <img src="<?php bloginfo('template_directory'); ?>/images/402blacksm.png">
      </div><!-- end image -->
      
      <!--visible nav -->
      <nav class="header-nav centered">
        <ul>
          <?php
           if ( have_posts() ) :
            while ( have_posts()) : the_post();
              $template_part = get_post_meta($post->ID, '_wp_page_template')[0];
      
              if ($template_part == 'page-lists.php') { ?>
              <li><a class="scroll_It" href="#<?php echo get_field('list_nav_anchor'); ?>"><?php echo get_field('list_nav'); ?></a></li>
              <?php
              }
              elseif ($template_part == 'page-map.php') { ?>
              <li><a class="scroll_It" href="#<?php echo get_field('map_nav_anchor'); ?>"><?php echo get_field('map_nav'); ?></a></li>
              <?php
              }
              elseif ($template_part == 'page-infographic.php') { ?>
              <li><a class="scroll_It" href="#<?php echo get_field('info_nav_anchor'); ?>"><?php echo get_field('info_nav'); ?></a></li>
              <?php
              }
            endwhile;
           endif;

           ?>
        </ul>
      </nav>
      <!--js nav -->      

    
    </div><!--end first row-->
  </div><!--end height-50 wrapper-->