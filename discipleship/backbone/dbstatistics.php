
<?php
if(isset($_REQUEST['male'])){
	$select = "SELECT * FROM memberinfo WHERE gender='male'";
	$selectres = mysqli_query($link, $select);
	$male = mysqli_num_rows($selectres);
	echo "".$male;
}
?>