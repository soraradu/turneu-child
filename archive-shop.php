<?

    get_header() ;

    $args = array(  
        'post_type'      => 'shop',
        'post_status'    => 'publish',
        'posts_per_page' => -1, 
        'order'          => 'ASC', 
    ) ;

    $context = [
        'posts' => Timber::get_posts( $args ) ,
        'overview_tabs' => false
    ] ;
    Timber::render('Templates/Views/archive-shop.twig', $context) ;

    get_footer()

?>