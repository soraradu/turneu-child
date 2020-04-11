<?

function enqueue_main_files() {
    wp_enqueue_style('materialize', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css' , false,) ;
    wp_enqueue_style('main', get_template_directory_uri() . '-child/assets/styles/style.css' , false,) ;
	wp_enqueue_script( 'myscript', get_template_directory_uri() . '-child/assets/js/main.js');
	wp_enqueue_script( 'materialize', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js');
}
add_action('wp_enqueue_scripts','enqueue_main_files',200);


?>