<?php

/*------------------------------------*\
	Functions
\*------------------------------------*/

// HTML5 Blank navigation
function make_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}


// Register Navigation
function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu'), // Main Navigation
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup - Credit: HTML5 Blank Starter Theme
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Add page slug to body class - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

function make_styles()
{
    wp_enqueue_style('styles', get_template_directory_uri() . '/styles.css', array(), filemtime(get_template_directory() . '/styles.css'), 'all');

    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' );
}
function make_scripts()
{

    if ( is_page( 'American Fund' )  ) {
        wp_enqueue_script( 'html2canvas', get_stylesheet_directory_uri().'/assets/js/html2canvas.min.js');
    }
    wp_enqueue_script( 'site', get_stylesheet_directory_uri().'/assets/js/site.js', array('jquery'), filemtime( get_stylesheet_directory() . '/assets/js/site.js' ) );
    wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'));
}

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Global Options',
        'menu_title'    => 'Global Options',
        'menu_slug'     => 'global-options',
    ));
}

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

add_action('wp_enqueue_scripts', 'make_scripts'); // Add Theme Stylesheet
add_action('wp_enqueue_scripts', 'make_styles'); // Add Make Theme Stylesheet
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu

// Add Filters
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation

/* Custom nav walker */
class Findlay_Menu_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth=0, $args=[], $id=0) {

        if($item) {
        if($depth == 1) {
            $output .= "<li data-post-name='".$item->post_name."' class='col-md-4 '>"; 
        } else {
            $output .= "<li data-post-name='".$item->post_name."' class=''>";
        }
        }

        if ($item->url && $item->url != '#') {
            $output .= '<a href="' . $item->url . '"><div>';
        } else {
            $output .= '<div>';
        }
        
        if ($depth == 1) {
            $output .= '<span class="submenu__title">';
        }
        $output .= $item->title;        
        if ($depth == 1) {
            $output .= '</span>';
        }
        if ($depth == 1) {
            $output .= '<div class="submenu__text">';
        }   
        if($depth == 1 && $item->type == 'post_type_archive') {
            $archive_nav_text_field = '';
            if($item->object == 'team-member') {
                $archive_nav_text_field = 'team_archive_nav_text';
            } elseif($item->object == 'resource') {
                $archive_nav_text_field = 'resource_archive_nav_text';
            }
            $output .= get_field($archive_nav_text_field,'options');
        }
        if ($depth == 1) {
            $output .= '</div>';
        }
        if ($item->url && $item->url != '#') {
            $output .= '</div></a>';
        } else {
            $output .= '</div>';
        }
    }
}
// Register additional menu locations
function register_my_menus() {
    register_nav_menus(
    array( 
        'superheader-menu' => __( 'Superheader Menu' ), 
        'footer-menu' => __( 'Footer Menu' ), 
    )
    );
}
    add_action( 'init', 'register_my_menus' );