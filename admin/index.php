<!DOCTYPE html>
<html lang="de">
<head> 
<meta charset="utf-8">
<title>Ebsolems Blog... - Der Kreativität freien Lauf lassen!!!</title>
<meta name="description" content=" ebsolems Blog - Die Künstlercommunity">
<link rel="stylesheet" href="../style.css" media="screen">
</head>
<body>
<div id=wrapper>
<div id=header>
		<?php
		include "../header.php";
		?>
	</div>
	<div id=headmenu>
		<?php
		include "../headmenu.php";
		?> 
	</div>	
<div id=content>
		<h1>Backend Anmeldung</h1>
		<form id="login" action="#">
		<div>
			<label>Künstlername: </label> 
			<input type="text" id="nickname" name="nickname">
		</div>
		<div>
			<label>Passwort: </label>
			<input type="password" id="passwd" name="passwd">
		</div>
		<div>
			<input type="submit" value="Anmelden">
		</div>
		</form>
	</div>
</div>
<div id=footer>
			<address>
				<!-- Ich weiss nicht inwiefern du deinen Footer anpassen willst aber ich hab mal ein Muster-Impressum darunter gepackt ;-) -->
			Gert Braschel &middot; Musterstrasse 88-89/12/10 &middot; A-1100 Wien &middot; <a href=mailto:office@ebsolem.at>Kontakt<a/>
			</address>
	</div>

