<?php
session_start();
include('config/header.php');
include('config/constant.php')

?>

<!-- Bắt đầu code -->


    
    <?php
        if(isset($_POST['submit'])){
            $tour_id = $_POST['tour_id'];
            $guest_id = $_SESSION['guest_id'];
            $booking_guest_name    = $_POST['booking_guest_name'];
            $booking_guest_address = $_POST['booking_guest_address'];
            $booking_guest_number  = $_POST['booking_guest_number'];
            $booking_guest_email   = $_POST['booking_guest_email'];
            $sql ="INSERT INTO `booking_tour`(`tour_id`, `guest_id`, `booking_guest_name`, `booking_guest_address`, `booking_guest_number`,`booking_guest_email`)
            VALUES ($tour_id,$guest_id,'$booking_guest_name', '$booking_guest_address','$booking_guest_number','$booking_guest_email')";
            $result = mysqli_query($conn,$sql);
    ?>
            <section>
                <div class="container">
                   
                    <p class=""> Tên khách hàng: <?php echo $booking_guest_name ?>
                 
                    <p class=""> Địa điểm:  <?php echo $booking_guest_address ?>
                    <p class=""> Email:  <?php echo $booking_guest_email ?>
                    <p class=""> Số điện thoại:  <?php echo $booking_guest_number ?>

            </section>



        <?php
            }
        ?>
        <?php
        
        // if(isset($_GET['booking_id']))
        // $booking_id = $_GET['booking_id'];
        $tour_id = $_POST['tour_id'];
         $sql = "SELECT * FROM tour WHERE tour_id = $tour_id";
        $result = mysqli_query($conn,$sql);
        //check xem bảng tour có đc kết nối hay ko
        if(mysqli_num_rows($result)>0){
           
            //tour được kết nối
            $row = mysqli_fetch_assoc($result);
                $tour_id = $row['tour_id'];
                $tour_Name = $row['tour_Name'];
                $img = $row['img'];
                $tour_number = $row['tour_number'];
                $tour_day_start = $row['tour_day_start'];
                $tour_day_end = $row['tour_day_end'];
                $tour_days = $row['tour_days'];
                $tour_location = $row['tour_location'];
                $tour_guild = $row['tour_guild'];

        
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
                                <p > Số lượng người tối đa: <?php echo $tour_number ?> người </p><!--lấy số lượng khách của tour từ csdl-->
                                <p > Khởi hành: <?php echo $tour_day_start ?>
                                <p > Kết thúc: <?php echo $tour_day_end ?>
                                <p > Địa điểm:  <?php echo $tour_location ?>
                                <p>Hướng dẫn viên: <?php echo $tour_guild ?></p>
                        
                         </div>
            </div>
        </div>
        <?php
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