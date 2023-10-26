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
	Herausforderung:
		Finden einer Lösung, mit der die IDs der Felder automatisch vergeben werden.

	Im weiteren Schritt müssen diese Felder mittels einer schleife durchlaufen werden, um die Daten "auszulesen" und in das Array zu schreiben.

	In dieser Datei wird nur das wiederholte Erzeugen der Formularfelder gezeigt. 
	Die nächste Datei enthält dann weitere Details


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
		  An der Funktionalität hat sich zu index1.php nichts geändert. --->
	
	<form action="index2.php" method="post">	
		<p>
			<?php
			echo "<label for=\"vorname\">Vorname</label>";
			echo "<input id=\"vorname\" name=\"vorname\" value=\"Wilhelm\">"; 
			echo "<br>";
			echo "<label for=\"alter\">Alter</label>";
			echo "<input id=\"alter\" name=\"alter\" value=\"30\">";
			echo "<br>";
				
			?>
			
		</p>
		
		<p><input type="submit" name="gesendet"</p>
	</form>
	
</body>
</html>