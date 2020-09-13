<?php
define('db_server','127.0.0.1');
define('db_username','root');
define('db_pwd','');
define('db_name','ib_db')
$link=mysqli_connect(db_server,db_username,db_pwd,db_name);

if($link===false){
die("Error couldn't contact".mysqli_connect_error());
}
?>