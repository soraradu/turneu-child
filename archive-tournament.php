<?

    get_header() ;

    $args = array(  
        'post_type'      => 'tournament',
        'post_status'    => 'publish',
        'posts_per_page' => -1, 
        'orderby'        => 'meta_value', 
        'order'          => 'ASC', 
        'meta_key'       => 'start_date',

        // 'meta_query' => array(
        //     array(
        //         'key'     => 'start_date',
        //         'value'   =>  date("Y-m-d"),
        //         'compare' => '>=',
        //         'type'    => 'DATE'
        //     )                   
        // )
    ) ;

    $context = [
        'tournaments' => Timber::get_posts( $args ) ,
        'overview_tabs' => false
    ] ;
    Timber::render('Views/archive-tournament.twig', $context) ;

    get_footer()

?>