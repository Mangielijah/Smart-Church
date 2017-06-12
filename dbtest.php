<?php
	include "link.php";
if(isset($_REQUEST['submittest'])){
	$i = 0;
	$date = 2017;
	$memid = 1000;
	$name = "elijah";
	 $memiddate = $memid ."". $date;
	while($i <= 1000){
	 $query = mysqli_Query($link, "insert into test set name='$name', date='$date', memid='$memid', memiddate='$memiddate'");
	 $i++;
	 $memid++;
	 $memiddate = $memid ."". $date;
	}
	echo "Done";
}
?>
<html>
<head></head>
<body>
	<form method="post" action="dbtest.php?submittest">
		<input type="submit">
	</form>
</body>
</html>