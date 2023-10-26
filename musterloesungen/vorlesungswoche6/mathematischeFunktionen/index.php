<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Sinus Berechnung</title>
</head>

<body>
	
	<?php
		// Berechnung des Sinus 
		$wert = sin(1);
		// und Ausgabe
		echo $wert;
	
	?>
	
	<table width="200" border="1">
  <tbody>
    <tr>
      <th scope="col">x</th>
      <th scope="col">sin(x)</th>
    </tr>
    <tr>
      <td>1</td>
		<!--- Ausgabe innerhalb der Tabelle --->
      <td><?php  echo $wert?></td>
    </tr>
    
  </tbody>
</table>
</body>
</html>