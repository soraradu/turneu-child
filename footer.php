
	</div><!-- #content -->

		<footer id="colophon" class="site-footer">
			<?if (!is_user_logged_in()) :?>
				<div class="signup_btn_container">
					<a class="waves-effect waves-light btn signup_btn">Sign up free</a>
				</div>
				<div class="signup_or">
					<p>Or</p>
					<div class="line"></div>
				</div>
				<div class="" id="d_login_form">
					<?=do_shortcode( '[ultimatemember form_id="39"]' )?>
				</div>

			<?else:?>

				<div class="d-is-logedin">
					<p>Footer is in progress.</p>
					<p>By Developer</p>
				</div>

			<?endif?>
		</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
