<? // Template Name: Home ?>
<?get_header()?>


<div class="hero">

    <div class="hero__content">
        <div class="container-fluid">
            <div class="row flex aife">
                <div class="col l2">
                    <div class="hero__content__portrait_pic">
                        <img src="http://localhost/Turneu/wp-content/uploads/2020/04/profileV1.jpg" alt="">
                    </div>
                </div>
                <div class="col l10 hero__content__right">
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
    
        <div class="row">
                
            <?
                $args = array(  
                    'post_type' => 'tournament',
                    'post_status' => 'publish',
                    'posts_per_page' => 4, 
                    'orderby' => 'date', 
                    'order' => 'DESC', 
                );

                $loop = new WP_Query( $args ); 

                while ( $loop->have_posts() ) : 
                    $loop->the_post(); 
                    ?>
                        <div class="col l3">
                            <?the_title()?>
                        </div>
                    <?
                endwhile;

            ?>

            <div class="col l3">
            </div>
        </div>



    </div>
</div>


<?get_footer()?>