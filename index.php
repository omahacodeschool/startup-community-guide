<?php
get_header("customheader");
?>

  <div class="go-top" id="go-top"><a href="#"><p id="little-nav">Top</p><br><i class="fa fa-arrow-circle-up fa-2x go_up"></i> </a></div><!--ux nav tool -->
  
  <div class="height-50">

    <div id="parallax1" style="background-image: url(<?php echo get_background_image(); ?>)"> <!-- This may be unnecessary-->

    </div><!--end first row-->
  </div><!--end height-50 wrapper-->
  
  <?php

   query_posts(array(
    'post_type' => 'page',
    'order_by'  => 'menu_order',
    'order'     => 'ASC'
   ));

   if ( have_posts() ) :
    while ( have_posts()) : the_post();
      $template_part = get_post_meta($post->ID, '_wp_page_template')[0];
      
      if ($template_part == 'page-lists.php') {
        get_template_part('content', 'lists');
      }
      elseif ($template_part == 'page-map.php') {
        get_template_part('content', 'map');
      }
      elseif ($template_part == 'page-infographic.php') {
        get_template_part('content', 'infographic');
      }
    endwhile;
   endif;

   ?>
  
  <!--START ABOUT OMAHA-->


  
  <!--START MAP-->
  

<?php
get_footer(); 
?>