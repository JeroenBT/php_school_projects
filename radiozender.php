<?php
	class Radio{
		private $_radioID;
		private $_radioname;
		private $_description;
		
		public function __construct($ID,$name,$desc) {
			$this->_radioID = $ID;
			$this->_radioname = $name;
			$this->_description = $desc;
		}
		
		public function getRadioID(){
			return $this->_radioID;
		}
		
		public function getRadioName(){
			return $this->_radioname;
		}
		
		public function getRadioDescription(){
			return $this->_description;
		}
	}
	
	class Song{
		private $_songID;
		private $_songartist;
		private $_songname;
		
		public function __construct($s_ID,$s_artist,$s_name) {
			$this->_songID = $s_ID;
			$this->_songartist = $s_artist;
			$this->_songname = $s_name;
		}
		
		public function getSongID(){
			return $this->_songID;
		}
		
		public function getSongArtist(){
			return $this->_songartist;
		}
		
		public function getSongName(){
			return $this->_songname;
		}
	}
	
	$radios = array(
		new Radio(0,"Drumstep","Drum and Bass & Dubstep mixed"),
		new Radio(1,"Jungle","Wild tunes"),
		new Radio(2,"Space Dreams","Enter the void!")
	);
	
	$songs = array(
		new Song(0,"Mitis","Give My Regards"),
		new Song(0,"SubVibe & Tide","No Words"),
		new Song(1,"DJ Taktix","T Plays It Cool"),
		new Song(2,"Steve Halpern","Tonal Alchemy I")
	);
	
	foreach($radios as $radio){
		echo "<b>Radio ID:</b> ".$radio->getRadioID()."<br>
		<b>Radionaam:</b> ".$radio->getRadioName()."<br>
		<b>Omschrijving:</b> ".$radio->getRadioDescription()."<br>
		--------<br>";
		foreach($songs as $song){
			if($radio->getRadioID() == $song->getSongID()){
				echo "<b>Song Artiest en Naam:</b> ".$song->getSongArtist()." - ".$song->getSongName()."<br>";
			}
		}
		echo "--------<br>
		<br>";
	}
?>
