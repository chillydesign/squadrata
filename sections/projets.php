<?php
$home_url =  home_url();
$tax_name = 'projet_categorie';
$project_cats = get_terms( array('taxonomy' => $tax_name,  'hide_empty' => false));
?>

<?php if($project_cats):  ?>
    <div class="container">
        <div id="projects_slider">
            <?php foreach ($project_cats as $category) : ?>
                <?php $cat_url = $home_url .'/' . $tax_name . '/' . $category->slug . '/' ; ?>
                <?php $image = get_field('image', $tax_name . '_' . $category->term_id);  ?>
                <?php $recent_projets = get_posts( array(
                    'posts_per_page' => 3,
                    'post_type' => 'projet',
                    'tax_query' => array(
                        array(
                            'taxonomy' => $tax_name,
                            'field' => 'term_id',
                            'terms' => $category->term_id
                        )
                    )
                )); ?>
                <div class="project">
                    <h2><a href="<?php echo $cat_url;?>"><?php echo $category->name; ?></a></h2>
                    <div class="project_info">
                        <?php if ($recent_projets): ?>
                            <ul>
                                <?php foreach ($recent_projets as $projet) : ?>
                                    <?php $proj_url = get_permalink($projet->ID); ?>
                                    <li>
                                        <a href="<?php echo $proj_url; ?>"><?php echo $projet->post_title; ?></a>
                                    </li>
                                <?php endforeach; // end foreach project  ?>
                            </ul>
                        <?php endif; // end if $recent_projets ?>
                        <a class="all_projects" href="<?php echo $cat_url;?>">tous les projets</a>
                    </div>
                    <div class="project_image" style="background-image:url('<?php echo ($image) ? $image['sizes']['medium'] : ''; ?>'); "></div>
                </div>

            <?php endforeach; // end foreach category ?>
        </div><!-- END OF PROJECTS SLIDER -->
    </div>
<?php endif; //  end if have  project categories ?>