Würde sich die Fallhöhe in 10 Schritten um 100 m erhöht werden, ergäbe dies folgende Fallzeiten:
<table width="200" border="1">
	  <tbody>
		<tr>
		  <th scope="col">Höhe [m]</th>
		  <th scope="col">Zeit [s]</th>
			
		</tr>
		  
		 <?php 
		  // Ermittlung der Bedingung für die Beendigung der Schleife
		  // 100 Berechnungen sollen durchgeführt werden
		  // 
		  $maxhoehe = $hoehe+(10*100);
		  for($x=$hoehe;$x<=$maxhoehe;$x=$x+100)
			  {
				echo "<tr>";
					 echo " <td>$x</td>";
					 echo " <td>".berechneFallZeit($x, $fallbeschleunigung,2)." </td>";
			  		 
				echo "</tr>";
			  }
		?>
		  
	  </tbody>
	</table>