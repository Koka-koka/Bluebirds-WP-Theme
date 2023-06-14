<?php

add_action( 'after_setup_theme','bluebirds_setup');
           
function bluebirds_setup(){
    
add_theme_support( 'title-tag' );

add_theme_support( 'automatic-feed-links' );
    
add_theme_support(
    'custom-logo',
        array(
				'height'      => 100,
				'width'       => 350,
				'flex-height' => true,
			)
);

register_nav_menus( [
	'header_menu' => __('Header menu','bluebirds'),
] );
    
add_theme_support('post-thumbnails');

add_theme_support( 'custom-background', array(
	'default-color'          => '#fff',
	'default-image'          => '',) );

add_theme_support( 'html5', array(
	'comment-list',
	'comment-form',
	'search-form',
	'gallery',
	'caption',
	'script',
	'style',
    'navigation-widgets',
) );

add_theme_support(
    'post-formats',
        array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
				'gallery',
				'status',
				'audio',
				'chat',
			)
		);
// Indicate widget sidebars can use selective refresh in the Customizer.
add_theme_support( 'customize-selective-refresh-widgets' );

// Add support for custom line height controls.
add_theme_support( 'custom-line-height' );

add_theme_support( 'editor-styles' );

add_theme_support('editor-color-palette');

load_theme_textdomain( 'bluebirds', get_template_directory() . '/lang' );

if ( ! isset( $content_width ) ) $content_width = 1270;
    
} 


// Styles and Scripts

add_action( 'wp_enqueue_scripts', 'bluebirds_links' );

function bluebirds_links () {
	 wp_enqueue_style( 'style', get_stylesheet_uri() );
     wp_enqueue_style( 'bb-bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');
     wp_enqueue_style( 'bb-fontawsome', get_template_directory_uri() . '/assets/css/fontawesome.css');
     wp_enqueue_style( 'bluebirds-blog', get_template_directory_uri() . '/assets/css/bluebirds.css');
     wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owl.css');
    
    
    wp_register_script('jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array(), false, true); 
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', ['jquery'], false, true);
    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', ['jquery'], false, true);
    wp_enqueue_script('owl', get_template_directory_uri() . '/assets/js/owl.js', ['jquery'], false, true);
   
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

//Add class to nav-menu a tag
function add_link_atts($atts) {
  $atts['class'] = "nav-link";
  return $atts;
}

add_filter( 'nav_menu_link_attributes', 'add_link_atts');

// Register Sidebar
add_action( 'widgets_init', 'bluebirds_register_widgets' );
function bluebirds_register_widgets() {
    register_sidebar(
        array(
            'id'            => 'main',
            'name'          => __( 'Main Sidebar','bluebirds' ),
            'description'   => __( 'Add widgets here to appear in your sidebar.','bluebirds' ),
            'before_widget' => '<div  class="sidebar-item">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="sidebar-heading"> <h2>',
		    'after_title'   => "</h2> </div>\n",

        )
    ); 

		register_sidebar(
			array(
				'id'            => 'social-icons',
				'name'          => __( 'Social Icons Column','bluebirds' ),
				'description'   => __( 'Add widgets here to appear in your social icons column.','bluebirds' ),
				'before_widget' => '<div>',
				'after_widget'  => '</div>',
			)
		);

		register_sidebar(
			array(
				'id'            => 'header1',
				'name'          => __( 'Header additional column','bluebirds' ),
				'description'   => __( 'Add widgets here to appear in your header.','bluebirds' ),
				'before_widget' => '<div>',
				'after_widget'  => '</div>',
			)
		);

		register_sidebar(
			array(
				'id'            => 'footer1',
				'name'          => __( 'Footer 1st column','bluebirds' ),
				'description'   => __( 'Add widgets here to appear in your footer.','bluebirds' ),
				'before_widget' => '<div>',
				'after_widget'  => '</div>',
			)
		);

		register_sidebar(
			array(
				'id'            => 'footer2',
				'name'          => __( 'Footer 2nd column','bluebirds' ),
				'description'   => __( 'Add widgets here to appear in your footer.','bluebirds' ),
				'before_widget' => '<div>',
				'after_widget'  => '</div>',
			)
		);

		register_sidebar(
			array(
				'id'            => 'footer3',
				'name'          => __( 'Footer additional column','bluebirds' ),
				'description'   => __( 'Add widgets here to appear in your footer.','bluebirds' ),
				'before_widget' => '<div>',
				'after_widget'  => '</div>',
			)
		);

		register_sidebar(
			array(
				'id'            => 'copyrightrules',
				'name'          => __( 'copyrightrules column','bluebirds' ),
				'description'   => __( 'Add widgets here to appear in your footer copyright column.','bluebirds' ),
				'before_widget' => '<div>',
				'after_widget'  => '</div>',
			)
		);
}

// Customizer
require_once get_template_directory() . '/inc/customizer.php'; 

// TGM Class
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'bluebirds_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function bluebirds_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(


        // This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'Elementor Website Builder',
			'slug'      => 'elementor',
			'required'  => true,
		),
        
        array(
			'name'      => 'Premium Addons for Elementor (Blog Post Grid, Mega Menu Builder, WooCommerce Products Grid, Carousel, Free Elementor Templates)',
			'slug'      => 'premium-addons-for-elementor',
			'required'  => true,
		),
        
        array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => true,
		),
        array(
			'name'      => 'Fonts Plugin | Google Fonts Typography',
			'slug'      => 'olympus-google-fonts',
			'required'  => true,
		),
        array(
			'name'      => 'One Click Demo Import',
			'slug'      => 'one-click-demo-import',
			'required'  => true,
		),
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'bluebirds',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.


	);

	tgmpa( $plugins, $config );
}

// Demo import settings

require_once get_template_directory() . '/inc/demo-import.php';

// Comments callback
function bluebirds_custom_comments($comment, $args, $depth) {

	if ( 'div' === $args['style'] ) {
		$tag       = 'div';
		$add_below = 'comment';
	} else {
		$tag       = 'li';
		$add_below = 'div-comment';
	}

	$classes = ' ' . comment_class( empty( $args['has_children'] ) ? '' : 'parent', null, null, false );
	?>

	<<?php echo esc_html($tag, $classes); ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) { ?>
		<div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
	} ?>

	<div class="author-thumb">
		<?php
		if ( $args['avatar_size'] != 0 ) {
			echo get_avatar( $comment, $args['avatar_size'] );
		}
	        echo get_comment_author_link();
		?>
	</div>

	<?php if ( $comment->comment_approved == '0' ) { ?>
		<em class="comment-awaiting-moderation">
			<?php _e( 'Your comment is awaiting moderation.','bluebirds'); ?>
		</em><br/>
	<?php } ?>

	<div class="right-content">
	<div class="comment-meta commentmetadata">
		<p>
			<?php
			echo  get_comment_date('Y-m-d \a\t g:ia'); ?>
		</p>

		<?php edit_comment_link( __( '(Edit)','bluebirds'), '  ', '',); ?>
	</div>

	<?php comment_text(); ?>

	<div class="reply">
		<?php
		comment_reply_link(
			array_merge(
				$args,
				array(
					'add_below' => $add_below,
					'depth'     => $depth,
					'max_depth' => $args['max_depth']
				)
			)
		); ?>
	</div>
	</div>

	<?php if ( 'div' != $args['style'] ) { ?>
		</div>
	<?php }

};


