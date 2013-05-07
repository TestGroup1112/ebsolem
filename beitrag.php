<!DOCTYPE html>
<html lang="de">
<head> 
<meta charset="utf-8">
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
<div id=header>	
<?require_once "richtexteditor/include_rte.php" ?>   
<html>   
<body>   
        <form id="form1" method="POST">   
            <?php   
                // Create Editor instance and use Text property to load content into the RTE.  
                $rte=new RichTextEditor();   
                $rte->Text="Type here"; 
                // Set a unique ID to Editor   
                $rte->ID="Editor1";    
                $rte->MvcInit();   
                // Render Editor 
                echo $rte->GetString();  
            ?>   
        </form>   
</body>   
</html> 


