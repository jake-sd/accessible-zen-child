<?php
add_action( 'wp_enqueue_scripts', 'enqueue_theme_styles' );
function enqueue_theme_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ) );
}

$labels_topics = array(
    'name' => _x( 'Cities', 'taxonomy general name' ),
    'singular_name' => _x( 'City', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Cities' ),
    'all_items' => __( 'All Cities' ),
    'parent_item' => __( 'Parent City' ),
    'parent_item_colon' => __( 'Parent City:' ),
    'edit_item' => __( 'Edit City' ),
    'update_item' => __( 'Update City' ),
    'add_new_item' => __( 'Add New City' ),
    'new_item_name' => __( 'New City Name' ),
);
  
register_taxonomy(
    'cities', // The name of the custom taxonomy
    array( 'post' ), // Associate it with our custom post type
    array(
        'hierarchical' => true,
        'rewrite' => array(
            'slug' => 'city', // Use "topic" instead of "topics" in permalinks
            'hierarchical' => true // Allows sub-topics to appear in permalinks
            ),
        'labels' => $labels_topics
        )
    );
$labels_topics = array(
    'name' => _x( 'States', 'taxonomy general name' ),
    'singular_name' => _x( 'State', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search States' ),
    'all_items' => __( 'All States' ),
    'parent_item' => __( 'Parent State' ),
    'parent_item_colon' => __( 'Parent State:' ),
    'edit_item' => __( 'Edit State' ),
    'update_item' => __( 'Update State' ),
    'add_new_item' => __( 'Add New State' ),
    'new_item_name' => __( 'New State Name' ),
);
  
register_taxonomy(
    'states', // The name of the custom taxonomy
    array( 'post' ), // Associate it with our custom post type
    array(
        'hierarchical' => true,
        'rewrite' => array(
            'slug' => 'state', // Use "topic" instead of "topics" in permalinks
            'hierarchical' => true // Allows sub-topics to appear in permalinks
            ),
        'labels' => $labels_topics
        )
    );
$labels_topics = array(
    'name' => _x( 'Countries', 'taxonomy general name' ),
    'singular_name' => _x( 'Country', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Countries' ),
    'all_items' => __( 'All Countries' ),
    'parent_item' => __( 'Parent Country' ),
    'parent_item_colon' => __( 'Parent Country:' ),
    'edit_item' => __( 'Edit Country' ),
    'update_item' => __( 'Update Country' ),
    'add_new_item' => __( 'Add New Country' ),
    'new_item_name' => __( 'New Country Name' ),
);
  
register_taxonomy(
    'countries', // The name of the custom taxonomy
    array( 'post' ), // Associate it with our custom post type
    array(
        'hierarchical' => true,
        'rewrite' => array(
            'slug' => 'country', // Use "topic" instead of "topics" in permalinks
            'hierarchical' => true // Allows sub-topics to appear in permalinks
            ),
        'labels' => $labels_topics
        )
    );
?>
<?php
/**
 * accessiblezentopmenu functions and definitions
 *
 * @package accessiblezentopmenu
 * @since accessiblezentopmenu 1.0
 *
 * Child themes are awesome! Read more here: http://codex.wordpress.org/Child_Themes
 */
 
 /* The function below simply adds our keyboard accessible dropdown menu
 * JavaScript file to the footer of the theme.
 */
 
function aztopmenu_scripts_styles() {
        
    wp_enqueue_script( 'keyboard-dropdown-menu-navigation', get_stylesheet_directory_uri() . '/js/main-navigation.js', array( 'jquery' ), '20131101', true );
}

add_action( 'wp_enqueue_scripts', 'aztopmenu_scripts_styles' );
