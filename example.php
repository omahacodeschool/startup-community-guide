<!-- example php basic loop -->
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
?>
 
<?php // Begin repeater field: ?>
<?php if( have_rows('lists') ): ?>
 
<ul>
 
  <?php while ( have_rows('lists') ) : the_row(); ?>
    <li>
      <h6><?php the_sub_field('list_title'); ?></h6>
    
      <?php if( have_rows('links') ): ?>
        <ul>
          <?php while ( have_rows('links') ) : the_row(); ?>
            <li>
              <a href="<?php the_sub_field('link_url'); ?>">
                <?php the_sub_field('link_text'); ?>
              </a>
            </li>
          <?php endwhile; ?>
        </ul>
      <?php endif; ?>
    </li>
  <?php endwhile; ?>
 
</ul>
 
<?php endif; ?>
<?php // End repeater field: ?>
 
<?php
		// End the loop.
		endwhile;
?>
<!-- end example for each loop -->