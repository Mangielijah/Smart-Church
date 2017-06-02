<?php
 
 if(isset($_REQUEST["attempt"])){
     //including the church database	 
    include "link.php";
	 $cname = mysqli_real_escape_string($link, $_POST["churchname"]);
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
		echo '<script>
		alert("church does not exist REGISTER");
		</script>';
	 }	  
 }
?>
 <html>
 <head>
 <link rel="icon" type="image/png" href="image/fgmlogo.png">
 <title>FGM</title>
 <style>
 table, td{
	 border:1px solid Transperent;
 padding:8px;
 }
 table{
	 border-collapse:collapse;
 }
 #label{
	 font-size:20px;
	 font-weight:bold;
 }
 #logbut{
    border-radius:15px;	
	background-color:#00FFFF;
	 background-repeat:none;
	 border:none;
	 cursor:pointer;
	 width:60px;
	 height:40px;
 }
 #logbut:hover{
	 background:#00CED1;
 }
 a{
	 display:inline;
	 border: 3px solid 	#00FFFF;
	 border-radius:10px;
	 padding:8px 6px;
	 text-decoration:none;
 }
 a:hover{
	 background:#00FFFF;
 }
 input{
	 border-radius:5px;
 }
 div{
	 background-image: url('image/back.jpg');
	 background-position:center;
	 background-repeat:no-repeat;
 }
 </style>
 <title>HOME</title>
 </head>
 <body>
 
 <div style="width: 400px; height:  300px; margin:auto; color:white; margin-top:200px;">
 
 <form method="post" action="index.php?attempt" style="padding-left:45px; padding-top:89px;" enctype="multipart/form-data">
 <table>
 <tr>
 <td id="label">CHURCH: </td> <td><input type="text" name="churchname" placeholder="church name" required></td>
 </tr>
 <tr>
 <td id="label">PASSWORD: </td><td><input type="password" name="pwd" placeholder="password..." required></td>
 </tr>
 <tr>
 <td></td><td><input type="submit" name="submit" id="logbut" value="LOGIN">&nbsp;&nbsp;&nbsp;<a href="registerform.php">REGISTER</a></td>
 </tr>
 </table>
 
 </form>
 
 </div>
 
</body>
</html>

<script>
function open(){
	window.location = "index.php";
}
</script>