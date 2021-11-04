<?php
        include('config/constant.php');
        include('config/header.php');
?>
<section class=" mt-5 bg-light ">


<h3 class="text-center my-4 fw-bold fs-1"> Tour du lịch</h3>
<div class=" container-fluid d-flex justify_content_center  ">

<?php
$search = $_GET['search'];
//Truy vấn bảng tour (có thể dùng booking hoặc tùy)
$sql = "SELECT *FROM tour WHERE tour_name like '%$search%'";
$result = mysqli_query($conn,$sql);
//check xem bảng tour có đc kết nối hay ko
if(mysqli_num_rows($result)>0){
    //tour được kết nối
    while($row = mysqli_fetch_assoc($result)){
        //Get the Values like img,tour_Name,tour_number(lấy giá trị cần dùng)'
        $tour_id= $row['tour_id'];
        $tour_name = $row['tour_Name'];
        $img = $row['img'];
        $tour_number = $row['tour_number'];

?>


    <div class=" me-4 ">
        <a href="detail.php?tour_id=<?php echo $tour_id ?> ">
            <img src="<?php echo $img?> " class="card-img-top img-cruv " alt="... "><!--lấy ảnh từ csdl-->
        </a>
        <div>
            <div class="card-body ">
                <a href="detail.php?tour_id=<?php echo $tour_id ?> ">
                    <h4 class="tour_name  ">
                        <?php echo $tour_name?> <!--lấy tên của tour từ csdl-->
                    </h4>
                </a>
                <p class="fs-4 fst-italic fw-light">Tour <?php echo $tour_number ?> người</p><!--lấy số lượng khách của tour từ csdl-->

            </div>
            <div class="form d-flex justify-content-between">
                <a href="booking_tour.php?tour_id=<?php echo $tour_id ?>">
                    <button type="submit" class=" btn bg-danger text-light fw-bold">Đặt ngay</button>
                </a>
                <a href="detail.php?tour_id=<?php echo $tour_id ?> ">
                <button type="submit" class=" btn bg-danger text-light fw-bold">Xem chi tiết</button>
                </a>
            </div>
        </div>
    </div>
    <?php
    }
}else{
    echo "<p style='font-weight: bold;  margin-left: 470px'>  Booking Tour của bạn hiện tại không tìm thấy  </p>";
}
?>
</div>

</section>
<?php
    include('config/footer.php');
    





?>