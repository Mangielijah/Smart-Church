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
 <link href="../css/bootstrap-toggle.css" rel="stylesheet">
 <link rel="stylesheet" href="../foundicons/3.0.0/foundation-icons.css">
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
        			<h1 class='page-header text-danger' style="padding-left: 0px; font-weight: bold;">Attendance</h1>
        			<div class="row">
                <div class='col-md-12' style="">
                    <div class='row'>
                      <div class="col-md-4 form-inline">
                        <label for="groupId">Group:</label>
                        <input type="number"  id='groupId' name='groupid' placeholder='enter group number....' class="form-control">
                      </div>
                      <div class='col-md-8'>
                        <form class="form-inline" role="form">
                          <div class="form-group">
                            <label class='control-label' for="day">Day:</label>
                            <input type="number" style='width:60px;' class="form-control" id="day">
                          </div>
                          <div class="form-group">
                            <label class='control-label' for="month">Month:</label>
                            <select style='width:130px;' class="form-control" id="month">
                              <option value='1'>January</option>
                              <option value='2'>February</option>
                              <option value='3'>March</option>
                              <option value='4'>April</option>
                              <option value='5'>May</option>
                              <option value='6'>June</option>
                              <option value='7'>July</option>
                              <option value='8'>August</option>
                              <option value='9'>September</option>
                              <option value='10'>October</option>
                              <option value='11'>November</option>
                              <option value='12'>December</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label class='control-label' for="year">Year:</label>
                            <input type="number" style='width:100px;' class="form-control" id="year">
                          </div>
                          <button type='button' class='btn btn-info' id='getdata'>Show</button>
                        </form>
                      </div>
                    </div>
                    <h2 id='ghead' class='page-header alert alert-info collapse'>Group <span id='gvalue'></span></h2>
                  </div>

                <!--new attendance body ---->
                <div id='body' class=" collapse">
                  <table class="table table-responsive">
                    <thead>
                      <tr>
                        <th>Member Id</th>
                        <th>Name</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody id='dataarea'>   
                    </tbody>
                  </table>
                </div>
        			</div>
        		</div>
        	</div>
        </div>  
 </div>
  <script type="text/javascript">
$(document).ready(function(){
    $("#others"+ $("#groupId").text()).click(function(){
        $("#other1"+ $("#groupId").text()).toggle("slow");
    });
    $("#getdata").click(function(){
      if($("#groupId").val() != "" && $("#day").val() != 0){
         if($("#month").val() != "" && $("#year").val() != 0){
            $("#body").show("slow");
            $("#gvalue").text("" + $("#groupId").val());
            $("#ghead").show("slow");
            $.post("backbone/attendance.php?id", {
              groupid : $("#groupId").val(),
              day : $("#day").val(),
              month : $("#month").val(),
              year :  $("#year").val()
            }, function(datas, statu){
                $("#dataarea").html(""+ datas);
            //alert("Data: " + datas + "\nStatus: " + statu);
            });
          }
        }
    });
      if($("#groupId").val() != "" && $("#day").val() != 0){
        if($("#month").val() != "" && $("#year").val() != 0){
          $("#body").show("slow");
          $("#gvalue").text("" + $("#groupId").val());
          $("#ghead").show("slow");
            $.post("backbone/attendance.php?id", {
              groupid : $("#groupId").val(),
              day : $("#day").val(),
              month : $("#month").val(),
              year :  $("#year").val()
            }, function(datas, statu){
                $("#dataarea").html(""+ datas);
            //alert("Data: " + datas + "\nStatus: " + statu);
            });
        }
      }
    $("#groupId").keyup(function(){
      if($("#groupId").val() != "" && $("#day").val() != 0){
        if($("#month").val() != "" && $("#year").val() != 0){
          $("#body").show("slow");
          $("#gvalue").text("" + $("#groupId").val());
          $("#ghead").show("slow");
            $.post("backbone/attendance.php?id", {
              groupid : $("#groupId").val(),
              day : $("#day").val(),
              month : $("#month").val(),
              year :  $("#year").val()
            }, function(datas, statu){
                $("#dataarea").html(""+ datas);
            //alert("Data: " + datas + "\nStatus: " + statu);
            });
        }
      }
      else if($("#groupId").val() == ""){
        $("#body").hide("slow");
        $("#ghead").hide("slow");
      }
    });
});

var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}
function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}


    function present(x){
      if($("#day").val() != 0){
        if($("#month").val() != 0){
          if($("#year").val() != 0){
            var absid = "abs" + x;
            var perid = "per" + x;
            document.getElementById(absid).style.display = "inline";
            document.getElementById(perid).style.display = "none";
            $.post("backbone/attendance.php?present", 
              {
                memberid: x,
                day: $("#day").val(),
                month: $("#month").val(),
                year: $("#year").val()
              }, 
              function(data){
              }
            );
          }
          else{
          $("#year").val(" ");
          document.getElementById("year").style.borderColor = "red";
          alert("Check your date");
          }
        }
        else{
          $("#month").val(" ");
          document.getElementById("month").style.borderColor = "red";
          alert("Check your date");
        }
      }
      else{
        $("#day").val(" ");
        document.getElementById("day").style.borderColor = "red";
        alert("Check your date");
      }
    }



    function absent(x){
      if($("#day").val() != 0){
        if($("#month").val() != 0){
          if($("#year").val() != 0){
            var absid = "abs" + x;
            var perid = "per" + x;
            document.getElementById(absid).style.display = "none";
            document.getElementById(perid).style.display = "inline";
            $.post("backbone/attendance.php?absent", 
              {
                memberid: x,
                day: $("#day").val(),
                month: $("#month").val(),
                year: $("#year").val()
              }, 
              function(data){
              }
            );
          }
          else{
          $("#year").val(" ");
          document.getElementById("year").style.borderColor = "red";
          alert("Check your date");
          }
        }
        else{
          $("#month").val(" ");
          document.getElementById("month").style.borderColor = "red";
          alert("Check your date");
        }
      }
      else{
        $("#day").val(" ");
        document.getElementById("day").style.borderColor = "red";
        alert("Check your date");
      }
    }


    function late(x){
      if($("#day").val() != 0){
        if($("#month").val() != 0){
          if($("#year").val() != 0){
            var lateid = "late" + x;
            var earlyid = "early" + x;
            document.getElementById(lateid).style.display = "none";
            document.getElementById(earlyid).style.display = "inline";
            $.post("backbone/attendance.php?late", 
              {
                memberid: x,
                day: $("#day").val(),
                month: $("#month").val(),
                year: $("#year").val()
              }, 
              function(data){
              }
            );
          }
          else{
          $("#year").val(" ");
          document.getElementById("year").style.borderColor = "red";
          alert("Check your date");
          }
        }
        else{
          $("#month").val(" ");
          document.getElementById("month").style.borderColor = "red";
          alert("Check your date");
        }
      }
      else{
        $("#day").val(" ");
        document.getElementById("day").style.borderColor = "red";
        alert("Check your date");
      }
    }



    function early(x){
      if($("#day").val() != 0){
        if($("#month").val() != 0){
          if($("#year").val() != 0){
            var lateid = "late" + x;
            var earlyid = "early" + x;
            document.getElementById(lateid).style.display = "inline";
            document.getElementById(earlyid).style.display = "none";
            $.post("backbone/attendance.php?early", 
              {
                memberid: x,
                day: $("#day").val(),
                month: $("#month").val(),
                year: $("#year").val()
              }, 
              function(data){
              }
            );
          }
          else{
          $("#year").val(" ");
          document.getElementById("year").style.borderColor = "red";
          alert("Check your date");
          }
        }
        else{
          $("#month").val(" ");
          document.getElementById("month").style.borderColor = "red";
          alert("Check your date");
        }
      }
      else{
        $("#day").val(" ");
        document.getElementById("day").style.borderColor = "red";
        alert("Check your date");
      }
    }
    function other(x){
      if($("#day").val() != 0){
        if($("#month").val() != 0){
          if($("#year").val() != 0){
            var permissionid = "permission" + x;
            $.post("backbone/attendance.php?other", 
              {
                memberid: x,
                day: $("#day").val(),
                month: $("#month").val(),
                year: $("#year").val(),
                permission: document.getElementById(permissionid).value
              }, 
              function(data){
              }
            );
          }
          else{
          $("#year").val(" ");
          document.getElementById("year").style.borderColor = "red";
          alert("Check your date");
          }
        }
        else{
          $("#month").val(" ");
          document.getElementById("month").style.borderColor = "red";
          alert("Check your date");
        }
      }
      else{
        $("#day").val(" ");
        document.getElementById("day").style.borderColor = "red";
        alert("Check your date");
      }
    }
</script>
 <script src="../js/bootstrap.min.js"></script>
 <script src="../js/bootstrap-toggle.js"></script>
</html>