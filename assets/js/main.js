(function($){
	$(function() {




		const ww = $('.ww p')
		ww.text($('html').width() + 20)
		$(window).resize( e => ww.text(e.currentTarget.innerWidth) )


		$('footer')
			.mouseover( e => $('#content').addClass('blur-2') )
			.mouseout( e => $('#content').removeClass('blur-2') )


		let login_state = 'login' 

		$('#d_login_form .um-col-alt-b a.um-link-alt')
			.attr('href','#')
			.css('pointer-events','unset')
			.click( e => {
				e.preventDefault()
				// $('#d_login_form').toggle()
				$('#d_reset_password_form').toggle()
			})

			$('#d_login_form').is(':visible') ? console.log('visible') : console.log('hidden');
			;
			

		$('#sign_up_for_free_toggle').click( e => {
			

			let state = {
				login      : $('#d_login_form').is(':visible') ? true : false ,
				register   : $('#d_register_form').is(':visible') ? true : false ,
				pass_reset : $('#d_reset_password_form').is(':visible') ? true : false ,
			}

			const button = $(e.currentTarget)
			const text = button.text()




			if (text == 'Sign up free')
				button.text('Login')
				
			else if (text == 'Login')
				button.text('Sign up free')

			$('#d_login_form').toggle()
			$('#d_register_form').toggle()

		})



        $('#action_in_tournament').click(e => {

			$.ajax({

				// GET CORECT URL<?=admin_url('admin-ajax.php');?>
				// /tournament/wp-admin/admin-ajax.php
				// url: `http://tournament.local/wp-admin/admin-ajax.php`,
				
				url: `http://${window.location.hostname}/Turneu/wp-admin/admin-ajax.php`,
				type:'POST',
				data: {action: 'enrollment'},
				success: res =>{
					location.reload();
					// console.log(res.data)
				},

				error: res =>{
					console.log('error' , res);
				}

			})
            
		})
		


        $('#action_buy_product').click(e => {

			$.ajax({

				// GET CORECT URL<?=admin_url('admin-ajax.php');?>
				// /tournament/wp-admin/admin-ajax.php
				// url: `http://tournament.local/wp-admin/admin-ajax.php`,
				
				url: `http://${window.location.hostname}/Turneu/wp-admin/admin-ajax.php`,
				type:'POST',
				data: {action: 'buy_product'},
				success: res =>{
					if(res.data =='updated')
						location.reload();
					console.log(res.data)
				},

				error: res =>{
					console.log('error' , res);
				}

			})
            
        })



		


	});
})(jQuery);