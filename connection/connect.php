<?php
$dbhost = '10.0.0.253';
$dbuser = 'admintoy';
$dbpass = 'gotoytoynoy';
$dbname = 'hosxp';
//connect mysqli
$db=new mysqli("$dbhost","$dbuser","$dbpass","$dbname");
if($db->connect_errno) die ('Connect Failed! :'.mysqli_connect_error ());
$db->set_charset('utf8');
//connect PDO
try{
$dbh = new PDO('mysql:host='.$dbhost.';dbname='.$dbname.'',''.$dbuser.'',''.$dbpass.'');
$dbh->exec("SET CHARACTER SET utf8");
}
catch (PDOException $e) {
    echo $e->getMessage();
}
?>
