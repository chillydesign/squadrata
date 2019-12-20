



<div class="container">
    <div id="projects_slider" data-slidestoshow="1">
        <?php while ( have_rows('projects') ) : the_row(); ?>

            <?php $projet =  get_sub_field('project'); ?>
            <?php $proj_url = get_permalink($projet->ID); ?>
            <?php $title =  get_sub_field('title'); ?>
            <?php if (!$title || $title == '') $title = $projet->post_title; ?>
            <?php $image = get_sub_field( 'image' ); ?>
            <?php // $description =  get_sub_field('description'); ?>
            <?php $subtitle = get_post_meta($projet->ID, 'subtitle', true); ?>

            <div class="project project_full project_show_info" >

                <?php if ($title): ?>
                    <h2><a href="<?php echo $proj_url; ?>"><?php echo $title; ?></a></h2>
                <?php endif; ?>
                <?php if ($subtitle): ?>
                    <a  href="<?php echo $proj_url; ?>" class="project_info">
                        <p><?php echo $subtitle; ?></p>
                    </a>
                <?php endif; ?>
                <?php if ($image): ?>
                    <img src="<?php echo $image['sizes']['large'] ; ?>" />
                <?php endif; ?>
            </div>

        <?php endwhile; ?>
    </div><!-- END OF PROJECTS SLIDER -->
</div>
