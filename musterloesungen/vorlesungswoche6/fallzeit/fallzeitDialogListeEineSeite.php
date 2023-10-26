<!doctype html>
<html><head>
<meta charset="UTF-8">
<title>Berechnung des freien Falls eines Handys</title>
	
	<link rel="stylesheet" type="text/css" href="../stylesheet/style.css">
	
	
	
</head>

<body>
	<?php
		// Einbinden der functions-Datei
		include '../functions/functions.php';
		// Das Ergebnis wird erst angezeigt wenn das Formular gesendet wurde. Details siehe weiter unten.
		if(isset($_POST["gesendet"]))
		{
	
			$hoehe=doubleval($_POST["hoehe"]);
			$fallbeschleunigung =doubleval($_POST["ort"]);
			$minHoehe=15;


			if($hoehe>=$minHoehe)
			{
				// berechneFallzeit benötigt 3 Parameter: Höhe, Fallbeschleunigung, Anzahl Nachkommastellen
				$zeit= berechneFallZeit($hoehe, $fallbeschleunigung, 2); 
				$ergebnis = "Die Fallzeit aus einer Höhe von $hoehe m beträgt $zeit s.";

			} else
			{
				$ergebnis ="Die Berechnung konnte nicht durchgeführt werden. Die Höhe muss min.".$minHoehe." m betragen.";
			}
		}
	?>
	
	<h1>Berechnung des freies Falls eines Handys</h1>
	<form action="fallzeitDialogListeEineSeite.php" method="post">	
		<p>
			<label for="hoehe">Höhe:</label>
			<input id="hoehe" name="hoehe"> 
		</p>
		<p>
			<label for="ort">Ort:</label> 
         	<select name="ort" id="ort">
			  <!--- Die Inhalte bspw. einer Dialogliste werden später aus einer Datenbank gefüllt. --->
			  <option value="9.81">Erde</option>
			  <option value="1.62">Mond</option>
			  <option value="3.69">Mars</option>
			  <option value="24.79">Jupiter</option>
          	</select>
		</p>
		<p><input type="submit" name="gesendet"</p>
	</form>
	
	
		
		
	<!-- PHP Code kann mehrfach im Dokument eingesetzt werden --->
	
		<?php 
				/* Das Ergebnis wird erst angezeigt wenn das Formular gesendet wurde. Ebenfalls die Berechnung (Siehe oben).
				Sonst wird die Berechnung ausgeführt, obwohl noch keine 
				Höhe erfasst oder eine Auswahl getroffen wurde.
				Dafür wird der Submitt-Button mit einem Namen versehen "gesendet". Dieser kann jetzt mit isset abgefragt werden.
				*/
				if(isset($_POST["gesendet"]))
					{
						echo "<p>";
						//echo "<p class=\"tabledata\">";
						echo $ergebnis;
						include 'fallzeitTabelle_inc.php';
						//echo "</p>";
					
						//echo "<p class=\"diagram\">";
						
						echo "</p>";
					}
		
				
		?>
	
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Höhe [m]', 't[s]'],
         <?php 
				for($x=$hoehe;$x<=$maxhoehe;$x=$x+100)
				  {
					
					echo "[ ".berechneFallZeit($x, $fallbeschleunigung,2).",".$x."],";
				  }
			?>
        ]);

        var options = {
          title: 'Berechnung der Fallhöhe',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
	
	<div id="curve_chart" class="diagram"></div>
	<p><a href="fallzeitDialogListeEineSeite.php">Neue Berechnung?</a></p>
	
	<?php 
			// Einbinden einer php-Datei, die Code enthält, der sonst redundant wäre.
			 
			include '../backLink_inc.php'; 
	?>
	
</body>
</html>