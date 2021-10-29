<?php
ob_start();
session_start();
include('../config/conection.php');
if(!isset($_SESSION["login"]))
{
    header("location:login.php");
}

?>
<?php
session_destroy();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
    <title>Travel</title>
</head>

<body>
    <!--Navbar-->
    <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="../img/logo.png" alt="Logo">
                </a>

                <form class="d-flex">
                    <a href="../index.php?page=logout">
                        <button type="button" class="btn btn-primary me-3 ">Logout</button>
                    </a>
                    
                </form>
               
            </div>
        </nav>
    </section>
    <!--Navbar-->

    <!--Search-->
    <section class="search d-flex align-items-center ">
        <form action="" class="container searching-form ">
            <input class="form-control " type="search" placeholder="Search" aria-label="Search">
            <a href="detail.php">
                <button class="btn btn-primary" type="submit">Search</button>
            </a>
        </form>
    </section>
    <!--Search-->


    <!--tour-->
    <!--Sugguest tour-->
    <section>
        <h2 class="text-center my-4 fw-bold fs-1 ">Các thể loại tour phổ biến</h2>
        <div class="container-fluid d-flex justify-content-around">

                <div class="hl-tour">
                    <img src="../img/hl-tour(1).jpg" alt="" class=" img-cruv">

                    <h3 class="hl-tour-content text-white ">Tour du lịch biển</h3>
                </div>
        
 
                <div class="hl-tour">
                    <img src="../img/hl-tour-chil.jpg" alt="" class=" img-cruv">

                    <h3 class="hl-tour-content text-white">Tour du lịch</h3>
                </div>
            
 
                <div class="hl-tour">
                    <img src="../img/hl-tour-country.jpg" alt="" class=" img-cruv">

                    <h3 class="hl-tour-content text-white">Tour di sản Việt</h3>
                </div>
            
  
                <div class="hl-tour">
                    <img src="../img/hl-tour-island.jpg" alt="" class=" img-cruv">

                    <h3 class="hl-tour-content text-white">Tour biển đảo</h3>
                </div>
            
        </div>
    </section>
    <!--highlight tour-->



    <!--family tour-->
    <section class=" mt-5 bg-light ">


        <h3 class="text-center my-4 fw-bold fs-1">Booking Tour</h3>
        <div class=" container d-flex   ">

            <div class=" family-tour me-4">
                <a href="#">
                    <img src="../img/danang.jpg " class="card-img-top img-cruv " alt="... ">
                </a>
                <div class="card-body ">
                    <a href="detail.php">
                        <h4 class="tour_name  ">
                             Ngũ hành Sơn - Phố cổ Hội An 
                        </h4>
                    </a>
                    <p class="fs-4 fst-italic fw-light">Tour 4 người</p>

                </div>
                <div class="form d-flex justify-content-between">
                    <a href="booking_tour.php">
                        <button type="submit" class=" btn bg-danger text-light fw-bold">Đặt ngay</button>
                    </a>
                    <a a href="detail.php?id=">
                        <button type="submit" class=" btn btn-outline-primary ">Xem chi tiết</button>
                    </a>
                </div>
            </div>


            <div class="me-4">
                <a href="#">
                    <img src="../img/dalat.jpg " class="card-img-top img-cruv " alt="... ">
                </a>
                <div class="card-body ">
                    <a href="detail.php">
                        <h4 class="tour_name">
                            Săn mây phố núi Đà Lạt
                        </h4>
                    </a>
                    <p class="fs-4 fst-italic fw-light">Tour 8 người</p>

                </div>
                <div class="form d-flex justify-content-between">
                    <a href="booking_tour.php">
                    <button type="submit" class=" btn bg-danger text-light fw-bold">Đặt ngay</button>
                    </a>
                    <a a href="detail.php?id=">
                    <button type="submit" class=" btn btn-outline-primary ">Xem chi tiết</button>
                    </a>
                </div>
            </div>


            <div class="">
                <a href="#">
                    <img src="../img/halong.jpg" class="card-img-top img-cruv " alt="... ">
                </a>
                <div class="card-body ">
                    <a href="detail.php">
                        <h4 class="tour_name">
                            Vịnh Hạ Long
                        </h4>
                    </a>
                    <p class="fs-4 fst-italic fw-light">Tour 16 người</p>

                </div>
                <div class="form d-flex justify-content-between">
                    <a href="booking_tour.php">
                    <button type="submit" class=" btn bg-danger text-light fw-bold">Đặt ngay</button>
                    </a>
                    <a a href="detail.php?id=">
                    <button type="submit" class=" btn btn-outline-primary ">Xem chi tiết</button>
                    </a>
                </div>
            </div>
        </div>

    </section>
    <!--family tour-->
    <!--tour-->

    
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

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js " integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js " integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13 " crossorigin="anonymous "></script>
    -->
</body>

</html>