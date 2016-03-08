<?php
function getEenmaligeAutolijst($selectie){
	if (isset($_POST['submitButton']) and $selectie != "") {
		?><div name="autoselectie"><?php
		echo '<div id="autokader"><img id="picture" src="img/'.$selectie.'.png" alt="icon"></img><p id="merktype">'.$selectie.'</p></div>'; // style="width:20%;height:20%;"
		?></div><?php
	}else{
		echo "<div id='form'>Selecteer een automerk.</div>";
	}
}
	echo getEenmaligeAutolijst($_POST["eenmaligeSelectie"]);
	if (basename($_SERVER['PHP_SELF']) == "autos_eenmalig.php"){
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
