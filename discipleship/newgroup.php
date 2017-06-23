<?php 
  session_start();
   if(!isset($_SESSION["user"])){
	 header("location: index.php");
   }
    include "../link.php";
	 $cname = $_SESSION['user'];
 ?>
 <?php

  $err = "";

if(isset($_REQUEST['create'])){
  $name = $_POST["leadername"];
  //$groupid = $_POST['groupid'];
  $memid = $_POST['memid'];

  $quer = "SELECT * FROM `memberinfo` WHERE `memberId`='$memid' AND name='$name'";
  //$quer = "SELECT * FROM `test` WHERE `name` LIKE '$name%' LIMIT 5";
  $result = mysqli_query($link, $quer);

  if (mysqli_num_rows($result) == 1) {
    $insert = "INSERT INTO `group` SET memberId='$memid', leadername='$name'";
    mysqli_query($link, $insert);
    $groupid = mysqli_insert_id($link);
    $update = "UPDATE memberinfo SET groupId='$groupid' WHERE memberId='$memid'";
    mysqli_query($link, $update);
    header("location: editgroup.php?add");
  } 
  elseif(mysqli_num_rows($result) == 0) {
      $err = "Member does not exist in the systerm please add the member before creating the group ";
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
        			<h1 class='page-header text-danger' style="padding-left: 0px; font-weight: bold;">Create Group</h1>
        			<div class="row">
              <?php
                if($err == ""){

                }else{
                  echo "<div class='alert alert-danger'><b style='font-size:20px;'>".$err."</b>";
                }
              ?>
                <!--new group body-->
                <form method="post" action='newgroup.php?create' class='form-horizontal' role='form' enctype="multipart/form-data">
                    <div class='form-group'>
                      <div class='col-md-10'>
                        <input list="name" class='form-control' id='leadername' name='leadername' placeholder="enter group leader..." required>
                          <datalist id="name">
                          </datalist>
                      </div>
                      <div class='label label-primary status'></div>
                    </div>
                    <div class='form-group' style="display: none;">
                      <div class='col-md-10'>
                        <input type='text' class='form-control' id='id' name='memid' required>
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
    myVar = setTimeout(showPage, 3000);
}
function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}

$(document).ready(function(){
    $("#leadername").on({
      keyup: function(){
        var x = document.getElementById("leadername").value;
        $.get("backbone/check.php?name=" + x, function(data, status){
          //alert(""+ data);
            $("datalist").html(""+ data);
            $(".status").text(""+ status);
            //alert("Data: " + data + "\nStatus: " + status);
        });
      },
      keydown: function(){
        $.get("backbone/check.php?names=" + $("#leadername").val(), function(datas, statu){
            $("#id").attr(
              "value", ""+ datas 
              );
            //alert("Data: " + data + "\nStatus: " + status);
        });
      }
    });
  });
$(".btn").click(function(){
  $.get("backbone/check.php?names=" + $("#leadername").val(), function(datas, statu){
    $("#id").attr(
     "value", ""+ datas 
    );
    //alert("Data: " + datas + "\nStatus: " + statu);
 });
});
</script>
</html>