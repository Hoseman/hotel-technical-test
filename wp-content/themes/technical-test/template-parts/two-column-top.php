<!-- display the two column content using display flex -->
<!-- plus grab the acf variables and display them -->
<section id="about" class="two-column-grid">
    <div class="container two-column-grid__container">
        <?php $about_image = get_field('about_image'); ?>
        <div class="two-column-grid__col">
            <h5 class="two-column-grid__subheading"><?php the_field('about_subheading'); ?></h5>
            <h2 class="two-column-grid__heading"><span class="two-column-grid__heading-break"><?php the_field('about_heading'); ?></h2>

             <!-- get the ACF image object and store in a variable -->
            <img src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>" class="two-column-grid__img-mobile">
            
            <?php the_field('about_content'); ?>


            <a class="button two-column-grid__btn" href="<?php the_field('about_button_link'); ?>"><?php the_field('about_button'); ?> <img class="two-column-grid__icon" alt="arrow" src="/wp-content/uploads/2023/12/arrow-right.svg"></a>
        </div>
        <div class="two-column-grid__col">
            <!-- display the image url and the image alt within an <img> tag -->
            <img src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>" class="two-column-grid__img">
        </div>
    </div>
</section>