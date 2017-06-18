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
        		<div class='col-md-3'>
 					<div class="page-header">
 						<h3>Advance Options<span class="fi-widget"></span></h3>
 					</div>
      					<div class="list-group">
                <a href="searchdisp.php" class="list-group-item"><span class="label label-info pull-right" style="font-size: 15px;"><i class="fi-magnifying-glass"></i></span>Search</a> 
                <a href="newgroup.php" class="list-group-item"><span class="label label-info pull-right" style="font-size: 15px;"><i class="fi-plus"></i></span> Create new group</a>
                <a href="newmember.php" class="list-group-item"><span class="label label-info pull-right" style="font-size: 15px;"><i class="fi-plus"></i></span> Add new member</a> 
                <a href="editgroup.php" class="list-group-item"><span class="label label-info pull-right" style="font-size: 15px;"><i class="fi-paperclip"></i></span> Edit group</a> 
                <a href="markattendance.php" class="list-group-item"><span class="label label-info pull-right" style="font-size: 15px;"><i class="fi-check"></i></span> Mark attendance</a>
                <a href="analysis.php" class="list-group-item"><span class="label label-info pull-right" style="font-size: 15px;"><i class="fi-graph-bar"></i></span> Analysis</a>
						</div>
          <div class="page-header">
            <h3>Total Record</h3>
          </div>
                <div class="list-group">
                <a href="#" class="list-group-item"><span style="font-size: 25px;"><i class="fi-torso"></i></span> Male<span class="pull-right label label-info" style="font-size: 15px; padding:5px;">500</span></a> 
                <a href="#" class="list-group-item"><span style="font-size: 25px;"><i class="fi-torso-female"></i></span> Female<span class="pull-right label label-info" style="font-size: 15px; padding:5px;">300</span> </a>
                <a href="#" class="list-group-item"><span style="font-size: 25px;"><i class="fi-torsos-female-male"></i></span> Groups<span class="pull-right label label-info" style="font-size: 15px; padding:5px;">150</span></a> 
                <a href="#" class="list-group-item"><span style="font-size: 25px;"><i class="fi-torso-business"></i></span> Leaders<span class="pull-right label label-info" style="font-size: 15px; padding:5px;">50</span></a> 
            </div>
            </div>