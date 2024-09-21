<?php get_header(); ?>

<!-- main -->
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<?php 
    $postid=get_the_ID(  );
    $title=get_the_title($postid);
    $information=get_post_meta( $postid,"information", true );
    $ingredients=get_post_meta($postid,"ingredients",true);
    $date=get_the_date( );
    $prepare=get_post_meta($postid,"prepare",true);
    $imgUrl=get_the_post_thumbnail_url( $postid, "full" );
?>
<div class="recipe-single-wrapper">
    <h1><?php echo $title; ?></h1>
    <h3 class="single-recipe-cuisine"><?php echo $information; ?></h3>
    <h3 class="single-recipe-date"><?php echo $date; ?></h3>
    <?php if($imgUrl): ?>
    <img src="<?php echo $imgUrl;?>" alt="recipe_img" class="img-single-recipe">
    <?php endif; ?>
    <?php 
            if($ingredients) {
                $ingredients_array = explode("\n", $ingredients); 
                ?>
                <ul class="ingredients-list">
             <?php   foreach($ingredients_array as $ingredient) {
                    echo "<li>" . esc_html($ingredient) . "</li>";
                } ?>
                </ul>
                <?php
            } else {
                echo '<ul class="ingredients-list"><li style="text-align:center;">No ingredients available for this recipe.</li></ul>';
            }
            ?>

<?php if($prepare){
        $preparation_steps=explode(".",$prepare); ?>
        <ul class="steps-list">
            <?php foreach($preparation_steps as $step){
                echo "<li>".esc_html($step)."</li>";
            } ?>
        </ul>
        <?php }else {
            echo " <ul class='steps-list'><li style='text-align:center;'>No steps available for this recipe.</li> </ul>";
        }
        ?>
    <?php comments_template(); ?>
</div>
<?php endwhile;else: ?>
    <div>Not Available Currently, Sorry!</div>
<?php endif; ?>


 <?php get_footer(); ?>