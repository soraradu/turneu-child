<?

function enqueue_main_files() {

  wp_enqueue_style('materialize', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' , false,) ;

  wp_enqueue_style('main', get_template_directory_uri() . '-child/assets/styles/Front-End/main.css' , false,) ;
  wp_enqueue_style( 'Roboto' , "https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap") ;
  wp_enqueue_script( 'myscript', get_template_directory_uri() . '-child/assets/js/main.js');

  // wp_enqueue_script( 'bs1', 'https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous') ;
  wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js') ;
  wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js') ;



}
add_action('wp_enqueue_scripts','enqueue_main_files',200);


function load_custom_wp_admin_style(){
  // wp_enqueue_script( 'myscript', get_template_directory_uri() . '-child/assets/js/main.js');
  wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '-child/assets/styles/Admin/admin.css', false, '1.0.0' );
  wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action('admin_enqueue_scripts', 'load_custom_wp_admin_style');


?>