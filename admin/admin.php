<?php
ob_start();
session_start();
if(!isset($_SESSION["login"]))
{
    header("location:../admin/login.php");
}
 include('../config/conection.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    Phần admin
    <a href="../index.php?page=logout">
                        <button type="button" class="btn btn-primary me-3 ">Logout</button>
                    </a>
</body>
</html>