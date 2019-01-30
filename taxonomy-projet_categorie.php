<?php get_header(); ?>


<!-- section -->
<section class="container">

    <h1><?php _e( 'Projets', 'webfactor' ); ?></h1>

    <?php if (have_posts()): ?>
        <div id="projects_slider">
            <?php  while (have_posts()) : the_post(); ?>
                <?php $image = thumbnail_of_post_url( get_the_ID(), 'medium' ); ?>
                <div class="project">
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    <div class="project_info">
                        <a class="all_projects" href="<?php the_permalink();?>">view</a>
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
