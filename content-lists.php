<div class="tile padding-auto bottom-shadow" id="welcome">
  <div class="row">
    <div class="top-margin-push column small-12 medium-6 large-6">
    
      <div class="large-text">
        <h1 id="title" class="bigfont rotate line-height-scrunch"><?php the_title(); ?></h1>
      </div> <!-- end large text -->

    </div><!-- end first column -->
    
    <div class="top-margin-push column small-12 medium-6 large-6">
      <div class="guide-content">
        <h2><?php echo get_field('list_description_title'); ?></h2>
        <p><?php echo get_field('list_description_content'); ?></p>
      </div><!-- end content -->
    </div><!-- end second column -->

    
    
   
    

          
     
    
    <?php // Begin repeater field: ?>
    <?php if( have_rows('links') ): ?>

      <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3 linklists_container">
        <?php while ( have_rows('links') ) : the_row(); ?> 
        <li>
          <div class="guide-content"><!--This is just showing that the 100% is working-->
            <h2><?php the_sub_field('link_list_title'); ?></h2>
            <?php if( have_rows('link_list') ): ?>
              <ul class="linklists">    
                <?php while ( have_rows('link_list') ) : the_row(); ?>
                  <li>
                    <a href="<?php the_sub_field('link_url'); ?>" target="_blank">
                      <?php the_sub_field('link_text'); ?>
                    </a>
                  </li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>
          </div><!--end content-->
        </li>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php // End repeater field: ?>    
  </div> <!-- end third row -->
</div><!-- end Welcome Guide -->