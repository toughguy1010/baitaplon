<?php

session_start();

$conn = mysqli_connect('localhost','root','','db_dulich');
if(!$conn){
    die('Khong the ket noi');
}

?>