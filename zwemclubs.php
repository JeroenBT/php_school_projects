<?php
	$zwemclub['De spartelkuikens'] = "25";
	$zwemclub['De waterbuffels'] = "32";
	$zwemclub['Plonsmderin'] = "11";
	$zwemclub['Bommetje'] = "23";
	foreach($zwemclub as $index => $value) {
		$waarde = $value;
		if ($value = intval($waarde /5)) {
		echo "Zwemclub: " . $index . ", Leden aantal: " . $waarde;
		echo "<br>";
			for ($i = 0; $i < $value; $i++) {
				echo "X ";
			}
			echo "<br>";
		}
	}
?> 
