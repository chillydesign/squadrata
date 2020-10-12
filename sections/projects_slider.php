<div class="container">
    <div class="projects_slider" data-slidestoshow="1">
        <?php while (have_rows('projects')) : the_row(); ?>

            <?php $projet =  get_sub_field('project'); ?>
            <?php $proj_url = get_permalink($projet->ID); ?>
            <?php // $title =  get_sub_field('title'); 
            ?>
            <?php $title = $projet->post_title; ?>
            <?php $image = get_sub_field('image'); ?>

            <?php $subtitle = get_post_meta($projet->ID, 'subtitle', true); ?>

            <div class="project project_full project_show_info">


                <h2><a href="<?php echo $proj_url; ?>">
                        <?php echo $title; ?>
                        <?php if ($subtitle) : ?>
                            <span><?php echo $subtitle; ?></span>
                        <?php endif; ?>
                    </a></h2>

                <?php if ($image) : ?>
                    <img src="<?php echo $image['sizes']['large']; ?>" />
                <?php endif; ?>
            </div>

        <?php endwhile; ?>
    </div><!-- END OF PROJECTS SLIDER -->
</div>