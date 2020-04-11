<?

add_action("wp_ajax_buy_product", "buy_product");
add_action("wp_ajax_nopriv_buy_product", "please_login");

function buy_product(){


    $Product = new ProductData( 
        $user_id = wp_get_current_user()->ID,
        $post_id = url_to_postid( wp_get_referer() )
    ) ;


    wp_send_json_success($Product->UserBuyProduct()) ;
    // wp_send_json_success($UserObject->GetUserPoints()) ;

}





?>