<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Sinus Berechnung</title>
</head>

<body>
	
	<?php
	
		
	
	?>
	
	<table width="200" border="1">
  <tbody>
    <tr>
      <th scope="col">x</th>
      <th scope="col">sin(x)</th>
    </tr>
	  <?php 
	  	// Einführung einer Schleife für die Berechnung der Sinus-Werte
	  	echo "<tr>";
	  for($x=-1000; $x<=10;$x++)
	  {
		$wert = sin($x);
      	echo "<td>$x</td>";
      	echo "<td>$wert</td>";
    	echo "</tr>";
	  }
	  
	  
	 
	  
	  ?>
    
    
  </tbody>
</table>
</body>
</html>