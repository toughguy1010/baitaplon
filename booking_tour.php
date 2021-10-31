<link href="css/booking_tour.css" rel="stylesheet">
<?php


include('config/header.php');
include('config/constant.php')

?>

<!--Navbar-->
<section>
        <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/logo.png" alt="Logo">
                </a>

                <form class="d-flex">
                    <a href="log_in.php">
                        <button type="button" class="btn btn-primary me-3 ">Login</button>
                    </a>
                    <a href="log_out.php">
                        <button type="button" class="btn btn-primary me-3 ">Logout</button>
                    </a>
                </form>
               
            </div>
        </nav>
    </section>

    <!--Navbar-->
    <section class="checkout-head d-none d-lg-block">
        <div class="container">
            <div class="row">
                <ul class="head col-12">
            <li class="checked">1. Nhập thông tin</li>
            <li class="checked"><i class="">
            </i>
            </li>
            <li>2. Thanh toán</li>
                </ul>
            </div>
        </div>
    </section>

    <?php
        //Truy vấn bảng tour (có thể dùng booking hoặc tùy)
        if(isset($_GET['tour_id']))
            $tour_id = $_GET['tour_id'];
        $sql = "SELECT * FROM tour WHERE tour_id=$tour_id";
        $result = mysqli_query($conn,$sql);
        //check xem bảng tour có đc kết nối hay ko
        if(mysqli_num_rows($result)>0){
           
            //tour được kết nối
            while($row = mysqli_fetch_assoc($result)){
                
                
            
                //Get the Values like img,tour_Name,tour_number(lấy giá trị cần dùng)
                $tour_id = $row['tour_id'];
                $tour_Name = $row['tour_Name'];
                $img = $row['img'];
                $tour_number = $row['tour_number'];
                $tour_day_start = $row['tour_day_start'];
                $tour_day_end = $row['tour_day_end'];
                $tour_days = $row['tour_days'];
                $tour_location = $row['tour_location'];

        ?>
        

            <div class="">
                <a href="#">
                    <img src="<?php echo $img?> " class="card-img-top img-cruv " alt="... "> <!--lấy ảnh từ csdl-->
                </a>
                <div class="card-body ">
                   
                        <h4 class="tour_Name">
                             <?php echo $tour_Name?> <!--lấy tên của tour từ csdl-->
                        </h4>
                    
                    <p class=""> Tour: <?php echo $tour_number ?> người</p><!--lấy số lượng khách của tour từ csdl-->
                    <p class=""> Khởi hành: <?php echo $tour_day_start ?>
                    <p class=""> Kết thúc: <?php echo $tour_day_end ?>
                    <p class=""> Địa điểm:  <?php echo $tour_location ?>
                </div>

                

            
            
            <?php
            }
        }
        
        ?>
<?php
    $sql = "SELECT * FROM user";
        $result = mysqli_query($conn,$sql);
        //check xem bảng tour có đc kết nối hay ko
        if(mysqli_num_rows($result)>0){
           
            //tour được kết nối
            while($row = mysqli_fetch_assoc($result)){
                
                
            
                //Get the Values like img,tour_Name,tour_number(lấy giá trị cần dùng)
                $guest_id = $row['guest_id'];
                $guest_name = $row['guest_name'];
                $guest_age = $row['guest_age'];
                $guest_gender = $row['guest_address'];
                $guest_phone = $row['guest_phone'];
                $guest_email = $row['guest_email'];
            }
        }
                
        ?>
 

    <section class="container">
    <h1> Tổng quan về chuyến đi </h1>
    <div class="row">
        <div class="col-12">
            <form method = "POST">
                <div class="mb-3">
                    <label class="form-label">Họ và tên*</label>
                    <input type="text" class="form-control" name="guest_name" id="guest_name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tuổi</label>
                    <input type="text" class="form-control" name="guest_age" id="guest_age">
                </div>
                <div class="mb-3">
                    <label class="form-label">Giới tính</label>
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
                <div class="mx-auto" style="width: 200px;">
                    <a class="btn btn-info btn-lg" href="process_booking_tour.php" type="submit" name="submit" value='Đặt Tour'>Đặt Tour</a>
                </div>
        </div>
    </div>
</section>

<?php
if(isset($_POST['submit'])){
    $guest_name =$_POST['guest_name'];
    $guest_age = $_POST['guest_age'];
    $guest_gender = $_POST['guest_gender'];
    $guest_address = $_POST['guest_address'];
    $guest_phone = $_POST['guest_phone'];
    $guest_email = $_POST['guest_email'];
     echo $sql ="INSERT INTO `user`( `guest_name`, `guest_age`, `guest_gender`, `guest_address`, `guest_phone`, `guest_email`)
     VALUES ('$guest_name','$guest_age','$guest_gender','$guest_address','$guest_phone','$guest_email')";
    $result = mysqli_query($conn,$sql);
    if($result > 0){
        $_SESSION['noti']= "Đã thêm thành công";
        //header("location:mana_guest.php");
    }else{
        $_SESSION['noti'] =" Lỗi!!!!";
      // header("location:mana_guest.php");
    


    }
}
?>
 
 <div class="container">
 <div class="customer">
      <h1> Yêu cầu liên quan </h1>
      <div class="change">
          <div class="change-title">
              <label> Số lượng hành khách </label>
          </div>
      <div class="change-number">
          <select class="form-control" name="booking_guest_number" placeholder="Vui lòng chọn số người đi" required="required">
              <option selected="selected" value>Nhập số lượng hành khách</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
          </select>

      <div class="mb-3">
              <label class="form-label">Hướng dẫn viên </label>
              <input type="text" class="form-control" name="booking_guid" id="booking_guid" placeholder="Có thể bỏ qua">
              
      </div>

      <div class="mb-3">
                  <label class="form-label">Ghi chú</label>
                  <input type="text" class="form-control" name="booking_status" id="booking_status">
      </div>

      <div class="mx-auto" style="width: 200px;">
            <a class="btn btn-info btn-lg" href="process_booking_tour.php" input type=button value='Đặt Tour'>Đặt Tour</a>
      </div>
  </div>
</div>
  


    <?php
if(isset($_POST['submit'])){
    $booking_day =$_POST['booking_day'];
    $booking_guest_number = $_POST['booking_guest_number'];
    $booking_guid = $_POST['booking_guid'];
    $booking_status	= $_POST['booking_status'];
     echo $sql ="INSERT INTO `user`( `booking_day`, `booking_guest_number`, `booking_guid`, `booking_status`)
     VALUES ('$$booking_day','$booking_guest_number','$booking_guid','$booking_status')";
    $result = mysqli_query($conn,$sql);
    if($result > 0){
        $_SESSION['noti']= "Đã thêm thành công";
        //header("location:mana_guest.php");
    }else{
        $_SESSION['noti'] =" Lỗi!!!!";
      // header("location:mana_guest.php");
    ?>
      
<?php
    }
}
?>

                
<!-- Sửa lại các lớp phù hợp với CSDL booking_tour -->
                

</div>
        

                    
        

    




<!--Footer-->
<section class="footer mt-5">
        <div class="container">
            <h2>Vì sao chọn CSE458_Travel </h2>
</div>

            <div class="row">
                <div class="col-4 text-center mt-5">
                <i class="fa-solid fa-globe"></i>
                    <h4>Mạng bán tour</h4>
                    <p>Đầu tiên tại Việt Nam</p>
                    <p>Ứng dụng công nghệ mới nhất</p>
                </div>
                <div class="col-4 text-center mt-5">
                <i class="fa-regular fa-cash-register"></i>
                    <h4>Thanh toán</h4>
                    <p>An toàn & linh hoạt</p>
                    <p>Liên kết với các tổ chức tài chính</p>
                </div>
                <div class="col-4 text-center mt-5">
                <i class="fa-regular fa-sack-dollar"></i>
                    <h4>Giá cả</h4>
                    <p>Luôn có mức giá tốt nhất</p>
                    <p>Bảo đảm giá tốt</p>
                </div>
            </div>
            <div class="row">
                <div class="col-4 text-center mt-5">
                <i class="fa-regular fa-face-smile-tongue"></i>
                    <h4>Sản phẩm</h4>
                    <p>Đa dạng, chất lượng</p>
                    <p>Đạt chất lượng tốt nhất</p>
                </div>
                <div class="col-4 text-center mt-5">
                <i class="fa-thin fa-arrow-down-arrow-up"></i>
                    <h4>Đặt tour</h4>
                    <p>Dễ dàng và nhanh chóng</p>
                    <p>Đặt tour với chỉ 3 bước</p>
                </div>
                <div class="col-4 text-center mt-5">
                <i class="fa-regular fa-handshake-angle"></i>
                    <h4>Hỗ trợ</h4>
                    <p>Từ 8h-22h</p>
                    <p>Hotline & Hỗ trợ trực tuyến</p>
                </div>
            </div>
        </div>
    </section>
    <!--Footer-->

<?php
include('config/footer.php')
?>