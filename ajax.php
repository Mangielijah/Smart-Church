<html>
<head>
	<title> ajax demo</title>
	<script type="text/javascript">
		function searchname(str){
			if(str == ""){
				document.getElementById('result').innerHTML = "";
			}
			else{

				if(window.XMLHttpRequest){
					xmlhttp = new XMLHttpRequest();
				}
				else{
					xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
				}

        		xmlhttp.onreadystatechange = function() {
            		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                		document.getElementById("result").innerHTML = xmlhttp.responseText;
            		}
        		};
        		xmlhttp.open("POST","ajax.php",true);
				xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        		xmlhttp.send();
			}
		}
	</script>
</head>
<body>

	<?php
	include "link.php";
	$names = "";
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$names = $_POST['nam'];
			$quer = "select * from ajaxtest WHERE name=".$names."";
			$query  = mysqli_Query($link, $quer);
			$row = mysqli_fetch_assoc($query);

			echo $name = $row['name'];
		}
	?>

	<form method='post' action='ajax.php'>
		<input type='text' onkeyup="searchname('this.value')" name='nam'>
		<input type="submit" name="submitbutton">
	</form>
	<p>found word:<span id='result'></span></p>
</body>
</html>