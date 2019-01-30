<?php $services = get_sub_field('service'); ?>
<?php $title = get_sub_field('title'); ?>


<div class="container">
        <?php if ($title): ?> <h2><span><?php echo $title; ?></span></h2> <?php endif; ?>
    <div class="services_container">
        <?php foreach ($services as $service)  :  ?>
            <?php $image = $service['icon']['sizes']['medium']; ?>
            <?php $page = $service['page'];  ?>
            <div class="single_service">
                <!-- <div class="service_icon" style="background-image:url(<?php echo $image; ?>);"></div> -->
                <div class="service_icon"><img src="<?php echo $image; ?>"></div>
                <h3><?php echo $service['content']; ?></h3>
                <?php if ($page): ?>
                </a>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>
