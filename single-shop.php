<?get_header()?>

<?

$UserObject = new UserObject(
	$user_id = wp_get_current_user()->ID,
	$post_id = get_the_ID()
) ;

$context = [
	'post' => Timber::get_post(),
	'field' => get_field('shop'),
	'user_points'=>$UserObject->GetUserPoints() ,
	'user_tickets'=>$UserObject->GetUserTickets() ,

] ;

// print_r(get_field('shop')) ;
// update_field( 'shop', 
// [
// 	'currency' => 'points',
// 	'cost' => '100',
// 	'stock' => '32',
// 	'availible' => 1,
// 	'gallery' => null,
// ]
// , get_the_ID() );

Timber::render('Views/ShopPage.twig', $context) ;
?>




<?get_footer()?>