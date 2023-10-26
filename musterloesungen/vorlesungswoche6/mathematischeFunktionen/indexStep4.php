<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Sinus Berechnung</title>
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
    </tr>
	  <?php 
	  /*
	  	Wie Schritt drei. Aber mit Auslagerung der Sinusberechnung in die PHP-Seite functions.php.
	  */
	  	echo "<tr>";
	  for($x=-10; $x<=10;$x++)
	  {
		$wert = calcFunctionSin($x);
      	echo "<td>$x</td>";
      	echo "<td>$wert</td>";
    	echo "</tr>";
	  }
	  
	  functionBreak(10);
	  
	  ?>
    
    
  </tbody>
</table>
	
	<?php
	functionBreak(10);
	?>
	
</body>
</html>