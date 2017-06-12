<?php 
  session_start();
   if(!isset($_SESSION["user"])){
	 header("location: index.php");
   }
	 include "link.php";
 ?>
 <?php
 if(isset($_POST["logout"])){
	session_destroy();
   header("location: index.php");
 }
 ?>
<html>
<head>
 <link rel="icon" type="image/png" href="image/fgmlogo.png">
 <title>FGM</title>
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="css/bootstrap.theme.css">
 <link rel="stylesheet" href="foundicons/3.0.0/foundation-icons.css">
 <script src="js/bootstrap.min.js"></script>
 <script src="jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
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
  <h3 class="text-center text-info">Please enter the month and the year</h3>
  <div style='margin-left:400px; margin-right:400px;' class="panel panel-default">
    <div class="panel-body" style="padding-left:40px; padding-right:40px;">
    	<form method='post' action='statistics.php' role='form' class="form-horizontal">
    		<div class='form-group'>
    			<label class='control-label' for='month'>Month</label>
  				<select class="form-control primary" id="month" name='month'>
    				<option value='jan'>January</option>
    				<option value='feb'>February</option>
    				<option value="mar">March</option>
    				<option value="apr">April</option>
    				<option value='may'>May</option>
    				<option value='jun'>June</option>
    				<option value="jul">July</option>
    				<option value="aug">August</option>
    				<option value='sep'>September</option>
    				<option value='oct'>October</option>
    				<option value="nov">November</option>
    				<option value="dec">December</option>
  				</select>
    		</div>
    		<div class="form-group">
    			<label class='control-label' for='year'>Year</label>
    			<input type='number' class='primary form-control' id='year' name='year'>
    		</div>
    		<input type='submit' name='submit' class="form-control btn btn-success">
    	</form>
    </div>
  </div>
</div>
</html>