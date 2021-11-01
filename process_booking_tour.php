<link rel="stylesheet" href="css/process_booking_tour.css">

<?php
 include('config/header.php');
 include('config/constant.php')
?>

<!-- type here -->



<div class="">
        <h2 class=" d-flex justify-content-center align-items-center mt-5"> ĐƠN ĐẶT TOUR ĐANG CHỜ XỬ LÝ </h2>

<?php
   if(isset($_SESSION['noti'])){
      echo $_SESSION['noti'];
      unset($_SESSION['noti']);
    }

?>
    <div class ="container">
                <a href="detail.php">
                    <button type="submit" class="btn-1">Xem chi tiết</button>
                </a>
                <a href="index.php">
                    <button type="submit" class="btn-2">Quay về trang chủ</button>
                </a>
        </div>
    </div>
</div>



      








<?php
include('config/footer.php')

?>