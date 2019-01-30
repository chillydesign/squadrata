<?php $title = get_sub_field('title'); ?>

<div class="container">
    <?php if ($title): ?> <h2><span><?php echo $title; ?></span></h2> <?php endif; ?>
	<div class="section_row">
	<?php while ( have_rows('columns') ) : the_row(); ?>
		<div class="section_col">
			<?php echo get_sub_field('content'); ?>
		</div>
	<?php endwhile; ?>
	</div> <!-- END OF section_row -->
</div><!--  END OF CONTAINER -->
