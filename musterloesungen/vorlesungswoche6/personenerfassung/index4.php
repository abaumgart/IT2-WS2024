<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Erfassung von Personendaten</title>
</head>

<body>
	<!---
	
	Hinweis: Das Auslesen der Formulardaten funktioniert noch nicht.
			  In dieser Datei wird ausschließlich die Generierung des Formulars behandelt.
			Weitere Erklärungen im Quelltext.

	--->
	
	<?php
	if(isset($_POST["gesendet"]))
		{
			$vorname=($_POST["vorname"]);
			$alter=intval($_POST["alter"]);
			
			$namenArray=[];
			
			$namenArray["$vorname"]=$alter;
		
		
			// Ausgabe des Arrays
			echo "<p>";

   			foreach($namenArray as $vorname=>$alter)

      		echo "$vorname, $alter<br>";

   			echo "</p>";

		}
	
	
	?>
	
	
	
	
	<form action="index4.php" method="post">	
		<p>
			<?php
			$anzahlzuErfassendePersonen = 15;
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