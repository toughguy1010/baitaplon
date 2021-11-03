<?php
include ('../config/adminheader.php');
include('../config/constant.php');
if(isset($_GET['booking_id']))
{
    $booking_id = $_GET['booking_id'];
    $sql = "SELECT * FROM booking_tour WHERE booking_id = $booking_id";
    $result = mysqli_query($conn,$sql);
    if($result){
        $row = mysqli_fetch_assoc($result);
        $booking_status = $row['booking_status'];
        $booking_day= $row['booking_day'];
    }
}
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

<div class="container-fluid report text-center">
    <h1 class=" fw-bold py-5 fst-italic">Xử lí đơn đặt tour</h1>

    <form action="" method="POST" class="form-floating text-center">
        <select class="  form-select-sm form-booking" id="booking_status" name="booking_status">
            <option <?php if($booking_status == "Chốt đơn")  ?> value="Chốt đơn">Chốt đơn</option><!--Chốt Đơn-->
            <option <?php if($booking_status == "Hủy đơn"){echo "selected";}  ?> value="Hủy đơn">Hủy đơn</option><!--hủy đơn-->
        </select>
        <input type="datetime-local" id="booking_day" name="booking_day">
        <button type="submit" class="btn btn-primary " name="submit"> Xác nhận</button>
    </form>
    
</div>




<?php
if(isset($_POST['submit'])){
    $booking_status = $_POST['booking_status'];
    $booking_day = $_POST['booking_day'];
    $sql2 = "UPDATE `booking_tour` 
    SET `booking_status` = '$booking_status',
    `booking_day` = '$booking_day'
    WHERE `booking_id` = '$booking_id'";
    $result2 = mysqli_query($conn,$sql2);
    if($result2 > 0){
        $_SESSION['noti']= "Đã xử lí thành công";
        header("location:mana_bookingtour.php");
    }else{
        $_SESSION['noti']= "Lỗi!!!!";
        header("location:mana_bookingtour.php");
    }
}


include('../config/adminfooter.php')

?>
