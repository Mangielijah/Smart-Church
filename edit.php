<?php 
  session_start();
   if(!isset($_SESSION["user"])){
	 header("location: index.php");
   }
	 include "link.php";
	 $cname = $_SESSION['user'];
 ?>
 <?php
 		$p = $msg = $of = $ti = $to = $ma = $fe = $vi = $ch = $ato = "";
 	if(isset($_GET['edit']) && $_GET['edit'] != 0){
 			$id = $_GET['edit'];
 			$mon = strtolower(date('M'));
 			$editquery = "SELECT * FROM `$mon` WHERE ID='$id'";
 			$editdata = mysqli_Query($link, $editquery);
 			if(mysqli_num_rows($editdata) > 0){
 				$editrow = mysqli_fetch_assoc($editdata);
 				$p = $editrow['spastor'];
 				$msg = $editrow['messagetopic'];
 				$of = $editrow['offering'];
 				$ti =$editrow['tithes'];
 				$to = $editrow['totalinc'];
 				$ma = $editrow['male'];
 				$fe = $editrow['female'];
 				$vi = $editrow['visit'];
 				$ch = $editrow['children'];
 				$ato = $editrow['totalmembers'];
 			}
 			else if(!isset($_GET['edit'])){
 				header('location: edit.php');
 			}
 	}
 ?>
 <?php

 if(isset($_REQUEST["submit1"])){
	 $pname =$_POST["preaher"];
	 $message = $_POST["msg"];
	 $offer =$_POST["offer"];
	 $id = $_POST['id'];
	 $tithes =$_POST["tithes"];
	 $total =$_POST["total"]; 
	 $m =$_POST["male"];
	 $f =$_POST["female"];
	 $v =$_POST["visit"];
	 $c =$_POST["children"];
	 $to =$_POST["tot"];
	 $mon =$_POST["mon"];
	 $mon = strtolower($mon);
	 $iqry = "UPDATE `$mon` SET offering='$offer', tithes='$tithes', messagetopic='$message', totalinc='$total', spastor='$pname', male='$m', female='$f', visit='$v', children='$c', totalmembers='$to' WHERE ID='$id'";
	 mysqli_Query($link, $iqry);
 	header('location: show.php');
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
 <style>
 #mon{
	width:70px;
	font-size:30px;
	padding-left:8px;
	height:70px;
	border:0px;
	border-radius:100%;
	background:#FFA500;
	color:white;
	box-shadow:2px 1px 15px grey;
}
#mon:hover{
	background:red;
	box-shadow:2px 1px 9px grey;
}
</style>
 <script>
 function dat(){
 	   var d = new Date();
	   var mon = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
	   document.getElementById("mon").value = mon[d.getMonth()];
 }
 
function calc(){
	var x = document.getElementById("o").value;
	var y = document.getElementById("t").value;
	var z = 0;
	z =Number(x)+Number(y);
	document.getElementById("tot").value = parseFloat(z);
}
function calc1(){
	var m = document.getElementById("m").value;
	var f = document.getElementById("f").value;
	var v = document.getElementById("v").value;
	var c = document.getElementById("c").value;
	var z = 0;
	z = Number(m) + Number(f) + Number(v) + Number(c);
	document.getElementById("to").value = z;
} 
 </script>
 </head>
 <body onload="dat()">
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
                        <li class="active"><a href="">Home</a></li>
 						<li><a href="statistics.php">Statistics</a></li>
 						<li><a href="#">How it Work's</a></li>
 						<li><a href="#">Search</a></li>
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
 		<div class="col-md-9">
 		<form method="post" action="edit.php?submit1" class="form-horizontal" role="form" enctype="multipart/form-data">
			<span>
				<span class="text-danger" style="padding-left: 100px; font-size: 60px;">Sunday Statistics</span>
	  			<input type="text" name="mon" class="pull-right" id="mon" required>
	  		</span>
 			<div class="form-group">
 				<label class="control-label col-md-4" for="preacher">Name of Preacher</label>
 				<div class="col-md-8">
 					<input type="text" class="form-control" id="preacher" name="preaher" value="<?= $p; ?>" placeholder="Name of Preacher..." required>
 				</div>
 			</div>
 			<div class="form-group">
 				<label class="control-label col-md-4" for="msg">Message topic</label>
 				<div class="col-md-8">
 					<input type="text" class="form-control" id="msg" name="msg" value="<?= $msg; ?>" placeholder="Topic of message..." required>
 				</div>
 			</div>
 			<div class="form-group">
 				<label class="control-label col-md-4" for="o">Offering</label>
 				<div class="col-md-8">
 					<input type="number" id="o" class="form-control" name="offer" value="<?= $of; ?>" placeholder="enter offering..." required>
 				</div>
 			</div>
 			<div class="form-group">
 				<label class="control-label col-md-4" for="t">Tithes</label>
 					<div class="col-md-8">
 						<input type="number" id="t" class="form-control" name="tithes" value="<?= $ti; ?>" onblur="calc()" placeholder="enter tithes..." required>
 					</div>
 			</div>
 			<div class="form-group">
 				<label class="control-label col-md-4" for="tot">Total</label>
 				<div class="col-md-8">
 					<input type="number" id="tot" class="form-control" name="total" onfocus="calc()" value="<?= $to; ?>" placeholder="Total..." readonly>
 				</div>
 			</div>
 			<div class="page-header" style="padding-left: 100px; padding-right: 100px;">
 				<h2 class="text-primary">ATTENDANCE</h2>
 			</div>
 		
 			<div class="form-group">
 				<label class="control-label col-md-4" for="m">Male</label>
 				<div class="col-md-8">
 					<input type="number" id="m" name="male" value="<?= $ma; ?>" class="form-control" placeholder="Number of Male...." required>
 				</div>
 			</div>
 			<div class="form-group">
 				<label class="control-label col-md-4" for="f">Female</label>
 				<div class="col-md-8">
 					<input type="number" id="f" name="female" class="form-control" value="<?= $fe; ?>" placeholder="Number of Female..." required>
 				</div>
 			</div>
 			<div class="form-group">
 				<label class="control-label col-md-4" for="v">Visitors</label>
 				<div class="col-md-8">
 					<input type="number" id="v" name="visit" value="<?= $vi; ?>" class="form-control" placeholder="Number of Visitors...." required>
 				</div>
 			</div>
 			<div class="form-group">
 				<label class="control-label col-md-4" for="c">Children</label>
 				<div class="col-md-8">
 					<input type="number" id="c" name="children" class="form-control" onblur="calc1()" value="<?= $ch; ?>" placeholder="Number of Children..." required>
 				</div>
 			</div>
 			<div class="form-group">
				<label class="control-label col-md-4" for="to">Total</label>
				<div class="col-md-8">
					<input type="number" id="to" class="form-control" value="<?= $ato; ?>" name="tot" onfocus="calc1()" placeholder="Total...." readonly>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-4" for="submit"></label>
				<div class="col-md-8">
					<input type='hidden' name='id' value="<?= $id ?>">
					<input type="submit" class="form-control btn btn-primary" id="submit" value="UPDATE">
				</div>
			</div>
		</form>
 		</div>
 		<div class="col-md-3">
 			<!-- <div class="page-header">
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
  			<a href="show.php" class="btn btn-default form-control">
  				<b>View sunday statistic<span style="font-size:25px;" class="pull-right fi-plus"></span></b>
  			</a>
  		</div>
 -->	</div>
 </div>
</body>