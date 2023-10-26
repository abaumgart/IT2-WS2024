<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Berechnung von Übertragungszeiten V2</title>
	<link rel="stylesheet" type="text/css" href="../stylesheet/style.css">
</head>

<body>
	<?php
	// Code ausführen, wenn Formular abgeschickt wurde
	if(isset($_POST["gesendet"]))
		{
			// Einlesen der Werte aus dem Formular
				$bandbreite = doubleval($_POST["bandbreite"]); // Einheit kBit/s
				$datenmenge = doubleval($_POST["dateigroesse"]); // Einheit in MB

			if($bandbreite !=0 && $datenmenge!=0)
				{
					$bitproByte = 8;
					$mbProKb= 1000; // MB pro KB
					$byteProKbyte = 1000; // Byte pro KByte
					$bitProByte = 8; // 8 Bit pro Byte
					$bandbreiteNormiert=$bandbreite/1000; // Nur für die Anzeige im Ergebnistext

					// Berechnung der Menge an Daten in Bit
					$datenmengeInBit = $datenmenge*$mbProKb*$byteProKbyte*$bitProByte;
					// Berechnung der Übertragungszeit
					$uebertragungszeit = $datenmengeInBit / ($bandbreite*1000);
					
				$ergebnis = "<p>Die Übertragungszeit von $datenmenge MB bei einer Bandbreite von $bandbreite kBit/s beträgt $uebertragungszeit Sekunden.</p>";

				} else
					{
						$ergebnis ="Die Berechnung konnte nicht durchgeführt werden. Eine der beiden Angaben war Null";
					}

		}
	
	?>
	
	<form action="bandbreite.php" method="post">	
		<p>
			
			<label for="dateigroesse">Dateigröße [MB]</label>
			<input id="dateigroesse" name="dateigroesse"> 
			
			<label for="bandbreite">Bandbreite [kbit/s]</label>
			<input id="bandbreite" name="bandbreite"> 	
		</p>
		
		<p><input type="submit" name="gesendet"</p>
	</form>
	<p>
		<?php 
				/* Das Ergebnis wird erst angezeigt wenn das Formular gesendet wurde. Ebenfalls die Berechnung (Siehe oben).
				Sonst wird die Berechnung ausgeführt, obwohl noch keine Menge erfasst oder eine Auswahl getroffen wurde.
				Dafür wird der Submit-Button mit einem Namen versehen "gesendet". Dieser kann jetzt mit isset abgefragt werden.
				*/
				if(isset($_POST["gesendet"]))
					{
						echo $ergebnis;
					}
		?>
	</p>
	<?php 
			// Einbinden einer php-Datei, die Code enthält, der sonst redundant wäre.
			
			include '../backLink_inc.php'; 
	?>
</body>
</html>