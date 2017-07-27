<?php 
  session_start();
   if(!isset($_SESSION["user"])){
	 header("location: index.php");
   }
	 include "../link.php";
	 $cname = $_SESSION['user'];
 ?>
 <?php
  $dynamicgroup = "";
  $data = "";
  $totalgroupquery ="SELECT * FROM `group`";
  $totalgroupresult = mysqli_query($link, $totalgroupquery);
  $totalgroup = mysqli_num_rows($totalgroupresult);
  $i = 1;
  while($i <= $totalgroup){
    $groupdataquery = "SELECT * FROM memberinfo WHERE groupId='$i'";
    $groupdataresult = mysqli_query($link, $groupdataquery);
    $leaderquery = "SELECT * FROM `group` WHERE groupId='$i'";
    $leaderresult = mysqli_query($link, $leaderquery);
    if($leaderresult){
      $rowname = mysqli_fetch_assoc($leaderresult);
      $leader = $rowname['leadername'];
        while($row = mysqli_fetch_array($groupdataresult)){
          $name = $row['name'];
          if($name == $leader){
            $data .="<a href='#' class='list-group-item'><span class='label label-info pull-right' style='font-size: 15px;''>L</span>$name</a>";
          }
          else{
            $data .="<a href='#' class='list-group-item'>$name</a>";
          }
        }
      // $phone = $row['phonenumber'];
      // $resident = $row['resident'];
      // $lposition = $row['leadership_position'];
      // $gender = $row['gender'];
      // $email = $row['email'];
        $dynamicgroup .= "
                <div class='col-md-4'>                
                  <div class='panel panel-primary'>
                    <div class='panel-heading'><a href='#' style='font-size:30px; color: #ffffff; text-decoration: none;''>Group ".$i."</a></div>
                    <div class='panel-body' style='padding: 5px;''>
                      <div class='list-group'> 
                        $data 
                      </div>
                    </div>
                  </div>
                </div>
                ";
      $i++;
      $data = "";
    }
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
        			 <h1 class='page-header text-danger' style="padding-left: 0px; font-weight: bold;">Main Panel</h1>
        			<div class="row">
        				<?= $dynamicgroup ?>
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