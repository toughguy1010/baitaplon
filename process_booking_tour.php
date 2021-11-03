<link rel="stylesheet" href="css/process_booking_tour.css">

<?php
 include('config/header.php');
 include('config/constant.php')
?>

<!-- type here -->
<?php
   if(isset($_SESSION['noti'])){
      echo $_SESSION['noti'];
      unset($_SESSION['noti']);
    }

?>

<?php
        //Truy vấn bảng tour (có thể dùng booking hoặc tùy)
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
                

                ?>

<div class="">
        <h2 class=" d-flex justify-content-center align-items-center mt-5"> ĐƠN ĐẶT TOUR ĐANG CHỜ XỬ LÝ </h2>

    <div class ="container">
                <a href="detail_booking_tour.php?booking_id=<?php echo $booking_id ?>">
                    <button type="submit" class="btn-1">Xem chi tiết</button>
                </a>
                <a href="index.php">
                    <button type="submit" class="btn-2">Quay về trang chủ</button>
                </a>
        </div>
    </div>
</div>



<?php
            }
        }



        ?>

<?php
include('config/footer.php')

?>