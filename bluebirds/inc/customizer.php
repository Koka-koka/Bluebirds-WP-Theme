<?php

add_action( 'customize_register', 'customizer_init' );
add_action( 'customize_preview_init', 'customizer_js_file' );
add_action( 'wp_head', 'customizer_style_tag' );

function customizer_init( WP_Customize_Manager $wp_customize ){

	$transport = 'postMessage';
    
    // Colors section

	if( 'colors' ){

		$wp_customize->add_setting( 'tagline-color', [
			'default'     => '#f8f9fa',
			'transport'   => $transport,
			'sanitize_callback'  => 'esc_attr'
		] );

		$wp_customize->add_control(
			new WP_Customize_Color_Control( $wp_customize, 'tagline-color', [
				'label'    => __('Tagline color','bluebirds'),
				'section'  => 'colors',
				'settings' => 'tagline-color'
			] )
		);

		$wp_customize->add_setting( 'slider-bg', [
			'default'     => '#f0f8ff',
			'transport'   => $transport,
			'sanitize_callback'  => 'esc_attr'
		] );

		$wp_customize->add_control(
			new WP_Customize_Color_Control( $wp_customize, 'slider-bg', [
				'label'    => __('Slider background color','bluebirds'),
				'section'  => 'colors',
				'settings' => 'slider-bg'
			] )
		);
        
        $wp_customize->add_setting( 'blog-post-bg', [
			'default'     => '#f0f8ff',
			'transport'   => $transport,
			'sanitize_callback'  => 'esc_attr'
		] );
        
        $wp_customize->add_control(
			new WP_Customize_Color_Control( $wp_customize, 'blog-post-bg', [
				'label'    => __('Blog post background color','bluebirds'),
				'section'  => 'colors',
				'settings' => 'blog-post-bg'
			] )
		);

		// Header settings panel

		$wp_customize->add_panel( 'header-settings', [
			'priority'       => 10,
			'capability'     => 'edit_theme_options',
			'title'          => __('Header Settings','bluebirds'),
			'description'    => '',
		] );

		// Background Color

		$wp_customize -> add_section('header-background',[
			'panel' => 'header-settings',
			'title' =>__('Background','bluebirds'),
			'priority' =>10
		]);

		$wp_customize->add_setting( 'header-bg', [
			'default'     => '#066b72',
			'transport'   => $transport,
			'sanitize_callback'  => 'esc_attr'
		] );
        
        $wp_customize->add_control(
			new WP_Customize_Color_Control( $wp_customize, 'header-bg', [
				'label'    => __('Header background color','bluebirds'),
				'section'  => 'header-background',
				'settings' => 'header-bg'
			] )
		);

		$wp_customize->add_setting( 'menu-bg', [
			'default'     => '#066b72',
			'transport'   => $transport,
			'sanitize_callback'  => 'esc_attr'
		] );
        
        $wp_customize->add_control(
			new WP_Customize_Color_Control( $wp_customize, 'menu-bg', [
				'label'    => __('Menu background color','bluebirds'),
				'section'  => 'header-background',
				'settings' => 'menu-bg'
			] )
		);

		$wp_customize->add_setting( 'dropdown-menu-bg', [
			'default'     => '#0f838c',
			'transport'   => 'refresh',
			'sanitize_callback'  => 'esc_attr'
		] );
        
        $wp_customize->add_control(
			new WP_Customize_Color_Control( $wp_customize, 'dropdown-menu-bg', [
				'label'    => __('Dropdown-menu background color','bluebirds'),
				'section'  => 'header-background',
				'settings' => 'dropdown-menu-bg'
			] )
		);

		// Menu section

		$wp_customize -> add_section('menu',[
			'panel' => 'header-settings',
			'title' =>__('Menu','bluebirds'),
			'priority' =>20
		]);

		$wp_customize->add_setting( 'nav-menu', [
			'default'     => '#f8f9fa',
			'transport'   => $transport,
			'sanitize_callback'  => 'esc_attr'
		] );
        
        $wp_customize->add_control(
			new WP_Customize_Color_Control( $wp_customize, 'nav-menu', [
				'label'    => __('Menu item color','bluebirds'),
				'section'  => 'menu',
				'settings' => 'nav-menu'
			] )
		);

		$wp_customize->add_setting( 'nav-menu-hover', [
			'default'     => '#26a3a3',
			'transport'   => 'refresh',
			'sanitize_callback'  => 'esc_attr'
		] );
        
        $wp_customize->add_control(
			new WP_Customize_Color_Control( $wp_customize, 'nav-menu-hover', [
				'label'    => __('Menu item hover color','bluebirds'),
				'section'  => 'menu',
				'settings' => 'nav-menu-hover'
			] )
		);

		$wp_customize->add_setting( 'nav-menu-active', [
			'default'     => '#26a3a3',
			'transport'   => $transport,
			'sanitize_callback'  => 'esc_attr'
		] );

		$wp_customize->add_control(
			new WP_Customize_Color_Control( $wp_customize, 'nav-menu-active', [
				'label'    => __('Menu active item color','bluebirds'),
				'section'  => 'menu',
				'settings' => 'nav-menu-active'
			] )
		);

		// Dropdown menu section

		$wp_customize -> add_section('dropdownmenu',[
			'panel' => 'header-settings',
			'title' =>__('Dropdown menu','bluebirds'),
			'priority' =>30
		]);

		$wp_customize->add_setting( 'child-nav-menu', [
			'default'     => '#f8f9fa',
			'transport'   => $transport,
			'sanitize_callback'  => 'esc_attr'
		] );
        
        $wp_customize->add_control(
			new WP_Customize_Color_Control( $wp_customize, 'child-nav-menu', [
				'label'    => __('Dropdown-menu item color','bluebirds'),
				'section'  => 'dropdownmenu',
				'settings' => 'child-nav-menu'
			] )
		);

		$wp_customize->add_setting( 'child-nav-menu-hover', [
			'default'     => '#26a3a3',
			'transport'   => 'refresh',
			'sanitize_callback'  => 'esc_attr'
		] );
        
        $wp_customize->add_control(
			new WP_Customize_Color_Control( $wp_customize, 'child-nav-menu-hover', [
				'label'    => __('Dropdown-menu item hover color','bluebirds'),
				'section'  => 'dropdownmenu',
				'settings' => 'child-nav-menu-hover'
			] )
		);
        


		$wp_customize->add_setting( 'child-nav-menu-active', [
			'default'     => '#26a3a3',
			'transport'   => $transport,
			'sanitize_callback'  => 'esc_attr'
		] );

		$wp_customize->add_control(
			new WP_Customize_Color_Control( $wp_customize, 'child-nav-menu-active', [
				'label'    => __('Dropdown-menu active item color','bluebirds'),
				'section'  => 'dropdownmenu',
				'settings' => 'child-nav-menu-active'
			] )
		);

		// Hamburger Menu Section

		$wp_customize -> add_section('hamburger-menu',[
			'panel' => 'header-settings',
			'title' =>__('Hamburger Menu','bluebirds'),
			'priority' =>40
		]);

		$wp_customize->add_setting( 'hamburger-menu-icon', [
			'default'     => '#26a3a3',
			'transport'   => $transport,
			'sanitize_callback'  => 'esc_attr'
		] );
        
        $wp_customize->add_control(
			new WP_Customize_Color_Control( $wp_customize, 'hamburger-menu-icon', [
				'label'    => __('Hamburger Menu icon color','bluebirds'),
				'section'  => 'hamburger-menu',
				'settings' => 'hamburger-menu-icon'
			] )
		);

        // Footer panel

		$wp_customize->add_panel( 'footer-settings', [
			'priority'       => 20,
			'capability'     => 'edit_theme_options',
			'title'          => __('Footer Settings','bluebirds'),
			'description'    => '',
		] );

        // Footer colors section

		$wp_customize -> add_section('footer-colors',[
			'panel' => 'footer-settings',
			'title' =>__('Footer Colors','bluebirds'),
			'priority' =>10
		]);

            $wp_customize->add_setting( 'footer-bg', [
			'default'     => '#066b72',
			'transport'   => $transport,
			'sanitize_callback'  => 'esc_attr'
		] );
        
        $wp_customize->add_control(
			new WP_Customize_Color_Control( $wp_customize, 'footer-bg', [
				'label'    => __('Background color','bluebirds'),
				'section'  => 'footer-colors',
				'settings' => 'footer-bg'
			] )
		);

		$wp_customize->add_setting( 'footer-menu', [
			'default'     => '#f8f9fa',
			'transport'   => $transport,
			'sanitize_callback'  => 'esc_attr'
		] );
        
        $wp_customize->add_control(
			new WP_Customize_Color_Control( $wp_customize, 'footer-menu', [
				'label'    => __('Footer menu color','bluebirds'),
				'section'  => 'footer-colors',
				'settings' => 'footer-menu'
			] )
		);

		$wp_customize->add_setting( 'footer-menu-hover', [
			'default'     => '#26a3a3',
			'transport'   => 'refresh',
			'sanitize_callback'  => 'esc_attr'
		] );
        
        $wp_customize->add_control(
			new WP_Customize_Color_Control( $wp_customize, 'footer-menu-hover', [
				'label'    => __('Footer menu hover color','bluebirds'),
				'section'  => 'footer-colors',
				'settings' => 'footer-menu-hover'
			] )
		);

		$wp_customize->add_setting( 'footer-menu-active', [
			'default'     => '#26a3a3',
			'transport'   => $transport,
			'sanitize_callback'  => 'esc_attr'
		] );
        
        $wp_customize->add_control(
			new WP_Customize_Color_Control( $wp_customize, 'footer-menu-active', [
				'label'    => __('Footer active menu color','bluebirds'),
				'section'  => 'footer-colors',
				'settings' => 'footer-menu-active'
			] )
		);


	}

}

// Generating Live CSS
function customizer_style_tag(){

	$style = [];

	$style[] = '.site-ident h1 { color: ' . get_theme_mod( 'tagline-color' ) . '; }';
    
    $style[] = '.header { background: ' . get_theme_mod( 'header-bg' ) . '; }';
    
    $style[] = '.footer { background: ' . get_theme_mod( 'footer-bg' ) . '; }';
    
    $style[] = '.container-fluid { background: ' . get_theme_mod( 'slider-bg' ) . '; }';
    
    $style[] = '.blog-posts .blog-post { background: ' . get_theme_mod( 'blog-post-bg' ) . '; }';
    
    $style[] = '.navbar .navbar-nav a.nav-link { color: ' . get_theme_mod( 'nav-menu' ) . '; }';

	$style[] = '.navbar .navbar-nav a.nav-link:hover { color: ' . get_theme_mod( 'nav-menu-hover' ) . '; }';

	$style[] = '.navbar .navbar-nav li.current-menu-item a.nav-link { color: ' . get_theme_mod( 'nav-menu-active' ) . '; }';

	$style[] = '.navbar .navbar-nav .menu-item:hover>.sub-menu { background: ' . get_theme_mod( 'dropdown-menu-bg' ) . '; }';

	$style[] = '.navbar .navbar-nav ul.sub-menu a.nav-link { color: ' . get_theme_mod( 'child-nav-menu' ) . '; }';

	$style[] = '.navbar .navbar-nav ul.sub-menu a.nav-link:hover { color: ' . get_theme_mod( 'child-nav-menu-hover' ) . '; }';

	$style[] = '.navbar .navbar-nav ul.sub-menu li.current-menu-item a.nav-link { color: ' . get_theme_mod( 'child-nav-menu-active' ) . '; }';

	$style[] = '#navbarResponsive { background: ' . get_theme_mod( 'menu-bg' ) . '; }';

	$style[] = '.navbar .navbar-toggler { background: ' . get_theme_mod( 'hamburger-menu-icon' ) . '; }';

	$style[] = '.footer .footer-widget-area li a { color: ' . get_theme_mod( 'footer-menu' ) . '; }';

	$style[] = '.footer .footer-widget-area li a:hover { color: ' . get_theme_mod( 'footer-menu-hover' ) . '; }';

	$style[] = '.footer .footer-widget-area li.current-menu-item a { color: ' . get_theme_mod( 'footer-menu-active' ) . '; }';

	
	echo "<style>\n" . implode( "\n", $style ) . "\n</style>\n";
}

function customizer_js_file(){
	wp_enqueue_script( 'theme-customizer', get_template_directory_uri() . '/assets/js/theme-customizer.js', [ 'jquery', 'customize-preview' ], null, true );
}