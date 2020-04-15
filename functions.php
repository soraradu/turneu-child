<?

include('classes/_classes.php');
include('includes/functions/01_default.php') ;
include('includes/functions/02_enqueue_files.php') ;
include('includes/functions/03_helpers.php') ;
include('includes/functions/03_um_edit_nickname.php') ;
include('includes/functions/05_ajax_enroll_in_tournament.php') ;
include('includes/functions/06_ajax_buy_product.php') ;
include('includes/functions/07_admin_users_products_page.php') ;


function in_admin_header_lw() {
    echo '<h1>TEST</h1>' ;
}







function on_update_press() {
}

add_action( 'save_post', 'on_update_press' ,1, 1 );