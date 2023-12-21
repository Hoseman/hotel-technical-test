<section class="banner">

    <div class="banner__wrapper">

        <!-- get the ACF logo and store in a variable -->
        <?php $banner_logo = get_field('banner_logo'); ?>

        <!-- get the ACF background image object and store in a variable -->
        <?php $banner_background = get_field('banner_background_image'); ?>

        <!-- display the ACF value within appropriate html tags -->
        <img class="banner__logo" src="<?php echo $banner_logo['url']; ?>" alt="<?php echo $banner_logo['alt']; ?>">
        <h1 class="banner__heading"><span class="banner__heading-break"><?php the_field('banner_heading') ?></h1>
        <p class="banner__content"><?php the_field('banner_text') ?></p>
        <a class="button banner__btn" href="<?php the_field('banner_button_link') ?>"><?php the_field('banner_button') ?> <img class="banner__icon" alt="arrow" src="/wp-content/uploads/2023/12/arrow-down.svg"></a>

    </div>

    <!-- display the ACF background image within appropriate <img> tags -->
    <!-- I have decided not to use a css background image. Referencing an actual <img> as a background image is better for SEO -->
    <?php 
    // check if an image been uploaded
    if(!empty(get_field('banner_background_image'))){ ?>
        <img class="banner__img" src="<?php echo $banner_background['url']; ?>" alt="<?php echo $banner_background['alt']; ?>">
    <?php } else { ?>
        <!-- if no image is uploaded display a fall back image -->
        <img class="banner__img" src="https://placehold.co/1400x600" alt="image missing">
   <?php } ?>
    
</section>