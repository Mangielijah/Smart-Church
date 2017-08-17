<?php
include "../../link.php";
$dat = "";
if(isset($_REQUEST['name']) && $_REQUEST['name'] != ""){
	$name = $_REQUEST['name'];

	$searchquery = "SELECT * FROM `memberinfo` WHERE `name` LIKE '%$name%'";
	$searchres = mysqli_query($link, $searchquery);
	if (mysqli_num_rows($searchres) == 1){
    // output data of each row
    	while($row = mysqli_fetch_assoc($searchres)) {
    		$names = $row['name'];
    		$number = $row['phonenumber'];
    		$gender = $row['gender'];
    		$email = $row['email'];
    		$resident = $row['resident'];
    		$p = $row['leadership_position'];
        	echo "
                 <div class='col-md-3'>
                  <img src='../image/person.png' class='img-thumbnail img-responsive' style='width:150px; height:150px; margin-left: 25px; margin-top: 25px; float: right;'>
                 </div>
                 <div class='col-md-8' id='memberarea'>
                  <h2 style='padding-top: 30px;' class='page-header'>$names</h2>
                  <table class='table table-striped'>
                    <tbody>
                      <tr>
                        <td style='font-size: 20px;'>Phone number: </td>
                        <td><i class='fi-telephone-accessible' style='font-size: 25px;'></i> +(237) $number</td>
                      </tr>
                      <tr>
                        <td style='font-size: 20px;'>Gender: </td>
                        <td><i class='fi-male' style='font-size: 25px;'></i> $gender</td>
                      </tr>
                      <tr>
                        <td style='font-size: 20px;'>Email: </td>
                        <td><i class='fi-mail' style='font-size: 25px;'></i> $email </td>
                      </tr>
                      <tr>
                        <td style='font-size: 20px;'>Resident Location: </td>
                        <td><i class='fi-home' style='font-size: 25px;'></i> $resident </td>
                      </tr>
                      <tr>
                        <td style='font-size: 20px;'>Leadership position: </td>
                        <td>$p</td>
                      </tr>
                    </tbody>
                  </table>
                  </div>";
   		 }
	} elseif(mysqli_num_rows($searchres) == 0) {
    	echo "No such members";
	}
  elseif(mysqli_num_rows($searchres) > 1){
    while($row = mysqli_fetch_assoc($searchres)) {
      $names = $row['name'];
      $id = $row['memberId'];
      echo $dat ="<a href='searchdisp.php?id=$id' class='list-group-item'>$names</a>";
    }
  }
}
?>

<?php

if(isset($_REQUEST['name']) && $_REQUEST['name'] != ""){

  $name = $_REQUEST['name'];

  $quer = "SELECT * FROM `memberinfo` WHERE `name` LIKE '%$name%' LIMIT 10";
  //$quer = "SELECT * FROM `test` WHERE `name` LIKE '$name%' LIMIT 5";
  $result = mysqli_query($link, $quer);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
          echo "<option value='".$row['name']."'>";
       }
  } else {
  }
}

?>
