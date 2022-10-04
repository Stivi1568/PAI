<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Strona</title>
</head>
<body>

	<h2>Zadanie 1</h2>
	<form method="POST">
		<input type="text" name="login" placeholder="Login...">
		<input type="password" name="password" placeholder="Password..."></br>
		<label for="checkbox">Zapamietaj mnie</label>
		<input id="checkbox" type="checkbox" name="save"></br>

		<button name="loginButton" type="submit">Login</button>
	</form>

	</br>
	</br>

	<h2>Zadanie 2</h2>
	<form method="POST">
		<input type="text" name="pseudonim" placeholder="Pseudonim..."></br>
		<textarea type="textarea" name="komentarz" placeholder="Komentarz..."></textarea></br>
		<button type="submit" name="kom">Zostaw komentarz</button>
	</form>

	</br>
	</br>

	<h2>Zadanie 3</h2>
	<form method="POST">
		<label for="zwierze">Zwierze:</label>
		<select id="zwierze" name="zwierze">
			<option selected disabled>--Wybierz zwierze--</option>
			<option>Owca</option>
			<option>Koń</option>
			<option>Krowa</option>
		</select>

		<p style="margin-bottom: 0px;">Płeć:</p>
		<input type="radio" name="plec" id="mezczyzna" value="Mężczyzna">
		<label for="mezczyzna">Mężczyzna</label>

		<input type="radio" name="plec" id="kobieta" value="Kobieta">
		<label for="kobieta">Kobieta</label>

		<input type="radio" name="plec" id="inna" value="Inna">
		<label for="inne">Inna</label>

		<p style="margin-bottom: 0px;">Hodowca</p>
		<input type="checkbox" name="hodowca" value="Jan">
		<label>Jan</label>

		<input type="checkbox" name="hodowca" value="Stefan">
		<label>Stefan</label>

		<input type="checkbox" name="hodowca" value="Blair">
		<label>Blair</label></br>

		<button type="submit" name="hodowla">Wpisz dane</button>
	</form>

	<?php

		if(isset($_POST['loginButton'])) {
			login();
		}
		if(isset($_POST['kom'])) {
			kom();
		}
		if(isset($_POST['hodowla'])) {
			ankieta();
		}

		function login() {
			$login = $_POST['login'];
			$password = $_POST['password'];

			echo "</br>Witaj ".$login.'!</br>Twoje hasło to '.sha1($password);

			if(isset($_POST['save'])) {
				echo "</br>Zaznaczyłeś checkboxa!";
			}
		}

		function kom() {
			$pseudonim = $_POST['pseudonim'];
			$komentarz = $_POST['komentarz'];

			echo "</br>Pseudonim: ".$pseudonim."</br>Komentarz bez HTML: ".htmlentities($komentarz)."</br>Komentarz z HTML: ".$komentarz;
		}

		function ankieta() {
			$zwierze = $_POST['zwierze'];
			$plec = $_POST['plec'];
			$hodowca = $_POST['hodowca'];


			echo "</br>Jesteś: ".$zwierze.".</br>Twoja płeć to: ".$plec.".</br>Twój hodowca to: ".$hodowca;

		}

	?>

</body>
</html>