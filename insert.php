<?php 
 include("includes/connection.php"); 
  if (isset($_POST['titlecol']) && $_POST['desccol']) 
  {	
  	$count=0;
 	 $title= $_POST['titlecol']; 
	 $desc=$_POST['desccol']; 
	 $adddate=date('Y-m-d'); 
   
   
 $sql ="insert into data(title,description,post_at) values ('".$title."','".$desc."','".$adddate."')"; 
   
 mysqli_query($conn,$sql); 
?>
<script>
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
</script>
<?php

   }
   
 ?> 