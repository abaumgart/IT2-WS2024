<table width="200" border="1">
	  <tbody>
		<tr>
		  <th scope="col">X</th>
		  <th scope="col">Y</th>
			
		</tr>
		  
		 <?php 
		  
		  for($zaehler=$x;$zaehler<=$xbis;$zaehler++)
			  {
				echo "<tr>";
					 echo "<td>$zaehler</td>";
					 echo "<td>".berechneFunktion($a,$b,$c,$d,$zaehler)." </td>";
			  		 
				echo "</tr>";
			  }
		?>

		  
	  </tbody>
	</table>