
	</div><!-- #content -->

	<?if (!is_user_logged_in()) :?>
		<footer id="colophon" class="site-footer">
			<div class="signup_btn_container">
				<a class="waves-effect waves-light btn signup_btn">Sign up free</a>
			</div>

			<div class="signup_or">
				<p>0r</p>
				<div class="line"></div>
			</div>

			<div class="" id="d_login_form">
				<?=do_shortcode( '[ultimatemember form_id="39"]' )?>
			</div>

		</footer>
	<?endif?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
