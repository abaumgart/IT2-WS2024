<?php
	function calcFunctionSin($x)
	{
		$ergebnis = sin($x);
		return round($ergebnis,5);
	}
	function calcFunctionCos($x)
	{
		$ergebnis = cos($x);
		return round($ergebnis,5);
	}

	function runden($wert, $genauigkeit)
	{
		return round($wert,$genauigkeit);
	}

function functionBreak($n)
{
	for ($zaehler = 0; $zaehler <=$n;$n++)
	{
		echo "<p><br></p>";
	}
}

?>