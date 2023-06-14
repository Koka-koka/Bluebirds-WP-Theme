<?php

function ocdi_import_files() {
  return [
    [
      'import_file_name'             => 'Import demo content',
      'categories'                   => [ 'New category', 'Old category' ],
      'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo-files/bluebirds.WordPress.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demo-files/bluebirds-widgets.wie',
      'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'demo-files/bluebirds-export.dat',
    ],
  ];
}
add_filter( 'ocdi/import_files', 'ocdi_import_files' );


function ocdi_after_import_setup() {
  // Assign menus to their locations.
  $main_menu = get_term_by( 'name', 'Main_menu',);

  set_theme_mod( 'nav_menu_locations', [
          'Header menu' => $main_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function in your theme.
      ]
  );

  // Assign front page and posts page (blog page).
  $front_page_id = get_page_by_title( 'Home' );
  $blog_page_id  = get_page_by_title( 'Blog' );

  update_option( 'show_on_front', 'page' );
  update_option( 'page_on_front', $front_page_id->ID );
  update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'ocdi/after_import', 'ocdi_after_import_setup' );