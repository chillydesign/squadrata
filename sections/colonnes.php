

<div class="container">
	<div class="columns">
	<?php while ( have_rows('columns') ) : the_row(); ?>
		<div class="column">
			<?php echo get_sub_field('content'); ?>
		</div>
	<?php endwhile; ?>
</div> <!-- END OF columns -->
</div><!--  END OF CONTAINER -->
