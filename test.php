<?php
error_reporting(E_ALL);
$_POST['editor'];
if ($_POST['Bold'] == "B")
{
if (!isset($_POST['boldset']))
{
$text=$_POST['editor']."<b></b>";
}
else
{
$text=$_POST['editor']."</b>";
}
if (isset($_POST['Bold']))
{
unset($_POST['Bold']);
}
}
$text_encoded=htmlspecialchars_decode($text);
$text_ready=htmlentities($text_encoded);
?>
<!Doctype>
<html>
<head>
</head>
<body>
<table border="1"><tr>
<form action="" method ="post">
<td><input type="submit" name="Bold" value="B"></td>
<td><input type="submit" name="Itealic" value="I"></td>
<td><input type="submit" name="Underline" value="U"></td>
<?php
if ($_boldset=="1")
{
?>
<input type="hidden" vane="boldset" value="0">
<?php
}
else
{
	?>
<input type="hidden" vane="boldset" value="1">
<?php
}
?>
</tr>
</table>
<p>
<?php
if (!isset($text))
{
	$text="";
}
if ($_POSt['submit']== "vorschau")
{
echo "<p>".$text_ready."</p>";
}
echo "<input type=\"textarea\" name=\"editor\" style=\"width: 300px; height: 150px;\" value=\"".$text_ready."\" contentEditable=\"true\">";
if ($_POSt['submit']== "vorschau")
{
?>
<input type="submit" name="submit" value="speichern">
<?
}
else
{?>
<input type="submit" name="submit" value="Vorschau">
<?}
?>
<p><input type="file" name="file">
<input type="submit" name="upload">
</form>
</p>
</body>
</html>
