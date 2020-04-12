<?

function my_admin_menu() {
    add_menu_page(
        __( 'Users Products', 'my-textdomain' ),
        __( 'Users Products', 'my-textdomain' ),
        'manage_options',
        'users_shoping',
        'show_user_products',
        'dashicons-schedule',
        30
    );
}

add_action( 'admin_menu', 'my_admin_menu' );


function show_user_products() {

    global $wpdb ;
    $table_name = $wpdb->prefix . 'users_products' ;
    $DataBase_result = $wpdb->get_results("SELECT * from $table_name ") ;

    $context =['all_products' => array_reverse($DataBase_result)] ;
    Timber::render('Views/admin_users_shoping.twig',$context) ;

}

add_action('admin_head', 'UserProductsNotifications');

function UserProductsNotifications() {
    global $wpdb ;
    $table_name = $wpdb->prefix . 'users_products' ;
    $all_user_products_count = count( $wpdb->get_results("SELECT * from $table_name ") ) ;

    ?>
        <script>
            document.addEventListener("DOMContentLoaded", e => {
                (function($){
                    $(function() {
                        const count = <?=$all_user_products_count?> ;
                        const user_products = $(".wp-menu-name:contains(Users Products)") ;
                        user_products.append(/*html*/ `<span class="update-plugins count-2"><span class="plugin-count">${count}</span></span>`)
                    });
                })(jQuery);
            }, false);
        </script>
    <?
    
}





?>


