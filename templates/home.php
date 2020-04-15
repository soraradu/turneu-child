<? // Template Name: Home ?>
<?get_header()?>


<div class="hero">

    <div class="hero__content">
        <div class="container-fluid">
            <div class="row flex aife">
                <div class="col l2 s3">
                    <div class="hero__content__portrait_pic">
                        <img src="http://localhost/Turneu/wp-content/uploads/2020/04/profileV1.jpg" alt="">
                    </div>
                </div>
                <div class="col l10 s9 hero__content__right">
                    <div class="">
                        <h1>PLAYERUNKNOWN'S BATTLEGROUNDS</h1>
                    </div>

                    <div class=" hero__content__right__tabs">
                        <a href="#"><h5>Overview</h5></a>
                        <a href="#"><h5>Tournaments</h5></a>
                    </div>
                
                </div>
            </div>
        
        </div>
    </div>

    <div class="hero__overlay"></div>
    <img class="hero__bg" src="http://localhost/Turneu/wp-content/uploads/2020/04/HeaderV1.jpg" alt="">
</div>


<div id="d-overview">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h5>Featured tournaments</h5>
            </div>
        </div>
    
        <div class="row small_tournaments_container">
                
            <?
                $args = array(  
                    'post_type' => 'tournament',
                    'post_status' => 'publish',
                    'posts_per_page' => 4, 
                    'orderby' => 'meta_value', 
                    'order' => 'ASC', 
                    'meta_key' => 'start_date',

                    'meta_query' => array(
                        array(
                            'key' => 'start_date',
                            'value' =>  date("Y-m-d"),
                            'compare' => '>=',
                            'type' => 'DATE'
                        )                   
                     )


                );

                $loop = new WP_Query( $args ); 

                while ( $loop->have_posts() ) : 
                    $loop->the_post(); 
                    ?>
                        <div class="col l3 m6 s12 torunament_col">
                            
                            <a href="<?the_permalink()?>" class="thumb_link">
                                <div class="thumb_container">
                                    <?=RenderThumb('medium')?>
                                    <div class="overlay"></div>
                                </div>
                            </a>

                            <h5><?the_field('start_date')?></h5>
                            <a href="<?the_permalink()?>"><h4><?the_title()?></h4></a>
                            <h6><?=get_field('cost') .' '. get_field('currency') . ' &#8226; ' . get_field('slots') . ' slots'?></h6>
                            <p></p>
                            
                        </div>
                    <?
                endwhile;

            ?>

        </div>



    </div>
</div>


<?get_footer()?>