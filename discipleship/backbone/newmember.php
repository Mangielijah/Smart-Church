<?php

include "../../link.php";

if(isset($_REQUEST['submit'])){

	$id = $_POST['memid'];
	$name = $_POST['memname'];
	$number = $_POST['number'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$resident = $_POST['resident'];
	$position = $_POST['position'];

	$query = "INSERT INTO memberinfo SET name='$name', memberId='$id', phonenumber='$number', gender='$gender', resident='$resident', email='$email', leadership_position='$position'";
	$result = mysqli_query($link, $query);
}

	header('location: ../newmember.php');
?>