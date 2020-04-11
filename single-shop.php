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

Timber::render('Views/ShopPage.twig', $context) ;

unset($UserObject) ;
?>


<?get_footer()?>