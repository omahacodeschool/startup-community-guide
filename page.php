<?php get_header(); ?>

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
?>

<h2><?php the_title(); ?></h2>

<?php
		// End the loop.
		endwhile;
		?>

<?php get_footer(); ?>
