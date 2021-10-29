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
    <h1 class="fw-bold my-5 fst-italic"> Danh sách người dùng </h1>
    <?php
    if(!isset($_SESSION)){
        echo $_SESSION;
    }

    ?>
    <br>
    <a href="add_guest.php" class=" btn btn-outline-primary">Thêm người dùng</a>
    <table class="table table-info table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Tên người dùng</th>
      <th scope="col">Tuổi</th>
      <th scope="col">Giới tính</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">Số điện thoại</th>
      <th scope="col">Email</th>
      <th scope="col">Sửa thông tin</th>
      <th scope="col">Xóa người dùng</th>
    </tr>
  </thead>
  <tbody>
  <?php
  //Truy van 
  $sql ="SELECT * FROM user";
  $result = mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0){
      $i = 1;
      while($row = mysqli_fetch_assoc($result)){
    
      
  

  ?>
    <!--hien thi du lieu-->
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td><?php echo $row['guest_name']; ?></td>
      <td><?php echo $row['guest_age']; ?></td>
      <td><?php echo $row['guest_gender']; ?></td>
      <td><?php echo $row['guest_address']; ?></td>
      <td><?php echo $row['guest_phone']; ?></td>
      <td><?php echo $row['guest_email']; ?></td>
      <td><a href="edit_guest.php?guest_id=<?php echo $row['guest_id']; ?> " class="btn btn-outline-success"> Sửa thông tin </a></td>
      <td><a href="delete_guest.php?guest_id=<?php echo $row['guest_id']; ?> " class="btn btn-outline-danger"> Xóa người dùng </a></td>
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