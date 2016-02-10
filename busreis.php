<form name="form" id="leeftijd" method="POST">
<input type="int" name="leeftijd" id="leeftijd" class="int" maxlength="2">
</form>

<?php
	$get_leeftijd = $_POST["leeftijd"];
	$prijs = 10;
	$korting;
	if ($get_leeftijd >= 65) {
	$korting = $prijs * 0.5;
	} else if ($get_leeftijd <= 3) {
	$korting = $prijs * 0;
	} else if ($get_leeftijd <= 12) {
	$korting = $prijs * 0.5;
	} else {
	$korting = $prijs * 1;
	}
    echo nl2br('Leeftijd: '.$get_leeftijd.' <br> Prijs: '.$korting);
