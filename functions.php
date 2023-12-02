<?php 

function wptheme_theme_support(){
    add_theme_support( 'title-tag');
    add_theme_support( 'post-thumbnails');
    add_theme_support( 'category-thumbnails');
    add_theme_support( 'custom-logo');
    add_image_size( 'postcard', 550, 365, true );
    add_image_size( 'post-thumbnail', 1280, 450, true );
    add_theme_support( 'custom-header');

    // menu register
    register_nav_menus( array(
        'header_menu' => __( 'Header Manu', 'wptheme' ),
        'footer_menu'  => __( 'Footer Menu', 'wptheme' ),
    ) );

}
add_action( 'after_setup_theme', 'wptheme_theme_support' );


// call the file
function wptheme_asstes(){
    
    // css file
    wp_enqueue_style('slick', get_theme_file_uri(). '/assets/css/slick.css', [], true, 'all' );
    wp_enqueue_style('carousel', get_theme_file_uri(). '/assets/css/owl.carousel.min.css', [], true, 'all' );
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', [], time() );
    wp_enqueue_style('wptheme', get_stylesheet_uri() );


    // js file
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', ['jquery'], true, true );
    wp_enqueue_script( 'carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', ['jquery'], true, true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], true, true );

}
add_action('wp_enqueue_scripts', 'wptheme_asstes');


//rigister sidebar /widgets
function wptheme_sidebar(){

    register_sidebar(array(
        'name' => 'Footer widgets one',
        'id'   => 'footer_widget1',
        'before_widget' => '<div class="footer-widget-item">',
        'after_widget'  => '</div>',
    ) );

    register_sidebar(array(
        'name' => 'Footer widgets two',
        'id'   => 'footer_widget2',
        'before_widget' => '<div class="footer-widget-item">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title mb-2">',
        'after_title'   => '</h4>'
    ) );
    
    register_sidebar(array(
        'name' => 'Footer widgets three',
        'id'   => 'footer_widget3',
        'before_widget' => '<div class="footer-widget-item">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title mb-2">',
        'after_title'   => '</h4>'
    ) );

    register_sidebar(array(
        'name' => 'Footer widgets four',
        'id'   => 'footer_widget4',
        'before_widget' => '<div class="footer-widget-item">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title mb-2">',
        'after_title'   => '</h4>'
    ) );

    register_sidebar(array(
        'name' => 'Blog sidebar',
        'id'   => 'blog_sidebar',
        'before_widget' => '<div class="blog-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="sidebar-title mb-4">',
        'after_title'   => '</h4>'
    ) );
}
add_action('widgets_init', 'wptheme_sidebar');


// post read time
function reading_time(){
    $content = get_the_content();
    $words = str_word_count(strip_tags($content));
    $time = ceil($words / 250);
    $icon = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256"><path fill="#7c3aed" d="M128 26a102 102 0 1 0 102 102A102.12 102.12 0 0 0 128 26Zm0 192a90 90 0 1 1 90-90a90.1 90.1 0 0 1-90 90Zm62-90a6 6 0 0 1-6 6h-56a6 6 0 0 1-6-6V72a6 6 0 0 1 12 0v50h50a6 6 0 0 1 6 6Z"/></svg>';
    $html = '<div class="flex gap-3 items-center">'.$icon. ' ' .$time . ' read min </div>';
    return $html;
}

//category count
function current_category_posts(){
    $count = "";
    if( is_category() ){
        global $wp_query;

        $current_cat = get_query_var( 'cat');
        $cats = get_categories();
        foreach( $cats as $cat ){
            if( $current_cat == $cat -> term_id){
                $count = $cat->count;
            }
        }
    }
    return $count;
}


// register custom post
function wptheme_custom_posts(){
    register_post_type( 'property', array(
        'labels'            => array(
            'name'          => esc_html__( 'Property', 'wptheme' ),
            'singular_name' => 'Property',
            'all_items'     => 'All property',
            'add_new'       => 'Add new property'

        ),
        'show_ui'           => true,
        'menu_icon'         => 'dashicons-admin-home',
        'menu_position'     => 20,
        'supports'          => array('title', 'editor', 'thumbnail', ),
        // 'show_in_rest'      => true,
        'publicly_queryable'=> true,
    ) );

    register_taxonomy('property-type', 'property', array(
        'label'         => 'Property type',
        'show_ui'       => true,
        'hierarchical'  => true
    ));

}
add_action( 'init', 'wptheme_custom_posts' );



require __DIR__ . '/inc/popular-post.php';
require __DIR__ . '/elementor/elementor.php';


?>