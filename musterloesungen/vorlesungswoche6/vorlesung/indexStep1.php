<!DOCTYPE html><html><head><meta charset="utf-8"></head><body>

<?php

   $tp = array("Montag"=>17.5, "Dienstag"=>19.2, "Mittwoch"=>21.8);

   $tp["Donnerstag"] = 21.6;

   $tp["Freitag"] = 17.5;

   $tp["Samstag"] = 20.2;

   $tp["Sonntag"] = 16.6;



   // Ein bestimmtes Element

   echo "<p>" . $tp["Montag"] . "</p>";



   // Alle Keys und Values aus dem Feld

   echo "<p>";

   foreach($tp as $name=>$wert)

      echo "$name, $wert<br>";

   echo "</p>";



   // Nur alle Values aus dem Feld, zum Berechnen des Mittelwerts

   $summe = 0;

   foreach($tp as $wert)

      $summe = $summe + $wert;

   $mittelwert = $summe / 7;

   echo "<p>Mittelwert: $mittelwert</p>";

?>

</body></html>

