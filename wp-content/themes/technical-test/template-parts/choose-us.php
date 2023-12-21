<section class="choose-us two-column-grid">

    <!-- get the ACF image object and store in a variable -->
    <?php $image = get_field('choose_us_image'); ?>

    <!-- get the ACF subheading and store in a variable -->
    <h5 class="choose-us__subheading"><?php the_field('choose_us_subheading'); ?></h5>

    <!-- get the ACF heading and store in a variable -->
    <h2 class="choose-us__title"><?php the_field('choose_us_heading'); ?></h2>

    <div class="container">
        <!-- display the image url and the image alt within an <img> tag -->
        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="choose-us__img-mobile">
    </div>
    
    <div class="container two-column-grid__container choose-us__container">
    
        <div class="two-column-grid__col">
                <!-- Display the ACF fields -->
                <!-- I would normally use ACF Pro Reapetaer fields for this. But the brief is asking to use the free version -->
                <p class="choose-us__number">1</p>
                <h4 class="choose-us__heading"><?php the_field('choices_heading_one') ?></h4>
                <p class="choose-us__content"><?php the_field('choices_content_one') ?></p>

                <p class="choose-us__number">1</p>
                <h4 class="choose-us__heading"><?php the_field('choices_heading_two') ?></h4>
                <p class="choose-us__content"><?php the_field('choices_content_two') ?></p>

                <p class="choose-us__number">1</p>
                <h4 class="choose-us__heading"><?php the_field('choices_heading_three') ?></h4>
                <p class="choose-us__content"><?php the_field('choices_content_three') ?></p>
                 <!-- End display the ACF fields -->

            <?php //if( have_rows('choices') ) { ?>
            <?php //$count = 1; ?>
            <?php //while( have_rows('choices') ): the_row(); ?>



            <?php //endwhile; ?>
            <?php  //}  ?> 

        </div>
        <div class="two-column-grid__col">
            <!-- display the image url and the image alt within an <img> tag -->
            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="two-column-grid__img">
        </div>
    </div>
</section>