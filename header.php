<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Turneu
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">






	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'turneu' ); ?></a> -->

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
				<?php
			else :
				?>
				<!-- <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p> -->
				<?php
			endif;
			$turneu_description = get_bloginfo( 'description', 'display' );
			if ( $turneu_description || is_customize_preview() ) :
				?>
				<!-- <p class="site-description"><?php echo $turneu_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p> -->
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'turneu' ); ?></button> -->
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'theme_menu',
						'menu_id'        => 'primary-menu',
					)
				);
				if (is_user_logged_in()) {
					
					$CurrentUser =  new UserObject(
						$user_id = wp_get_current_user()->ID,
						$post_id = get_the_ID()
					) ;

					?>
						<div class="d-nav-points-tickets-container">
							<div><?=UserObject(wp_get_current_user()->ID,get_the_ID())->GetUserPoints()?> Points</div>
							<div><?=UserObject(wp_get_current_user()->ID,get_the_ID())->GetUserTickets()?> Tickets</div>
						</div>
					<?
				}
			?>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
	