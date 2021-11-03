<?php
$host="localhost";
$user="root";
$password="12345678";
$db="db_dulich";

$con=mysqli_connect($host,$user,$password,$db);
if($con==false){
    die("connection error");
}

?>