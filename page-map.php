<?php
/* 
Template Name: Map
*/
get_header();
?>

          
		<?php
  		// Start the loop.
  		while ( have_posts() ) : the_post();
    ?>

       <div class="white padding-auto" id="map">
         <iframe class="map-iframe" src="<?php echo get_field('map_url'); ?>" frameborder="0" allowfullscreen></iframe>
       </div><!--end map-->

    <?php
    		// End the loop.
    		endwhile;
    ?>
    

<?php
get_footer(); 
?>