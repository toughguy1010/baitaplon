<link rel="stylesheet" href="css/booking_tour.css">

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

<!-- Hiển thị thông tin tour bằng cách lấy từ bảng tour trong SQL -->

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
                
                
            
                //Lấy giá trị img,tour_Name,tour_number
                $tour_id = $row['tour_id'];
                $tour_Name = $row['tour_Name'];
                $img = $row['img'];
                $tour_number = $row['tour_number'];
                $tour_day_start = $row['tour_day_start'];
                $tour_day_end = $row['tour_day_end'];
                $tour_days = $row['tour_days'];
                $tour_location = $row['tour_location'];
                $tour_guild = $row['tour_guild'];
               // $tour_detail=$row['tour_detail'];

    ?>
        

        <div class="container-sm">
            <div class="row align-items-start">
                    
                        <div class="col">
                            <a href="#">
                                <img src="<?php echo $img?> " class="img-fluid"  alt="... "> <!--lấy ảnh từ csdl-->
                            </a>
                        </div>
                
                        <div class="col-6">
                            <h2 class="tour_Name">
                                <?php echo $tour_Name?> <!--lấy tên của tour từ csdl-->
                            </h2>
                                <p class=""> Số lượng người tối đa: <?php echo $tour_number ?> người </p><!--lấy số lượng khách của tour từ csdl-->
                                <p class=""> Khởi hành: <?php echo $tour_day_start ?>
                                <p class=""> Kết thúc: <?php echo $tour_day_end ?>
                                <p class=""> Địa điểm:  <?php echo $tour_location ?>
                                <p>Hướng dẫn viên: <?php echo $tour_guild ?></p>
                        
            </div>
        </div>
        <?php
            }
        }
        
        ?>

         
        <!--tien hanh dat tour-->
 

        <div class="container">
        <h1> Thông tin khách hàng </h1>
            <div class="row">
                <div class="col-12">
                    <form method = "POST">
                            <div class="mb-3">
                                <h4 class="form-label">Họ và tên*</h4>
                                <input type="text" class="form-control" name="booking_guest_name" id="booking_guest_name" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <h4 class="form-label">Tuổi</h4>
                            <input type="text" class="form-control" name="booking_guest_age" id="booking_guest_age">
                        </div>
                        <div class="mb-3">
                            <h4 class="form-label">Email</h4>
                            <input type="text" class="form-control" name="booking_guest_email" id="booking_guest_email">
                        </div>
                        <div class="mb-3">
                            <h4 class="form-label">Số điện thoại*</h4>
                            <input type="text" class="form-control" name="booking_guest_number" id="booking_guest_number" required>
                        </div>
                        <div class="mb-3">
                            <h4 class="form-label">Địa chỉ</h4>
                            <textarea type="text" class="form-control input-lg" name="booking_guest_address" id="booking_guest_address" row="5"></textarea>
                        </div>
                        <div class="mx-auto" style="width: 200px;">
                            <button type="submit" name="submit" class=" btn btn-info btn-lg"> Đặt Tour</button>
                        </div>
                </div>
            </div>
        </div>
        

          
 

<?php
if(isset($_POST['submit'])){
    $booking_guest_name     = $_POST['booking_guest_name'];
    $booking_guest_age      = $_POST['booking_guest_age'];
    $booking_guest_address  = $_POST['booking_guest_address'];
    $booking_guest_number   = $_POST['booking_guest_number'];
    $booking_guest_email    = $_POST['booking_guest_email'];
        $sql ="INSERT INTO `booking_tour`( `booking_guest_name`, `booking_guest_age`, `booking_guest_address`, `booking_guest_number`, `booking_guest_email`)
        VALUES ('$booking_guest_name', '$booking_guest_age', '$booking_guest_address','$booking_guest_number','$booking_guest_email')";
    $result = mysqli_query($conn,$sql);
    if($result > 0){
        // $_SESSION['noti']= "";
        header("location:process_booking_tour.php");
    }else{
        // $_SESSION['noti'] =" Lỗi!!!!";
       header("location:process_booking_tour.php");  
    }
}
    
?>
 


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
include('config/footer.php');
?>