<?php
	function showFahrenheit() {
	?><div style="float:left;"><?php
		?><ul> Celsius naar Fahrenheit <hr><?php
		for($i=1;$i<=10;$i++){
			$fahrValue = (floatval($i) * 1.8) + 32;
			?> <li> <?php
			echo "".$i." celsius = ".number_format($fahrValue,2)." fahrenheit";
			?> </li> <?php
		}
		 ?></ul><?php 
	?></div><?php
	};
	function showCelsius() {
	?><div style="float:left;"><?php
		?><ul> Fahrenheit naar Celsius <hr><?php
		for($i=1;$i<=10;$i++){
			$celsValue = (floatval($i) - 32) / 1.8;
			?> <li> <?php
			echo "".$i." fahrenheit = ".number_format($celsValue,2)." celsius";
			?> </li> <?php
		}
		 ?></ul><?php 
	?></div><?php
	};
	function showDeelbaarheid() {
	?><div style="float:left;"><?php
		?><ul> Deelbaarheid door 3 <hr><?php
		for($getal=1;$getal<=20;$getal++){
			$deelbaarheid = 3;
			//$getal = $i;
			if($getal % $deelbaarheid == 0){
			?> <li> <?php
				echo $getal.' is deelbaar door: '.$deelbaarheid;
			?> </li> <?php
			}else {
			?> <li> <?php
				echo $getal.' is niet deelbaar door: '.$deelbaarheid;
			?> </li> <?php
			}
		}
		 ?></ul><?php 
	?></div><?php
	};
	function stringReverse(){
	?><div style="float:left;"><?php
		?><ul> Tekst omdraaien <hr><?php
		$tekst = "Gewoon even een tekst";
		?> <li> <?php
		echo 'Origineel: '.$tekst;
		?> </li> <?php
		?> <li> <?php
		echo 'Omgekeerd: '.strrev($tekst);
		?> </li> <?php
		 ?></ul><?php 
	?></div><?php
	}
	echo showFahrenheit(),showCelsius(),showDeelbaarheid(),stringReverse();
?>
