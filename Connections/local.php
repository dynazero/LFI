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