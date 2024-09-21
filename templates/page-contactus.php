<?php
/**
 * Template Name: Contact
 */
?>
<?php get_header(); ?>
<section class="contact-section fredericka">
    <div>
    <h1>Contact Us!</h1>
    <div class="contact-space">
        <div class="contact-col-1">
        <div>You can contact us for any queries you might have or if you are just willing to share any feedback/suggestions for us.</div>
        <div>Your feedback and suggestions help us improve and create better content for our growing community of food enthusiasts.</div>
        <div>Feel free to reach out to us for:</div>
            <ul>
                <li><span>Recipe Inquiries: </span><span>Confused about a recipe step? Need a substitution tip? We’re happy to help you get the most out of your cooking or baking experience.</span></li>
                <li><span>Feedback & Suggestions: </span><span>Have ideas to make our website better? Want to see specific types of recipes or content? We value your input!</span></li>
                <li><span>Collaborations & Partnerships: </span><span> Interested in working with us on a food-related project or collaboration? We’d love to explore how we can create delicious things together.</span></li>
                <li><span>General Queries: </span><span> Any other questions or comments? We’re just a message away!</span></li>
            </ul>
                <div>Simply fill out the form below, and we’ll get back to you as soon as possible. Thank you for being part of our culinary journey – we can’t wait to hear from you!</div>
        </div>
                <div class="information">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <!-- Display author's extra content if they have added any in the editor -->
                        <div><?php the_content(); ?></div>
                    <?php endwhile; endif; ?>
                </div>
    </div>
    </div>
</section>
<?php get_footer(); ?>