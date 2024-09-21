<?php 
/**
 * Template Name: About Us
 * 
 */
?>
<?php get_header() ?>
<section class="fredericka about-section">
    <div class="content">
        <h1>
            About Us
        </h1>
        <?php if(have_posts()):while(have_posts()): the_post(); ?>
            <?php if (get_the_content()) : ?>
                <?php the_content(); ?>
            <?php else: ?>
                <p>
                Welcome to My RECIPE Book, where a love for food and passion for sharing recipes come together! We're dedicated to bringing you a wide range of easy-to-follow recipes, from timeless classics to innovative dishes that excite your taste buds. Whether you’re a seasoned home cook or just starting your culinary journey, we have something for everyone.
                </p>
                <p>
                    We firmly believe that food isn’t just about sustenance—it’s about creativity, joy, and the bonds we form while sharing a meal. Our goal is to inspire you to try new things in the kitchen, helping you turn everyday ingredients into extraordinary meals.
                </p>
                <p>
                    What sets us apart is our commitment to simplicity and flavor. We understand that life can get busy, which is why our recipes focus on accessible ingredients and straightforward instructions, ensuring that even the busiest of days can end with a satisfying homemade dish.
                </p>
                <p>
                    We're more than just a recipe website; we're a community of food lovers. We welcome your feedback, ideas, and suggestions, and we’re excited to continue growing and evolving with you. Thank you for joining us on this adventure!
                </p>
            <?php endif; ?>
        <?php endwhile; else: ?>
        <p>
            Welcome to My RECIPE Book, where a love for food and passion for sharing recipes come together! We're dedicated to bringing you a wide range of easy-to-follow recipes, from timeless classics to innovative dishes that excite your taste buds. Whether you’re a seasoned home cook or just starting your culinary journey, we have something for everyone.
        </p>
        <p>
            We firmly believe that food isn’t just about sustenance—it’s about creativity, joy, and the bonds we form while sharing a meal. Our goal is to inspire you to try new things in the kitchen, helping you turn everyday ingredients into extraordinary meals.
        </p>
        <p>
            What sets us apart is our commitment to simplicity and flavor. We understand that life can get busy, which is why our recipes focus on accessible ingredients and straightforward instructions, ensuring that even the busiest of days can end with a satisfying homemade dish.
        </p>
        <p>
            We're more than just a recipe website; we're a community of food lovers. We welcome your feedback, ideas, and suggestions, and we’re excited to continue growing and evolving with you. Thank you for joining us on this adventure!
        </p>

        <?php endif; ?>
    </div>
</section>
<?php get_footer() ?>