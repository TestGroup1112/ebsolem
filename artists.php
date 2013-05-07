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
<?php
if (isset($_POST['artist']))$callsign = $_POST['callsign'];
    ?>
Artist suchen: <form method="POST" action="artists.php">
<?php
if (isset($callsign))
{
    ?>
<input type="text" name="artist" value ="<?php echo htmlspecialchars($callsign);?>">
<?php
}
else
{
    ?>
<input type="text" name="artist">
<?php
}
?>
<INPUT TYPE="image" SRC="search.png" alt="suchen">
</form><br>
<?php
echo "<a href=\"index.php\">Alle anzeigen</a>";
error_reporting(0);
?>
<?php
/**
 * @author OE4SKW
 * @copyright 2011
 */
include getcwd()."/connection.php";
if (isset($callsign))
{
$results = $connection -> results("SELECT * From Mitglieder WHERE `CALL` LIKE '{$callsign}' ORDER BY `Mitglieder`.`CALL` ASC","0");
}
else{
//$results =$connection -> results("SELECT * From Mitglieder","0"); 
$results = $connection -> results("SELECT * From Mitglieder ORDER BY `CALL` ASC","1");    
}
echo "<center><table border = 1 width = 40%>";
echo "<tr><th>Callsign</th><th>Name</th><th>Adl</th></tr>";

while ($row = mysql_fetch_assoc($results))
{
    //print_r($row);
echo "<tr><td style=\"width:auto\"><a href =\"details.php?call=".$row['CALL']."\">".$row['CALL']."</a></td>";
echo "<td style=\"width:auto\"><a href =\"details.php?call=".$row['CALL']."\">".utf8_encode($row['NACHNAME'])." ".utf8_encode($row['VORNAME'])."</a></td>";
echo "<td style=\"width:auto\"><a href =\"details.php?call=".$row['CALL']."\">0".$row['ADL']."</a></td>";
}
?>
</body>
</html>
