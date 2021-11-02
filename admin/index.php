<?php
ob_start();
session_start();
if(!isset($_SESSION["login"]))
{
    header("location:../admin/login.php");
}
 include('../config/conection.php');

?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <title>Hello, world!</title>
    <!--Navbar-->
    <section class="text-center bg-light">
        <div class="container  ">
            <ul class="d-flex justify-content-around">
                    <li class="fs-2 fw-bold "><a  href="../index.php" class="menu-text">Home</a></li>
                    <li class="fs-2 fw-bold "><a  href="mana_guest.php" class="menu-text">Guest</a></li>
                    <li class="fs-2 fw-bold "><a  href="mana_tour.php" class="menu-text">Tour</a></li>
                    <li class="fs-2 fw-bold "><a  href="mana_bookingtour.php" class="menu-text">Booking</a></li>
                    <li class="fs-2 fw-bold "><a  href="../admin/logout.php" class="menu-text">Logout</a></li>
                    
            </ul>
        </div>
    </section>
    <!--Navbar-->
     <div class="container text-center mt-5">
         <img src="../img/admin.jpg" alt="">
     </div>

<?php

include('../config/footer.php');

?>