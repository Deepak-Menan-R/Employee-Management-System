<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

// $host='sql*number*.epizy.com'; //mysql host name
// $user='epiz_*number*';  //mysql username   
// $pass='password';   //mysql password
// $db='epiz_*number*_*database-name*'; //mysql database

$host = "localhost";
$db = "EMS";
$user = "root";
$pass = "";

// $mysqli = new mysqli(hostname: $host,
//                      username: $username,
//                      password: $password,
//                      database: $dbname);

$con=mysqli_connect($host,$user,$pass,$db);
if($con) {
// echo "Connection successful";
}
else {
  echo "Connection error";
}
?>

</body>
</html>
