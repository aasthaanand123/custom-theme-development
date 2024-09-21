<?php
// enqueue scripts hook 
function load_scripts(){
    // import font directly from the cdn 
    wp_enqueue_style( "fonts", "https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap", array(), 1, "all" );
    wp_enqueue_style( "stylesheet", get_template_directory_uri(  ).'/css/main.css', array(), 1, "all" );
    wp_enqueue_style( "searchform", get_template_directory_uri(  ).'/css/searchform.css', array(), 1, "all" );
    wp_enqueue_style("contactform",get_template_directory_uri(  ).'/css/contactform.css',array(),1,"all");
    wp_enqueue_style( "aboutus", get_template_directory_uri(  ).'/css/aboutus.css', array(), 1, "all" );
    wp_enqueue_style( "recipes-archive", get_template_directory_uri(  ).'/css/recipes-archive.css', array(), 1, "all" );
    wp_enqueue_script("script",get_template_directory_uri(  ).'/js/main.js',array(),1,true);
}
add_action("wp_enqueue_scripts","load_scripts");

//add support for menus
add_theme_support( "menus" );
// register menu
register_nav_menus( array(
    "header_menu"=>"Header Menu"
) );
register_nav_menus( array(
    "footer_menu"=>"Footer Menu"
) );


// adding theme support for images
add_theme_support( "post-thumbnails");

// Creating custom post type: Recipe and its various fields
function recipe_post_type(){
    $args=array(
        "public"=>true,
        "labels"=>array(
            "name"=>"Recipes",
            "singular_name"=>"Recipe",
            'add_new'               => 'Add New',
            'new_item'              => 'New Recipe',
            'edit_item'             =>'Edit Recipe',
            'update_item'           => 'Update Recipe',
            'view_item'             =>  'View Recipe',
            'view_items'            =>  'View Recipes',
            'search_items'          => 'Search Recipe',
            'add_new_item'          => 'Add New Recipe',

        ),
        "menu_icon"=>"dashicons-food",
        "has_archive"=>true,
        'description' => 'A post type for recipes',
        "supports"=>array("title","custom-fields",'excerpt','comments','thumbnail')
    );
    register_post_type("recipes",$args);
}
add_action("init","recipe_post_type");


// custom fields and data display

// Add/Modify the custom columns to the recipes post type:
add_filter( 'manage_recipes_posts_columns', 'set_custom_edit_recipes_columns' );
function set_custom_edit_recipes_columns($columns) {
       $date_column = $columns['date'];
       unset($columns['date']);
       $columns['information'] = 'Information';
   
       $columns['date'] = $date_column;
       $columns['title'] = 'Recipe Name';
       return $columns;
}

// Populate the data to the custom columns for the recipe post type:
add_action( 'manage_recipes_posts_custom_column' , 'custom_recipes_column', 10, 2 );
function custom_recipes_column( $column, $post_id ) {
    switch ( $column ) {
        case 'information' :
            echo get_post_meta( $post_id , 'information' , true ); 
            break;

    }
}

// configuring search to be only for post type : recipe
function include_recipes_in_search($query) {
    if ($query->is_search && !is_admin()) {
        $query->set('post_type', 'recipes');
    }
    return $query; 
}
add_action('pre_get_posts', 'include_recipes_in_search');


