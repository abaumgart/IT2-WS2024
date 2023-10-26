<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Erfassung von Personendaten</title>
</head>

<body>
	<!---
	
	Hinweis: Die Datei behandelt jetzt das Auslesen der Fomulardaten mittels Schleife.

	--->
	
	<?php
	// Die Variable setzen wir jetzt zu Beginn, da der Wert beim Auslesen des Formulars bekannt sein muss.
	$anzahlzuErfassendePersonen = 2;
	
	// Wenn das Formular abgeschickt wurde
	if(isset($_POST["gesendet"]))
		
		{
			// Array anlegen
			$namenArray=[];
		
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
	
	
	
	
	<form action="index5.php" method="post">	
		<p>
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