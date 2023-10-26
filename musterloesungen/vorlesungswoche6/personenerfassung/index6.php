<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Erfassung von Personendaten</title>
</head>

<body>
	<!---
	
	Hinweis: Die Datei behandelt jetzt die Möglichkeit, 
		mittels Dropdownliste auswählen zu können, wie viele Datensätze erfasst werden
	
		Anforderung 1: Die Dropdownliste soll automatisch mittels einer Schleife realisiert werden und die Werte von 1 bis $anzahlzuErfassendePersonen anzeigen. 

		

	--->
	
	<?php
	// Die Variable setzen wir jetzt zu Beginn, da der Wert beim Auslesen des Formulars bekannt sein muss.
	$maxanzahlzuErfassendePersonen = 10;
	
	// Wenn das Formular abgeschickt wurde
	if(isset($_POST["gesendet"]))
		
		{
			// Array anlegen
			$namenArray=[];
			$anzahlzuErfassendePersonen = $_POST["anzahlPersonen"];
		
			for($zaehler=1;$zaehler<=$anzahlzuErfassendePersonen;$zaehler++)
			{
					$vorname=($_POST["vorname$zaehler"]);
					$alter=intval($_POST["alter$zaehler"]);
					$namenArray["$vorname"]=$alter;
			}
			
			// Ausgabe des Arrays
			echo "<p>";

   			foreach($namenArray as $vorname=>$alter)

      		echo "$vorname, $alter<br>";

   			echo "</p>";

		}
	
	
	?>
		
	<form action="index6.php" method="post">	
		<p>
			<label for="anzahlPersonen">Anzahl Datensätze:</label>
				<select id="anzahlPersonen" name="anzahlPersonen">
					<?php 
					 for($pz=1;$pz<=$maxanzahlzuErfassendePersonen;$pz++)
						 {
							echo"<option value=\"$pz\">$pz</option>";
						 }
					 ?>
				</select>
			
			<?php
			
			/* Wir passen das Formular bzgl. der IDs jetzt an. 
				Die IDs sollen jetzt zusätzlich den Wert der Variable $zaehler bekommen. Dann sind sie eindeutig.
				Ebenfalls entfernen wir die Vorbelegung der Felder
			
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
		
		<p><input type="submit" name="gesendet"</p>
	</form>
	
</body>
</html>