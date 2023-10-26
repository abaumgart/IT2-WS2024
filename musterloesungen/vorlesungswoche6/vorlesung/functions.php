<?php
function calcFunctionSin($x)
	{
			$ergebnis=sin($x);
			return runden($ergebnis,2);
	}
function calcFunctionCos($x)
	{
			$ergebnis=cos($x);
			return runden($ergebnis,3);
	}
function runden($wert, $genauigkeit)
{
	return round($wert, $genauigkeit);
}

?>