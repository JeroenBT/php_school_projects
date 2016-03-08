<?php
function getMeermaligeAutolijst($selectie){
	if (isset($_POST['submitButton2']) and $selectie != "") {
		?><div name="autoselectie"><?php
		foreach($selectie as $selecties){
			$counter = count($selectie);
			if ($selecties != ""){
			echo '<div id="autokader"><img id="picture" src="img/'.$selecties.'.png" alt="icon"></img><p id="merktype">'.$selecties.'</p></div>'; // style="width:20%;height:20%;"
			}elseif ($seleties == "" and $counter <= 1){
			echo "<div id='form'>Selecteer een automerk.</div>";
			}
		}
		?></div><?php
	}else{
		echo "<div id='form'>Selecteer een automerk.</div>";
	}
}
	echo getMeermaligeAutolijst($_POST["meermaligeSelectie"]);
	if (basename($_SERVER['PHP_SELF']) == "autos_meermalig.php"){
		?>
		<head>
		<link rel="stylesheet" href="css/style_autoshop.css">
		</head>
		<div id="form">
		<a class="goBack" href="autos.php"><p>Ga terug</p></a>
		</div>
		<?php
	}
?>
