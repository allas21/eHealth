<?php
$mysql_hostname = "localhost"; //an den einai ston idio ipologisti i database vazoume thn ip tis
$mysql_user = "root";//username gia sindesi sti mysql 
$mysql_password = "";//password gia sindesi sti mysql
$mysql_database = "telemed_db";//onoma vasis dedomenon pou periexei ta tables gia login kai about
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) 
or die("Opps some thing went wrong"); //klisi methodou gia na kanei login i php stin mysql
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong"); // epilegei ti vasi pou rithmisame parapano oti theloume na xrisimopoiisoume 
?>