<?php
include('../config/adminheader.php');
include('../config/constant.php')

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

<div class="container-fluid ">
    <h1 class="fw-bold my-5 fst-italic"> Danh sách thông tin các tour</h1>
    <?php
   if(isset($_SESSION['noti'])){
      echo $_SESSION['noti'];
      unset($_SESSION['noti']);
    }

    ?>
    <br>
    <table class="table table-info table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Tên tour</th>
      <th scope="col">Giá</th>
      <th scope="col">Ngày khởi hành</th>
      <th scope="col">Ngày kết thúc</th>
      <th scope="col">Thời gian diễn ra tour</th>
      <th scope="col">Địa điểm</th>
      <th scope="col">Số điện thoại liên hệ</th>
      <th scope="col">Hướng dẫn viên tour</th>
      <th scope="col">Số lượng chỗ</th>
      <th scope="col">Cập nhật thông tin</th>
      <th scope="col">Xóa tour</th>
    </tr>
  </thead>
  <tbody>
  <?php
  //Truy van 
  $sql ="SELECT * FROM tour";
  $result = mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0){
      $i = 1;
      while($row = mysqli_fetch_assoc($result)){

  ?>
    <!--hien thi du lieu-->
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td><?php echo $row['tour_Name']; ?></td>
      <td><?php echo $row['tour_price']; ?></td>
      <td><?php echo $row['tour_day_start']; ?></td>
      <td><?php echo $row['tour_day_end']; ?></td>
      <td><?php echo $row['tour_days']; ?></td>
      <td><?php echo $row['tour_location']; ?></td>
      <td><?php echo $row['tour_phone_contact']; ?></td>
      <td><?php echo $row['tour_guild']; ?></td>
      <td><?php echo $row['tour_number']; ?></td>
      <td><a href="edit_tour.php?tour_id=<?php echo $row['tour_id']; ?> " class="btn btn-outline-success"> Cập nhật  </a></td>
      <td><a href="delete_tour.php?tour_id=<?php echo $row['tour_id']; ?> " class="btn btn-outline-danger"> Xóa tour</a></td>
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