<?php
  $error = "";
 if(isset($_REQUEST["attempt"])){
     //including the church database	 
    include "link.php";
	 $cname = strtolower(mysqli_real_escape_string($link, $_POST["churchname"]));
	 $pass = sha1(mysqli_real_escape_string($link, $_POST["pwd"]));
	 
	 $query = mysqli_Query($link, "SELECT churchname FROM churchinfo WHERE churchname='$cname' AND  password='$pass'") or die(mysqli_error());
     $total = mysqli_num_rows($query);
      if($total > 0){
		 //start user's session 
		 
		 session_start();
		 $_SESSION["user"] = $cname;
		 header("location: dashboard.php");
	  } 
     else{
		$error = "church does not exist REGISTER";
	 }	  
 }
 else if(isset($_GET['err'])){
 	$error = "Only a single church can be accepted in the system";
 }
?>
 <html>
 <head>
 <link rel="icon" type="image/png" href="image/fgmlogo.png">
 <title>FGM</title>
 <link rel="stylesheet" href="foundicons/3.0.0/foundation-icons.css">
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <style>
 </style>
 <title>HOME</title>
 </head>
 <body>
 
 <div class="container">
 	<form method="post" action="index.php?attempt" class="form-horizontal" role="form" style="" enctype="multipart/form-data">
  	<div style="margin-left:380px; margin-right:380px; margin-top: 200px; padding: 30px; background: url('image/background.jpg'); background-size: contain; background-position: center; background-repeat: no-repeat;">
    <?php
      if($error != ""){
        echo '<div class="alert alert-danger">
          <strong>Error!</strong> '.$error.'.
        </div>';
      }
    ?>
 		<div class="form-group">
 			<label class="control-label col-sm-4" for="email">CHURCH: </label>
 			<div class="col-sm-8">
 				<input type="text" name="churchname" class='form-control' placeholder="church name" required>
 			</div>
 		</div>
 		<div class="form-group">
 			<label class="control-label col-sm-4" for="email">PASSWORD: </label>
 			<div class="col-sm-8">
 				<input type="password" name="pwd"  class='form-control' placeholder="password..." required>
 			</div>
 		</div>
  		<div class="form-group"> 
    		<div class="col-sm-offset-4 col-sm-8">
    			<input type="submit" name="submit" class='form-control' id="logbut" value="LOGIN">
    			<a href="registerform.php" class='btn btn-primary form-control'>REGISTER</a>
    		</div>
   		</div>
   	</div>
 	</form>
 </div>
</body>
</html>
<script>
function open(){
	window.location = "index.php";
}
</script>