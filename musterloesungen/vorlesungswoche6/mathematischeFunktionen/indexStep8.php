<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Vorlesungswoche 4</title>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body>
	<?php
			include ('functions/functions.php');
	
	?>
	<table width="200" border="1">
	  <tbody>
		<tr>
		  <th scope="col">x</th>
		  <th scope="col">sin(x)</th>
			<th scope="col">cos(x)</th>
		</tr>
		  
		 <?php 
		  for($x=-10;$x<=10;$x=$x+1)
			  {
				
			    $cosfunktion = cos($x);
				echo "<tr>";
					 echo " <td>$x</td>";
					 echo " <td>".calcFunctionSin($x)." </td>";
			  		 echo " <td>".calcFunctionCos($x)." </td>";
				echo "</tr>";
			  }
		?>
		  
	  </tbody>
	</table>
	
	<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['f(x)', 'sin(x)', 'cos(x)'],
			
			<?php 
				for($x=-10;$x<=10;$x=$x+1)
				  {
					echo "[ ".$x.",".calcFunctionSin($x).",".calcFunctionCos($x)."],";
				  }
			?>
        
        ]);

        var options = {
          title: 'Darstellung der Sin- und Cos-Funktion',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
	
	<div id="curve_chart" style="width: 900px; height: 500px"></div>
</body>
</html>