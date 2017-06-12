 <?php 
  session_start();
   if(!isset($_SESSION["user"])){
	 header("location: index.php");
   }
   include "link.php"
 ?>
 <?php
 $churchquery = "SELECT * FROM churchinfo";
 $chruchinforesult = mysqli_query($link, $churchquery);
 	$result = mysqli_fetch_assoc($chruchinforesult);
 	$cname = $result['churchname'];
 	$district = $result['district'];
 	$areaper = $result['areapercent'];
 	$churchper = $result['churchpercent'];
 	$centralper = $result['centralpercent'];
 ?>
 <?php
 	if(isset($_POST['submit'])){
 		$mon = $_POST['month'];
 		$yea = $_POST['year'];
 		$year = $yea % 100;
 	}
 	else{
 		header('location: indexstat.php');
 	}
 ?>
 <html>
 <head>
 <title>FGM</title>
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link rel="icon" type="image/png" href="image/fgmlogo.png">
 <style type="text/css">
 input{
 	padding-left: 20px;
	 border:none;
	 border-bottom:1px solid black;
 }
 th{
 	text-align:center;
 	font-size: 17px;
 	font-weight: bold;
 	padding:6px;
 }
 td{
 	font-size: 21px;
 	padding: 5px;
 }
 .val{
 	font-size:17px;
 }
 .special{
 	font-size: 15px;
 }
 body{
 	color:	#0000CD;
 }
 .logbut{
	 width:200px;
	 height:50px;
	 margin-top: 7px;
	 font-size: 25px;
	 margin-bottom: 15px;
	 margin-left: 300px;
 }
 </style>
<script>
 function printContent(el){
	 var restorpage = document.body.innerHTML;
	 document.getElementById("buttop").style.display = "none";
	 var printcontent = document.getElementById(el).innerHTML;
	 document.body.innerHTML = printcontent;
	 window.print();
	 document.body.innerHTML = restorpage;
 }
</script>
 </head>
 <body>
 	<div id='printpage'>
	<div class='container text-center'>
		<span style='font-size: 30px;'><b>FULL GOSPEL MISSION CAMEROON</b></span><br>
		<span style='font-size: 23px;'><i>MISSION DU PLEIN EVANGILE CAMEROUN</i></span>
	</div>
	<div class='container text-center'>
		<span style='font-size: 30px;'><b>MONTHLY FINANCIAL STATISTICAL RECORD</b></span><br>
		<span style='font-size: 23px;'><i>FINANCE MENSUELLES/ENTEGISTREMENT STATISTIQUE</i></span>
	</div> 
	<div class='container text-center'>
	 	<label class="val">CHURCH<br>EGLISE</label><input type="text" style="font-size: 25px; width:230px;" value="<?= strtoupper($cname); ?>">
	 	<label class="val">DISTRICT<br>DISTRICT</label><input type="text" style="font-size: 25px; width:200px;" value="<?= strtoupper($district); ?>">
	 	<label class="val">MONTH<br>MOIS</label><input type="text" style="width:200px; font-size: 20px;" id="mon" value="<?php echo strtoupper($mon); echo '  '.$yea; ?>">
	</div>
	<div class="container" style='padding-left:100px; padding-right: 100px;'>
		<table style='width:100%; margin-top: 10px;' border="1">
			<tr>
				<th colspan="2">SUND/DIM</th>
				<th>A=OFFER</th>
				<th>B=TIT/DIM</th>
				<th>TOTAL(A+)</th>
				<th colspan="2">MISSIONS</th>
			</tr>
			<?php
  					//$mon = strtolower(date("M"));
  					//$year = date("y");
   					$listquery = "SELECT * FROM `$mon` WHERE year=$year";
   					$queryres = mysqli_Query($link, $listquery);
   					$i = 0;
   					$totoffer = $totTithes = $tot = 0;
   					if(mysqli_num_rows($queryres) == 0){
   						die("<h1 class='text-center'>No Data Available for that year and month</h1>");
   					}
   					else if(mysqli_num_rows($queryres) == 5){
   						while($rows = mysqli_fetch_assoc($queryres)){
   							?>			
 								<tr>
 									<td colspan="2" style="padding-left: 15px;"><?php echo $i += 1; ?>-SUND/DIM</td>
 									<td class="text-right value"><?php echo number_format($rows["offering"]);
 										$totoffer += $rows['offering'];
 										?>
 									</td>
 									<td class="text-right value"><?php echo number_format($rows["tithes"]); 
 										$totTithes += $rows['tithes'];?></td>
 									<td class="text-right value"><?php echo number_format($rows["totalinc"]);
 									$tot += $rows['totalinc'];
 									?></td>
 									<td colspan="2"></td>		
 								</tr>
   							<?php
   						}
   						?>
   							<tr>
   								<td  colspan="2" style="padding-left: 15px;">TOTAL</td>
   								<td class="text-right value"><?php 
   									 echo number_format($totoffer);
   									 ?>	
   								</td>
   								<td class="text-right value"><?php 
   									 echo number_format($totTithes);
   									 ?>FCFA</td>
   								<td class="text-right value"><?php 
   									 echo number_format($tot);
   									 ?></td>
   								<td colspan="2"></td>	
   							</tr>
   						<?php
   					}
   					if(mysqli_num_rows($queryres) == 4){
   						while($rows = mysqli_fetch_assoc($queryres)){
   							?>			
 								<tr>
 									<td colspan="2" style="padding-left: 15px;"><?php echo $i += 1; ?>-SUND/DIM</td>
 									<td class="text-right value"><?php echo number_format($rows["offering"]);
 										$totoffer += $rows['offering'];
 										?>
 									</td>
 									<td class="text-right value"><?php echo number_format($rows["tithes"]); 
 										$totTithes += $rows['tithes'];?></td>
 									<td class="text-right value"><?php echo number_format($rows["totalinc"]);
 									$tot += $rows['totalinc'];
 									?></td>
 									<td colspan="2"></td>		
 								</tr>
   							<?php
   						}
   						?>	
   							<tr>
   								<td style="padding-left: 15px;" colspan="2">5-SUND/DIM</td>
   								<td></td>
   								<td></td>
   								<td></td>
   								<td colspan="2"></td>
   							</tr>
   							<tr>
   								<td style="padding-left: 15px;" colspan="2">EXT. MEET/REU EXT.</td>
   								<td></td>
   								<td></td>
   								<td></td>
   								<td colspan="2"></td>
   							</tr>
   								<td colspan="2" style="padding-left: 15px;">TOTAL</td>
   								<td class="text-right value" class="text-right"><?php 
   									 echo number_format($totoffer);
   									 ?> 	
   								</td>
   								<td class="text-right value"><?php 
   									 echo number_format($totTithes);
   									 ?></td>
   								<td class="text-right value"><?php 
   									 echo number_format($tot);
   									 ?></td>
   								<td colspan="2"></td>	
   							</tr>
   						<?php
   					}
  				?>
  			<tr>
  				<td colspan='5' style="font-size: 20px; padding-left: 5px;">REPARTITION OF THE TOTAL(A+B) REPARTITION DU TOTAL(A+B)</td>
  				<td colspan="2" class="text-right value">
  				<?php 
   					echo number_format($tot);
   					?>
   				</td>
   			</tr>
   			<tr>
   				<td colspan="3">Central Fund / Fonds Central <span style="float:right; padding-right:10px;"><?= $centralper; ?>%</span></td>
   				<td></td>
   				<td>MISSIONS</td>
   				<td  class="text-right value" colspan="2"><?php
   				$centralperVal = ($centralper * $tot)/100;
   					echo number_format(round($centralperVal));
   				?></td>	
   			</tr>
   			<tr>
   				<td style="padding-left: 15px;">1% FGBI</td>
   				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
   				<td colspan="3" style="text-align: center;">AREA/REGION <?= $areaper; ?> %</td>
   				<td  class="text-right value" colspan="2"><?php
   				$newtot = $tot - $centralperVal;
   				$areaperVal = ($areaper * $newtot)/100;
   					echo number_format(round($areaperVal));
   				?></td>
   			</tr>
   			<tr>
   				<td colspan="3" class="text-center"> CHURCH/EGLISE <span style="float:right; padding-right:20px;"><?= $churchper; ?>%</span></td>
   				<td></td>
   				<td></td>
   				<td class="text-right value" colspan="2"><?php
   				$churchperVal = ($churchper * $newtot)/100;
   					echo number_format(round($churchperVal));
   				?></td>	
   			</tr>
   			<tr>
   				<td colspan="7" class="text-center">GRAND TOTAL</td>
   			</tr>	
   			<tr>
   				<th>SUND/DIM</th>
   				<th>MEN<br>/HOMMES</th>
   				<th>WOMEN<br>FEMMES</th>
   				<th>YOUTHS<br>JEUNNES</th>
   				<th>CHILDREN<br>ENFANTS</th>
   				<th>VISITORS<br>VISITEUR</th>
   				<th> TOTAL </th>
   			</tr>
			<?php
  					// $mon = strtolower(date("M"));
  					// $year = date("y");
   				// 	$listquery = "SELECT * FROM `$mon` WHERE year=$year";
   					$queryres = mysqli_Query($link, $listquery);
   					$i = 0;
   					$totMa = $totFe = $totYo = $totCh = $totVi = $totMe = 0;
   					if(mysqli_num_rows($queryres) == 5){
   						while($rows = mysqli_fetch_assoc($queryres)){
   							?>			
 								<tr>
 									<td style="padding-left: 15px;"><?php echo $i += 1; ?>-SUND/DIM</td>
 									<td class="text-center value"><?php echo number_format($rows["male"]);
 										$totMa += $rows['male'];
 										?>
 									</td>
 									<td class="text-center value"><?php echo number_format($rows["female"]); 
 										$totFe += $rows['female'];?>
 									</td>
 									<td class="text-center value">
 									</td>
 									<td class="text-center value"><?php echo number_format($rows["children"]); 
 										$totCh += $rows['children'];?>
 									</td>
 									<td class="text-center value"><?php echo number_format($rows["visit"]); 
 										$totVi += $rows['visit'];?>
 									</td>
 									<td class="text-center value"><?php echo number_format($rows["totalmembers"]);
 									$totMe += $rows['totalmembers'];
 									?></td>		
 								</tr>
   							<?php
   						}
   						?>
   							<tr>
   								<td style="padding-left: 15px;">TOTAL</td>
   								<td class="text-center value"><?php 
   									 echo number_format($totMa);
   									 ?>	
   								</td>
   								<td class="text-center value">
   									<?php 
   									 echo number_format($totFe);
   									 ?>
   								</td>
   								<td class="text-center value">
   								</td>
   								<td class="text-center value">
   									<?php 
   									 echo number_format($totCh);
   									 ?>
   								</td>
   								<td class="text-center value">
   									<?php 
   									 echo number_format($totVi);
   									 ?>
   								</td>
   								<td class="text-center value"><?php 
   									 echo number_format($totMe);
   									 ?>
   								</td>	
   							</tr>
   						<?php
   					}
   					if(mysqli_num_rows($queryres) == 4){
   						while($rows = mysqli_fetch_assoc($queryres)){
   							?>			
 								<tr>
 									<td style="padding-left: 15px;"><?php echo $i += 1; ?>-SUND/DIM</td>
 									<td class="text-center value"><?php echo number_format($rows["male"]);
 										$totMa += $rows['male'];
 										?>
 									</td>
 									<td class="text-center value"><?php echo number_format($rows["female"]); 
 										$totFe += $rows['female'];?>
 									</td>
 									<td class="text-center value"></td>
 									<td class="text-center value"><?php echo number_format($rows["children"]); 
 										$totCh += $rows['children'];?>
 									</td>
 									<td class="text-center value"><?php echo number_format($rows["visit"]); 
 										$totVi += $rows['visit'];?>
 									</td>
 									<td class="text-center value"><?php echo number_format($rows["totalmembers"]);
 									$totMe += $rows['totalmembers'];
 									?></td>		
 								</tr>
   							<?php
   					}
   				?>	
   					<tr>
   						<td style="padding-left: 15px;">5-SUND/DIM</td>
   						<td></td>
   						<td></td>
   						<td></td>
   						<td></td>
   						<td></td>
   						<td></td>
   					</tr>
   					<tr>
   						<td style="padding-left: 15px;" colspan="7">EXT. MEET/REU EXT.</td>
   					</tr>
   							<tr>
   								<td style="padding-left: 15px;">TOTAL</td>
   								<td class="text-center value"><?php 
   									 echo number_format($totMa);
   									 ?>	
   								</td>
   								<td class="text-center value">
   									<?php 
   									 echo number_format($totFe);
   									 ?>
   								</td>
   								<td class="text-center value">
   								</td>
   								<td class="text-center value">
   									<?php 
   									 echo number_format($totCh);
   									 ?>
   								</td>
   								<td class="text-center value">
   									<?php 
   									 echo number_format($totVi);
   									 ?>
   								</td>
   								<td class="text-center value"><?php 
   									 echo number_format($totMe);
   									 ?>
   								</td>	
   							</tr>
   					<?php
   				}
   			?>	
   			<tr>
   				<th>SUND/DIM</th>
   				<th colspan="2">TOPIC/SUJET</th>
   				<th colspan="4" class="special">NAME OF PREACHER/NOM DU PREDICATEUR</th>
   			</tr>
   			<?php
   					$queryres = mysqli_Query($link, $listquery);
   					$i = 0;
   					if(mysqli_num_rows($queryres) == 5){
   						while($rows = mysqli_fetch_assoc($queryres)){
   							?>			
 								<tr>
 									<td style="padding-left: 15px;"><?php echo $i += 1; ?>-SUND/DIM</td>
 									<td style="padding-left: 15px;" colspan="2"><?= $rows["messagetopic"];
 										?>
 									</td>
 									<td style="padding-left: 15px;" colspan="4"><?= $rows["spastor"];?>
 									</td>		
 								</tr>
   							<?php
   						  }
   						?>
   						<?php
   					}
   					if(mysqli_num_rows($queryres) == 4){
   						while($rows = mysqli_fetch_assoc($queryres)){
   							?>			
 								<tr>
 									<td style="padding-left: 15px;"><?php echo $i += 1; ?>-SUND/DIM</td>
 									<td style="padding-left: 15px;" colspan="2"><?= $rows["messagetopic"];
 										?>
 									</td>
 									<td style="padding-left: 15px;" colspan="4"><?= $rows["spastor"];?>
 									</td>		
 								</tr>
   							<?php
   					}
   				?>	
   					<tr>
   						<td style="padding-left: 15px;">5-SUND/DIM</td>
   						<td colspan="2"></td>
   						<td colspan="4"></td>
   					</tr>
   					<tr>
   						<td style="padding-left: 15px;" colspan="7">EXT. MEET/REU EXT.</td>
   					</tr>
   				  <?php
   				}
  			?>
		</table>
	</div>
	<div class='container' style="padding-left: 100px; margin-top:10px; margin-bottom: 20px; padding-right: 100px;">
		<div>
			<label style="font-size: 20px;">SIGN</label><input type='text' style="margin-right:30px; width:250px;">
			<input type='text' style="margin-right:30px; width:250px;">
			<input type='text' style="width:250px;">
		</div>
		<div>
			<div>	
				<span style="font-size: 20px;"><b>Church Fin Sec:</b></span>
				<span style="padding-left:220px; font-size: 20px;"><b>PASTOR/ELDER</b></span>
				<span style="padding-left:90px; font-size: 20px;"><b>DISTRICT SUPERVISOR</b></span>
			</div>
		</div>
		<div>
			<div>	
				<span style="font-size: 20px;"><b>Sec. Fin d'Eglise Locale</b></span>
				<span style="padding-left:140px; font-size: 20px;"><b>PASTEUR/ANCEIN</b></span>
				<span style="padding-left:60px; font-size: 20px;"><b>SUPERVISEUR DE DISTRICT</b></span>
			</div>
		</div>
		<div>
			<input type='text' style="margin-right:280px; width:250px;">
			<label style="font-size: 20px;">DATE:</label><input type='text' style="width:250px;">
		</div>
		<div>
			<span style="font-size: 20px;"><b>AREA FINANCIAL SECRET</b></span><br>
			<span style="font-size: 20px;"><b>SECRET FINANCIER REG.</b></span>
		</div>
	</div>
		<!-- <div class='container' style="padding-left: 100px; margin-top:10px; padding-right: 100px;">
			<div class='row'>
				<div class='col-md-4' style="padding-left: 20px; font-weight: bold; padding-right: 20px;">
					<div class="row">
						<label>SIGN</label><input type='text' style="width:250px;"><br>
						<span>Church Fin Sec:</span><br>
						<span>Sec. Fin d'Eglise Locale</span>
					</div>
					<div class="row">
						<input type='text' style="width:250px;"><br>
						<span><b>AREA FINANCIAL SECRET</b></span><br>
						<span>SECRET FINANCIER REG.</span>
					</div>
				</div>
				<div class='col-md-4' class='text-center' style="padding-left: 20px; padding-right: 20px;">
					<div class='row'>
						<input type='text' style="width:250px;">
						<span style="padding-left:70px;"><b>PASTOR/ELDER</b></span><br>
						<span style="padding-left:67px;">PASTEUR/ANCEIN</span>
					</div>
				</div>
				<div class='col-md-4' style="padding-left: 20px; padding-right: 20px;">
					<div class="row">
						<input type='text' style="width:250px;"><br>
						<span><b>DISTRICT SUPERVISOR</b></span><br>
						<span>SUPERVISEUR DE DISTRICT</span>
					</div>
					<div class="row">
						<input type='text'><br>
						<span><b>DATE: </b></span>
					</div>
				</div>
			</div>
		</div> -->
		</div>
	<button onclick="printContent('printpage')" class='logbut' id="buttop">Print</button>
 </body>
 </html>