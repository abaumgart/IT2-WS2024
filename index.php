<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Unbenanntes Dokument</title>
	<link rel="stylesheet" type="text/css" href="musterloesungen/vorlesungswoche3/stylesheet/style.css">
</head>

<body>
	<?php
		function add($z1,$z2)
		{
			$ergebnis=$z1+$z2;
			return $ergebnis;
		}
	
	
		function trennlinie($anzahlZeichen,$zeichen)
		{
			echo "<p>";
			for($i=1;$i<=$anzahlZeichen;$i++)
				{
				echo $zeichen;
				}
			echo "</p>";
		}
	?>
	<h1>Schleifen</h1>
	<?php trennlinie(2,"z")?>
	<?php echo(add(2,3));?>
	
	<table border="1">
	<?php	
		for($reihe=1;$reihe<=10;$reihe++)
		//	Startbedingung			Endbedingung		Schrittweite
			{
				echo "<tr>";
				for($spalte=1;$spalte<=10;$spalte++)
				//	Startbedingung			Endbedingung		Schrittweite
					{
						$ergebnis=$reihe*$spalte;
						echo "<td>";
						echo $ergebnis;
						echo "</td>";
					}
					echo "</tr>";
			}
	
	?>
	</table>
	<?php trennlinie(30,"=")?>
	
	
	<?php trennlinie(34,"-")?>
	<?php trennlinie(54,"+")?>
	<?php trennlinie(77,"m")?>
	
	
	
	
	
	
</body>
</html>