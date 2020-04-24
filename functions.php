<?

include('classes/_classes.php');
include('includes/functions/01_default.php') ;
include('includes/functions/02_enqueue_files.php') ;
include('includes/functions/03_helpers.php') ;
include('includes/functions/03_um_edit_nickname.php') ;
include('includes/functions/05_ajax_enroll_in_tournament.php') ;
include('includes/functions/06_ajax_buy_product.php') ;
include('includes/functions/07_admin_users_products_page.php') ;




if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' 	=> 'Theme General Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false,
        // 'post_id' => 'archive_page_tournaments',

    ));
}


$svg_points = 
'<svg xmlns="http://www.w3.org/2000/svg" width="44" height="51" viewBox="0 0 44 51">
    <g id="Group_2" data-name="Group 2" transform="translate(-138 -2326)">
    <g id="Group_1" data-name="Group 1">
        <ellipse id="Ellipse_1" data-name="Ellipse 1" cx="22" cy="11" rx="22" ry="11" transform="translate(138 2326)" fill="#fff"/>
        <path id="Subtraction_1" data-name="Subtraction 1" d="M22,14a43.784,43.784,0,0,1-4.434-.223,39.482,39.482,0,0,1-4.13-.64A33.2,33.2,0,0,1,9.7,12.123a25.715,25.715,0,0,1-3.256-1.342A18.239,18.239,0,0,1,3.757,9.155,12,12,0,0,1,1.729,7.288,7.785,7.785,0,0,1,.447,5.225,6.087,6.087,0,0,1,.114,4.134,5.652,5.652,0,0,1,0,3.011,6.045,6.045,0,0,1,.836,0a10.467,10.467,0,0,0,3,3.19A20.69,20.69,0,0,0,8.628,5.716,33.1,33.1,0,0,0,14.817,7.38a42.4,42.4,0,0,0,7.183.6,42.4,42.4,0,0,0,7.183-.6,33.1,33.1,0,0,0,6.189-1.663A20.69,20.69,0,0,0,40.166,3.19a10.467,10.467,0,0,0,3-3.19A6.045,6.045,0,0,1,44,3.011a5.652,5.652,0,0,1-.114,1.124,6.087,6.087,0,0,1-.333,1.091,7.785,7.785,0,0,1-1.282,2.063,12,12,0,0,1-2.028,1.867,18.239,18.239,0,0,1-2.686,1.626A25.715,25.715,0,0,1,34.3,12.123a33.2,33.2,0,0,1-3.737,1.013,39.482,39.482,0,0,1-4.13.64A43.783,43.783,0,0,1,22,14Z" transform="translate(138 2363)" fill="#fff"/>
        <path id="Subtraction_2" data-name="Subtraction 2" d="M22,14a43.784,43.784,0,0,1-4.434-.223,39.482,39.482,0,0,1-4.13-.64A33.2,33.2,0,0,1,9.7,12.123a25.715,25.715,0,0,1-3.256-1.342A18.239,18.239,0,0,1,3.757,9.155,12,12,0,0,1,1.729,7.288,7.785,7.785,0,0,1,.447,5.225,6.087,6.087,0,0,1,.114,4.134,5.652,5.652,0,0,1,0,3.011,6.045,6.045,0,0,1,.836,0a10.467,10.467,0,0,0,3,3.19A20.69,20.69,0,0,0,8.628,5.716,33.1,33.1,0,0,0,14.817,7.38a42.4,42.4,0,0,0,7.183.6,42.4,42.4,0,0,0,7.183-.6,33.1,33.1,0,0,0,6.189-1.663A20.69,20.69,0,0,0,40.166,3.19a10.467,10.467,0,0,0,3-3.19A6.045,6.045,0,0,1,44,3.011a5.652,5.652,0,0,1-.114,1.124,6.087,6.087,0,0,1-.333,1.091,7.785,7.785,0,0,1-1.282,2.063,12,12,0,0,1-2.028,1.867,18.239,18.239,0,0,1-2.686,1.626A25.715,25.715,0,0,1,34.3,12.123a33.2,33.2,0,0,1-3.737,1.013,39.482,39.482,0,0,1-4.13.64A43.783,43.783,0,0,1,22,14Z" transform="translate(138 2353)" fill="#fff"/>
        <path id="Subtraction_3" data-name="Subtraction 3" d="M22,14a43.784,43.784,0,0,1-4.434-.223,39.482,39.482,0,0,1-4.13-.64A33.2,33.2,0,0,1,9.7,12.123a25.715,25.715,0,0,1-3.256-1.342A18.239,18.239,0,0,1,3.757,9.155,12,12,0,0,1,1.729,7.288,7.785,7.785,0,0,1,.447,5.225,6.087,6.087,0,0,1,.114,4.134,5.652,5.652,0,0,1,0,3.011,6.045,6.045,0,0,1,.836,0a10.467,10.467,0,0,0,3,3.19A20.69,20.69,0,0,0,8.628,5.716,33.1,33.1,0,0,0,14.817,7.38a42.4,42.4,0,0,0,7.183.6,42.4,42.4,0,0,0,7.183-.6,33.1,33.1,0,0,0,6.189-1.663A20.69,20.69,0,0,0,40.166,3.19a10.467,10.467,0,0,0,3-3.19A6.045,6.045,0,0,1,44,3.011a5.652,5.652,0,0,1-.114,1.124,6.087,6.087,0,0,1-.333,1.091,7.785,7.785,0,0,1-1.282,2.063,12,12,0,0,1-2.028,1.867,18.239,18.239,0,0,1-2.686,1.626A25.715,25.715,0,0,1,34.3,12.123a33.2,33.2,0,0,1-3.737,1.013,39.482,39.482,0,0,1-4.13.64A43.783,43.783,0,0,1,22,14Z" transform="translate(138 2344)" fill="#fff"/>
    </g>
    </g>
</svg>
' ;

$svg_tickets = 
'<svg xmlns="http://www.w3.org/2000/svg" width="50.91" height="50.91" viewBox="0 0 50.91 50.91">
    <g id="Group_3" data-name="Group 3" transform="translate(-227.167 -2325.697)">
        <path id="Subtraction_6" data-name="Subtraction 6" d="M18.521,50.91h0l-3.762-3.762A7.794,7.794,0,0,0,3.737,36.126L0,32.389,32.389,0l3.737,3.737-.022.022A7.794,7.794,0,1,0,47.126,14.781l.022-.022,3.762,3.762L18.521,50.91ZM36.284,20.473l-2.8,2.8,2.8,2.8,2.8-2.8Zm-4.291-4.291-2.8,2.8,2.8,2.8,2.8-2.8Zm-4.337-4.337-2.8,2.8,2.8,2.8,2.8-2.8Z" transform="translate(227.167 2325.697)" fill="#fff"/>
    </g>
</svg>
';



// acf_add_options_sub_page([
//     'post_id' => 'sloturi_page',
//     'page_title' => 'Seo Sloturi Page',
//     'menu_title' => 'Seo Top Part',
//     'menu_slug' => 'sloturi-settings',
//     'menu_title' => 'Seo Top Part Fields',
//     'parent'     => 'edit.php?post_type=slot_games',
//     'capability'=>'manage_options',
//     // 'parent_slug'=>'edit.php',
//     'position' => false,
//     'icon_url' => false
// ]);