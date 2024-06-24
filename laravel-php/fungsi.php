<?php

$alas = 16;
$tinggi = 20;

function LuasSegitiga($alas, $tinggi)
{
	$LuasSegitiga = $alas * $tinggi /2;
	return $LuasSegitiga;
}

function Jajargenjang($alas, $tinggi)
{
	$Keliling = ($alas + $tinggi) * 2;
	return $Keliling;
}

echo $LuasSegitiga = LuasSegitiga($alas, $tinggi) . '<br>';
echo $Keliling = Jajargenjang($alas, $tinggi);
?>