<?php /* Template Name: My Dossiers */ get_header(); ?>






<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- article -->
        <article id="post-<?php the_ID(); ?>">



            <div class="container">


                <h1><?php the_title(); ?></h1>

                <?php if (is_user_logged_in()) : ?>
                    <?php $current_user = get_current_user_id(); ?>
                    <?php $dossier_ids = dossiers_associated_with_user($current_user); ?>
                    <?php if ($dossier_ids) : ?>
                        <?php $dossiers = get_posts(
                            array(
                                'post_type' => 'dossier',
                                'post__in' => ($dossier_ids),
                                'posts_per_page' => -1
                            )
                        ); ?>
                        <ul class="my_dossiers">
                            <?php foreach ($dossiers as $dossier) : ?>
                                <li>
                                    <a href="<?php echo get_post_permalink($dossier); ?>">
                                        <?php $image = thumbnail_of_post_url($dossier->ID); ?>
                                        <div class="dossier_image" style="background-image:url(<?php echo $image; ?>);"></div>
                                        <?php echo $dossier->post_title; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                <?php else : ?>
                    <p> <a href="<?php echo wp_login_url(); ?>"> Please log in</a>
                    </p>
                <?php endif; ?>
            </div>

        </article>
        <!-- /article -->

    <?php endwhile; ?>

<?php else : ?>

    <!-- article -->
    <article class="container">

        <h2><?php _e('Sorry, nothing to display.', 'webfactor'); ?></h2>

    </article>
    <!-- /article -->

<?php endif; ?>






<?php get_footer(); ?>