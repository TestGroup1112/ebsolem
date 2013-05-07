<?php
error_reporting(0);?>
<link rel='shortcut icon' href="<?php echo getcwd();?>/favicon.ico">
<?php
/**
 * @author OE4SKW
 * @copyright 2011
 */
include getcwd()."/mysql_connect.php";
$connection = new db_connection("mysqlsvr13.world4you.com","amrsat","5vxw7","0");
$connection -> SelectDb("amrsatdb6","0");
?>
