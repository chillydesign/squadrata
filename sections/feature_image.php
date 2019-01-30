<?php $image = get_sub_field('image'); ?>
<?php $content = get_sub_field('content'); ?>
<?php $title = get_sub_field('title'); ?>


<div class="container">

    <div class="column_container column_container_reversed quote_container">
        <div class="column">
            <img src="<?php echo $image['sizes']['large']; ?>" alt="Sculpture" />
        </div>
        <div class="column">
            <blockquote><?php echo $title; ?></blockquote>
            <div class="quote_container_text">
            <?php echo $content; ?>
            </div>
        </div>
    </div>


</div>
