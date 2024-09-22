
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice Theme</title>
    <?php wp_head(); ?>
</head>
<body class="fredericka">
    <header>
        <!-- logo image link -->
         <?php $site_icon_url=get_site_icon_url( );
         if($site_icon_url): ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $site_icon_url ?>" alt="logo image" class="logo"></a>
         <?php else: ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(  ).'/images/logo_one.png' ?>" alt="logo image" class="logo"></a>
         <?php endif; ?>
         <!-- logo image links -->

         <!-- search bar -->
            <div class="searchform-container"><?php get_search_form( ); ?></div>
          <!-- search bar -->

        <!-- Header menu display -->
        <?php wp_nav_menu( array(
            'theme_location'=>"header_menu",
            'container_class'=>'menu-wrapper',
        ) )
        ?>
        <!-- Header menu display -->
    </header>

