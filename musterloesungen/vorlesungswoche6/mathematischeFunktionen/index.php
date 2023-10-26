<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Sinus Berechnung</title>
</head>

<body>
	
	<?php
	
		$wert = sin(1);
	
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
      <td><?php echo $wert?></td>
    </tr>
    
  </tbody>
</table>
</body>
</html>