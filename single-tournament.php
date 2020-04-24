
<?
    get_header() ;
    
    $UserEnrlollment = new UserEnrlollment(
        $user_id = wp_get_current_user()->ID,
        $post_id = get_the_ID(),
        $tornament_to_check = get_the_ID()
    );

    $TournamentModal = new TournamentModal(
        $user_id = wp_get_current_user()->ID,
        $post_id = get_the_ID()
    ) ;

    global $svg_points,$svg_tickets ;
    $context = [
        'post'         => Timber::get_post(),
        // 'table'        => get_field('tournament_tabel') ,
        // 'prize'        => get_field('prize'),
        'button'       => $UserEnrlollment->RenderButton() ,
        'button_text'  => $UserEnrlollment->GetButtonText(),
        'status'       => $UserEnrlollment->GetStatus(),
        'modal'        => $TournamentModal->RenderModal(),
        'svg_points'   => $svg_points,
        'svg_tickets'   => $svg_tickets
    ] ;



    Timber::render('Templates/Views/single-tournament.twig', $context) ;
    
    unset($UserEnrlollment , $TournamentModal , $context) ;

    get_footer() ;
?>
