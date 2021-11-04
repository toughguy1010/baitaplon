<?php
 include('../config/adminheader.php');
 include('../config/constant.php');

  $guest_id = $_GET['guest_id'];
  $sql = "SELECT * FROM guest_id = $guest_id";
  $result = mysqli_query($conn,$sql);
  if($result){
      $row = mysqli_fetch_assoc($result);
      $guest_name = $row['guest_name'];;
      $guest_age = $row['gues_age'];
      $guest_gender = $row['guest_gender'];
      $guest_address = $row['guest_address'];
      $guest_phone = $row['guest_phone'];
      $guest_email = $row['guest_email'];
      $guest_username = $row['guest_username'];
      $guest_password = $row['guest_password'];
     
  }
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
    <h1 class="fw-bold my-5 fst-italic"> Sửa thông tin người dùng </h1>
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
                <div class="mb-3">
                    <label class="form-label">Tên đăng nhập</label>
                    <input type="text" class="form-control" name="guest_username" id="guest_username">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" name="guest_password" id="guest_password">
                </div>
                <button type="submit" class=" btn btn-primary" name="submit">Sửa thông tin</button>
            </form>
        </div>
    </div>
</section>




<?php


if(isset($_POST['submit'])){
    $guest_name = $_POST['guest_name'];;
      $guest_age = $_POST['guest_age'];
      $guest_gender = $_POST['guest_gender'];
      $guest_address = $_POST['guest_address'];
      $guest_phone = $_POST['guest_phone'];
      $guest_email = $_POST['guest_email'];
      $guest_username = $_POST['guest_username'];
      $guest_password = $_POST['guest_password'];
      $sql = "UPDATE `user`
      SET `guest_name` ='$guest_name',
      `guest_age` = '$guest_age',
      `guest_gender` = '$guest_gender',
      `guest_address` = '$guest_address',
      `guest_phone`= '$guest_phone',
      `guest_email` = '$guest_email',
      `guest_username`= '$guest_username',
      `guest_password` = '$guest_password'
      WHERE `guest_id` = $guest_id";
      $result = mysqli_query($conn,$sql);
      if($result > 0){
        $_SESSION['noti']= "Đã cập nhật thành công";
        header("location:mana_guest.php");
    }else{
        $_SESSION['noti'] =" Lỗi!!!!";
      header("location:location:../error.php");
    }
}
include('../config/adminfooter.php');
?>