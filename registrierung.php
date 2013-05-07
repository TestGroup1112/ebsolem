<!DOCTYPE html>
<html lang="de">
<head> 
<meta charset="utf-8">
<title>Ebsolems Blog... - Der Kreativität freien Lauf lassen!!!</title>
<meta name="description" content=" ebsolems Blog - Die Künstlercommunity">
<link rel="stylesheet" href="style.css" media="screen">
</head>
<body>
<div id=wrapper>
	<div id=header>
		<?php
		include "header.php";
		?>
	</div>
	<div id=headmenu>
		<?php
		include "headmenu_neu.php";
		?> 
	</div>	
	<div id=content>
		<h1>Registrierung</h1>
		<form id="register" action="#">
		<div>
			<p>Bitte beachte das für eine Vollständige Registrierung 
			alle Felder unbedingt ausgefüllt werden müssen!</p>
		</div>
		<div>
			<label for="firstname">Vorname: </label>
			<input type="text" id="firstname" name="firstname">
		</div>
		<div>
			<label for="name">Nachname: </label>
			<input type="text" id="name" name="name">
		</div>
		<div>
			<label for="street">Strasse: </label>
			<input type="text" id="street" name="street">
		</div>
		<div>
			<label for="location">PLZ & Ort</label>
			<input type="text" id="location" name="location">
		</div>
		<div>
			<label for="email">eMail: </label>
			<input type="email" id="email" name="email">
		</div>
		<div>
			<label for="nickname">Künstlername: </label>
			<input type="text" id="nickname" name="nickname">
		</div>
		<div>
			<label for="passwd">Passwort: </label>
			<input type="password" id="passwd" name="passwd">
		</div>
		<div>
			<input type="submit" value="Registrieren">
		</div>
		</form>
	</div>

	<div id=footer>
			<address>
				<!-- Ich weiss nicht inwiefern du deinen Footer anpassen willst aber ich hab mal ein Muster-Impressum darunter gepackt ;-) -->
			Gert Braschel &middot; Musterstrasse 88-89/12/10 &middot; A-1100 Wien &middot; <a href=mailto:office@ebsolem.at>Kontakt<a/>
			</address>
	</div>
</div> 
</body>
</html>	
