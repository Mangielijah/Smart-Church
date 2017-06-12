<?php 
  session_start();
   if(!isset($_SESSION["user"])){
	 header("location: index.php");
   }
	 include "../link.php";
	 $cname = $_SESSION['user'];
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
	<div class="container">
            <nav class="navbar navbar-default navbar-static-top" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">
						<span><img src="../image/fgmlogo.png" style="width:25px; height:25px;">
						<?php $user = $_SESSION["user"]; echo $church = strtoupper($user);?></span>
 					 </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="../dashboard.php">Home</a></li>
 						<li><a href="../statistics.php">Statistics</a></li>
 						<li><a href='../submissionprev.php'>Submission</a></li>
 						<li class="active"><a href="../discipleship/">Discipleship</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                    	<li>
			 				<form method="post" action="../dashboard.php" enctype="multipart/form-data">
 								<input type="submit" name="logout" style="background:#FFF0F5; border-radius:10px; cursor:pointer; width:50px; height:30px; margin-top: 7px; margin-right:100px;" value="logout">
 							</form>
 						</li>
 					</ul>
                </div>
            </nav>
        </div>

        <div class='container'>
        	<div class='row'>
        		<div class='col-md-9'>
        			<h1 class='page-header text-danger' style="padding-left: 50px; font-weight: bold;">Discipleship Panel</h1>
        			<div class="row">
        				<div class="col-md-4">       					
    						<div class="panel panel-primary">
      							<div class="panel-heading"><a href='#' style="font-size:30px; color: #ffffff; text-decoration: none;">Group 1</a></div>
      							<div class="panel-body" style="padding: 5px;">
      								<div class="list-group">
  										<a href="#" class="list-group-item active"><span class="label label-info pull-right" style="font-size: 15px;">L</span> Mangi Elijah</a>
  										<a href="#" class="list-group-item"> Itor Lewis</a> 
  										<a href="#" class="list-group-item"> Negesa Bright</a>
  										<a href="#" class="list-group-item"> Aka Smith</a> 
  										<a href="#" class="list-group-item"> Bertila Kisevi</a>
  										<a href="#" class="list-group-item"> Liyeuk Reynald</a> 
									</div>
      							</div>
    						</div>
        				</div>
        				<div class="col-md-4">       					
    						<div class="panel panel-primary">
      							<div class="panel-heading"><a href='#' style="font-size:30px; color: #ffffff; text-decoration: none;">Group 2</a></div>
      							<div class="panel-body" style="padding: 5px;">
      								<div class="list-group">
  										<a href="#" class="list-group-item"> Mangi Elijah</a>
  										<a href="#" class="list-group-item"> Itor Lewis</a> 
  										<a href="#" class="list-group-item active"><span class="label label-info pull-right" style="font-size: 15px;">L</span> Negesa Bright</a>
  										<a href="#" class="list-group-item"> Aka Smith</a> 
  										<a href="#" class="list-group-item"> Bertila Kisevi</a>
  										<a href="#" class="list-group-item"> Liyeuk Reynald</a> 
									</div>
      							</div>
    						</div>
        				</div>
        				<div class="col-md-4">       					
    						<div class="panel panel-primary">
      							<div class="panel-heading"><a href='#' style="font-size:30px; color: #ffffff; text-decoration: none;">Group 3</a></div>
      							<div class="panel-body" style="padding: 5px;">
      								<div class="list-group">
  										<a href="#" class="list-group-item"> Mangi Elijah</a>
  										<a href="#" class="list-group-item"> Itor Lewis</a> 
  										<a href="#" class="list-group-item"> Aka Smith</a> 
  										<a href="#" class="list-group-item active"><span class="label label-info pull-right" style="font-size: 15px;">L</span> Bertila Kisevi</a>
  										<a href="#" class="list-group-item"> Liyeuk Reynald</a> 
									</div>
      							</div>
    						</div>
        				</div>
        			</div>
        		</div>
        		<div class='col-md-3'>
 					<div class="page-header">
 						<h3>Advance Options<span class="fi-widget"></span></h3>
 					</div>
        		</div>
        	</div>
        </div>
        
 </div>
  <script type="text/javascript">
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}
function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
</html>