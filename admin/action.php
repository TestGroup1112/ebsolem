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
<p alignment="center" text-alignment="center"> redirecting....</p>
<?php
include("../connection.php");
$action = $_POST['submit'];
echo $action;
if ($action == "einloggen")
	{
			$result=$connection -> getResults ("SELECT `Password` FROM `user` WHERE  `Username` LIKE ebsolem","1");
			while ($row = mysql_fetch_assoc($result))
				{
				echo md5($_POST['paswd'])."<br>";
				echo $row['Password'];
				if (md5($_POST['paswd']) == $row['Password'])
				{
				session_start();
				$_SESSION['username'] = $_POST['user'];
				$_SESSION['loggedin'] = true;
				header("location:backend.php");
				}
				header("location:login.php?f=1");
				}

	}
?>
<div id=footer>
			<address>
				<!-- Ich weiss nicht inwiefern du deinen Footer anpassen willst aber ich hab mal ein Muster-Impressum darunter gepackt ;-) -->
			Gert Braschel &middot; Musterstrasse 88-89/12/10 &middot; A-1100 Wien &middot; <a href=mailto:office@ebsolem.at>Kontakt<a/>
			</address>
	</div>
</body>
</html>
