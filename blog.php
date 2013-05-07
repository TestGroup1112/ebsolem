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
<?php
include_once ("connection.php");
if (isset($_GET['ID']))
{
$result = $connection -> getResults("SELECT * FROM `blog` WHERE `ID` like ".$_GET['ID'],"0");
while ($row = mysql_fetch_assoc($result))
{?>
<div id=content>
<?php
echo "<h1>".utf8_encode($row['Title'])."</h1><br><br><p>".utf8_encode($row['fulltext']);
$resultpublisher = $connection -> getResults("SELECT Username FROM `user`WHERE `ID` like ".$row['OwnerID'],"0");
$publisher=mysql_fetch_assoc($resultpublisher);
echo "<div id=headmenu>";
echo"<p>Published at ".$row['published']." by ".$publisher['Username']."</p>";
?>
</div>
</div>
<?php
}
}
else 
{
$result = $connection -> getResults("SELECT * FROM `blog`","0");
while ($row = mysql_fetch_assoc($result))
{?>
<div id=content>
<?php
echo "<h1>".utf8_encode($row['Title'])."</h1><br><br><p>".utf8_encode($row['Text'])."<a href=\"".$_SERVER['PHP-SELF']."/TestDir/blog.php?ID=".$row['ID']."\">weiterlesen...</a></p>";

$resultpublisher = $connection -> getResults("SELECT Username FROM `user`WHERE `ID` like ".$row['OwnerID'],"0");
$publisher=mysql_fetch_assoc($resultpublisher);
echo "<div id=headmenu>";
echo"<p>Published at ".$row['published']." by ".$publisher['Username']."</p>";
?>
</div>
</div>
<?php
}
}
?>
<div id=footer>
			<address>
				<!-- Ich weiss nicht inwiefern du deinen Footer anpassen willst aber ich hab mal ein Muster-Impressum darunter gepackt ;-) -->
			Gert Braschel &middot; Musterstrasse 88-89/12/10 &middot; A-1100 Wien &middot; <a href=mailto:office@ebsolem.at>Kontakt<a/>
			</address>
	</div>
</div>

