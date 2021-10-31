<?php
include ('../config/adminheader.php');
include('../config/constant.php');

?>
<!--Navbar-->
    <section class="  bg-light">
        <div class="container  ">
            <ul class="d-flex justify-content-around">
                    <li class="fs-2 fw-bold "><a  href="index.php" class="menu-text">Home</a></li>
                    <li class="fs-2 fw-bold "><a  href="mana_guest.php" class="menu-text">Guest</a></li>
                    <li class="fs-2 fw-bold "><a  href="mana_tour.php" class="menu-text">Tour</a></li>
                    <li class="fs-2 fw-bold "><a  href="mana_bookingtour.php" class="menu-text">Booking</a></li>
                    <li class="fs-2 fw-bold "><a  href="logout.php" class="menu-text">Logout</a></li>
                    
            </ul>
        </div>
    </section>
<!--Navbar-->

<div class="container text-center">
    <h1 class="fw-bold my-5 fst-italic">Xác nhận đơn đặt tour</h1>

    <div class="form-floating d-flex">
        <select class=" form-select form-select-sm" id="booking_status" >
            <option value="1"></option><!--Chốt Đơn-->
            <option value="2"></option><!--hủy đơn-->
        </select>
        <button type="submit" class="btn btn-primary"> Xác nhận</button>
    </div>
    
</div>



<?php



include('../config/adminfooter.php')

?>
