<?php 
  session_start();
   if(!isset($_SESSION["user"])){
	 header("location: index.php");
   }
	 include "../link.php";
	 $cname = $_SESSION['user'];
 ?>
<?php
$memid=1;
  if(isset($_REQUEST['add']) && $_REQUEST['add'] == ""){
    $memid = $_SESSION['groupId'];
    unset($_SESSION['groupId']);
    echo "<script>
    document.getElementById('groupId').val = $memid;
    </script>
    ";
  }
  else if(isset($_REQUEST['add']) && $_REQUEST['add'] != ""){
    $memid = $_REQUEST['add'];
    echo "<script>
    document.getElementById('groupId').val = $memid;
    </script>
    ";
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
        			<h1 class='page-header text-danger' style="padding-left: 0px; font-weight: bold;">Edit Group</h1>
        			<div class="row">


                <!--new edit body ---->                    
                    <div class='form-group' style="display: block;">
                      <div class='col-md-10'>
                        <input type='number' class='form-control' value='<?= $memid ?>' id='groupId' placeholder='enter group number....' name='memid' required>
                      </div>
                    </div>
                    <div class='table-responsive col-md-9 collapse' id='body'>
                        <table class="table">
                          <thead>
                            <tr>
                              <th></th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody id='dataarea'>
                          </tbody>
                        </table>
                        <span class='text-primary'>Click here to add member to this group <button class='btn btn-success' id='btnadd'>ADD MEMBER</button></span>
                        <div class="form-inline collapse" id='addmem' style='margin-top: 10px;' role="form">
                          <div class='form-group'>
                            <label for="name">Name:</label>
                            <input list="name" class='form-control' id='membername' style="width: 500px; " name='membername' placeholder="enter name..." required>
                            <datalist id='name'>
                            </datalist>
                            <input type='text' class='form-control' style="display:none;" id='id' name='memid' required>
                          </div>
                          <div class='form-group'>
                            <label for="error" style='padding:7px; margin-top: 20px; display:none; position: relative;' class="alert-danger alert">ss</label>
                          </div>
                          <button type="button" class="btn btn-success" id='btnaddsub'>Add</button>
                        </div>
                    </div>
        			</div>
        		</div>
        	</div>
        </div>
        
 </div>
<script type="text/javascript">
$(document).ready(function(){
    $("#btnadd").click(function(){
        $("#addmem").toggle("slow");
    });

    if($("#groupId").val() != ""){
        $("#body").show("slow");
        $.get("backbone/getdata.php?id=" + $("#groupId").val(), function(datas, statu){
            $("#dataarea").html(""+ datas);
        //alert("Data: " + datas + "\nStatus: " + statu);
      });
    }
    $("#groupId").keyup(function(){
      if($("#groupId").val() != ""){
        $("#body").show("slow");
        $.get("backbone/getdata.php?id=" + $("#groupId").val(), function(datas, statu){
            $("#dataarea").html(""+ datas);
        //alert("Data: " + datas + "\nStatus: " + statu);
        });
      }
      else if($("#groupId").val() == ""){
        $("#body").hide("slow");
      }
    });
    $("#membername").on({
      keyup: function(){
        $.get("backbone/getdata.php?name=" + $("#membername").val(), function(data, status){
          //alert(""+ data);
            $("datalist").html(""+ data);
            //alert("Data: " + data + "\nStatus: " + status);
        });
      },
      keydown: function(){
        $.get("backbone/getdata.php?names=" + $("#membername").val(), function(datass, statu){
            $("#id").attr(
              "value", ""+ datass 
              );
            //alert("Data: " + data + "\nStatus: " + status);
        });
      }
    });
});
 $("#btnaddsub").on({
      focus: function(){
        $.get("backbone/getdata.php?names=" + $("#membername").val(), function(datass, statu){
            $("#id").attr(
              "value", ""+ datass 
              );
            //alert("Data: " + data + "\nStatus: " + status);
        });
      },
      mouseenter: function(){
        $.get("backbone/getdata.php?names=" + $("#membername").val(), function(datass, statu){
            $("#id").attr(
              "value", ""+ datass 
              );
            //alert("Data: " + data + "\nStatus: " + status);
        });
      },
      mouseup: function(){
        $.get("backbone/getdata.php?id=" + $("#groupId").val(), function(datas, statu){
            $("#dataarea").html(""+ datas);
        //alert("Data: " + datas + "\nStatus: " + statu);
        });
      },
      keypress: function(){
        $.get("backbone/getdata.php?id=" + $("#groupId").val(), function(datas, statu){
            $("#dataarea").html(""+ datas);
        //alert("Data: " + datas + "\nStatus: " + statu);
        });
      }
    });
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}
function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
var button = document.getElementById('btnaddsub');
button.addEventListener("click", send);
button.addEventListener("click", final);
function send(){
    $.post("backbone/getdata.php?addmem",
    {
        memberid: $("#id").val(),
        group: $("#groupId").val(),
        name: $("#membername").val()
    });
}
function remove(x){  
  var memid = x;
  $.get("backbone/getdata.php?remove="+ memid, function(){
    final();
  })
}
function final(){
  window.location = "editgroup.php?add="+ $("#groupId").val();    
}
</script>
</html>