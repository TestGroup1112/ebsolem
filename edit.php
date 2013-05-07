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
include_once ("connection.php");
if (isset($_GET['ID']))
{
$result = $connection -> getResults("SELECT * FROM `blog` WHERE `ID` like ".$_GET['ID'],"1");

require_once "richtexteditor/include_rte.php";
 ?>   
        <form id="form1" method="POST">   
            <?php   
	$rte2=new RichTextEditor();
    $rte2->Name="Editor2";
    $rte2->Height="200px";
    $rte2->Skin="smartsilver";
    $rte2->Toolbar="forum";
    $rte2->MvcInit();
    $rte2->RenderSupportAjax=false; 
    
while ($row = mysql_fetch_assoc($result))
{
$rte2->Text=$row['fulltext'];
}
}
?>   
        </form>   
</div>
</div>

