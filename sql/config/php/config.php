<?php
define('DBSERVER', 'localhost');
define('DBUSERNAME', 'root');
define('DBPASSWORD', '')
define('DBNAME', 'demo')

$db = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);

if($db === false){
    die("Error: Could not connect to MySQL database." . mysqli_connect_error());
}
?>