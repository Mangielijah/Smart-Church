<?php
include "../../link.php";
$data = "";
if(isset($_REQUEST['id']) && $_REQUEST['id'] != ""){
	$i = $_REQUEST['id'];
    $groupdataquery = "SELECT * FROM memberinfo WHERE groupId='$i'";
    $groupdataresult = mysqli_query($link, $groupdataquery);
    $leaderquery = "SELECT * FROM `group` WHERE groupId='$i'";
    $leaderresult = mysqli_query($link, $leaderquery);
    $rowname = mysqli_fetch_assoc($leaderresult);
    $leader = $rowname['leadername'];
      while($row = mysqli_fetch_array($groupdataresult)){
        $name = $row['name'];
        $id = $row['memberId'];
        if($name == $leader){
          $data .=" 
          			<tr>
                       <td style='font-size: 20px;''>$name<span class='label label-primary pull-right' style='font-size: 15px; margin-top: 6px;'>Leader</span> </td>
                       <td>
                       		<button type='button' onclick='remove(".$id.")' id='btnremove' class='btn btn-danger'>REMOVE MEMBER <i class='fi-trash'></i></button> 
                       	</td>
                    </tr>
                  ";
        }
        else{
          $data .="
          			<tr>
                       <td style='font-size: 20px;''>$name</td>
                       <td>
								<form method='post' class='form-inline' action='backbone/getdata.php?pos'>
                       		<button type='button' onclick='remove(".$id.")' id='btnremove' class='btn btn-danger'>REMOVE MEMBER <i class='fi-trash'></i></button>
									<input type='text' name='name' style='display:none' value='$name'>
									<input type='number' name='groupid' style='display:none' value='$i'>
									<input type='number' name='memberid' style='display:none' value='$id'>
                       				<button type='submit' id='btnleader' class='btn btn-default'>Make leader</button>
                       			</form>
                       	</td>
                    </tr>
                  ";
        }
      }

      echo $data;
}
?>
<?php
if(isset($_REQUEST['name']) && $_REQUEST['name'] != ""){

	$name = $_REQUEST['name'];

	$quer = "SELECT * FROM `memberinfo` WHERE `name` LIKE '$name%' AND groupId=0 LIMIT 5";
	//$quer = "SELECT * FROM `test` WHERE `name` LIKE '$name%' LIMIT 5";
	$result = mysqli_query($link, $quer);

	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    	while($row = mysqli_fetch_assoc($result)) {
        	echo "<option value='".$row['name']."'>";
   		 }
	} else {
    	echo "0";
	}
}

?>

<?php

if(isset($_REQUEST['names']) && $_REQUEST['names'] != ""){

	$names = $_REQUEST['names'];

	$quer = "SELECT * FROM `memberinfo` WHERE `name` LIKE '$names%' AND groupId=0 LIMIT 1";
	//$quer = "SELECT * FROM `test` WHERE `name` LIKE '$names%' LIMIT 1";
	$result = mysqli_query($link, $quer);

	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    	while($row = mysqli_fetch_assoc($result)) {
        	echo "".$row['memberId']."";
   		 }
	} else {
    	echo "0";
	}
}
?>
<?php
if(isset($_REQUEST['addmem'])){
	$name =$_POST['name'];
		$memid =$_POST['memberid'];
	$groupid =$_POST['group'];

	$insertquery = "UPDATE `memberinfo` SET groupId='$groupid' WHERE memberId='$memid'";
	$insertqueryres = mysqli_query($link, $insertquery);
	//echo $dat = mysqli_info($link);
}
?>
<?php
if(isset($_REQUEST['remove']) && $_REQUEST['remove'] != ""){
	$remove = $_REQUEST['remove'];
    $leaderquery = "SELECT * FROM `group` WHERE memberId='$remove'";
    $leaderresult = mysqli_query($link, $leaderquery);
    $rowname = mysqli_fetch_assoc($leaderresult);
    echo $leader = $rowname['groupId'];
    $num = mysqli_num_rows($leaderresult);
    if($num == 1){
    	$updatequery="UPDATE `group` SET leadername=' ', memberId=0 WHERE groupId='$leader'";
    	mysqli_query($link, $updatequery);
		$removequery = "UPDATE `memberinfo` SET groupId=0 WHERE memberId=".$_REQUEST['remove']."";
		$removequeryres = mysqli_query($link, $removequery);
    }else{
		$removequery = "UPDATE `memberinfo` SET groupId=0 WHERE memberId=".$_REQUEST['remove']."";
		$removequeryres = mysqli_query($link, $removequery);
    }
}
?>

<?php
if(isset($_REQUEST['pos'])){
	$memid = $_POST['memberid'];
	$groupid = $_POST['groupid'];
	$name = $_POST['name'];
    $leaderquery = "SELECT * FROM `group` WHERE groupId='$groupid'";
    $leaderresult = mysqli_query($link, $leaderquery);
    $num = mysqli_num_rows($leaderresult);
    if($num == 1){
    	$update = "UPDATE `group` SET memberId='$memid', leadername='$name' WHERE groupId='$groupid'";
    	mysqli_query($link, $update);
    	$updatemem = "UPDATE memberinfo SET groupId='$groupid' WHERE memberId='$memid'";
    	mysqli_query($link, $updatemem);
    	echo '<script>window.location = "../editgroup.php?add="+'.$groupid.';</script>';
    }
    else{
    	$update = "INSERT INTO `group` SET memberId='$memid', leadername='$name', groupId='$groupid'";
    	mysqli_query($link, $update);
    	$updatemem = "UPDATE memberinfo SET groupId='$groupid' WHERE memberId='$memid'";
    	mysqli_query($link, $updatemem);
    	echo '<script>window.location = "../editgroup.php?add="+'.$groupid.';</script>';
    }
}
?>