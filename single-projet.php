<?php get_header(); ?>


<div class="container">

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <?php $gallery = get_field('gallery'); ?>

            <h1><?php the_title(); ?></h1>

            <?php if ($gallery): ?>
            <div id="projects_slider">
                <?php foreach ($gallery as $slide) : ?>
                <div class="project">
                    <h2>Title here</h2>
                    <div class="project_image" style="background-image:url('<?php echo $slide['sizes']['medium'] ; ?>'); "></div>
                </div>
            <?php endforeach; // end of foreach gallery ?>
            </div><!-- END OF PROJECTS SLIDER -->
        <?php endif; // end if $gallery ?>


            <?php the_content(); // Dynamic Content ?>

            <p><?php edit_post_link(); ?></p>



        </article>


    <?php endwhile; ?>

<?php else: ?>

    <article>

        <h1><?php _e( 'Sorry, nothing to display.', 'webfactor' ); ?></h1>

    </article>

<?php endif; ?>

</div>	<!-- /.container -->



<?php get_footer(); ?>
