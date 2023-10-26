<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Erfassung von Personendaten</title>
</head>

<body>
	<!---
	Diese Seite erzeugt das Formular mittels einer Schleife.
	Dafür muss es in den PHP-Code integriert werden
	--->
	
	<?php
	if(isset($_POST["gesendet"]))
		{
			$vorname=($_POST["vorname"]);
			$alter=intval($_POST["alter"]);
			// Testausgabe, ob die Daten aus dem Formular korrekt übernommen wurden
			// echo ($vorname."<br>");
			// echo ($alter."<br>");
		
			// leeres Array wird angelegt
			$namenArray=[];
			// Daten werden in das Array geschrieben
			$namenArray["$vorname"]=$alter;
		
		
			// Ausgabe des Arrays
			echo "<p>";

   			foreach($namenArray as $vorname=>$alter)

      		echo "$vorname, $alter<br>";

   			echo "</p>";

		}
	
	
	?>
	
	<!--- 
		  Das Formular ist jetzt im PHP-Code integriert
		  im weiteren Schritt können wir dann die Formularelemente einzeln den Anforderung bzgl.
		  der Schleifen anpassen 
		   --->
	
	
	<form action="index3.php" method="post">	
		<p>
			<?php
			$anzahlzuErfassendePersonen = 4; // Variable, die sichert, wie viele Zeilen das Fomular enthalten soll. Wird später ebenfalls über ein Formularfeld gesetzt. Experimentieren Sie ein wenig mit dem Wert, veröffentlichen die Seite und schauen auf das Ergebnis. Schauen Sie ebenfalls in den Seitenquelltext. Bei $anzahlzuErfassendePersonen >1 haben  die IDs aller Felder jetzt den gleichen Wert. Das ändern wir im nächsten Schritt> index4.php
			
			for($zaehler=1;$zaehler<=$anzahlzuErfassendePersonen;$zaehler++)
				{	// Der Einfachheithalber bleibt das Formular ersteinmal unverändert.
					echo "<p>";
					echo "<label for=\"vorname\">Vorname</label>";
					echo "<input id=\"vorname\" name=\"vorname\" value=\"Wilhelm\">"; 
					// Zeilenumbruch wurde entfernt.Dafür jede "Formularzeile in ein Absatzelement gesetzt. Vorteil: Bessere Darstellung
					
					echo "<label for=\"alter\">Alter</label>";
					echo "<input id=\"alter\" name=\"alter\" value=\"30\">";
					
					echo "</p>";
				}
				
			?>
			
		</p>
		
		<p><input type="submit" name="gesendet"</p>
	</form>
	
</body>
</html>