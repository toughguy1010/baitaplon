<?php
session_start();

include('../config/adminheader.php');
include('../config/constant.php')
?>

    <!--Navbar-->
    <section class="text-center bg-light">
        <div class="container  ">
            <ul class="d-flex justify-content-around">
                    <li class="fs-2 fw-bold "><a  href="index.php" class="menu-text">Home</a></li>
                    <li class="fs-2 fw-bold "><a  href="mana_guest.php" class="menu-text">Guest</a></li>
                    <li class="fs-2 fw-bold "><a  href="mana_tour.php" class="menu-text">Tour</a></li>
                    <li class="fs-2 fw-bold "><a  href="mana_bookingtour.php" class="menu-text">Booking</a></li>
                    <li class="fs-2 fw-bold "><a  href="../logout.php" class="menu-text">Logout</a></li>
                    
            </ul>
        </div>
    </section>
    <!--Navbar-->
     <div class="container text-center mt-5">
         <img src="../img/admin.jpg" alt="">
     </div>

<?php
include('../config/adminfooter.php')

?>