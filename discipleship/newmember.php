<?php 
  session_start();
   if(!isset($_SESSION["user"])){
	 header("location: index.php");
   }
	 include "../link.php";
	 $cname = $_SESSION['user'];
 ?>
<?php
  $memid = 1001;
  $idquery = "SELECT * FROM memberinfo";
  $result = mysqli_query($link, $idquery);
  $num = mysqli_num_rows($result);
  if($num > 0){
   $memid = $memid + $num;
  }
?>
<html>
<head>
 <link rel="icon" type="image/png" href="../image/fgmlogo.png">
 <title>FGM</title>
 <link href="../css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="../css/bootstrap.theme.css">
 <link rel="stylesheet" href="../foundicons/3.0.0/foundation-icons.css">
 <script src="../js/bootstrap.min.js"></script>
 <script src="../jquery/1.11.3/jquery.min.js"></script>
 <style>  
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
}
#loadtext{
  color:blue;
  font-size: 15px;
  position: absolute;
  left: 47%;
  top: 46.5%;
  z-index: 1
}  
 </style>
 </head>
 <body onload="myFunction()">
 	<div id="loader"></div>

 <div style="display:none;" id="myDiv" class="animate-bottom">
<?php include 'layout.php' ?>

        		<div class='col-md-9'>
        			<h1 class='page-header text-danger' style="padding-left: 0px; font-weight: bold;">Add new member</h1>
        			<div class="row">


                <!--new member body ---->
                <form method="post" action='backbone/newmember.php?submit' class='form-horizontal' role='form' enctype="multipart/form-data">

                    <div class='form-group' style="display: none;">
                      <div class='col-md-10'>
                        <input type='number' class='form-control' id='id' name="memid" value='<?= $memid ?>' required>
                      </div>
                    </div>
                    <div class='form-group'>
                      <div class='col-md-10'>
                        <input type='text' class='form-control' id='name' name='memname' placeholder="enter name..." required>
                      </div>
                    </div>
                    <div class='form-group'>
                      <div class='col-md-10'>
                        <input type='text' class='form-control' name='number' placeholder="enter number...">
                      </div>
                    </div>
                    <div style="padding-left: 20px; padding-bottom: 16px;">
                      <label class="radio-inline"><input type="radio" name="gender" value="male" checked>Male</label>
                      <label class="radio-inline"><input type="radio" name="gender" value="female">Female</label>
                    </div>
                    <div class='form-group'>
                      <div class='col-md-10'>
                        <input type='text' class='form-control' name='email' placeholder="enter email address..." r>
                      </div>
                    </div>
                    <div class='form-group'>
                      <div class='col-md-10'>
                        <input type='text' class='form-control' name='resident' placeholder="enter resident location..." required>
                      </div>
                    </div>
                    <div class='form-group'>
                      <div class='col-md-10'>
                        <input type='text' class='form-control' name='position' placeholder="enter leadership position...">
                      </div>
                    </div>
                    <input type='submit' class='btn btn-primary' value="Register">

                </form>


        			</div>
        		</div>
        	</div>
        </div>
        
 </div>
  <script type="text/javascript">
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 1000);
}
function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
</html>