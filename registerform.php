  <?php 
 include "link.php";
 
 if(isset($_REQUEST["submit"])){
      $churchname =strtolower(mysqli_real_escape_string($link, $_POST["cname"]));
	  $pasname =$_POST["Pname"];
	  $psd =sha1(mysqli_real_escape_string($link, $_POST["pwd"]));
	  $district =$_POST["district"];
	  $area =$_POST['area'];
	  $dnumber = $_POST['dnumber'];
	  $support =$_POST["Psup"];
	  $cfpercent =$_POST["cfpercent"];
	  $apercent =$_POST["Apercent"];
	  $cpercent =$_POST["cpercent"];
	  $pnum =$_POST["Pnum"];
	  
	  $qry = "insert into churchinfo set churchname='$churchname', support='$support', password='$psd', pastor='$pasname',
	  district='$district', number ='$pnum', area='$area', dnumber='$dnumber', centralpercent='$cfpercent', areapercent='$apercent', churchpercent='$cpercent'";
	  mysqli_Query($link, $qry);
	  
	  header("location: index.php");
 }
 ?>
 <?php
 $testquery = "select * from churchinfo";
 	$queryresult = mysqli_Query($link, $testquery);
 	if(mysqli_num_rows($queryresult) > 0){
 	header("location:	index.php?err");
 	}
 ?>
 <html>
 <head>
 <link rel="icon" type="image/png" href="image/fgmlogo.png">
 <title>FGM</title>
 <style>
 #header{
	 min-width:600px;
	 height:70px;
	 background:#87CEEB;
	 color:white;
 }
 #title{
	 border:1px solid white;
	 font-size:40px;
	 font-weight:bold 
 }
 #body{
	 width:700px;
	 height:590px;
	 margin:auto;
	 background:#FFF;
 }
 table{
	 margin:auto;
 }
 td{
	 text-align:center;
	 font-size:20px;
 }
 
 #sbutton{
     width:100px;	
	background:#6495ED;
	 color:white;
	 font-weight:bold;
	 float:right;
	 font-size:15px;
	 cursor:pointer;
 }
 #sbutton:hover{
	 background:#00008B;
	 color:white;
 }
 input{
	width:400px; 
	font-size:20px;
 }
 </style>
 </head>
 <body>
 <div id="header">
 <img src="image/fgmlogo.png" style="width:70px; height:50px;">
 <span id="title"> FULL GOSPEL MISSION</span>
 </div>
 <div id="body">
 <h4 style="padding-left:100px; padding-top:20px; font-weight:bold; color:red;">FILL IN THE FOLLOWING INFORMATION FOR YOUR CHURCH</h4>
 <form method="post" action="registerform.php?submitted" enctype="multipart/form-data">
 <table>
 <tr>
 <td>CHURCH NAME:</td></tr><tr><td><input type="text" name="cname" value="" placeholder="enter church name..." required></td>
 </tr>
 <tr>
 <td>Password:<td>
 </tr>
 <tr>
 <td>
 <input type="password" name="pwd" value="" id="rpwd" placeholder="enter password..." required>
 </td>
 </tr> 
 <tr>
 <td>Confirm Password:<td>
 </tr>
 <tr>
 <td>
 <input type="password" name="pwd" value="" id="cpwd" onblur="checkpwd()" placeholder="Confirm password..." required>
 </td>
 </tr>
  <tr>
 <td>Name of Area<td>
 </tr>
 <tr>
 <td>
 <input type="text" name="area" value="" placeholder="enter name of area..." required>
 </td>
 </tr>
  <tr>
 <td>Name of District<td>
 </tr>
 <tr>
 <td>
 <input type="text" name="district" value="" placeholder="enter name of district..." required>
 </td>
 </tr>
  <tr>
 <td>District pastor's number<td>
 </tr>
 <tr>
 <td>
 <input type="number" name="dnumber" value="" placeholder="enter district pastor number..." required>
 </td>
 </tr>
 <tr>
  <tr>
 <td>Pastor's Name:</td></tr><tr><td><input type="text" name="Pname" value="" placeholder="enter pastor's name..." required></td>
 </tr>
 <td>Pastor's Support:</td></tr><tr><td><input type="number" name="Psup" value="" placeholder="enter pastor's Support..." required></td>
 </tr>
  <tr>
 <td>Pastor's N&#730;:</td></tr><tr><td><input type="number" name="Pnum" value="" placeholder="enter pastor's number..." required></td>
 </tr>
 <tr>
 <td>Central Fund Percentage</td>
 </tr>
 <tr>
 <td><input type="number" name="cfpercent" value="14" id="cfper" placeholder="central fund..." required></td>
 </tr>
 <tr>
 <td>Area Percentage</td>
 </tr>
 <tr>
 <td><input type="number" name="Apercent" value="" id="aper" placeholder="Area percentage..." required></td>
 </tr>
 <tr>
 <td>Church Percentage</td>
 </tr>
 <tr>
 <td><input type="number" name="cpercent" id="cper" value="" placeholder="church percentage..." required></td>
 </tr>
 <tr>
 <td><input type="submit" id="sbutton" onclick="checkper()" name="submit" value="REGISTER">
 </td>
 </tr>
  </table>
 </form>
 </div>
 </body>
 </html>
 
 <script>
 //checking if correct password inserted
 function checkpwd(){
 var fp = document.getElementById("rpwd");
var sp = document.getElementById("cpwd");
	if(fp.value != sp.value){
		fp.style.borderColor = "red";
		sp.style.borderColor = "red";
		fp.value = "";
		sp.value = "";
	}
	else{
		fp.style.borderColor = "lightgreen";
		sp.style.borderColor = "lightgreen";
	}
}
 function checkper(){
	 var x = document.getElementById("cper");
      var y = document.getElementById("aper");
	  //var u = document.getElementById("cfper");
	  
	 //var z = Number(x.value) + Number(y.value) + Number(u.value);
	 var z = Number(y.value) + Number(x.value);
	 if(z > 100){
		 alert("Sum of percentage is GREATER than 100\n check Percentages");
		x.value = "";
		 y.value = "";
		// u.value = "";
		 x.style.borderColor = "red";
		 y.style.borderColor = "red";
		// u.style.borderColor = "red";
	 }
	 else if(z < 100){
		 alert("Sum of percentage is LESS than 100\n check Percentages");
		x.value = "";
		 y.value = "";
		// u.value = "";
		 x.style.borderColor = "red";
		 y.style.borderColor = "red";
		// u.style.borderColor = "red";
	 }
	 }
 </script>