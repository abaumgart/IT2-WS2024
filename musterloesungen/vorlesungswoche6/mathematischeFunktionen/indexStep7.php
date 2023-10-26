<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Sinus Berechnung</title>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
	
</head>

<body>
	
	<?php
		include('functions/functions.php');
		
	
	?>
	
	<table width="200" border="1">
  <tbody>
    <tr>
      <th scope="col">x</th>
      <th scope="col">sin(x)</th>
	  <th scope="col">cos(x)</th>
    </tr>
	  <?php 
	  /*
	  
	  */
	  $sinSumme = 0;
	  $cosSumme = 0;
	  echo "<tr>";
	  for($x=-10; $x<=10;$x++)
	  {
		$sinWert =  calcFunctionSin($x);
		$cosWert =  calcFunctionCos($x);
      	echo "<td>$x</td>";
			echo "<td>".$sinWert."</td>";
			echo "<td>".$cosWert."</td>";
    	echo "</tr>";
		$sinSumme = $sinSumme+$sinWert;
		$cosSumme = $cosSumme+$cosWert;
		 
	  }
	  
	  ?>
 
  </tbody>
		<tr>
			<tfoot>
				<td></td>
				<td><?php echo $sinSumme?></td>
				<td><?php echo $cosSumme?></td>
			</tfoot>
		</tr>
</table>
	
	  <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
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