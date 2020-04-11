(function($){
	$(function() {

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