<html>
<body>
	<link type="text/css" rel="stylesheet" href="css/style_autoshop.css">
	
	
    <?php
	class CarList{
		private $_carList = array();
		public function addCar($car){
			$this->_carList[] = $car;
		}
		public function getCarList(){
			return $this->_carList;
		}
	}
	
	class Car{
		private $_carCode;
		private $_carName;
		private $_carType;
		private $_carPrice;
		private $_carImage;
		public function __construct($code,$name,$type,$price,$image) {
			$this->_carCode = $code;
			$this->_carName = $name;
			$this->_carType = $type;
			$this->_carPrice = $price;
			$this->_carImage = $image;
		}
		public function getCarCode(){
			return $this->_carCode;
		}
		public function getCarName(){
			return $this->_carName;
		}
		public function getCarType(){
			return $this->_carType;
		}
		public function getCarPrice(){
			return $this->_carPrice;
		}
		public function getCarImage(){
			return $this->_carImage;
		}
	}
	
    $cl = new CarList();
    $cl->addCar(new Car("alfaromeo","Alfa Romeo","Giulietta",27242,"alfaromeo_gl.jpg"));
    $cl->addCar(new Car("audi","Audi","A4",38298,"audi_a4.jpg"));
    $cl->addCar(new Car("audi","Audi","A8",92967,"audi_a8.jpg"));
    $cl->addCar(new Car("audi","Audi","Q5",53435,"audi_q5.jpg")); 
    $cl->addCar(new Car("bmw","BMW","3-serie 318i",35676,"bmw_3s318i.jpg"));
    $cl->addCar(new Car("bmw","BMW","5-serie 5-touring 520i",51159,"bmw_5s520i.jpg"));
    $cl->addCar(new Car("bmw","BMW","X1 18d xdrive",47745,"bmw_x1-18d.jpg"));
    $cl->addCar(new Car("citroen","Citroen","C1",12250,"citroen_c1.jpg"));
    $cl->addCar(new Car("citroen","Citroen","C4 Picasso",36997,"citroen_c4-picasso.jpg"));
    $cl->addCar(new Car("citroen","Citroen","C5",34110,"citroen_c5.jpg"));
    $cl->addCar(new Car("ford","Ford","Focus 1.5tdci titanium 88kW",26321,"ford_focus.jpg"));
    $cl->addCar(new Car("ford","Ford","B-Max 1.6tdci style",23285,"ford_b-max.jpg"));
    $cl->addCar(new Car("ford","Ford","Ranger 3.2tdci limited 4x4",93861,"ford_ranger.jpg"));
    $cl->addCar(new Car("peugeot","Peugeot","108",16478,"peugeot_108.jpg"));
    $cl->addCar(new Car("peugeot","Peugeot","308",21955,"peugeot_308.jpg"));
	?>
	<form action="" id="carlist" method="post">
	<select name="carlistSelection">
	<option value="allemerken">Alle merken</option>
	<option value="alfaromeo">Alfa Romeo</option>
	<option value="audi">Audi</option>
	<option value="bmw">BMW</option>
	<option value="citroen">Citroen</option>
	<option value="ford">Ford</option>
	<option value="peugeot">Peugeot</option>
	</select>
	<input type="number" name="minPrice" placeholder="Minimale prijs">
	<input type="number" name="maxPrice" placeholder="Maximale prijs">
	<input type="submit" name="submitButton" value="Selecteer">
	</form>
	<?php
	if(isset($_POST['submitButton'])){
		if($_POST['minPrice'] != ""){
				$minPrice = $_POST['minPrice'];
			}else{
				$minPrice = 0;
			}
			if($_POST['maxPrice'] != ""){
				$maxPrice = $_POST['maxPrice'];
			}else{
				$maxPrice = 2000000;
			}
		foreach($cl->getCarList() as $carList){
			if($_POST['carlistSelection'] == $carList->getCarCode() and $carList->getCarPrice() > $minPrice and $carList->getCarPrice() < $maxPrice){
			echo "<div id='autokader'>
			<img id='picture' src='img/cars/".$carList->getCarImage()."' alt=".$carList->getCarName().'_'.$carList->getCarType().">
			<p id='merktype'>".$carList->getCarName().' - '.$carList->getCarType()."</p>
			<p id='merktype'>&euro; ".number_format($carList->getCarPrice(),0,",",".").",-</p></div>";
			}else if($_POST['carlistSelection'] == "allemerken" and $carList->getCarPrice() > $minPrice and $carList->getCarPrice() < $maxPrice){
			echo "<div id='autokader'>
			<img id='picture' src='img/cars/".$carList->getCarImage()."' alt=".$carList->getCarName().'_'.$carList->getCarType().">
			<p id='merktype'>".$carList->getCarName().' - '.$carList->getCarType()."</p>
			<p id='merktype'>&euro; ".number_format($carList->getCarPrice(),0,",",".").",-</p></div>";
			}
		}
	}else{
		foreach($cl->getCarList() as $carList){
			echo "<div id='autokader'>
			<img id='picture' src='img/cars/".$carList->getCarImage()."' alt=".$carList->getCarName().'_'.$carList->getCarType().">
			<p id='merktype'>".$carList->getCarName().' - '.$carList->getCarType()."</p>
			<p id='merktype'>&euro; ".number_format($carList->getCarPrice(),0,",",".").",-</p></div>";
		}
	}

    ?>
</center>
</div>
</body>
</html>
