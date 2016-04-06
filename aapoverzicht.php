<html>
<body>
<link type="text/css" rel="stylesheet" href="css/monkey-business.css">
<link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
<div class="monkeyBusiness">
<center>
<img id="logo" src="img/monkey-business.jpg">
<h1 id="description">Select your monkey!</h1>
<img id="header" src="img/monkey_swings.png">
<br>
    <?php
	class AapOverzicht{
		private $_apenlijst = array();
		public function voegAapToe($aap){
			$this->_apenlijst[] = $aap;
		}
		public function getApenLijst(){
			return $this->_apenlijst;
		}
	}
	
	class Aap{
		private $_aapnaam;
		public function __construct($name) {
			$this->_aapnaam = $name;
		}
		public function getAapName(){
			return $this->_aapnaam;
		}
	}
	
    $ao = new AapOverzicht();
    $ao->voegAapToe(new Aap("Baviaan"));
    $ao->voegAapToe(new Aap("Guereza"));
    $ao->voegAapToe(new Aap("Langoer"));
    $ao->voegAapToe(new Aap("Neusaap"));
    $ao->voegAapToe(new Aap("Tamarin"));
    $ao->voegAapToe(new Aap("Brulaap"));
    $ao->voegAapToe(new Aap("Halfaap"));
    $ao->voegAapToe(new Aap("Mandril"));
    $ao->voegAapToe(new Aap("Oeakari"));
    $ao->voegAapToe(new Aap("Faunaap"));
    $ao->voegAapToe(new Aap("Hoelman"));
    $ao->voegAapToe(new Aap("Meerkat"));
    $ao->voegAapToe(new Aap("Oormaki"));
    $ao->voegAapToe(new Aap("Gorilla"));
    $ao->voegAapToe(new Aap("Kuifaap"));
    $ao->voegAapToe(new Aap("Mensaap"));
    $ao->voegAapToe(new Aap("Spinaap"));
	
	foreach($ao->getApenLijst() as $aapOverzicht){
		echo "<a class='aapNaam' href='https://www.google.nl/search?q=".$aapOverzicht->getAapName()."&tbm=isch'> ".$aapOverzicht->getAapName()."</a><br>";
	}

    ?>
</center>
</div>
</body>
</html>
