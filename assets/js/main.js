(function($){
	$(function() {

		// 	setTimeout(e => {
		// 		const btn = document.querySelector('.editor-post-publish-button')
		// 		btn.addEventListener('click', event => {
		// 			// alert(123)
		// 			// location.reload();
		// 			event.preventDefault()
		// 			// $(btn).css({'pointer-events':'none'})
		// 			$(btn).unbind();
	
		// 		})
				
		// 		console.clear()
		// 		console.log(btn);
		// 		console.log('go')

		// 	},4000)
			

		// return null 

		$('.modal').modal();

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
					// location.reload();
					console.log(res.data)
				},

				error: res =>{
					console.log('error' , res);
				}

			})
            
        })



		


	});
})(jQuery);