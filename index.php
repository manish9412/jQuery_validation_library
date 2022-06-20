<?php 
 include("includes/connection.php"); 
   
   
   
 if(isset($_GET['del_id'])) 
 { 
             $id=$_GET['del_id']; 
             
             $sql="delete from data where id='".$id."'"; 
             $result=mysqli_query($conn,$sql); 
             
             header('index.php'); 
             
 } 
   
 ?> 

 <!DOCTYPE html> 
 <html lang="en"> 
 <head> 
   <title>Select Data Using jQuery AJAX</title> 
  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
     <style>
    .error{
      color: red;
        font-style: italic;
    }
  </style>
 </head> 
 <body> 
  <div class="container col-md-6 border shadow rounded mt-5 px-4 py-5"> 
   <h2 class="display-4 text-center">User data</h2> 
   
   <form id="userdata" method="POST"> 
     <div class="form-group"> 
       <label for="title">Username:</label> 
       <input type="text" class="form-control" name="username" id="title"> 
     </div> 
     <div class="form-group"> 
       <label for="description">Message:</label> 
       <textarea class="form-control" id="description" name="message" id="desc"></textarea> 
     </div> 
   
     <button type="submit" id="save" class="btn btn-primary">Submit</button> 
     
   </form> 
 </div> 
 <div class="container py-5"> 
 <div class="row"> 
 <div class="col-lg-12"> 
 <h1 class="text-center py-4">Showing Data with jQuery </h1> 
 
 <!-- Search button -->
  
 <br>


 <table class="table table-bordered table-striped float-left" id="content"></table> 
 

 </div> 

 </div> 
 </div> 
   
 <script> 
 $(document).ready(function(){ 
 $.ajax({url:"select.php", success:function(dataabc)
 { 
             $("#content").html(dataabc);                      
 }
});    
 });

 $('#save').click(function () { 
   
 $title = $('#title').val(); 
 $desc = $("#description").val(); 

if($title != 0)
{
 $.ajax({url:"insert.php", 
 method:"POST", 
 data:{titlecol:$title,desccol:$desc}, 
 success:function(dataabc){ 
   window.location.href="index.php"; 
 return false;
 }}); 
}
 
 });  
 </script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js" integrity="sha512-FOhq9HThdn7ltbK8abmGn60A/EMtEzIzv1rvuh+DqzJtSGq8BRdEN0U+j0iKEIffiw/yEtVuladk6rsG4X6Uqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js"></script>

 </body> 
 </html> 