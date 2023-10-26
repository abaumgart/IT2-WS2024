<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Rechteckberechnung</title>
</head>

<body>
	<h1>Rechteckberechnung</h1>
	<?php
		// Das Ergebnis wird erst angezeigt wenn das Formular gesendet wurde. Details siehe weiter unten.
		if(isset($_POST["gesendet"]))
		{
	
			$seiteA=doubleval($_POST["seiteA"]);
			$seiteB=doubleval($_POST["seiteB"]);
			


			if($seiteA!=0 && $seiteB!=0)
			{
				$umfang = (2*$seiteA)+(2*$seiteB);
				$flaeche= $seiteA*$seiteB;
				$diagonale = sqrt(pow($seiteA,2)+pow($seiteB,2));
				$ergebnis = "Ein Rechteck der Seitelänge a=$seiteA und der Seitelänge $b hat einen Umfang von $umfang, eine Fläche von $flaeche sowie eine Diagonale von $diagonale";
				

			} else
			{
				$ergebnis ="Die Berechnung konnte nicht durchgeführt werden. Eine oder beide Seitenlängen dürfen nicht Null sein.";
				
			}
		}
	?>
	
	<?php 
				/* Das Ergebnis wird erst angezeigt wenn das Formular gesendet wurde. Ebenfalls die Berechnung (Siehe oben).
				Sonst wird die Berechnung ausgeführt, obwohl noch keine Zahlen erfasst oder eine Auswahl getroffen wurde.
				Dafür wird der Submit-Button mit einem Namen versehen "gesendet". Dieser kann jetzt mit isset abgefragt werden.
				*/
				if(isset($_POST["gesendet"]))
					{
						echo $ergebnis;
					}
		?>
	
	
	<form action="rechteck.php" method="post">	
		<p>
			<label for="seiteA">Seite A</label>
			<input id="seiteA" name="seiteA"> 
			
			<label for="seiteB">Seite B</label>
			<input id="seiteB" name="seiteB"> 
			
			
		</p>
		
		<p><input type="submit" name="gesendet"</p>
	</form>
	
	
	<?php 
			// Einbinden einer php-Datei, die Code enthält, der sonst redundant wäre.
			
			include '../backLink_inc.php'; 
	?>
	
</body>
</html>