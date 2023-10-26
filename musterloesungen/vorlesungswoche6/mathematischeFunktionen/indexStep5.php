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
	  <th scope="col">cos(x)</th>
    </tr>
	  <?php 
	  /*
	  
	  */
	  	echo "<tr>";
	  for($x=-10; $x<=10;$x++)
	  {
		 
      	echo "<td>$x</td>";
			echo "<td>".calcFunctionSin($x)."</td>";
			echo "<td>".calcFunctionCos($x)."</td>";
    	echo "</tr>";
	  }
	  
	  ?>
    
    
  </tbody>
</table>
</body>
</html>