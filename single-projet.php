<?php get_header(); ?>


<div class="container">

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <?php $gallery = get_field('gallery'); ?>
            <?php $project_link = get_field('project_link'); ?>
            <?php $project_link_text = get_field('project_link_text'); ?>

            <h1><?php the_title(); ?></h1>

            <?php if ($gallery): ?>
                <div id="projects_slider" data-slidestoshow="1">
                    <?php foreach ($gallery as $slide) : ?>
                        <div class="project project_full" >
                            <div class="project_image" style="background-image:url('<?php echo $slide['sizes']['large'] ; ?>'); "></div>
                        </div>
                    <?php endforeach; // end of foreach gallery ?>
                </div><!-- END OF PROJECTS SLIDER -->
            <?php endif; // end if $gallery ?>


            <div class="column_container">
                <div class="column">
            <?php the_content();  ?>

                </div><!--END column -->
                <div class="column column_align_right">

                    <?php if ($project_link): ?>
                        <?php $pl_url = get_permalink($project_link->ID); ?>
                        <?php $pl_text = ($project_link_text != '') ? $project_link_text : 'DEFAULT TEXT'; ?>
                        <p><a href="<?php echo $pl_url; ?>" class="button gold_button"><?php echo $pl_text; ?></a></p>

                    <?php endif; ?>

                    &nbsp;

                </div><!--END column -->
            </div> <!--END column_container -->






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
