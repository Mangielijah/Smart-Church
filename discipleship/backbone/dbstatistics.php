<?php
	$mselect = "SELECT * FROM memberinfo WHERE gender='male'";
	$selectres = mysqli_query($link, $mselect);
	$male = mysqli_num_rows($selectres);
	$fselect = "SELECT * FROM memberinfo WHERE gender='female'";
	$fselectres = mysqli_query($link, $fselect);
	$female = mysqli_num_rows($fselectres);
	$gselect = "SELECT * FROM `group`";
	$gselectres = mysqli_query($link, $gselect);
	$group = mysqli_num_rows($gselectres);
	$leaderselect = "SELECT * FROM `memberinfo` WHERE `leadership_position`!='' ";
	$lselectres = mysqli_query($link, $leaderselect);
	$leader = mysqli_num_rows($lselectres);
?>