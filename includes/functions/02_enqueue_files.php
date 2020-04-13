<?

function enqueue_main_files() {
  wp_enqueue_style('materialize', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css' , false,) ;
  wp_enqueue_style('general', get_template_directory_uri() . '-child/assets/styles/general/general.css' , false,) ;
  wp_enqueue_style('main', get_template_directory_uri() . '-child/assets/styles/main.css' , false,) ;
  wp_enqueue_script( 'myscript', get_template_directory_uri() . '-child/assets/js/main.js');
  wp_enqueue_script( 'materialize', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js');
}
add_action('wp_enqueue_scripts','enqueue_main_files',200);


function load_custom_wp_admin_style(){
  wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '-child/assets/styles/admin/admin.css', false, '1.0.0' );
  wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action('admin_enqueue_scripts', 'load_custom_wp_admin_style');


?>