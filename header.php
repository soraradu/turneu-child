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
<body id="tournament" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div class="ww">
		<p></p>
	</div>
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'turneu' ); ?></a> -->

	<header dis id="masthead" class="site-header">
		<div class="site-branding">
			<?php
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

				$svg = [
					'home'         => '<svg xmlns="http://www.w3.org/2000/svg" width="19.492" height="17.993" viewBox="0 0 19.492 17.993"><path id="Icon_ionic-md-home" data-name="Icon ionic-md-home" d="M10.872,22.493v-6h4.5v6h4.573v-9h2.924l-9.746-9-9.746,9H6.3v9Z" transform="translate(-3.375 -4.5)" fill="#fff"/></svg>',
					'tournament'   => '<svg xmlns="http://www.w3.org/2000/svg" width="19.492" height="19.497" viewBox="0 0 19.492 19.497"><path id="Icon_ionic-md-trophy" data-name="Icon ionic-md-trophy" d="M19.494,6.046c.042-1.265.009-2.624,0-2.671H6.716c0,.047-.037,1.406,0,2.671H3.375a13.6,13.6,0,0,0,.984,5.937,8.28,8.28,0,0,0,2.75,3.294A32.626,32.626,0,0,0,12,17.975V19.3c-.216.469-1.1,1.321-3.9,1.321h-.97v2.249h12V20.623h-1.2c-2.844,0-3.514-.895-3.669-1.321V17.975a52.32,52.32,0,0,0,4.892-2.694,9.67,9.67,0,0,0,2.75-3.294,16.646,16.646,0,0,0,.979-5.941ZM6.261,11.055a7.724,7.724,0,0,1-.736-2.9H6.87c.033.281.066.529.108.764a20.753,20.753,0,0,0,1.2,4.522A6.721,6.721,0,0,1,6.261,11.055Zm13.72,0a6.769,6.769,0,0,1-1.949,2.4,20.463,20.463,0,0,0,1.209-4.54c.037-.234.075-.483.108-.764h1.373A7.725,7.725,0,0,1,19.981,11.055Z" transform="translate(-3.375 -3.375)" fill="#fff"/></svg>' ,
					'shop'         => '<svg id="Icon_map-grocery-or-supermarket" data-name="Icon map-grocery-or-supermarket" xmlns="http://www.w3.org/2000/svg" width="23.511" height="19.192" viewBox="0 0 23.511 19.192"><path id="Path_1" data-name="Path 1" d="M32.638,29.279a1.919,1.919,0,1,1-1.919-1.919A1.919,1.919,0,0,1,32.638,29.279Z" transform="translate(-9.608 -12.006)" fill="#fff"/><path id="Path_2" data-name="Path 2" d="M11.758,29.279A1.919,1.919,0,1,1,9.839,27.36,1.919,1.919,0,0,1,11.758,29.279Z" transform="translate(-2.642 -12.006)" fill="#fff"/><path id="Path_3" data-name="Path 3" d="M22.551,17.275H7.567l.32-.519A.96.96,0,0,0,8,16.011l-.312-1.2,13.906-.723a1.024,1.024,0,0,0,.958-1.009V6.719a.962.962,0,0,0-.96-.96H5.335l-.188-.721a.96.96,0,0,0-.929-.718H.96a.96.96,0,0,0,0,1.919H3.477L6.039,16.1,5.031,17.731a.96.96,0,0,0,.817,1.463h16.7a.96.96,0,0,0,0-1.919Z" transform="translate(0 -4.32)" fill="#fff"/></svg>',
					'support'      => '<svg xmlns="http://www.w3.org/2000/svg" width="23.99" height="20.992" viewBox="0 0 23.99 20.992"><path id="Icon_awesome-headphones-alt" data-name="Icon awesome-headphones-alt" d="M7.5,14.245h-.75a3,3,0,0,0-3,3v2.988a3,3,0,0,0,3,3H7.5a1.5,1.5,0,0,0,1.5-1.5V15.747A1.5,1.5,0,0,0,7.5,14.245Zm9.746,0h-.75a1.5,1.5,0,0,0-1.5,1.5v5.992a1.5,1.5,0,0,0,1.5,1.5h.75a3,3,0,0,0,3-3V17.25a3,3,0,0,0-3-3ZM12,2.25a12.224,12.224,0,0,0-12,12v5.248a.749.749,0,0,0,.75.75H1.5a.749.749,0,0,0,.75-.75V14.245a9.746,9.746,0,0,1,19.492,0v5.248a.749.749,0,0,0,.75.75h.75a.749.749,0,0,0,.75-.75V14.245A12.224,12.224,0,0,0,12,2.25Z" transform="translate(0 -2.25)" fill="#fff"/></svg>' ,
					'contact'      => '<svg id="Icon_ionic-ios-mail" data-name="Icon ionic-ios-mail" xmlns="http://www.w3.org/2000/svg" width="19.492" height="13.495" viewBox="0 0 19.492 13.495"><path id="Path_5" data-name="Path 5" d="M22.708,10.343l-5.042,5.135a.091.091,0,0,0,0,.131l3.528,3.758a.608.608,0,0,1,0,.862.611.611,0,0,1-.862,0l-3.514-3.744a.1.1,0,0,0-.136,0l-.857.872a3.773,3.773,0,0,1-2.69,1.134,3.848,3.848,0,0,1-2.746-1.167l-.825-.839a.1.1,0,0,0-.136,0L5.915,20.229a.611.611,0,0,1-.862,0,.608.608,0,0,1,0-.862l3.528-3.758a.1.1,0,0,0,0-.131L3.534,10.343a.092.092,0,0,0-.159.066V20.684a1.5,1.5,0,0,0,1.5,1.5H21.368a1.5,1.5,0,0,0,1.5-1.5V10.408A.094.094,0,0,0,22.708,10.343Z" transform="translate(-3.375 -8.689)" fill="#fff"/><path id="Path_6" data-name="Path 6" d="M13.4,16.454a2.547,2.547,0,0,0,1.832-.768L22.589,8.2a1.473,1.473,0,0,0-.928-.328H5.154a1.463,1.463,0,0,0-.928.328l7.352,7.483A2.548,2.548,0,0,0,13.4,16.454Z" transform="translate(-3.659 -7.875)" fill="#fff"/></svg>' ,
					'discord'      => '<svg xmlns="http://www.w3.org/2000/svg" width="20.992" height="23.99" viewBox="0 0 20.992 23.99"><path id="Icon_awesome-discord" data-name="Icon awesome-discord" d="M13.926,11.4A1.228,1.228,0,1,1,12.7,10.064,1.278,1.278,0,0,1,13.926,11.4Zm-5.6-1.331a1.336,1.336,0,0,0,0,2.663A1.278,1.278,0,0,0,9.548,11.4,1.27,1.27,0,0,0,8.325,10.064ZM20.992,2.471V23.99c-3.022-2.671-2.055-1.787-5.566-5.05l.636,2.219H2.459A2.465,2.465,0,0,1,0,18.689V2.471A2.465,2.465,0,0,1,2.459,0H18.533A2.465,2.465,0,0,1,20.992,2.471ZM17.573,13.843a16.064,16.064,0,0,0-1.727-6.993,5.932,5.932,0,0,0-3.371-1.26l-.168.192a7.983,7.983,0,0,1,2.987,1.523,10.192,10.192,0,0,0-8.96-.348c-.444.2-.708.348-.708.348A8.092,8.092,0,0,1,8.781,5.734l-.12-.144A5.932,5.932,0,0,0,5.29,6.849a16.063,16.063,0,0,0-1.727,6.993,4.349,4.349,0,0,0,3.659,1.823s.444-.54.8-1a3.731,3.731,0,0,1-2.1-1.415c.176.124.467.284.492.3a8.744,8.744,0,0,0,7.485.42,6.864,6.864,0,0,0,1.379-.708,3.785,3.785,0,0,1-2.171,1.427c.36.456.792.972.792.972A4.385,4.385,0,0,0,17.573,13.843Z" fill="#fff"/></svg>'
				] ;



				
				?>

					<p class='menu_text'>Menu</p>

					<div class="menu-meniu-tournament-container">
						<ul id="primary-menu" class="menu">
							<li id="menu-item-68" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-66 current_page_item menu-item-68"><a href="http://localhost/Turneu/" aria-current="page"><?=$svg['home']?> Home</a></li>
							<li id="menu-item-70" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-70"><a href="/Turneu/tournament/"><?=$svg['tournament']?>Tournaments</a></li>
							<li id="menu-item-81" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-81"><a href="http://localhost/Turneu/shop/"><?=$svg['shop']?>Shop</a></li>
							<li id="menu-item-81" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-81"><a href=""><?=$svg['support']?>Support</a></li>
							<li id="menu-item-81" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-81"><a href=""><?=$svg['contact']?>Contact</a></li>
							<li id="menu-item-81" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-81"><a href=""><?=$svg['discord']?>Discord</a></li>

							<!-- <li id="menu-item-58" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58"><a href="http://localhost/Turneu/account/">Account</a></li> -->
							<!-- <li id="menu-item-60" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-60"><a href="http://localhost/Turneu/logout/">Logout</a></li> -->
							<!-- <li id="menu-item-61" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-61"><a href="http://localhost/Turneu/members/">Members</a></li> -->
							<!-- <li id="menu-item-62" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-62"><a href="http://localhost/Turneu/password-reset/">Password Reset</a></li> -->
							<!-- <li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a href="http://localhost/Turneu/user/">User</a></li> -->
						</ul>
					</div>
				<?

				// wp_nav_menu(
				// 	array(
				// 		'theme_location' => 'theme_menu',
				// 		'menu_id'        => 'primary-menu',
				// 	)
				// );

			?>

		</nav><!-- #site-navigation -->
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
	

	<div id="top_search" class="d_inputs">
        <form action="">
            <input type="text" placeholder="search">
        </form>

		<?

		$svg_points = '
			<svg xmlns="http://www.w3.org/2000/svg" width="44" height="51" viewBox="0 0 44 51">
				<g id="Group_2" data-name="Group 2" transform="translate(-138 -2326)">
				<g id="Group_1" data-name="Group 1">
					<ellipse id="Ellipse_1" data-name="Ellipse 1" cx="22" cy="11" rx="22" ry="11" transform="translate(138 2326)" fill="#fff"/>
					<path id="Subtraction_1" data-name="Subtraction 1" d="M22,14a43.784,43.784,0,0,1-4.434-.223,39.482,39.482,0,0,1-4.13-.64A33.2,33.2,0,0,1,9.7,12.123a25.715,25.715,0,0,1-3.256-1.342A18.239,18.239,0,0,1,3.757,9.155,12,12,0,0,1,1.729,7.288,7.785,7.785,0,0,1,.447,5.225,6.087,6.087,0,0,1,.114,4.134,5.652,5.652,0,0,1,0,3.011,6.045,6.045,0,0,1,.836,0a10.467,10.467,0,0,0,3,3.19A20.69,20.69,0,0,0,8.628,5.716,33.1,33.1,0,0,0,14.817,7.38a42.4,42.4,0,0,0,7.183.6,42.4,42.4,0,0,0,7.183-.6,33.1,33.1,0,0,0,6.189-1.663A20.69,20.69,0,0,0,40.166,3.19a10.467,10.467,0,0,0,3-3.19A6.045,6.045,0,0,1,44,3.011a5.652,5.652,0,0,1-.114,1.124,6.087,6.087,0,0,1-.333,1.091,7.785,7.785,0,0,1-1.282,2.063,12,12,0,0,1-2.028,1.867,18.239,18.239,0,0,1-2.686,1.626A25.715,25.715,0,0,1,34.3,12.123a33.2,33.2,0,0,1-3.737,1.013,39.482,39.482,0,0,1-4.13.64A43.783,43.783,0,0,1,22,14Z" transform="translate(138 2363)" fill="#fff"/>
					<path id="Subtraction_2" data-name="Subtraction 2" d="M22,14a43.784,43.784,0,0,1-4.434-.223,39.482,39.482,0,0,1-4.13-.64A33.2,33.2,0,0,1,9.7,12.123a25.715,25.715,0,0,1-3.256-1.342A18.239,18.239,0,0,1,3.757,9.155,12,12,0,0,1,1.729,7.288,7.785,7.785,0,0,1,.447,5.225,6.087,6.087,0,0,1,.114,4.134,5.652,5.652,0,0,1,0,3.011,6.045,6.045,0,0,1,.836,0a10.467,10.467,0,0,0,3,3.19A20.69,20.69,0,0,0,8.628,5.716,33.1,33.1,0,0,0,14.817,7.38a42.4,42.4,0,0,0,7.183.6,42.4,42.4,0,0,0,7.183-.6,33.1,33.1,0,0,0,6.189-1.663A20.69,20.69,0,0,0,40.166,3.19a10.467,10.467,0,0,0,3-3.19A6.045,6.045,0,0,1,44,3.011a5.652,5.652,0,0,1-.114,1.124,6.087,6.087,0,0,1-.333,1.091,7.785,7.785,0,0,1-1.282,2.063,12,12,0,0,1-2.028,1.867,18.239,18.239,0,0,1-2.686,1.626A25.715,25.715,0,0,1,34.3,12.123a33.2,33.2,0,0,1-3.737,1.013,39.482,39.482,0,0,1-4.13.64A43.783,43.783,0,0,1,22,14Z" transform="translate(138 2353)" fill="#fff"/>
					<path id="Subtraction_3" data-name="Subtraction 3" d="M22,14a43.784,43.784,0,0,1-4.434-.223,39.482,39.482,0,0,1-4.13-.64A33.2,33.2,0,0,1,9.7,12.123a25.715,25.715,0,0,1-3.256-1.342A18.239,18.239,0,0,1,3.757,9.155,12,12,0,0,1,1.729,7.288,7.785,7.785,0,0,1,.447,5.225,6.087,6.087,0,0,1,.114,4.134,5.652,5.652,0,0,1,0,3.011,6.045,6.045,0,0,1,.836,0a10.467,10.467,0,0,0,3,3.19A20.69,20.69,0,0,0,8.628,5.716,33.1,33.1,0,0,0,14.817,7.38a42.4,42.4,0,0,0,7.183.6,42.4,42.4,0,0,0,7.183-.6,33.1,33.1,0,0,0,6.189-1.663A20.69,20.69,0,0,0,40.166,3.19a10.467,10.467,0,0,0,3-3.19A6.045,6.045,0,0,1,44,3.011a5.652,5.652,0,0,1-.114,1.124,6.087,6.087,0,0,1-.333,1.091,7.785,7.785,0,0,1-1.282,2.063,12,12,0,0,1-2.028,1.867,18.239,18.239,0,0,1-2.686,1.626A25.715,25.715,0,0,1,34.3,12.123a33.2,33.2,0,0,1-3.737,1.013,39.482,39.482,0,0,1-4.13.64A43.783,43.783,0,0,1,22,14Z" transform="translate(138 2344)" fill="#fff"/>
				</g>
				</g>
			</svg>
		' ;

		$svg_tickets = '
		<svg xmlns="http://www.w3.org/2000/svg" width="50.91" height="50.91" viewBox="0 0 50.91 50.91">
			<g id="Group_3" data-name="Group 3" transform="translate(-227.167 -2325.697)">
				<path id="Subtraction_6" data-name="Subtraction 6" d="M18.521,50.91h0l-3.762-3.762A7.794,7.794,0,0,0,3.737,36.126L0,32.389,32.389,0l3.737,3.737-.022.022A7.794,7.794,0,1,0,47.126,14.781l.022-.022,3.762,3.762L18.521,50.91ZM36.284,20.473l-2.8,2.8,2.8,2.8,2.8-2.8Zm-4.291-4.291-2.8,2.8,2.8,2.8,2.8-2.8Zm-4.337-4.337-2.8,2.8,2.8,2.8,2.8-2.8Z" transform="translate(227.167 2325.697)" fill="#fff"/>
			</g>
		</svg>
		';

		if ( is_user_logged_in() ) : ?>
			<div class="d-nav-points-tickets-container">
				<div><?=UserObject(wp_get_current_user()->ID,get_the_ID())->GetUserPoints()?> <?=$svg_points?> </div>
				<div><?=UserObject(wp_get_current_user()->ID,get_the_ID())->GetUserTickets()?> <?=$svg_tickets?> </div>
			</div>
		<? endif ?>
    </div>