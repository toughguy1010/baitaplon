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
        $sql = "SELECT * FROM tour WHERE tour_id";
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
                    <!-- <img src="<?php echo $img?> " class="card-img-top img-cruv " alt="... "> lấy ảnh từ csdl -->
                </a>
                <div class="card-body ">
                   
                        <h4 class="tour_id">
                             <?php echo $tour_id?> <!--lấy tên của tour từ csdl-->
                        </h4>
                    
                    <p class=""> Tour: <?php echo $tour_number ?> người</p><!--lấy số lượng khách của tour từ csdl-->
                    <p class=""> Khởi hành: <?php echo $tour_day_start ?>
                    <p class=""> Kết thúc: <?php echo $tour_day_end ?>
                    <p class=""> Địa điểm:  <?php echo $tour_location ?>
                </div>

                

            <div class
                
            
            <?php
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
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="guest_email" id="guest_email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Số điện thoại*</label>
                    <input type="number" class="form-control" name="guest_phone" id="guest_phone">
                </div>
                <div class="mb-3">
                    <label class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" name="guest_address" id="guest_address">
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


    <div class="customer">
        <h3> Hành Khách </h3>
        <div class="change">
            <div class="change-title">
                <h4> Số lượng hành khách </h4>
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

    </div class="detail-customer">
        <div class="list">
            <h3> Thông tin hành khách </h3>
            <form class="customer-contact-inner" action method="get" id="formMember"> <!-- Đoạn này cần sửa lại cho phù hợp với PHP -->
            <div class="b-persion block">
                <h4> Hành khách </h4>

            <div class="group-info">
                <div class="group-info-name">
                    <span>Họ tên</span>
                        <input value="1" data-val="true" data-val-number="The field persontype must be a number." data-val-required="The persontype field is required." name="[0].persontype" type="hidden">
                        <input class="form-control" name="[0].fullname" placeholder="Vui lòng nhập Họ tên" required="required" type="text" value="">
                </div>

                <div class="group-info-sex">
                    <span>Giới tính</span>
                        <select class="form-control" name="[0].gender" placeholder="Vui lòng chọn giới tính" required="required"><option selected="selected" value="">Giới tính</option>
                            <option value="0">Nữ</option>
                            <option value="1">Nam</option>
                        </select>
                </div>

                <div class="group-info-birthday">
                    <span> Ngày sinh</span>
                    <input class="date hasDatepicker" id="datepicker" type="text" placeholder="dd-mm-yyyy" name="fromdate" required="">
                </div>

                <div class="group-info-telephonenumber">
                    <span> Số điện thoại </span>
                    <input class="form-control" name="[0].telephone" placeholder="Vui lòng nhập số điện thoại" required="required" type="number" value="">
                </div>

                <div class="group-info-email">
                    <span> Email </span>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>

                <div class="group-info-address">
                    <span> Địa chỉ </span>
                    <input type="email" class="form-control" id="input">
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