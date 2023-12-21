<section class="casino-list">
    <h2 class="casino-list__heading"><?php the_field('casinos_heading'); ?></h2>
    <div class="casino-list__date"><img class="casino-list__date-icon" src="/wp-content/uploads/2023/12/uil_calender.svg" alt="date"> <?php echo date("d/m/y") ?></div>
    <h4 class="casino-list__tab"><?php the_field('casinos_subheading'); ?></h4>

    <?php

    // establish the $args for the custom post type 'casino_hotels_score'
    $args = array(
        'post_type'      => 'casino_hotels', // Display by custom post type
        'posts_per_page' => -1,
        'meta_key'       => 'casino_hotels_score', //order by ACF score value
        'orderby'        => 'meta_value_num', // Order by numeric value
        'order'          => 'DESC', // Descending order
    );


    // Run the query using wp_query
    $query = new WP_Query( $args );

    if ( $query->have_posts() ) { 
    $count = 0;    
    ?>

        <?php while ( $query->have_posts() ) {
        $query->the_post(); ?>

            <?php 
            $count++; // Run a count to display the card number
            $featured_image_url = get_the_post_thumbnail_url( get_the_ID(), 'full' ); // grab the featured image
            $page_title = get_the_title(); // grab the page title
            $address = get_field('casino_hotels_address'); // grab the ACF address details
            $star_rating = get_field('casino_hotels_star_rating'); // grab the star ratings ACF value
            $score = get_field('casino_hotels_score'); // grab the ACF score value
            $link = get_field('casino_hotels_external_link'); // grab the ACF external link value
            ?>
            <?php 
            // Grab the star rating and calculate the score
            $score = $star_rating / 5 * 100;
            ?>
            <?php
            // Calculate the score as a percentage value
            $percentage = $score / 10 * 100 / 10;
            ?>

            <div class="casino-list__card">
                <div class="casino-list__number"><?php echo $count; //display the count number for each card ?></div> 
                <div class="casino-list__logo-wrapper">
                    <?php
                            // display the featured image
                            if ( $featured_image_url ) {
                                echo '<img class="casino-list__logo" src="' . esc_url( $featured_image_url ) . '" alt="' . esc_attr( $page_title ) . '">';
                            } else {
                                // If nothing is uploaded display a fallback image
                                echo '<img class="banner__img" src="https://placehold.co/1400x600" alt="image missing">';
                            }
                    ?>

                </div>
                <div class="casino-list__wrapper-mobile">
                    <div class="casino-list__score-mobile">
                        <div class="pie animate" style="--p:<?php if($percentage < 100){ echo $percentage - 2; } else { echo $percentage; } ?>;--c:#fc115c"> <?php echo $percentage / 10; ?></div>
                    </div>
                    <!-- display alternative ratings content for mobile only -->
                    <div class="casino-list__rating-mobile">
                        <?php 
                        // Display the font awesome stars based on an integer value
                        if($star_rating == 5){
                            echo '<i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i>';
                        } elseif($star_rating == 4.5){
                            echo '<i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star-half"></i>';
                        } elseif($star_rating == 4){
                            echo '<i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i>';
                        } elseif($star_rating == 3.5){
                            echo '<i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star-half"></i>';
                        } elseif($star_rating == 3){
                            echo '<i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i>';
                        } elseif($star_rating == 2.5){
                            echo '<i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star-half"></i>';
                        } elseif($star_rating == 2){
                            echo '<i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i>';
                        } elseif($star_rating == 1.5){
                            echo '<i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star-half"></i>';
                        } else {
                            echo '<i class="casino-list__star fas fa-star"></i>';
                        } 
                        ?>
                    </div>
                    <!-- end display alternative ratings content for mobile only -->
                </div>
                <p class="casino-list__address"><span class="casino-list__address-top">Address</span><?php echo $address; ?></p>

                <!-- display the ratings content for desktop -->
                <div class="casino-list__rating">
                    <?php
                    //Display the font awesome stars based on an integer value
                    if($star_rating == 5){
                        echo '<i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i>';
                        echo '<p class="casino-list__rating-text">Excellent</p>';
                    } elseif($star_rating == 4.5){
                        echo '<i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star-half"></i>';
                        echo '<p class="casino-list__rating-text">Excellent</p>';
                    } elseif($star_rating == 4){
                        echo '<i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i>';
                        echo '<p class="casino-list__rating-text">Excellent</p>';
                    } elseif($star_rating == 3.5){
                        echo '<i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star-half"></i>';
                    } elseif($star_rating == 3){
                        echo '<i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i>';
                    } elseif($star_rating == 2.5){
                        echo '<i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star-half"></i>';
                    } elseif($star_rating == 2){
                        echo '<i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star"></i>';
                    } elseif($star_rating == 1.5){
                        echo '<i class="casino-list__star fas fa-star"></i><i class="casino-list__star fas fa-star-half"></i>';
                    } else {
                        echo '<i class="casino-list__star fas fa-star"></i>';
                    } 
                    ?>
                </div>
                <!-- end display the ratings content for desktop -->

                <div class="casino-list__score">
                    <div class="pie animate" style="--p:<?php if($percentage < 100){ echo $percentage - 2; } else { echo $percentage; } ?>;--c:#fc115c"> <?php echo $percentage / 10; ?></div>
                </div>
                <div class="casino-list__list">
                    <a target="_blank" href="<?php echo $link; ?>" class="button casino-list__btn">Visit Hotel <img class="casino-list__icon" alt="arrow" src="/wp-content/uploads/2023/12/arrow-right.svg"></a>
                    <a href="<?php the_permalink(); ?>" class="casino-list__review">Read Review</a>
                </div>
            </div>

        <?php } ?>

    <?php 
    wp_reset_postdata();  // reset the post data to avoid errors
} else {
        //Fallback error if no hotels are in the database
        echo 'No casino hotels found.';
}
?>
</section>