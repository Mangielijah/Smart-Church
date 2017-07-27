<?php
include "../../link.php";
$data = "";
if(isset($_REQUEST['id'])){
	$i = $_POST['groupid'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
    $groupdataquery = "SELECT * FROM memberinfo WHERE groupId='$i'";
    $groupdataresult = mysqli_query($link, $groupdataquery);
      while($row = mysqli_fetch_array($groupdataresult)){
        $name = $row['name'];
        $id = $row['memberId'];
		$memberIdDate = $id ."".$day."".$month."".$year;
		$testquery = "SELECT * FROM `attendance` WHERE memberIdDate='$memberIdDate'";
		$testqueryres = mysqli_query($link, $testquery);
		if(mysqli_num_rows($testqueryres) == 1){
			$rows = mysqli_fetch_assoc($testqueryres);
			$present = $rows['present'];
			$late = $rows['late'];
			$other = $rows['others'];
			if($present == 1){
				if($late == 1){	
          		  $data .=" 
          			 <tr>
                        <td id='memid'>$id</td>
                        <td>$name</td>
                        <td>
                          <button class='btn btn-primary collapse' id='per$id' onclick='present($id)'>Present</button>
                          <button class='btn btn-success' id='abs$id' onclick='absent($id)'>Absent</button>
                          <button class='btn btn-danger' id='late$id' style='display:none' onclick='late($id)'>Late</button>
                          <button class='btn btn-warning' id='early$id' onclick='early($id)'>Early</button>
                          <input type='text' placeholder='enter permission...' id='permission$id'>
                          <button class='btn btn-default' id='submit$id' onclick='other($id)'>Submit</button>
                        </td>
                     </tr>
                  ";

				}else{		
          		  $data .=" 
          			 <tr>
                        <td id='memid'>$id</td>
                        <td>$name</td>
                        <td>
                          <button class='btn btn-primary collapse' id='per$id' onclick='present($id)'>Present</button>
                          <button class='btn btn-success' id='abs$id' onclick='absent($id)'>Absent</button>
                          <button class='btn btn-danger' id='late$id' onclick='late($id)'>Late</button>
                          <button class='btn btn-warning' id='early$id' style='display:none' onclick='early($id)'>Early</button>
                          <input type='text' placeholder='enter permission...' id='permission$id'>
                          <button class='btn btn-default' id='submit$id' onclick='other($id)'>Submit</button>
                        </td>
                     </tr>
                  ";
				}

			}else{
				if($other != ""){	
          		 $data .=" 
          			 <tr>
                        <td id='memid'>$id</td>
                        <td>$name</td>
                        <td>
                          <button class='btn btn-primary' id='per$id' onclick='present($id)'>Present</button>
                          <button class='btn btn-success collapse' id='abs$id' onclick='absent($id)'>Absent</button>
                          <button class='btn btn-danger' id='late$id' onclick='late($id)'>Late</button>
                          <button class='btn btn-warning' id='early$id' style='display:none' onclick='early($id)'>Early</button>
                          <input type='text' placeholder='enter permission...' value='$other' id='permission$id'>
                          <button class='btn btn-default' id='submit$id' onclick='other($id)'>Submit</button>
                        </td>
                     </tr>
                  ";
				}
			}

		}
		else{
          $data .=" 
          			 <tr>
                        <td id='memid'>$id</td>
                        <td>$name</td>
                        <td>
                          <button class='btn btn-primary' id='per$id' onclick='present($id)'>Present</button>
                          <button class='btn btn-success collapse' id='abs$id' onclick='absent($id)'>Absent</button>
                          <button class='btn btn-danger' id='late$id' onclick='late($id)'>Late</button>
                          <button class='btn btn-warning' id='early$id' style='display:none' onclick='early($id)'>Early</button>
                          <input type='text' placeholder='enter permission...' id='permission$id'>
                          <button class='btn btn-default' id='submit$id' onclick='other($id)'>Submit</button>
                        </td>
                     </tr>
                  ";
		}	
      }

      echo $data;
}
?>

<?php
if(isset($_REQUEST['present'])){
	$memberId = $_POST['memberid'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$memberIdDate = $memberId ."".$day."".$month."".$year;

	$checkquery = "SELECT * FROM `attendance` WHERE memberIdDate='$memberIdDate'";
	$checkqueryres = mysqli_query($link, $checkquery);
	$numrow = mysqli_num_rows($checkqueryres);
	if($numrow == 0){
		$presentquery = "INSERT INTO `attendance` SET memberId='$memberId', present=1, memberIdDate='$memberIdDate', day='$day', month='$month', year='$year', others=' '";
		mysqli_query($link, $presentquery);
	}
	else if($numrow == 1){
		$presentquery = "UPDATE `attendance` SET present=1, others=' ' WHERE memberIdDate='$memberIdDate'";
		mysqli_query($link, $presentquery);
	}
}
?>
<?php
if(isset($_REQUEST['absent'])){
	$memberId = $_POST['memberid'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$memberIdDate = $memberId ."".$day."".$month."".$year;

	$checkquery = "SELECT * FROM `attendance` WHERE memberIdDate='$memberIdDate'";
	$checkqueryres = mysqli_query($link, $checkquery);
	$numrow = mysqli_num_rows($checkqueryres);
	if($numrow == 0){
		$absentquery = "INSERT INTO `attendance` SET memberId='$memberId', present=0, late=0, memberIdDate='$memberIdDate', day='$day', month='$month', year='$year', others=' '";
		mysqli_query($link, $absentquery);
	}
	else if($numrow == 1){
		$presentquery = "UPDATE `attendance` SET present=0, late=0, others=' ' WHERE memberIdDate='$memberIdDate'";
		mysqli_query($link, $absentquery);
	}
}
?>
<?php
if(isset($_REQUEST['late'])){
	$memberId = $_POST['memberid'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$memberIdDate = $memberId ."".$day."".$month."".$year;

	$checkquery = "SELECT * FROM `attendance` WHERE memberIdDate='$memberIdDate'";
	$checkqueryres = mysqli_query($link, $checkquery);
	$numrow = mysqli_num_rows($checkqueryres);
	if($numrow == 0){
		$absentquery = "INSERT INTO `attendance` SET memberId='$memberId', present=1, late=1, memberIdDate='$memberIdDate', day='$day', month='$month', year='$year', others=' '";
		mysqli_query($link, $absentquery);
	}
	else if($numrow == 1){
		$presentquery = "UPDATE `attendance` SET present=1, late=1, others=' ' WHERE memberIdDate='$memberIdDate'";
		mysqli_query($link, $presentquery);
	}
}
?>
<?php
if(isset($_REQUEST['early'])){
	$memberId = $_POST['memberid'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$memberIdDate = $memberId ."".$day."".$month."".$year;

	$checkquery = "SELECT * FROM `attendance` WHERE memberIdDate='$memberIdDate'";
	$checkqueryres = mysqli_query($link, $checkquery);
	$numrow = mysqli_num_rows($checkqueryres);
	if($numrow == 0){
		$absentquery = "INSERT INTO `attendance` SET memberId='$memberId', present=1, late=0, memberIdDate='$memberIdDate', day='$day', month='$month', year='$year', others=' '";
		mysqli_query($link, $absentquery);
	}
	else if($numrow == 1){
		$presentquery = "UPDATE `attendance` SET present=1, late=0, others=' ' WHERE memberIdDate='$memberIdDate'";
		mysqli_query($link, $presentquery);
	}
}
?>
<?php
if(isset($_REQUEST['other'])){
	$memberId = $_POST['memberid'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$permission = $_POST['permission'];
	$memberIdDate = $memberId ."".$day."".$month."".$year;

	$checkquery = "SELECT * FROM `attendance` WHERE memberIdDate='$memberIdDate'";
	$checkqueryres = mysqli_query($link, $checkquery);
	$numrow = mysqli_num_rows($checkqueryres);
	if($numrow == 0){
		$absentquery = "INSERT INTO `attendance` SET memberId='$memberId', present=0, late=0, memberIdDate='$memberIdDate', day='$day', month='$month', year='$year', others='$permission'";
		mysqli_query($link, $absentquery);
	}
	else if($numrow == 1){
		$presentquery = "UPDATE `attendance` SET present=0, late=0, others='$permission' WHERE memberIdDate='$memberIdDate'";
		mysqli_query($link, $presentquery);
	}
}
?>