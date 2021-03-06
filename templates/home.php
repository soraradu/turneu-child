<? // Template Name: Home ?>
<?get_header()?>


<?

    $context = [
        'post'         => Timber::get_post(),
        'overview_torunaments' => Timber::get_posts( 
            array(  
                'post_type' => 'tournament',
                'post_status' => 'publish',
                'posts_per_page' => 4, 
                'orderby' => 'meta_value', 
                'order' => 'ASC', 
                'meta_key' => 'start_date',
        
                'meta_query' => array(
                    array(
                        'key' => 'start_date',
                        'value' =>  date("Y-m-d ") /**H:i - for exact date */,
                        'compare' => '>=',
                        'type' => 'DATE'
                    )                   
                )
            )
        ),
    ] ;



    Timber::render('Views/home.twig', $context)  ;

?>



<?get_footer()?>