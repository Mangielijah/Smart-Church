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

 <?php
if(isset($_REQUEST['attempt']))
{

	unset($_SESSION['month']);
	unset($_SESSION['year']);

header('location: submission.php');
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
	 widht:900px;
	 position:relative;
	 height:200px;
 }
 img{
	 position:absolute;
	 left:90px;
	 top:60px;
 }
 #box2{
	 positon:absolute;
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
 table, tr, td{
	 border:1px solid black;
	 border-collapse: collapse;
 }
 td{
	 text-align:right;
	 padding-right:3px;
 }
 .logbut{
	 width:200px;
	 height:50px;
	 margin-top: 7px;
	 font-size: 25px;
	 margin-bottom: 15px;
 }
 .logbu{
    -webkit-appearance: button;
    display: inline-block;
    padding: 6px 80px;
    margin-bottom: 9px;
    font-size: 25px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    text-decoration: none;
    color: #000000;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
 }
</style>
<script>
 function printContent(el){
	 var restorpage = document.body.innerHTML;
	 document.getElementById("buttop").style.display = "none";
	 document.getElementById("butto").style.display = "none";
	 var printcontent = document.getElementById(el).innerHTML;
	 document.body.innerHTML = printcontent;
	 window.print();
	 document.body.innerHTML = restorpage;
 }

</script>
<title>
FGM</title>
<link rel="icon" type="image/png" href="image/fgmlogo.png">
<?php
$qury = mysqli_query($link, "select * from churchinfo");
$row = mysqli_fetch_assoc($qury);
$church = $row['churchname'];
$pastor = $row['pastor'];
$pnumber = $row['number'];
$support = $row['support'];
$centralpercent = $row['centralpercent'];
$areapercent = $row['areapercent'];
$churchpercent = $row['churchpercent'];

?>
<?php 
//substr($mo,0,3);
	 // $x = strtolower(date('M'));
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
	 	$checkquer = "SELECT * FROM mission WHERE mon='$x' AND year='$ye'";
	 	$firstresul = mysqli_query($link, $checkquer);
	 	$mision = mysqli_fetch_assoc($firstresul);
	 		$miss = $mision['mission'];
	 		$edu = $mision['edu'];
	 		$area = $mision['areaeva'];

	 	$checkque = "SELECT * FROM otherincome WHERE mon='$x' AND year='$ye'";
	 	$firstresu = mysqli_query($link, $checkque);
	 	$otherincome = mysqli_fetch_assoc($firstresu);
	 	$other = $otherincome['others'];
	 	$pension = $otherincome['pension'];
	 	$districtfund = $otherincome['districtfund'];
	 	$districtevang = $otherincome['districtevang'];
	 	$childrenthirty = $otherincome['childrenthirty'];
	 	$childrentwenty = $otherincome['childrentwenty'];
	 	$childrenfifteen = $otherincome['childrenfifteen'];
?>
</head>
   <body>
      <div id="printpage">
	     <div id="box1">
	    <img src="image/fgmlogo.png" alt="fgmlogo">
		<div id="box2">
           <span id="sp1">FULL GOSPEL MISSION CAMEROON</span><br>
		   <span>MISSION DU PLIEN EVANGILE DU CAMEROUN</span><br>
		   <span id="sp2">SOUTH WEST AREA III</span><br>
		   <span id="sp3">LIMBE DISTRICT / DISTRICT DE LIMBE </span><br>
		   <span>TEL: (+237)651757952;</span>&nbsp;&nbsp;<span><?php
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
	 <label>DATE:</label><input type="text" style="width:110px; font-size: 20px;" id="date" value="<?php
	    echo date("d-m-y");
	 ?>">
	 </div>
	 <table border="1" width="100%" style="font-size:23px; margin-top:10px;">
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
	 <td><?php 
	 	if($miss > 0){
	 		echo number_format($miss);
	 	}
	 	else
	 		echo " ";
	 ?></td>
	 <td>SUPPLIMENT</td>
	 <td></td>
	 </tr>
	 <tr>
	 <td colspan="2" style="width:25%;">AREA EVANGELISM</td>
	 <td><?php 
	 	if($area > 0){
	 		echo number_format($area);
	 	}
	 	else
	 		echo " ";
	 ?></td>
     <td  style="width:25%;">RENTS</td><td  style="width:30%;"></td>
	 </tr>
	 <tr>
	 <td colspan="2" style="width:25%;">EDUCATION</td>
	 <td><?php 
	 	if($edu > 0){
	 		echo number_format($edu);
	 	}
	 	else
	 		echo " ";
	 ?></td>
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
	 <td><?php 
	 	if($pension > 0){
	 		echo number_format($pension);
	 	}
	 	else
	 		echo " ";
	 ?></td>
     <td  style="width:25%;">ALLOWANCE</td>
	 <td  style="width:30%;"></td>
	 </tr>
	 <tr>
	 <td colspan="2" style="width:25%;">DISTRICT FUND</td>
	 <td><?php 
	 	if($districtfund > 0){
	 		echo number_format($districtfund);
	 	}
	 	else
	 		echo " ";
	 ?></td>
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
	 <td><?php 
	 	if($childrenthirty > 0){
	 		echo number_format($childrenthirty);
	 	}
	 	else
	 		echo " ";
	 ?></td>
     <td  style="width:25%;">Advance Submission</td>
	 <td  style="width:30%;"><?php
	 	if($ot > 0){
	 	echo number_format(moneyConverter(floor($ot)));	
	 	}
	 ?></td>
	 </tr>
	 <tr>
	 <td>15%</td>
	 <td><?php 
	 	if($childrenfifteen > 0){
	 		echo number_format($childrenfifteen);
	 	}
	 	else
	 		echo " ";
	 ?></td>
	 <td></td>
	 <td></td>
	 </tr>
	 <tr>
	 <td>20%</td>
	 <td><?php 
	 	if($childrentwenty > 0){
	 		echo number_format($childrentwenty);
	 	}
	 	else
	 		echo " ";
	 ?></td>
	 <td></td>
	 <td></td>
	 </tr>
	 <tr>
	 <td colspan="2" style="width:25%;">DISTRICT EVANGELISM</td>
	 <td><?php 
	 	if($districtevang > 0){
	 		echo number_format($districtevang);
	 	}
	 	else
	 		echo " ";
	 ?></td>
     <td  style="width:25%;"></td><td  style="width:30%;"></td>
	 </tr>
	 <tr>
	 <td colspan="2" style="width:25%;">OTHERS</td>
	 <td><?php 
	 	if($other > 0){
	 		echo number_format($other);
	 	}
	 	else
	 		echo " ";
	 ?></td>
     <td  style="width:25%;"></td><td  style="width:30%;"></td>
	 </tr>
	 <tr>
	 <td colspan="2" style="width:25%;">TOTAL</td>
	 <td style="text-align:right; color: red; font-weight:bold;"><?php
	 	$total = $abal + $centralpec + $ptit + $districtevang + $districtfund + $miss + $area + $edu + $pension + $childrenthirty + $childrentwenty + $other + $childrenfifteen;
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
<!-- 	<button name='back' onclick="back()" class='logbut' id='butto'>Back</button> -->
<a href="Submission.php?attempt" class="logbu" id="butto">Back</a>
	<button onclick="printContent('printpage')" class='logbut' id="buttop">Print</button>
	</div>
    </body>
</html>