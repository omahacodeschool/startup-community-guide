<div class="tile padding-auto bottom-shadow" id="welcome">
  <div class="row">
    <div class="top-margin-push column small-12 medium-6 large-6">
    
      <div class="large-text">
        <h1 id="title" class="bigfont rotate line-height-scrunch"><?php the_title(); ?></h1>
      </div> <!-- end large text -->

    </div><!-- end first column -->
  
    <div class="top-margin-push column small-12 medium-6 large-6">
      <div class="guide-content"><!--This is just showing that the 100% is working-->
        <h2>Content Title</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
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
              <ul class="linklists fa-ul">    
                <?php while ( have_rows('link_list') ) : the_row(); ?>
                  <li>
                    <a href="<?php the_sub_field('link_url'); ?>" target="_blank"><i class="fa-li fa fa-star fa-1.5x listIcons"></i><?php the_sub_field('link_text'); ?>
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