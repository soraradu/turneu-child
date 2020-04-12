<?

function my_admin_menu() {
    add_menu_page(
        __( 'Users shopping', 'my-textdomain' ),
        __( 'Users shopping', 'my-textdomain' ),
        'manage_options',
        'users_shoping',
        'my_admin_page_contents',
        'dashicons-schedule',
        30
    );
}

add_action( 'admin_menu', 'my_admin_menu' );


function my_admin_page_contents() {
    ?>

<pre>
    <?print_r(get_userdata(1))?>
</pre>

<?
    global $wpdb ;
    $table_name = $wpdb->prefix . 'users_products' ;
    $DataBase_result = $wpdb->get_results("SELECT * from $table_name ") ;


    ?>
        <pre>
            <?print_r($DataBase_result)?>
        </pre>
        
    <?

    $context =['all_products' => array_reverse($DataBase_result)] ;
    Timber::render('Views/admin_users_shoping.twig',$context) ;

    /*
    $all_users = get_users() ;
    $all_products = [] ;
    foreach ($all_users as $user) {
        $user_producst = get_field('products' , 'user_'. $user->ID) ;
        if ($user_producst) {
            if (count($user_producst) > 0) {
                foreach ($user_producst as $key => $product) {
                    $product['user_id']    = $user->ID ;
                    $product['user_link']  = get_edit_user_link($user->ID) ;
                    $product['post_id']    = get_permalink($product['product_id']);
                    $product['user_name']  = $user->display_name ;
                    $product['user_name']  = $user->display_name ;
                    $product['img_link']  = wp_get_attachment_image_src($product['image'] );
                    // set time as product key, for render by date
                    $all_products[ strtotime($product['purchase_date'] ) ] = $product ;
                }
            }
        }
    }


    ?><!-- <pre style="border:2px solid red"><?//print_r($all_products)?></pre> --><?
    ksort($all_products);
    $all_products = array_reverse ( $all_products, true ) ;
    ?>  <pre style="border:2px solid red; display: "><?print_r($all_products)?></pre>  <?

    $context =[
        'all_products' => $all_products
    ] ;
    Timber::render('Views/admin_users_shoping.twig',$context) ;


    */
}


?>