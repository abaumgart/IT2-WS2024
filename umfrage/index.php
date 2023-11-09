<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Umfrage-Tool</title>
</head>

<body>
	<h1>Umfragen</h1>
	<?php 
	
	include 'include/dbconnect.inc.php'; // Einbinden der Zugangsdaten zur Datenbank
	/*
	An die Datenbank wird eine Abfrage geschickt.
	"Selektiere alle Spalten und Datensätze aus der Tabelle umfrage"
	Das Ergebnis dieser Abfrage wird in der Variablen $res für Result gespeichert.
	*/
	$res = mysqli_query($con, "SELECT * FROM umfrage");
	// mit mysqli_num_row wird die Anzahl der ermittelten Datensätze ermittelt
	$num = mysqli_num_rows($res);
   // Tabellenbeginn
	echo($num."<br>"); // Die Anzahl der ermittelten Datensätze wird angezeigt
	echo "<table border='1'>";
	// Überschrift
   echo "<tr> <td>U-ID</td> <td>Umfrage</td> </tr>";
	// Datensätze werden aus dem Ergebnis ermittelt und ausgegeben
   while ($dsatz = mysqli_fetch_assoc($res))
   {

      echo "<tr>";
	   
      echo "<td>". $dsatz["uid"] . "</td>"; // Für den aktuellen Datensatz wird der Inhalt des Attributs "uid" ausgegeben.

      echo "<td>" . $dsatz["umfragetext"] . "</td>"; // Für den aktuellen Datensatz wird der Inhalt des Attributes "umfragetext" ausgegeben.

      echo "</tr>";

   }



   // Tabellenende

   echo "</table>";

   

   mysqli_close($con);
	?>
	
</body>
</html>