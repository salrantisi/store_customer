<?php
$host= 'localhost';
$user= 'root';
$password='';
define('dbName','juan_store');

$conn = mysqli_connect($host,$user,$password,dbName);
if(mysqli_connect_errno()){
echo"faild to connect DB";
exit;
}
?>