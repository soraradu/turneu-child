<?

add_action("wp_ajax_enrollment", "enrollment");
add_action("wp_ajax_nopriv_enrollment", "please_login");

function enrollment(){

    $UserEnrlollment = new UserEnrlollment(
        $user_id = wp_get_current_user()->ID,
        $post_id = url_to_postid( wp_get_referer() ) ,
        $tornament_to_check = url_to_postid( wp_get_referer() )
    );

    $CurrentUser =  new UserObject(
        $user_id = wp_get_current_user()->ID,
        $post_id = url_to_postid( wp_get_referer() )
    ) ;

    
    // wp_send_json_success($UserEnrlollment->FindUserRow()) ;

    // user is not enrolled
    if ( $UserEnrlollment->GetStatus() == 'not_enrolled' )
        wp_send_json_success($UserEnrlollment->UserEnrollInTournament()) ;
        
    // user is in torunament
    elseif ( $UserEnrlollment->GetStatus() == 'join' )
        wp_send_json_success($UserEnrlollment->UserLeaveTournament()) ;

    // user leave torunament
    elseif ( $UserEnrlollment->GetStatus() == 'leave' )
        wp_send_json_success($UserEnrlollment->UserRejoinTournament()) ;



};


function please_login(){
    wp_send_json_success('Please login') ;
};


?>