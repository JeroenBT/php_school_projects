<?php
	$kappersagenda['09:15'] = "Mevr. Pietersen";
	$kappersagenda['09:30'] = "Mevr. Willems";
	$kappersagenda['09:45'] = "";
	$kappersagenda['10:00'] = "Paul van den Broek";
	$kappersagenda['10:15'] = "Karel de Meeuw";
	$kappersagenda['10:30'] = "";
	echo "De volgende momenten zijn nog beschikbaar:";
	?><ul><?php
	foreach($kappersagenda as $tijd => $afspraak) {
		if($afspraak == "") { 
			?><li><?php print(" ".$tijd." ")?></li><?php;
		}
	}
	print("");
	?></ul><?php
?>
	
