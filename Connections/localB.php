<?php

//localhost
error_reporting(0);
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_local = "127.0.0.1";
$database_local = "p7_lfi";
$username_local = "root";
$password_local = "";
$local = mysql_pconnect($hostname_local, $username_local, $password_local) or trigger_error(mysql_error(),E_USER_ERROR);
$con = mysqli_connect($hostname_local,$username_local,"",$database_local); 
mysql_connect('127.0.0.1','root','')or die(mysql_error());
mysql_select_db('p7_lfi');
?>



<?php
//hostGator
error_reporting(0);
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
//108.167.180.195 "shittyIP"
$hostname_local = "localhost";
$database_local = "lfintia_p7_lfi";
$username_local = "lfintia";
$password_local = "CapstonePanel";
//$local = mysql_pconnect($hostname_local, $username_local, $password_local) or trigger_error(mysql_error(),E_USER_ERROR);
$con = mysqli_connect($hostname_local,$username_local,$password_local,$database_local); 
mysql_connect($hostname_local,$username_local,$password_local)or die(mysql_error());
mysql_select_db('lfintia_p7_lfi');
if (!$con)
  {
  die("Connection error: " . mysqli_connect_error());
  }
?>


<?php
//byethost
error_reporting(0);
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_local = "sql104.byethost24.com";
$database_local = "b24_15629885_p7_lfi";
$username_local = "b24_15629885";
$password_local = "thisbuilders123";
//$local = mysql_pconnect($hostname_local, $username_local, $password_local) or trigger_error(mysql_error(),E_USER_ERROR);
$con = mysqli_connect($hostname_local,$username_local,$password_local,$database_local); 
mysql_connect($hostname_local,$username_local,$password_local)or die(mysql_error());
mysql_select_db('b24_15629885_p7_lfi');
if (!$con)
  {
  die("Connection error: " . mysqli_connect_error());
  }
?>
