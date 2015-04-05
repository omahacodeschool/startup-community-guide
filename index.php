<?php
get_header();
?>

  <div class="go-top" id="go-top"><a href="#"><p id="little-nav">Top</p><br><i class="fa fa-arrow-circle-up fa-2x go_up"></i> </a></div><!--ux nav tool -->
  
  <div class="height-50">
    <div id="parallax1"> <!-- This may be unnecessary-->

    </div><!--end first row-->
  </div><!--end height-50 wrapper-->
  
  
  <?php

  $pages = new WP_Query(array(
   'post_type' => 'page'
  ));

  if ( $pages -> have_posts() ) :
   while ($pages -> have_posts()) : $pages -> the_post();
     get_template_part('content', 'lists');
   endwhile;
  endif;

  ?>
  
  <!--START ABOUT OMAHA-->

  <div class="chevron-section" id="about"> 
    <div class="chevron">
      <div class="row">
        <div class="column small-12 medium-6 large-6 top-margin-push">
          <div class="large-text">
            <h1 class="bigfont rotate line-height-scrunch">About Omaha</h1>
          </div> <!-- end large text -->
        
        </div><!--end column one-->
      
        <div class="column small-12 medium-6 large-6 top-margin-push">
          <div class="circle centered">
            <a href="#"> <p class="circle-text"><i class="fa fa-line-chart grey-icon"></i></p></a>
          </div><!--end circle-image-->
        </div><!--end column one-->
   
      </div>
    </div>
  </div><!--end fourth row-->
  
  <div class="gray">
    <!-- <img src="images/WhiteBottomBanner.svg" class="width-100" border="1px"> -->
  </div><!--end triangle-->
  
  <!--START MAP-->
  
  
  <div class="white padding-auto bottom-shadow" id="map">
    <iframe class="map-iframe" src="https://startupgenome.co/lens/location/omaha-ne-usa?embed=1&hide_filters=true&hide_right_side=true&global_search=false" frameborder="0" allowfullscreen>
    </iframe>
  </div><!--end map-->

<?php
get_footer(); 
?>