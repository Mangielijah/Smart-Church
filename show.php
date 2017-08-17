<?php 
  session_start();
   if(!isset($_SESSION["user"])){
	 header("location: index.php");
   }
 ?> 
 <?php
	 include "link.php";
	 $cname = $_SESSION['user'];
if(isset($_REQUEST['update1'])){
 	$areaper = $_POST["area"];
 	$churchper = $_POST['church'];
 	$updatequery = "UPDATE churchinfo SET areapercent='$areaper', churchpercent='$churchper' WHERE churchname='$cname'";
 	mysqli_Query($link, $updatequery);
 	header('location: dashboard.php');
 }
 else if(isset($_REQUEST['update2'])){

 	$pname = $_POST['pname'];
 	$pnumber = $_POST['pnum'];
 	$psupport = $_POST['psup'];

 	$updquery = "UPDATE churchinfo SET pastor='$pname', `number`='$pnumber', support='$psupport' WHERE churchname='$cname'";
 	mysqli_query($link, $updquery);
 	header('location: dashboard.php');
 }
?>
 <?php
 if(isset($_POST["logout"])){
	session_destroy();
   header("location: index.php");
 }

 $query = "SELECT * FROM churchinfo WHERE churchname='$cname'";
 	$result = mysqli_Query($link, $query);
 	$row = mysqli_fetch_assoc($result);
 ?>
 <head>
 <link rel="icon" type="image/png" href="image/fgmlogo.png">
 <title>FGM</title>
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="css/bootstrap.theme.css">
 <link rel="stylesheet" href="foundicons/3.0.0/foundation-icons.css">
 <script src="js/bootstrap.min.js"></script>
 <script src="jquery/1.11.3/jquery.min.js"></script>
 <style type="text/css">
   
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
  text-align: center;
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
  <span id="loadtext">loading...</span>
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
						<span><img src="image/fgmlogo.png" style="width:25px; height:25px;">
						<?php $user = $_SESSION["user"]; echo $church = strtoupper($user);?></span>
 					 </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="dashboard.php">Home</a></li>
            <li><a href="statistics.php">Statistics</a></li>
            <li><a href='submissionprev.php'>Submission</a></li>
            <li><a href="discipleship/">Discipleship</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                    	<li>
			 				<form method="post" action="dashboard.php" enctype="multipart/form-data">
 								<input type="submit" name="logout" style="background:#FFF0F5; border-radius:10px; cursor:pointer; width:50px; height:30px; margin-top: 7px; margin-right:100px;" value="logout">
 							</form>
 						</li>
 					</ul>
                </div>
            </nav>
        </div>
 <div class="container">
 	<div class="row">
 		<div class="col-md-12">
 			<div class="page-header">
 				<h1>Monthly Statistics</h1>
 			</div>
 			<table class="table table-responsive">
 				<tr>
 					<th></th>
 					<th>Preacher</th>
 					<th>Message Topic</th>
 					<th>Offering</th>
 					<th>Tithes</th>
 					<th>Total</th>
 					<th> </th>
 				</tr>
 				<?php
  					$mon = $_POST['month'];
  					$yea = $_POST['year'];
            $year = $yea % 100;
   					$listquery = "SELECT * FROM `$mon` WHERE year=$year";
   					$queryres = mysqli_Query($link, $listquery);
   					$i = 0;
   					if(mysqli_num_rows($queryres) > 0){
   						while($rows = mysqli_fetch_assoc($queryres)){
   							?>			
 								<tr>
 									<td>Sunday <?php echo $i += 1; ?></td>
 									<td><?php echo $rows["spastor"]?></td>
 									<td><?php echo $rows["messagetopic"]?></td>	
 									<td><?php echo number_format($rows["offering"])?> FCFA</td>
 									<td><?php echo number_format($rows["tithes"])?> FCFA</td>
 									<td><?php echo number_format($rows["totalinc"])?> FCFA</td>
 									<td>
 										<a href="edit.php?edit=<?=$rows['ID']?>" class="btn btn-success">Edit</a>
 									</td>		
 								</tr>
   							<?php
   						}
   					}
   					else
   						echo "<h1 class='text-danger'>Sorry No information available for ". strtoupper($mon) ."  $year </h1>";
  				?>			
 			</table>
 		</div>
 		<!-- <div class="col-md-3">
 			<div class="page-header">
 				<h2>Advance Options<span class="fi-widget"></span></h2>
 			</div>
  			<button type="submit" data-target="#demo" data-toggle="collapse" class="btn btn-default form-control">
  				<b>Edit percentages<span style="font-size:25px;" class="pull-right fi-plus"></span></b>
  			</button>

  			<div id="demo" class="">
  				<form method="post" role="form" action="dashboard.php?update1" style="padding-left: 5px; padding-right: 5px;" enctype="multipart/form-data">
  					<div class="form-group">
  						<label class="control-label" for="area">Area Percentage</label>
  						<input type="number" id='area' name="area" value="<?= $row['areapercent'] ?>" class="form-control">
  						<label class="control-label" for="church">Church Percentage</label>
  						<input type="number" id='church' name="church" value="<?= $row['churchpercent'] ?>" class="form-control">
  					</div>
  					<input type="submit" value="Update" class="btn btn-primary form-control">
  				</form>
  			</div>
  			<button class="btn btn-default form-control">
  				<b>Edit pastor info<span style="font-size:25px;" class="pull-right fi-plus"></span></b>
  			</button>
  				<form method="post" role="form" action="dashboard.php?update2" style="padding-left: 5px; padding-right: 5px;" enctype="multipart/form-data">
  					<div class="form-group">
  						<label class="control-label" for="pname">Pastor name</label>
  						<input type="text" id='pname' name="pname" value="<?= $row['pastor'] ?>" class="form-control">
  						<label class="control-label" for="pnum">Pastor number</label>
  						<input type="number" id='pnum' name="pnum" value="<?= $row['number'] ?>" class="form-control">
  						<label class="control-label" for="support">Pastor Support</label>
  						<input type="number" id="support" name="psup" value="<?= $row['support'] ?>" class="form-control">
  					</div>
  					<input type="submit" value="Update" class="btn btn-primary form-control">
  				</form>
  			</div>
		</div> -->
 	</div>
  </div>
  <script type="text/javascript">
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}
function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("loadtext").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
</body>