<?php

include "../../link.php";

if(isset($_REQUEST['name']) && $_REQUEST['name'] != ""){

	$name = $_REQUEST['name'];

	$quer = "SELECT * FROM `memberinfo` WHERE `name` LIKE '$name%' LIMIT 5";
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

	$quer = "SELECT * FROM `memberinfo` WHERE `name` LIKE '$names%' LIMIT 1";
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