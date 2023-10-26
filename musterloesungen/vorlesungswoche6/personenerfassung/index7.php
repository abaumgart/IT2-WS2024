<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Erfassung von Personendaten</title>
</head>

<body>
	<!---
	
	Hinweis: Die Datei behandelt jetzt die Möglichkeit, 
	die gewünschte Anzahl Datensätze zu erfassen,
	im Array zu speichern und den Mittelwert zu berechnen.

	Die Lösung ist dahingehend noch nicht optimal, weil 
	
		- das Formular bzgl. der gewünschten Anzahl Zeilen immer erst an den Server geschickt und das Füllen des Arrays sowie die Berechnung auch dann
		durchgeführt wird, wenn keine Werte eingetragen sind.
		Im weiteren Schritt müsste dies ebenfalls berücksichtigt werden.

	--->
	
	<?php
	// Ein Maximalwert wird festgelegt.
	$maxanzahlzuErfassendePersonen = 15;
	
	// Wenn das Formular abgeschickt wurde
	if(isset($_POST["gesendet"]))
		
		{
			// Array anlegen
			$namenArray=[];
			// Welcher Wert wurde aus der Dialogliste ausgewählt? 
			$anzahlzuErfassendePersonen = $_POST["anzahlPersonen"];
		
			// Die Formularinhalte werden ausgelesen. Der Reihe nach werden die Zeilen abgearbeitet und im Array gespeichert. Die Endbedingung für die Schleife ist entweder die Anzahl der zu erfassendenen Personen oder aber die mit count($namenArray) ermittelte Anzahl von Arrayelementen
			for($zaehler=1;$zaehler<=$anzahlzuErfassendePersonen;$zaehler++)
			{
					$vorname=($_POST["vorname$zaehler"]);
					$alter=intval($_POST["alter$zaehler"]);
					$namenArray["$vorname"]=$alter;
			}
			
			// Die Daten werden ausgegeben
			echo "<p>";
   			foreach($namenArray as $vorname=>$alter)
				echo "$vorname, $alter<br>";
			echo "</p>";
			// Der Mittelwert wird berechnet
			$summe = 0;
			foreach($namenArray as $alter)
				  $summe = $summe + $alter;
		
			$mittelwert = $summe / $anzahlzuErfassendePersonen;
			// und ausgegeben
			echo "<p>Das Alter beträgt im Durchschnitt: $mittelwert Jahre</p>";
			

		}
	
	
	?>
		
	<form action="index7.php" method="post">	
		<p>
			<label for="anzahlPersonen">Anzahl Datensätze:</label>
				<select id="anzahlPersonen" name="anzahlPersonen" >
					<?php 
					 // Die Dialogliste wird mit den Werten gefüllt. $maxanzahlzuErfassendePersonen ist die Endbedingung der Schleife
					 for($pz=1;$pz<=$maxanzahlzuErfassendePersonen;$pz++)
						 {
							echo"<option value=\"$pz\"";
						 	/* 
								Wir belegen einen Wert dieser Dialogliste vor.
								Wenn der Schleifenzähler für die Personen $pz
								den gleichen Wert hat, wie der Wert, der vor dem Abschicken
								des Formular aus der Dialogliste ausgewählt wurde, dann wird
								die Liste mit diesem Wert vorbelegt.
								Grund: In Zeile 34 wird der Wert ausgelesen und belegt die Endbedingung für die Schleife vor, welche die Daten in das Array einträgt.
							
							*/
						 
							if($pz==$anzahlzuErfassendePersonen)
								{
									echo" selected=\"$anzahlzuErfassendePersonen\"";
								}
								
							echo">$pz</option>";
						 	
						 }
					
					 
				echo "</select>";
				
			
			/* 
				Entsprechend der gewünschten Anzahl zu erfassender Personen
				werden die Formularfelder innerhalb der for-Schleife generiert.
				Jedes Feld enthält einen eindeutigen Namen, der sich aus einem Text
				und einer Nummer zusammensetzt	
			*/
			
			
			for($zaehler=1;$zaehler<=$anzahlzuErfassendePersonen;$zaehler++)
				{	
					echo "<p>";
					echo "<label for=\"vorname$zaehler\">Vorname</label>";
					echo "<input id=\"vorname$zaehler\" name=\"vorname$zaehler\">"; 
					
					
					echo "<label for=\"alter$zaehler\">Alter</label>";
					echo "<input id=\"alter$zaehler\" name=\"alter$zaehler\">";
					
					echo "</p>";
				}
				
			?>
			
		</p>
		
		<p><input type="submit" name="gesendet" value="aktualisieren und senden"></p>
	</form>
	<p>Ausgabe von Hilfswerten</p>
	<p><?php echo "Anzahl der Elemente im Array (mit count ermittelt)".count ($namenArray)?></p>
	
</body>
</html>