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

<!-- Bắt đầu code -->
    <?php
        //Truy vấn bảng booking_tour
        if(isset($_GET['booking_id']))
        $booking_id = $_GET['booking_id'];
        $sql = "SELECT * FROM booking_tour WHERE booking_id= $booking_id";
        $result = mysqli_query($conn,$sql);
        //check xem bảng tour có đc kết nối hay ko
        if(mysqli_num_rows($result)>0){
           
            //tour được kết nối
            while($row = mysqli_fetch_assoc($result)){
                
                //Get the Values like img,tour_Name,tour_number(lấy giá trị cần dùng)
                $booking_id = $row['booking_id'];
                $booking_day = $row['booking_day'];
                $booking_guest_name = $row['booking_guest_name'];
                $booking_guest_age = $row['booking_guest_age'];
                $booking_guest_address = $row['booking_guest_address'];
                $booking_guest_email = $row['booking_guest_email'];
                $booking_guest_number = $row['booking_guest_number'];
                $booking_status = $row['booking_status'];
            ?>
            <section>
                <div class="container">
                    <p class=""> Ngày đặt: <?php echo $booking_day ?> người</p><!--lấy số lượng khách của tour từ csdl-->
                    <p class=""> Tên khách hàng: <?php echo $booking_guest_name ?>
                    <p class=""> Tuổi: <?php echo $booking_guest_age ?>
                    <p class=""> Địa điểm:  <?php echo $booking_guest_address ?>
                    <p class=""> Email:  <?php echo $booking_guest_email ?>
                    <p class=""> Số điện thoại:  <?php echo $booking_guest_number ?>
                    <p>Trạng thái: <?php echo $booking_status ?></p>
            </section>



            <?php
            }
        }
        ?>

        




    <section>
    <div class="container">
        <h1> Thông tin đặt tour </h1>
    </section>
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