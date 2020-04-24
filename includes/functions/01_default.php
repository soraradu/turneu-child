<?
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION


// Register the menu
register_nav_menu( 'theme_menu', __( 'Theme Menu', 'theme-menu' ) );
register_nav_menu( 'loged_in_menu', __( 'Loged In Menu', 'loged-in-menu' ) );


// // Allow SVG
// add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
 
//     // global $wp_version;
//     // if ( $wp_version !== '4.7.1' ) {
//     //    return $data;
//     // }
   
//     $filetype = wp_check_filetype( $filename, $mimes );
   
//     return [
//         'ext'             => $filetype['ext'],
//         'type'            => $filetype['type'],
//         'proper_filename' => $data['proper_filename']
//     ];
   
//   }, 10, 4 );
   
  function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
add_filter( 'upload_mimes', 'cc_mime_types' );

