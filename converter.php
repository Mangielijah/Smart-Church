<?php

$firstCheckNum = 0;
$secondCheckNum = 0;

	//echo moneyConverter(45585);	

 function moneyConverter($money){
 	$firstCheckNum = $money % 100;
 	if($firstCheckNum < 50 ){
 			if($firstCheckNum < 25){

 				if($firstCheckNum <15){
 						//round down to 0
 					$secondCheckNum = $money % 25;
 					if($secondCheckNum == 0)
 						return $money;
 					return $money - $secondCheckNum;
 				}
 				if($firstCheckNum >= 15 ){
 					//round upp to 25
 					$secondCheckNum = $money % 25;
 					if ($secondCheckNum == 0)
    					return $money;
  					return $money + 25 - $secondCheckNum;
 				}

 			}
 			if($firstCheckNum >= 25){

 				if($firstCheckNum < 35){
 						//round down to 25
 					$secondCheckNum = $money % 25;
 					if($secondCheckNum == 0)
 						return $money;
 					return $money - $secondCheckNum;
 				}
 				if($firstCheckNum >= 35 ){
 						//round up to 50
 					$secondCheckNum = $money % 25;
 					if ($secondCheckNum == 0)
    					return $money;
  					return $money + 25 - $secondCheckNum;
 				}

 			}
 	}
 	else if($firstCheckNum >= 50){

 			if($firstCheckNum < 75){

 				if($firstCheckNum <65){
 						//round down to 50
 					$secondCheckNum = $money % 25;
 					if($secondCheckNum == 0)
 						return $money;
 					return $money - $secondCheckNum;
 				}
 				if($firstCheckNum >= 65){
 						//round up to 75
 					$secondCheckNum = $money % 25;
 					if ($secondCheckNum == 0)
    					return $money;
  					return $money + 25 - $secondCheckNum;
 				}

 			}
 			if($firstCheckNum >= 75){

 				if($firstCheckNum < 85){
 						//round down to 75
 					$secondCheckNum = $money % 25;
 					if($secondCheckNum == 0)
 						return $money;
 					return $money - $secondCheckNum;
 				}
 				if($firstCheckNum >= 85){
 						//round up to 0
 					$secondCheckNum = $money % 25;
 					if ($secondCheckNum == 0)
    					return $money;
  					return $money + 25 - $secondCheckNum;
 				}

 			}	
 	}
 }