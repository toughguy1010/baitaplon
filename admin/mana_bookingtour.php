<?php
include('../config/adminheader.php');
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
<div class="container-fluid">
    <h1 class="fw-bold my-5 fst-italic"> Danh sách các đơn đặt tour </h1>
    <br>

    <?php
   if(isset($_SESSION['noti'])){
      echo $_SESSION['noti'];
      unset($_SESSION['noti']);
    }

    ?>

    <table class="table table-info table-striped">
  <thead>
        <tr>
        <th scope="col">Số thứ tự</th>
        <th scope="col">Mã khách đặt tour</th>
        <th scope="col">Mã Tour</th>
        <th scope="col">Ngày đặt tour</th>
        <th scope="col">Số điện thoại khách đặt</th>
        <th scope="col">Hướng dẫn viên tour</th>
        <th scope="col">Trạng thái</th>
        <th scope="col">Xử lí đơn</th>
        </tr>
    </thead>
  <tbody>
    <?php 
    $sql = "SELECT *FROM booking_tour";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        $i = 1; 
        while($row = mysqli_fetch_assoc($result)){

    ?>
     <tr>
      <th scope="row"><?php echo $i ?></th>
      <td><?php echo $row['guest_id']?></td>
      <td><?php echo $row['tour_id']?></td>
      <td><?php echo $row['booking_day']?></td>
      <td><?php echo $row['booking_guest_number']?></td>
      <td><?php echo $row['booking_guid']?></td>
      <td><?php echo $row['booking_status']?></td>
      
      <td>
            <a href="report.php?booking_id=<?php echo $row['booking_id'] ?>" class="btn btn-outline-primary"> Xác nhận đơn đặt tour </a>
      </td>
    </tr>


    <?php
    $i++;
        }
    }
    
    
    ?>
  
  </tbody>
</table>
</div>

<?php

include('../config/adminfooter.php')
?>