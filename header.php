<?
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
<html <? language_attributes(); ?>>
<head>
	<meta charset="<? bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<? wp_head(); ?>
</head>
<body id="tournament" <? body_class(); ?>>
<? wp_body_open(); ?>
<div id="page" class="site">
	<div class="ww" style="display: none !important">
		<p></p>
	</div>
	<!-- <a class="skip-link screen-reader-text" href="#content"><? esc_html_e( 'Skip to content', 'turneu' ); ?></a> -->

	<header dis id="masthead" class="site-header">
		<div class="site-branding">
			<?
			the_custom_logo();
			?>
			<div id="force_logo">
				<svg xmlns="http://www.w3.org/2000/svg" width="218" height="70" viewBox="0 0 218 70">
					<g id="Group_12" data-name="Group 12" transform="translate(-41 -39)">
					<g id="Group_9" data-name="Group 9" transform="translate(10 6)">
						<text id="Logo_Placeholder" data-name="Logo Placeholder" transform="translate(31 77)" fill="#fff" font-size="28" font-family="Roboto-Regular, Roboto"><tspan x="0" y="0">Logo Placeholder</tspan></text>
					</g>
					<g id="Group_10" data-name="Group 10" transform="translate(3 -43)">
						<text id="By_Sora_Radu" data-name="By Sora Radu" transform="translate(100 148)" fill="#fff" font-size="16" font-family="Roboto-Regular, Roboto"><tspan x="0" y="0">By Sora Radu</tspan></text>
					</g>
					<g id="Group_11" data-name="Group 11" transform="translate(10 -99)">
						<text id="prototype_v1" data-name="prototype v1" transform="translate(112 148)" fill="#fff" font-size="10" font-family="Roboto-Regular, Roboto"><tspan x="0" y="0">prototype v1</tspan></text>
					</g>
					<line id="Line_3" data-name="Line 3" x1="48.765" transform="translate(43.735 99.095)" fill="none" stroke="#fff" stroke-width="1"/>
					<line id="Line_10" data-name="Line 10" x1="66.765" transform="translate(43.735 46)" fill="none" stroke="#fff" stroke-width="1"/>
					<line id="Line_6" data-name="Line 6" x2="48.765" transform="translate(207.735 99.095)" fill="none" stroke="#fff" stroke-width="1"/>
					<line id="Line_8" data-name="Line 8" x2="66.76" transform="translate(189.735 46)" fill="none" stroke="#fff" stroke-width="1"/>
					<line id="Line_5" data-name="Line 5" y1="13.095" transform="translate(43.735 86.5)" fill="none" stroke="#fff" stroke-width="1"/>
					<line id="Line_11" data-name="Line 11" y2="8" transform="translate(43.735 45.5)" fill="none" stroke="#fff" stroke-width="1"/>
					<line id="Line_7" data-name="Line 7" y1="13.095" transform="translate(256.5 86.5)" fill="none" stroke="#fff" stroke-width="1"/>
					<line id="Line_9" data-name="Line 9" y2="8" transform="translate(256.5 45.5)" fill="none" stroke="#fff" stroke-width="1"/>
					</g>
				</svg>
			</div>

		  <?
			if ( is_front_page() && is_home() ) :
				?>
				<!-- <h1 class="site-title"><a href="<? echo esc_url( home_url( '/' ) ); ?>" rel="home"><? bloginfo( 'name' ); ?></a></h1> -->
				<?
			else :
				?>
				<!-- <p class="site-title"><a href="<? echo esc_url( home_url( '/' ) ); ?>" rel="home"><? bloginfo( 'name' ); ?></a></p> -->
				<?
			endif;
			$turneu_description = get_bloginfo( 'description', 'display' );
			if ( $turneu_description || is_customize_preview() ) :
				?>
				<!-- <p class="site-description"><? echo $turneu_description; // cs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p> -->
			<? endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><? esc_html_e( 'Primary Menu', 'turneu' ); ?></button> -->
			
			<p class='menu_text'>Menu</p>
			<?

				wp_nav_menu(
					array(
						'theme_location' => 'theme_menu',
						'menu_id'        => 'primary-menu',
					)
				);
			?>

			<p class='menu_text'>Account</p>
			<?
				if(is_user_logged_in()) {
					wp_nav_menu(
						array(
							'theme_location' => 'loged_in_menu',
							'menu_id'        => 'primary-menu',
						)
					);
				}
			?>

		</nav><!-- #site-navigation -->
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
	

	<div id="top_search" class="d_inputs">
        <form action="">
            <input type="text" placeholder="search">
        </form>

		<?

		if ( is_user_logged_in() ) : 
			global $svg_points,$svg_tickets ;
			?>	
				<div class="d-nav-points-tickets-container">
					<div><?=UserObject(wp_get_current_user()->ID,get_the_ID())->GetUserPoints()?> <?=$svg_points?> </div>
					<div><?=UserObject(wp_get_current_user()->ID,get_the_ID())->GetUserTickets()?> <?=$svg_tickets?> </div>
				</div>
			<? 
		endif ?>
    </div>