<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ergebnis Fallzeitberechnung</title>
	<link rel="stylesheet" type="text/css" href="../stylesheet/style.css"
</head>

<body>
	<?php
		include "../functions/functions.php";
		$hoehe=doubleval($_POST["hoehe"]);
		$ort= $_POST["ort"];
		$minHoehe=15;
		
		if($ort=="Erde")
			{
				 $fallbeschleunigung = 9.81;
			} 
			else if ($ort=="Mond")
				{
				 	$fallbeschleunigung = 1.62;
				}
					else if ($ort=="Mars")
					{
						$fallbeschleunigung = 3.69;
					}
						else if ($ort=="Jupiter")
						{
							$fallbeschleunigung = 24.79;
						}
		
	    if($hoehe>$minHoehe)
		{
			//Aufruf der function. Ausgelagert in functions.php
			$zeit= berechneFallZeit($hoehe, $fallbeschleunigung); 
			$ergebnis = "Die Fallzeit aus einer Höhe von $hoehe m auf dem $ort beträgt $zeit s.";
			
		} else
		{
			$ergebnis ="Die Berechnung konnte nicht durchgeführt werden. Die Höhe muss min.".$minHoehe." m betragen.";
		}
		
			
		
	?>
	<!-- PHP Code kann mehrfach im Dokument eingesetzt werden --->
	
	<p><?php echo $ergebnis ?></p>
	
	<p><a href="fallzeit.php">Neue Berechnung?</a></p>
		
	<?php include 'fallzeitTabelle_inc.php'; ?>
	<?php include '../backLink_inc.php'; 
	?>
</body>
	
</html>