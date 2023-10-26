<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Vorlesungswoche 6</title>
	
</head>

<body>
	<h1>Arbeiten mit Arrays</h1>
	
	<?php
			include ('functions.php');
	
		$tp=array(17.5,19.2,21.8,21.6,17.5);
		$tp[0]=20.2;
		$tp[5]=16.2;
		for($zaehler=0;$zaehler<=5;$zaehler++)
		{
			echo"Temperatur $zaehler: $tp[$zaehler]<br>";
		}
	
	?>
	
</body>
</html>