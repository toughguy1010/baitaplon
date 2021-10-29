<link href="css/booking_tour.css" rel="stylesheet">
<?php


include('config/header.php')
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

    <section class="checkout-main booking-tour">
        <div class="container">
            <div class="row">
                <div class="col-12 top">
                    <div class="product-image">
                        <div class="image">
                            <img src="https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2017/08/hoi-an-quang-nam-vntrip.jpg" class="img-fluid" alt="image">
                        </div>
                    </div>
                <div class="product-content">
                    <div class="s-rate">
                        <span>
                        "5.0"
                    </span>
                <div class="comment">
                    <h4> Tuyệt vời </h4>
                    <span> 100 nhận xét </span>
                </div>
            </div>
        <p class="title" id="title">
            "Tham quan Ngũ Hành Sơn - Phố Cổ Hội An"
        </p>
    <div class="entry">
        <div class="entry-inner">
            <span> Ngày bắt đầu: </span>
            <b>1/7/2022</b>
            <span> Ngày kết thúc: </span>
            <b>5/7/2022</b>
            <span> Nơi xuất phát: </span>
            <b>Hà Nội</b>
            <span> Số chỗ còn lại: </span>
            <b> 2 </b>
        </div>
    </div>

    <div class="col-md8 col 12 left">
        <h2 class="d-none d-lg-block"> Tổng quan về chuyến đi </h2>
    </div>
        <h3> Thông tin liên lạc </h3>

    <div class="customer-contact mb-3">
            <form class="customer-contact-inner" action="#" method="get" id="form">
                <div class="name">
                    <label>Họ và Tên <b>*</b></label>
                        <input class="form-control" id="contact_name" name="Fullname" type="text" value="">
                </div>
        <div class="mail">
            <label>Email <b>*</b></label>
                <input class="form-control" id="email" name="Email" type="text" value="">
        </div>
        <div class="phone">
            <label>Số điện thoại <b>*</b></label>
                <input class="form-control" id="mobilephone" name="Telephone" onkeypress="return funCheckInt(event)" type="text" value="">
        </div>
        <div class="addess">
            <label>Địa chỉ</label>
                <input class="form-control" id="address" name="Address" type="text" value="">
        </div>
            </form>
    </div>

    <div class="customer">
        <h3> Hành Khách </h3>
        <div class="change">
            <div class="change-title">
                <h4> Số lượng hành khách </h4>
            </div>
    <div class="change-number">
        <select class="form-control" name="[0].number" placeholder="Vui lòng chọn số người đi" required="required">
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