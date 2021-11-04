<?php
session_start();
include('config/header.php');
include('config/conection.php');

?>
<style>
.tour_detail{
    color: black;
    font-family: "Times New Roman";
  font-size: 110%;
}
img{
    border-radius: 15px;
}
.tour_Name{
    font-size: 200%;
}
.tour_price{
    font-size: 130%;
    font-family: Arial, Helvetica, sans-serif;
}


    
</style>


<!--Tuyen du lieu-->
<?php
                if(isset($_GET['tour_id']))
                $tour_id = $_GET['tour_id'];
                $sql = "SELECT * FROM tour WHERE tour_id=$tour_id";
                $result = mysqli_query($con,$sql);
                //check xem bảng tour có đc kết nối hay ko
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                        $tour_id= $row['tour_id'];
                        $tour_name=$row['tour_Name'];
                        $tour_price=$row['tour_price'];
                        $img=$row['img'];
                        $tour_detail=$row['tour_detail'];
                       
                        
                        //$tour_detail=$row['tour_detail'];
?>

 <div class="container">
     <h2> Chi tiết tour</h2>
        <div id="tour-detail">
            <div id= "tour-img" class="tour_img">
                <img src="<?php echo $img?>" alt="">

            </div>
    <div id="product-info">
       <h4 class="tour_Name"><?php echo $tour_name ?></h4>
       <p class="tour_detail"><?php echo $tour_detail?></p>
       
       <p class="tour_price" >-  <?php echo $tour_price?>  <span  style="color:red;" >VNĐ</span>  -</p>
       <a href="booking_tour.php">
                        <button type="submit" class=" btn bg-danger text-light fw-bold" >Đặt ngay</button>
                    </a>

    </div>
        <div class="clear-both">
        <p></p>
        </div>
        </div>

 </div>
 <?php
            }
        }

?>
<!--Tuyen du lieu-->

<!--Footer-->
<section class="footer mt-5 ">
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
    <script src="js/detail.js"></script>

<?php
include('config/footer.php')
?>