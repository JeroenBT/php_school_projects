<?php
	session_start();
	echo "Username: ".checkUsername($_COOKIE['gebruikerIngelogd'],$_SESSION['username'])."<br>";
	echo "Password: ".checkPassword($_COOKIE['gebruikerIngelogd'],$_SESSION['password'])."<br>";
	echo "Gebruiker ingelogd: ".returnIngelogd($_COOKIE['gebruikerIngelogd'])."<br>";
	echo "Administrator: ".checkAdministrator($_SESSION['admin'])."<br>";
	echo "<h4>".hasRights($_COOKIE['gebruikerIngelogd'],$_SESSION['admin'])."</h4>";
	
	function checkUsername($gebruikerIngelogd,$username){
		if (returnIngelogd($gebruikerIngelogd) == "Ja"){
			return $username;
		}else{
			return "gast";
		}
	}
	
	function checkPassword($gebruikerIngelogd,$password){
		if (returnIngelogd($gebruikerIngelogd) == "Ja"){
			return $password;
		}else{
			return "geen wachtwoord";
		}
	}
	
	function returnIngelogd($gebruikerIngelogd){
		if ($gebruikerIngelogd != ""){
			return "Ja";
		}else{
			return "Nee";
		}
	}
	
	function checkAdministrator($admin){
		if ($admin != ""){
			return "Ja";
		}else{
			return "Nee";
		}
	}
	
	function hasRights($gebruikerIngelogd,$admin){
		if (returnIngelogd($gebruikerIngelogd) == "Ja"){
			if (checkAdministrator($admin) == "Ja"){
				return "U heeft toegang tot administratieve rechten.";
			}else{
				return "U heeft geen toegang tot administratieve rechten.";
			}	
		}else{
			return "Voor een niet-ingelogde gebruiker heeft u absoluut geen toegang tot rechten.";
		}
	}
?>
<form>
<input type="submit" name="logoutButton" value="Uitloggen & Terug naar inlogscherm">
</form>
<p><a href="loginandadmin.php">Terug naar inlogscherm</a></p>
