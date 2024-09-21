<?php if(have_posts()):while(have_posts()): the_post(); ?>
        <div class="card">
        <?php 
        $post_id=get_the_ID();
        $recipe_title=get_the_title();
        $excerpt=get_the_excerpt( ); ?>
        <h3><?php echo $recipe_title; ?></h3>
        <p><?php echo $excerpt; ?></p>
        <a href="<?php echo get_the_permalink( $post_id); ?>" class="know-more-link">Know More!</a>
        </div>
    <?php endwhile; else: ?>
        <div class="card">
        <h3>No Recipes available! Come back later...</h3>
        </div>
    <?php endif; ?>