<?php get_header(); ?>


<!-- section -->
<section class="container">

    <h1><?php _e( 'Projects', 'webfactor' ); ?></h1>

    <?php if (have_posts()): ?>
        <div id="projects_slider">
            <?php  while (have_posts()) : the_post(); ?>
            <?php $proj_id =  get_the_ID(); ?>
                <?php $image = thumbnail_of_post_url( $proj_id, 'medium' ); ?>
                <?php $subtitle = get_post_meta( $proj_id, 'subtitle', true ); ?>
                <div class="project">
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php the_title(); ?>
                    <?php if ($subtitle): ?>
                            <span><?php echo $subtitle; ?></span>
                    <?php endif; ?>
                    </a></h2>
                    <div class="project_info">
                        <a class="all_projects" href="<?php the_permalink();?>"><?php _e('view', 'webfactor'); ?></a>
                    </div>
                    <div class="project_image" style="background-image:url('<?php echo $image; ?>'); "></div>
                </div>

            <?php endwhile; ?>
        </div><!-- END OF PROJECTS SLIDER -->
    <?php else: ?>
    <?php endif; ?>

    <?php get_template_part('pagination'); ?>

</section>
<!-- /section -->


<?php get_footer(); ?>
