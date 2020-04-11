<?



add_action('um_after_account_general', 'after_account_general_custom_fields', 100);
function after_account_general_custom_fields()
{
	$custom_fields = [
		'game_name' => [
			'title' => 'Game Name',
			'label' => 'Nicknameul de la joc ... (CUSTOM FIELD ! ! ! !)',
			'metakey' => 'game_name',
			'type' => 'text',
			'options' => ['Update'],
			'required' => 1,
			'public' => 1,
			'editable' => 1,
		],
	];

	$fields = apply_filters('um_account_secure_fields', $custom_fields, um_user('ID'));

	UM()->builtin()->saved_fields = $fields;
	UM()->builtin()->set_custom_fields();

	$output = '';
	foreach ($fields as $key => $data) {
		$output .= UM()->fields()->edit_field($key, $data);
	}
	echo $output;
}




add_action( 'um_account_pre_update_profile', 'my_account_pre_update_profile', 10, 2 );
function my_account_pre_update_profile( $changes, $user_id ) {

}

add_action('um_account_pre_update_profile', 'update_custom_value', 10, 2);

function update_custom_value($changes, $user_id){

	get_user_meta( get_current_user_id(), 'game_name', true ); 
	// update_user_meta(11, 'game_name', '321123') ;

	// $id = um_user('ID');
	$names = array('game_name');

	foreach( $names as $name )
		update_user_meta( get_current_user_id(), $name, $_POST[$name] );
	
}


?>