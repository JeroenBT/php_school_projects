<?php
	session_start();
	$linkNaarAdminPagina = false;
	$message2 = "";
	$users = array(
	"test" => "1234",
	"dinges" => "4321",
	);
	
	$admins = array(
	"test" => true,
	);
	
	if(isset($_POST['submitButton'])){
		if (isset($users[$_POST['username']])
		&& $users[$_POST['username']] == $_POST['password']) {
			$message = "U bent succesvol ingelogd.";
			$linkNaarAdminPagina = true;
			$_SESSION["username"] = $_POST['username'];
			$_SESSION["password"] = $_POST['password'];
			setcookie("gebruikerIngelogd", true, time()+300);
			$_SESSION["admin"] = false;
			if ($admins[$_POST['username']] == true){
				$message = "U bent succesvol ingelogd als admin.";
				$_SESSION["admin"] = true;
			}
		} else {
			$message = "Gebruikersnaam en/of wachtwoord komen niet overeen.";
			$linkNaarAdminPagina = false;
			setcookie("gebruikerIngelogd", false);
			$_SESSION["admin"] = false;
		}
	}else{
		$message = "Log in om te beginnen.";
			$linkNaarAdminPagina = false;
			setcookie("gebruikerIngelogd", false);
			$_SESSION["admin"] = false;
	}
	
	if(isset($_POST['infoButton'])){
		if($message2 != ""){
			$message2 = "Admin: test | Wachtwoord: 1234<br>Gebruiker: dinges | Wachtwoord: 4321";
			$showInfo = false;
		}else{
			$message2 = "";
			$showInfo = true;
		}
	}
?>

<html>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<div class="form-group">
	<label for="username">Username: </label>
	<input type="text" name="username" value="">
	</div>
	<div class="form-group">
	<label for="password">Password: </label>
	<input type="password" name="password" value="">
	</div>
	<input type="submit" name="submitButton" value="Log in">
</form>
<?php 
	echo "<h3>".$message."</h3>";
	if ($linkNaarAdminPagina){
	echo "<h4><a href='admin.php'>Naar admin pagina</a></h4>";
	}
?>
<p>
Admin: test | Wachtwoord: 1234<br>
Gebruiker: dinges | Wachtwoord: 4321
</p>
</body>
</html>
