<?php get_header(); ?>


<div class="container">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


                <?php $gallery = get_field('gallery'); ?>
                <?php $documents = get_field('documents'); ?>

                <h1>
                    <a class="back_icon" href="<?php echo my_dossier_path(); ?>"> retour </a>
                    <?php the_title(); ?>
                </h1>

                <?php the_content();  ?>

                <?php if (have_rows('documents')) : ?>
                    <ul class="files_container">
                        <?php while (have_rows('documents')) : the_row(); ?>
                            <?php $file = get_sub_field('file'); ?>
                            <?php $title = get_sub_field('title'); ?>
                            <li class="file_container">

                                <p><?php echo $title; ?>
                                    <a target="_blank" href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?></a>
                                </p>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>




                <?php if ($gallery) : ?>
                    <div class="gallery_images ">
                        <?php foreach ($gallery as $slide) : ?>
                            <div class="gallery_image">
                                <?php $mimetype = $slide['mime_type']; ?>
                                <?php if ($mimetype == 'video/mp4') : ?>
                                    <video controls="true">
                                        <source src="<?php echo $slide['url']; ?>" type=" <?php echo $mimetype; ?>">
                                    </video>
                                <?php else : ?>
                                    <a href="<?php echo $slide['sizes']['large']; ?>" class="gallery">
                                        <img src="<?php echo $slide['sizes']['small']; ?>" />
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endforeach;
                        // end of foreach gallery 
                        ?>
                    </div>
                    <!--END OF gallery_images SLIDER -->
                <?php endif; // end if $gallery  
                ?>


                <?php if (have_rows('sous-dossiers')) : ?>
                    <div class="sub_dossiers">

                        <?php while (have_rows('sous-dossiers')) : the_row(); ?>
                            <?php $title = get_sub_field('title'); ?>
                            <?php $description = get_sub_field('description'); ?>
                            <?php $gallery = get_sub_field('gallery'); ?>
                            <div class="sub_dossier">

                                <h3><?php echo $title; ?></h3>

                                <?php if ($gallery) : ?>
                                    <div class="gallery_images">
                                        <?php foreach ($gallery as $slide) : ?>
                                            <div class="gallery_image">
                                                <?php $mimetype = $slide['mime_type']; ?>
                                                <?php if ($mimetype == 'video/mp4') : ?>
                                                    <video controls="true">
                                                        <source src="<?php echo $slide['url']; ?>" type=" <?php echo $mimetype; ?>">
                                                    </video>
                                                <?php else : ?>
                                                    <a href="<?php echo $slide['sizes']['large']; ?>" class="gallery">
                                                        <img src="<?php echo $slide['sizes']['small']; ?>" />
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        <?php endforeach;
                                        // end of foreach gallery 
                                        ?>
                                    </div><!-- END OF gallery_images -->
                                <?php endif; // end if $gallery  
                                ?>

                                <div class="column_container">
                                    <div class="column">

                                        <p><?php echo $description; ?></p>

                                        <ul class="files_container">
                                            <?php while (have_rows('documents')) : the_row(); ?>
                                                <?php $file = get_sub_field('file'); ?>
                                                <?php $title = get_sub_field('title'); ?>
                                                <li class="file_container">

                                                    <p><?php echo $title; ?>
                                                        <a target="_blank" href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?></a>
                                                    </p>
                                                </li>
                                            <?php endwhile; ?>
                                        </ul>

                                    </div>
                                    <!--END column -->
                                    <div class="column ">
                                        &nbsp;
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif;  // end if $child_dossiers 
                ?>





            </article>


        <?php endwhile; ?>

    <?php else : ?>

        <article>

            <h1><?php _e('Sorry, nothing to display.', 'webfactor'); ?></h1>

        </article>

    <?php endif; ?>

</div> <!-- /.container -->



<?php get_footer(); ?>