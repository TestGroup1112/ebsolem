<?php
/**
 * @author OE4SKW
 * @copyright 2011
 */
class db_connection 
{
    private $connection = 0;
     public function __construct($host,$user,$password,$er) 
     {
      
                $connection = mysql_connect($host,$user,$password);
                mysql_set_charset('utf8_general_ci'); 
                if ($er == "1")
                {
                if ($connection)
                {
                    echo "Connction stablished<br>";
                    }
                else
                {
                echo mysql_errno()." : ". mysql_error();
                }
                }
     }
          public function SelectDb($db,$er) 
     {
                $db = mysql_select_db($db);
                if ($er == "1")
                {
                    if ($db)
                    {
                      echo "DB Conncted<br>";
                    }
                    else
                    {
                    echo mysql_errno()." : ". mysql_error();
                    }
                }
     }
               public function getResults($qry,$er) 
     {
                $result = mysql_query($qry);
                if ($er == "1")
                {
                    if ($result)
                    {
                      echo "Abfrage ok<br>";
                    }
                    else
                    {
                    echo mysql_errno()." : ". mysql_error();
                    }
                } 
                return ($result);
     }
     
				public function fetchResults($res,$er)
				{
				$fetchedresult = mysql_fetch_assoc($res);
                if ($er == "1")
                {
                    if ($fetchedresult)
                    {
                      echo "fetching ok<br>";
                    }
                    else
                    {
                    echo mysql_errno()." : ". mysql_error();
                    }
                } 
					
				}
} 
?>

