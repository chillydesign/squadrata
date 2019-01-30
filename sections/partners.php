<?php $partners = get_sub_field('partners'); ?>
<?php $title = get_sub_field('title'); ?>


<div class="container">
        <?php if ($title): ?> <h2><span><?php echo $title; ?></span></h2> <?php endif; ?>
    <div class="partners_container">
        <?php foreach ($partners as $partner)  :  ?>
            <?php $image = $partner['image']['sizes']['medium']; ?>
            <?php $link = $partner['link']; ?>
            <div class="single_partner">
                <?php if ($link): ?>
                    <a href="<?php echo $link; ?>">
                <?php endif; ?>
                <div class="partner_icon" style="background-image:url(<?php echo $image; ?>);"></div>
                <h3><?php echo $partner['name']; ?></h3>
                <?php if ($link): ?>
                    </a>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>
