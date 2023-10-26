<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Erfassung von Personendaten</title>
</head>

<body>
	
	
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
	
	<form action="index1.php" method="post">	
		<p>
			<label for="vorname">Vorname</label>
			<input id="vorname" name="vorname" value="Wilhelm"> 
			<br>
			<label for="alter">Alter</label>
			<input id="alter" name="alter" value="30"> 
			<br>
			
		</p>
		
		<p><input type="submit" name="gesendet"</p>
	</form>
	
</body>
</html>