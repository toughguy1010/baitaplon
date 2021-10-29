<?php
include('config/header.php')
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!--Navbar-->
<section>
        <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
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

<!--Tuyen du lieu-->
 <div class="container">
     <h2> Chi tiết tour</h2>
        <div id="tour-detail">
            <div id= "tour-img">
                <img src="http://localhost:88/baitaplon/img/danang.jpg" alt="">

            </div>
    <div id="product-info">
        <h1>Ngũ hành Sơn - Phố cổ Hội An</h1>
        <label >Tour Hội An 1 ngày giá rẻ khám phá trọn vẹn 3 điểm Ngũ Hành Sơn – Non Nước  – Hội An với mức giá vô cùng rẻ xuất phát từ Đà Nẵng. Du lịch Đà Nẵng thường thì du khách lựa chọn đặt Tour Hội An để thuận tiện cũng như tiết kiệm tối đa chi phí. Khi đặt Tour Hội An giá rẻ đi từ Đà Nẵng bạn luôn yên tâm và hài lòng về sự UY TÍN của công ty cũng như CHẤT LƯỢNG về dịch vụ trong TOUR. Tour Hội An 1 ngày là sự kết hợp của 3 điểm tham quan gói gọn trong lịch trình Tour Hội An giá rẻ. Trong 1 ngày bạn khám phá trọn vẹn 3 điểm du lịch Ngũ Hành Sơn – Non Nước – Phố cổ Hội An.</label>
        <label >Giá:</label><span class="tour-price">8,500,000 VNĐ</span></br>
        <button type="button" class="btn btn-outline-danger" a href ="#">     Đặt   </button>
        

    </div>
        <div class="clear-both">
        <p></p>
        </div>
        </div>

 </div>
<!--Tuyen du lieu-->

<!--Footer-->
<section class="footer mt-5">
        <div class="container">
        <h2>Vì sao chọn CSE458_Travel </h2>

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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 

<?php
include('config/footer.php')
?>