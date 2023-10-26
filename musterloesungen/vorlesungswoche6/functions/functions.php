<?php
// Funktion nimmt die drei Parameter entgegen und ruft die Funktion "runden" auf.
function berechneFallZeit($hoehe, $fallbeschleunigung, $anzahlNachkommaStellen)
	{
		return runden(sqrt((2*$hoehe)/($fallbeschleunigung)),$anzahlNachkommaStellen); 
	}



function berechneFunktion($a,$b,$c,$d,$x)
	{
			return ($a*pow($x,3)+$b*pow($x,2)+$c*$x+$d);  
	}



function runden($wert, $genauigkeit)
{
	return round($wert, $genauigkeit);
}

?>