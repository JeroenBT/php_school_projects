<form action="dynamische-website.php" method="POST" id="loginscherm">
Gebruikersnaam:<br>
<input type="text" name="username" id="username" maxlength="45" value=""><br>
Wachtwoord:<br>
<input type="password" name="password" id="password" maxlength="45" value=""><br>
<input type="submit" name="submitButton" id="submitButton" value="Log in"><br>
</form>

<?php
	function logInAttempt($username,$password){
	if (isset($_POST['submitButton'])) {
		if($username == "gebruiker" and $password == "wachtwoord"){
			echo "U bent succesvol ingelogd!";
		} else {
			echo "Verkeerde gebruikersnaam en/of wachtwoord...";
		}
	} else {
		echo "Log in om te beginnen.";
	}
}
	echo logInAttempt($_POST["username"],$_POST["password"]);
