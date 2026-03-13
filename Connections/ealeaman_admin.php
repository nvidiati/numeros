<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_ealeaman_admin = "localhost";
$database_ealeaman_admin = "alemancb_admin";
$username_ealeaman_admin = "alemancb_eadmin";
$password_ealeaman_admin = "qNhQ@Lwq;oTg";
$ealeaman_admin = mysql_pconnect($hostname_ealeaman_admin, $username_ealeaman_admin, $password_ealeaman_admin) or trigger_error(mysql_error(),E_USER_ERROR); 
?>