<?php get_header(); ?>
<!-- search results display: -->
 <div class="search-results-container">
 <h1>Search Results: <?php echo get_search_query( ); ?></h1>
<?php get_template_part( "includes/section", "results" ); ?>
 <div class="previous"><?php previous_posts_link( ); ?></div>
 <div class="next"><?php next_posts_link(  ); ?></div>
 </div>
 

 <!-- search results display -->
<?php get_footer(); ?>