
	</div><!-- #content -->

		<?if (!is_user_logged_in()) :?>
			<footer id="colophon" class="site-footer">
				<div class="footer_login_register">
					<div class="signup_btn_container">
						<a class="btn btn-primary signup_btn" id="sign_up_for_free_toggle">Sign up free</a>
					</div>
					<div class="signup_or">
						<p>Or</p>
						<div class="line"></div>
					</div>
					<div class="" id="d_login_form">
						<?=do_shortcode( '[ultimatemember form_id="39"]' )?>
					</div>
					<div id="d_register_form">
						<?=do_shortcode( '[ultimatemember form_id="38"]' )?>
					</div>
					<div id="d_reset_password_form">
						<?=do_shortcode( '[ultimatemember_password]' )?>
					</div>


				</div>

				<!-- <div class="d-is-logedin">
					<p>Footer is in progress.</p>
					<p>By Developer</p>
				</div> -->
			</footer>
		<?endif?>
</div><!-- #page -->

<?php wp_footer(); ?>


</body>
</html>
