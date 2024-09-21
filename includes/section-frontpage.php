<!-- get the content from the database of posts -->
 <?php if(have_posts()): while(have_posts()):the_post(); ?>
    <?php if(get_the_content()): ?>
        <h3 class="front-banner-message"><?php echo the_content(); ?></h3>
    <?php endif;?>
<?php endwhile; endif; ?>
<!-- if any content is saved, display that, else don't display anything in that place-->
