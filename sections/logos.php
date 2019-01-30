<?php $logos = get_sub_field('logos'); ?>


<div class="container">
    <div class="carousel">
        <?php foreach ($logos as $logo)  :  ?>
            <?php if ($logo['link']) : ?>
                <a href="<?php echo $logo['link']; ?>">
            <?php endif; ?>
            <img src="<?php echo $logo['image']['sizes']['medium']; ?>" alt="">
            <?php if ($logo['link']) : ?>
            </a>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
