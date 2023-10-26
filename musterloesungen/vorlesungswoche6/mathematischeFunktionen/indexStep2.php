<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Sinus Berechnung</title>
</head>

<body>
	
	<?php
	
		$wert = sin(1);
		$wert2 = sin(2);
		$wert3 = sin(3);
	
	?>
	
	<table width="200" border="1">
  <tbody>
    <tr>
      <th scope="col">x</th>
      <th scope="col">sin(x)</th>
    </tr>
	  <?php 
	  	echo "<tr>";
      	echo "<td>1</td>";
      	echo "<td>$wert</td>";
    	echo "</tr>";
	  	echo "<tr>";
      	echo "<td>2</td>";
      	echo "<td>$wert2</td>";
    	echo "</tr>";
	  	echo "<tr>";
      	echo "<td>2</td>";
      	echo "<td>$wert3</td>";
    	echo "</tr>";
	  
	  
	  ?>
    
    
  </tbody>
</table>
</body>
</html>