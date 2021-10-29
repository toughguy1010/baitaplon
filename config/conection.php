<?php
$host="localhost";
$user="root";
$password="12345678";
$db="db_dulich";

$data=mysqli_connect($host,$user,$password,$db);
if($data==false){
    die("connection error");
}

?>