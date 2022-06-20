
$(function sample(){
	var $registerForm = $("#userdata");

	if ($registerForm.length) 
	{
		$registerForm.validate({
			rules:{
				username:{
					required: true
				},
				message:{
					required:true
				}
				
			},
			messages:{
				username:{
					required:'Username is mandatory'
				},
				message:{
					required:'Message is mandatory'
				}
		},

		
		})
	}
})