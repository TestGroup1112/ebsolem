<ul>
<?php
include ("connection.php");
$result = $connection -> getResults("SELECT * FROM `hornav`","0");
while ($row = mysql_fetch_assoc($result))

{
echo "<li><a href=\"".$row['Link']."\">".$row['Name']."</a></li>";
}
?>
</ul>
