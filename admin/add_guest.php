<?php
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
                    <li class="fs-2 fw-bold "><a  href="logout.php" class="menu-text">Logout</a></li>
                    
            </ul>
        </div>
    </section>
<!--Navbar-->

<section class="container">
    <h1 class="fw-bold my-5 fst-italic"> Thêm người dùng </h1>
    <div class="row">
        <div class="col-12">
            <form method = "POST">
                <div class="mb-3">
                    <label class="form-label">Tên người dùng</label>
                    <input type="text" class="form-control" name="guest_name" id="guest_name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tuổi</label>
                    <input type="text" class="form-control" name="guest_age" id="guest_age">
                </div>
                <div class="mb-3">
                    <label class="form-label">Giới Tính</label>
                    <input type="text" class="form-control" name="guest_gender" id="guest_gender">
                </div>
                <div class="mb-3">
                    <label class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" name="guest_address" id="guest_address">
                </div>
                <div class="mb-3">
                    <label class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" name="guest_phone" id="guest_phone">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="guest_email" id="guest_email">
                </div>
            </form>
        </div>
    </div>
</section>




<?php
include('../config/adminfooter.php')

?>