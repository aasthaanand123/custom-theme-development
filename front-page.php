<?php get_header(); ?>
<!-- template for front page -->
 <!-- part one: intro -->
<div class="front-banner" style="background-image: url('<?php          
   $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
   echo esc_url($featured_img_url);
 ?>'); ">
   <h1 class="front-banner-welcome"><span style="color: #fff1e6;">Hi,</span><span> Welcome!</span></h1>
   <?php get_template_part( "includes/section", "frontpage" ); ?>

</div>
 <!-- part one -->
<?php get_footer(); ?>