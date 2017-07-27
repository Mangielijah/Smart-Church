<?php 
  session_start();
   if(!isset($_SESSION["user"])){
	 header("location: index.php");
   }
   include 'converter.php';
     include "link.php";
 ?>
 <?php
 	if(isset($_SESSION['month']) && isset($_SESSION['year'])){
 		$x = $_SESSION['month'];
 	 	$yea = $_SESSION['year'];
 		$ye = $yea % 100;
 	}
 	else{
 		header('location: indexsub.php');
 	}
 ?>
<html>
<head>
<style>
#printpage{
	width:900px;
	height:800px;
	margin:auto;
	padding-left:50px;
	padding-right:50px;
} #box1{
	 width:900px;
	 position:relative;
	 height:200px;
 }
 img{
	 position:absolute;
	 left:90px;
	 top:60px;
 }
 #box2{
	 position:absolute;
	 height:200px;
	 text-align:center;
	 font-size:25px;
    float:left;	
	width:900px;
 }
 #sp1{
	 font-size:35px;
	 color:red;
	 font-weight:bold;
 }
 #sp2{
	 font-size:30px;
 }
 #sp3{
	 font-size:30px;
	 font-weight:bold;
	 padding-left:25px;
 }
 input{
	 text-align:center;
	 border:none;
	 border-bottom:1px solid black;
 }
 .inputclass{
	 text-align:right;
	 border:none;
	 font-size:20px;
 }
 table, tr, td{
	 border:1px solid black;
	 border-collapse: collapse;
 }
 td{
	 text-align:right;
	 padding-right:3px;
 }
 #logbut{
	 width:200px;
	 height:50px;
	 margin-top: 7px;
	 font-size: 25px;
 }
</style>
<title>
FGM</title>
<link rel="icon" type="image/png" href="image/fgmlogo.png">
<?php
	$qury = mysqli_query($link, "select * from churchinfo");
	$row = mysqli_fetch_assoc($qury);
		$church = $row['churchname'];
		$pastor = $row['pastor'];
		$areap = $row['area'];
		$district = $row['district'];
		$dnumber = $row['dnumber'];
		$pnumber = $row['number'];
		$support = $row['support'];
		$centralpercent = $row['centralpercent'];
		$areapercent = $row['areapercent'];
		$churchpercent = $row['churchpercent'];
?>
<?php
	  //$x = strtolower(date('M'));
	  //$ye = date('y');//substr($ye, 2);
	 $qy = mysqli_query($link, "select * from `$x` where year='$ye'");
	  $tota = 0;
	  while($row = mysqli_fetch_array($qy)){
	    $tota = $tota + $row["totalinc"];
	  }
	  $centralpec = $onehunpec = 0;
	   $centralpec = ($tota * $centralpercent)/100;
	   $onehunpec = ($tota * (100 - $centralpercent))/100;
	 	$su = $ot = $tot = 0;
	$qr = mysqli_query($link, "select * from expenditures where mon='$x' and year='$ye'");
	if(mysqli_num_rows($qr) == 0){
		$ot = "";
	}
	 	$row = mysqli_fetch_assoc($qr);
	 	if($row["others"] == 0){
		  	$ot = " ";
	 	}else{
			$ot = 0;
		 	$ot = $row["others"];
		 	$tot = $tot + $ot;
	 	}
?>
	 <?php
	 	if(isset($_REQUEST['submit'])){
	 		$mission = $_POST['mission'];
	 		$areaevang = $_POST['areaevang'];
	 		$education = $_POST['education'];
	 		$pension = $_POST['pension'];
	 		$districtfund = $_POST["districtfun"];
	 		$districtevang = $_POST["districtevan"];
	 		$other = $_POST['other'];
	 		$childrenThirty = $_POST['childrenThirty'];
	 		$childrenFifteen = $_POST['childrenFifteen'];
	 		$childrenTwenty = $_POST['childrenTwenty'];
	 		$advance = $_POST['advance'];
	 		$checkquery = "SELECT * FROM expenditures WHERE mon='$x' AND year='$ye'";
	 		if(mysqli_num_rows(mysqli_query($link, $checkquery)) < 1 ){
	 			$qryexpenditure =  "INSERT INTO expenditures SET others='$advance', mon='$x', year='$ye'";
			}else if(mysqli_num_rows(mysqli_query($link, $checkquery)) == 1){
			$qryexpenditure =  "UPDATE expenditures SET others='$advance' WHERE mon='$x' AND year='$ye'";
			}

	 		$checkquery = "SELECT * FROM mission WHERE mon='$x' AND year='$ye'";
	 		$fresult = mysqli_query($link, $checkquery);
	 		if(mysqli_num_rows($fresult) < 1 ){
	 		$qrymission = "INSERT INTO mission SET mission='$mission', areaeva='$areaevang', edu='$education', mon='$x', year='$ye'";
			}
			else{
				$qrymission = "UPDATE mission SET mission='$mission', areaeva='$areaevang', edu='$education' WHERE mon='$x' AND year='$ye'";
			}

	 		$checkquery = "SELECT * FROM otherincome WHERE mon='$x' AND year='$ye' LIMIT 1";
	 		if(mysqli_num_rows(mysqli_query($link, $checkquery)) == 0 ){
	 		$qryincome ="INSERT INTO otherincome SET pension='$pension', childrentwenty='$childrenTwenty', childrenfifteen='$childrenFifteen',districtfund='$districtfund', districtevang='$districtevang', childrenthirty='$childrenThirty', others='$other', mon='$x', year='$ye'";
			}else if(mysqli_num_rows(mysqli_query($link, $checkquery)) == 1){
				$qryincome ="UPDATE otherincome SET pension='$pension', childrentwenty='$childrenTwenty', childrenfifteen='$childrenFifteen', districtfund='$districtfund', districtevang='$districtevang', childrenthirty='$childrenThirty', others='$other' WHERE mon='$x' AND year='$ye'";
			}
	 		mysqli_query($link, $qryexpenditure);
	 		mysqli_query($link, $qrymission);
			mysqli_query($link, $qryincome);

			header('location: submissionprev.php');
	 	}
	 ?>
<?php

	 	$checkquer = "SELECT * FROM mission WHERE mon='$x' AND year='$ye'";
	 	$firstresul = mysqli_query($link, $checkquer);
	 	$mision = mysqli_fetch_assoc($firstresul);
	 		$miss = $mision['mission'];
	 		$edu = $mision['edu'];
	 		$area = $mision['areaeva'];

	 	$checkque = "SELECT * FROM otherincome WHERE mon='$x' AND year='$ye'";
	 	$firstresu = mysqli_query($link, $checkque);
	 	$otherincome = mysqli_fetch_assoc($firstresu);
?>
</head>
   <body>
   		<div style='width:900px; margin:auto; color:#0000FF; padding-top: 16px; font-size: 15px;'>
   			<h1>Info!</h1><b>This is a preview of the original submission page of that month the value you find on the form are calculated using the information you had inserted and are correct and accurate. If you wish to add more information to the form you can click on the corresponding blank spaces and insert the information<h2> Make sure you click on the modify button below if you make additions the form</h2> </b>
   		</div>
      <div id="printpage">
	     <div id="box1">
	    	<img src="image/fgmlogo.png" alt="fgmlogo">
		<div id="box2">
           <span id="sp1">FULL GOSPEL MISSION CAMEROON</span><br>
		   <span>MISSION DU PLIEN EVANGILE DU CAMEROUN</span><br>
		   <span id="sp2"><?= strtoupper($areap) ?></span><br>
		   <span id="sp3"><?= strtoupper($district) ?> DISTRICT / DISTRICT DE <?= strtoupper($district) ?> </span><br>
		   <span>TEL: (+237)<?= $dnumber ?>;</span>&nbsp;&nbsp;<span><?php
			//number for church info
		   		if($pnumber == ""){
		   			echo "";
		   		}
		   		else
		   			echo $pnumber;
		   ?></span><br>
		   <span id="sp3">DISTRICT ACCOUNT SLIP</span>
		</div>
	 </div>
	 <div style="font-size: 20px;">
	 <label>NAME:</label><input type="text" style="font-size: 15px;" value="<?php
			   echo strtoupper($pastor);
	 ?>">
	 <label>ASSEMBLY:</label><input type="text" style="font-size: 15px;" value="<?php
		echo strtoupper($church);
	 ?>">
	 <label>MONTH:</label><input type="text" style="width:110px; font-size: 20px;" id="mon" value="<?php
	 echo strtoupper($x);
	 ?>">
	 <label>DATE:</label><input type="text" style="width:100px; font-size: 20px;" id="date" value="<?php
	    echo date("d-m-y");
	 ?>">
	 </div>
<form method='post' action='submissionprev.php?submit'>
	 <table border="1" width="100%" style="font-size:20px; margin-top:10px;">
	 <tr colspan="5">
	<td style="text-align:center;padding:1px;" colspan="3">INCOME</td>
	 <td style="text-align:center; padding:1px;" colspan="2">EXPENDITURES</td>	
	</tr>
	 <tr>
	 <td colspan="2" style="width:25%; text-align:center;">SPECIFICATION</td>
	 <td style="text-align:center; width:25%;">AMOUNT</td>
     <td  style="width:25%; text-align:center;">SPECIFICATION</td><td style="width:25%; text-align:center;">AMOUNT</td>
	 </tr>
	 <tr>
	 	 <td colspan="2" style="width:25%;">CENTRAL FUND</td>
	 <td><?php
	 $cfpec = $centralpec;
	 echo number_format(moneyConverter(floor($cfpec)));
	 ?></td>
	 <td>SUPPORT</td>
	 	<td><?php
      echo number_format(moneyConverter(floor($support)));
		 ?></td>
	 </tr>
	 <tr>
	 	 <td colspan="2" style="width:25%;">AREA BALANCE</td>
		 <td><?php
			 $apec = $areapercent;
			 $apc = ($onehunpec * $apec)/100;
			 //echo $tot;
	 		 $abal = moneyConverter(floor($abal = $apc - $tot));
	 		 echo number_format($abal);

	 		?></td>
	 <td>SUPPORT</td>
	 <td></td>
	 </tr>
	 <tr>
	 <td colspan="2" style="width:25%;">MISSIONS</td>
	 <td><input type='number' class='inputclass' name='mission' value="<?= 
	 	$miss;
	 ?>"></td>
	 <td>SUPPLIMENT</td>
	 <td></td>
	 </tr>
	 <tr>
	 <td colspan="2" style="width:25%;">AREA EVANGELISM</td>
	 <td><input type='number' class='inputclass' name='areaevang' value="<?php 
	 echo $area;
	 ?>"></td>
     <td  style="width:25%;">RENTS</td><td  style="width:30%;"></td>
	 </tr>
	 <tr>
	 <td colspan="2" style="width:25%;">EDUCATION</td>
	 <td><input type='number' class='inputclass' name='education' value="<?php 
	 echo $edu;
	 ?>"></td>
     <td  style="width:25%;">SICK HELP</td>
	 <td  style="width:30%;"></td>
	 </tr>
	 <tr>
	 <td colspan="2" style="width:25%;">PASTOR'S  TITHES</td>
	 <td><?php
	 $ptit = ($support * 10)/100;
	 echo number_format(moneyConverter(floor($ptit)));
	 ?></td>
     <td  style="width:25%;">TRANSPORT</td>
	 <td  style="width:30%;"></td>
	 </tr>
	 <tr>
	 <td colspan="2" style="width:25%;">PENSION</td>
	 <td><input type='number' class='inputclass' name='pension' value="<?php 
	 echo $pention = $otherincome['pension'];
	 ?>"></td>
     <td  style="width:25%;">ALLOWANCE</td>
	 <td  style="width:30%;"></td>
	 </tr>
	 <tr>
	 <td colspan="2" style="width:25%;">DISTRICT FUND</td>
	 <td><input type='number' class='inputclass' name='districtfun' value="<?php
	 $districtfund=$otherincome['districtfund']; 
	 echo $districtfund;
	 ?>"></td>
     <td  style="width:25%;">TELEPHONE</td>
	 <td  style="width:30%;"></td>
	 </tr><!-- 
	 <tr>
	 <td colspan="2" style="width:25%;">PENSION</td>
	 <td></td>
     <td  style="width:25%;"></td><td  style="width:30%;"></td>
	 </tr>
	 <tr>
	 <td colspan="2" style="width:25%;">DISTRICT FUND</td>
	 <td>20000</td>
     <td  style="width:25%;"></td><td  style="width:30%;"></td>
	 </tr> -->
	 <tr>
	 <td rowspan="3" style="width:12%; padding-left:8px;">CHILDREN</td>
	 <td>30%</td>
	 <td><input type='number' class='inputclass' name='childrenThirty' value="<?php
	 $childrenthirty=$otherincome['childrenthirty']; 
	 echo $childrenthirty;
	 ?>"></td>
     <td  style="width:25%;">Advance Submission</td>
	 <td  style="width:30%;"><input type='number' class='inputclass' name='advance' value="<?php
	 	if($ot > 0){
	 	echo moneyConverter(floor($ot));	
	 	}
	 ?>"></td>
	 </tr>
	 <tr>
	 <td>15%</td>
	 <td><input type='number' class='inputclass' name='childrenFifteen' value="<?php
	 $childrenfifteen=$otherincome['childrenfifteen']; 
	 echo $childrenfifteen;
	 ?>"></td>
	 <td></td>
	 <td></td>
	 </tr>
	 <tr>
	 <td>20%</td>
	 <td><input type='number' class='inputclass' name='childrenTwenty' value="<?php
	 $childrentwenty=$otherincome['childrentwenty']; 
	 echo $childrentwenty;
	 ?>"></td>
	 <td></td>
	 <td></td>
	 </tr>
	 <tr>
	 <td colspan="2" style="width:25%;">DISTRICT EVANGELISM</td>
	 <td><input type='number' class='inputclass' name='districtevan' value="<?php
	 $districtevang = $otherincome['districtevang']; 
	 echo $districtevang;
	 ?>"></td>
     <td  style="width:25%;"></td><td  style="width:30%;"></td>
	 </tr>
	 <tr>
	 <td colspan="2" style="width:25%;">OTHERS</td>
	 <td><input type='number' class='inputclass' name='other' value="<?php
	 $other=$otherincome['others']; 
	 echo $other;
	 ?>"></td>
     <td  style="width:25%;"></td><td  style="width:30%;"></td>
	 </tr>
	 <tr>
	 <td colspan="2" style="width:25%;">TOTAL</td>
	 <td style="text-align:right; color: red; font-weight:bold;"><?php
	 	$total = $abal + $centralpec + $ptit + $districtfund + $districtevang + $childrenfifteen + $miss + $area + $edu + $pention + $childrenthirty + $childrentwenty + $other;
	 	$total = floor($total);
	 	echo number_format(moneyConverter($total));
	 	echo " CFA"
	 ?></td>
     <td  style="width:25%;">TOTAL</td><td  style="width:30%; text-align:center;"></td>
	 </tr>
	 <tr>
	 <td colspan="2" style="width:25%;">SIGNATURE</td>
	 <td></td>
     <td  style="width:25%;">SIGNATURE</td><td style="width:30%;"></td>
	 </tr>
	 </table>
	 <input type="submit" name="submitbut" id='logbut' value="MODIFY">
	 <a href='submission.php' style="margin-left: 15px;" id='logbut'>Proceed to Print</a>
</form>
	</div>
  </body>
</html>