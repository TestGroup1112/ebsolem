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
$result = $connection -> getResults("SELECT * FROM `blog` WHERE `ID` like ".$_GET['ID'],"0");
while ($row = mysql_fetch_assoc($result))
{?>
<?php
require_once "richtexteditor/include_rte.php" ?>   
<form id="editor" method="POST">   
            <?php   
                // Create Editor instance and use Text property to load content into the RTE.  
                $rte=new RichTextEditor();   
                $rte->Text=$row['fuulltext']; 
                // Set a unique ID to Editor   
                $rte->ID="Editor1";    
                $rte->MvcInit();   
                // Render Editor 
                echo $rte->GetString();  
            ?>   
        </form>   
</body>   
</html> 
</div>
</div>
<?php
}
