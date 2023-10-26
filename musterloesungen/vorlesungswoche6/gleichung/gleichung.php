<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Lineares Gleichungssystem</title>
	<link rel="stylesheet" type="text/css" href="../stylesheet/style.css">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>

	<h1>Lineares Gleichungssystem V2</h1>
	
	<?php
		include '../functions/functions.php'; 
		// Das Ergebnis wird erst angezeigt wenn das Formular gesendet wurde. Details siehe weiter unten.
		if(isset($_POST["gesendet"]))
		{
	
			$a=doubleval($_POST["a"]);
			$b=doubleval($_POST["b"]);
			$c=doubleval($_POST["c"]);
			$d=doubleval($_POST["d"]);
			$x=doubleval($_POST["xvon"]);
			$xbis=doubleval($_POST["xbis"]);
			
			
			$min=-100;
			$max=100;


			if($x>=$min && $x<=$max)
			{
				
				

			} else
			{
				$ergebnis ="Die Berechnung konnte nicht durchgeführt werden. Der zulässige Bereich  liegt zwischen $min und $max. Ihre Angabe war $x";
				
			}
		}
	?>
	
	
	
	
	<form action="gleichung.php" method="post">	
		<p>
			<label for="a">a</label>
			<input id="a" name="a" value="1"> 
			<br>
			<label for="b">b</label>
			<input id="b" name="b" value="2"> 
			<br>
			<label for="c">c</label>
			<input id="c" name="c" value="3"> 
			<br>
			<label for="d">d</label>
			<input id="d" name="d" value="4"> 
			<br><br>
			<label for="xvon">x<sub>von</sub></label>
			<input id="xvon" name="xvon" value="-5">
			<br>
			<label for="xbis">x<sub>bis</sub></label>
			<input id="xbis" name="xbis" value="5">
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
					include 'gleichungsTabelle_inc.php'; 
				} else
					{
						echo $ergebnis;
					}
		?>
		
	<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['x', 'y'],
         <?php 
				 for($zaehler=$x;$zaehler<=$xbis;$zaehler++)
				  {
					
					echo "[".$zaehler.",".berechneFunktion($a,$b,$c,$d,$zaehler)."],";
				  }
			?>
        ]);

        var options = {
          title: 'lineare Gleichung',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
		
		
			
		<div id="curve_chart" class="diagram"></div>
	</p>
	
	<?php 
			// Einbinden einer php-Datei, die Code enthält, der sonst redundant wäre.
			
			include '../backLink_inc.php'; 
	?>
	
<body>
</body>
</html>