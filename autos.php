<?php 
	$automerk['alfaromeo'] = "Alfa Romeo";
	$automerk['audi'] = "Audi";
	$automerk['bmw'] = "BMW";
	$automerk['ferrari'] = "Ferrari";
	$automerk['ford'] = "Ford";
	$automerk['mercedes'] = "Mercedes-Benz";
	$automerk['peugeot'] = "Peugeot";
	$automerk['renault'] = "Renault";
	$automerk['toyota'] = "Toyota";
?>

<form action="autos_eenmalig.php" method="POST" id="autos">
<select name="eenmaligeSelectie">
<option selected="" value="">-----------------</option>
<?php
foreach($automerk as $merk => $merknaam):
echo '<option value="'.$merk.'">'.$merknaam.'</option>';
endforeach;
?>
</select>
<input type="submit" name="submitButton" id="submitButton" value="Selecteer">
Enkele autoselectie lijst<br style="margin-bottom:60px;">
<?php
include 'autos_eenmalig.php';
?><br style="margin-bottom:60px;">
</form>
<form action="autos_meermalig.php" method="POST" id="autos_more">
<select multiple name="meermaligeSelectie[]">
<option selected="" value="">-----------------</option>
<?php 
foreach($automerk as $merk2 => $merknaam2):
echo '<option value="'.$merk2.'">'.$merknaam2.'</option>';
endforeach;
?>
</select>
<input type="submit" name="submitButton2" id="submitButton2" value="Selecteer">
Meerdere autoselectie lijst<br style="margin-bottom:60px;">
<?php
include 'autos_meermalig.php';
?><br style="margin-bottom:60px;">
</form>
