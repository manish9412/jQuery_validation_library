$(function(){
	var $registration = $("#userdata");
	if ($registration.length) 
	{
		$registration.validate({
			rules:{
				username:{
					required:true
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
					required:'Message is also mandatory'
				}
			}
		})
	}
})