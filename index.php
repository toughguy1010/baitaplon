<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Travel</title>
</head>

<body>
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
                sdasdasd
            </div>
        </nav>
    </section>
    <!--Navbar-->

    <!--Search-->
    <section class="search d-flex align-items-center ">
        <form action="" class="container searching-form ">
            <input class="form-control " type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary" type="submit">Search</button>
        </form>
    </section>
    <!--Search-->


    <!--tour-->
    <!--highlight tour-->
    <section>
        <h2 class="text-center my-4 fw-bold fs-1 ">Khám phá các tour nổi bật</h2>
        <div class="container-fluid d-flex justify-content-around">
            <a href="#">
                <div class="hl-tour">
                    <img src="img/hl-tour(1).jpg" alt="" class=" img-cruv">

                    <h3 class="hl-tour-content text-white ">Tour du lịch biển</h3>
                </div>
            </a>
            <a href="#">
                <div class="hl-tour">
                    <img src="img/hl-tour-chil.jpg" alt="" class=" img-cruv">

                    <h3 class="hl-tour-content text-white">Tour du lịch</h3>
                </div>
            </a>
            <a href="#">
                <div class="hl-tour">
                    <img src="img/hl-tour-country.jpg" alt="" class=" img-cruv">

                    <h3 class="hl-tour-content text-white">Tour di sản Việt</h3>
                </div>
            </a>
            <a href="#">
                <div class="hl-tour">
                    <img src="img/hl-tour-island.jpg" alt="" class=" img-cruv">

                    <h3 class="hl-tour-content text-white">Tour biển đảo</h3>
                </div>
            </a>
        </div>
    </section>
    <!--highlight tour-->



    <!--family tour-->
    <section class=" mt-5 bg-light ">


        <h3 class="text-center my-4 fw-bold fs-1">Tour gia đình</h3>
        <div class=" container d-flex   ">

            <div class=" family-tour me-4">
                <a href="#">
                    <img src="img/tourgd-1.jpg " class="card-img-top img-cruv " alt="... ">
                </a>
                <div class="card-body ">
                    <a href="familytour.php">
                        <h4 class="tour_name  ">
                            Hành trình xanh
                        </h4>
                    </a>
                    <p class="fs-4 fst-italic fw-light">Tour gia đình 4 người</p>

                </div>
                <div class="form d-flex justify-content-between">
                    <a href="">
                        <button type="submit" class=" btn bg-danger text-light fw-bold">Đặt ngay</button>
                    </a>
                    <a href="">
                        <button type="submit" class=" btn btn-outline-primary ">Xem chi tiết</button>
                    </a>
                </div>
            </div>


            <div class="me-4">
                <a href="#">
                    <img src="img/tourgd-2.jpg " class="card-img-top img-cruv " alt="... ">
                </a>
                <div class="card-body ">
                    <a href="familytour.php">
                        <h4 class="tour_name">
                            Biển đảo xa
                        </h4>
                    </a>
                    <p class="fs-4 fst-italic fw-light">Tour gia đình 8 người</p>

                </div>
                <div class="form d-flex justify-content-between">
                    <button type="submit" class=" btn bg-danger text-light fw-bold">Đặt ngay</button>
                    <button type="submit" class=" btn btn-outline-primary ">Xem chi tiết</button>
                </div>
            </div>


            <div class="">
                <a href="#">
                    <img src="img/tourgd-1.jpg" class="card-img-top img-cruv " alt="... ">
                </a>
                <div class="card-body ">
                    <a href="familytour.php">
                        <h4 class="tour_name">
                            Hành trình xanh
                        </h4>
                    </a>
                    <p class="fs-4 fst-italic fw-light">Tour gia đình 16 người</p>

                </div>
                <div class="form d-flex justify-content-between">
                    <button type="submit" class=" btn bg-danger text-light fw-bold">Đặt ngay</button>
                    <button type="submit" class=" btn btn-outline-primary ">Xem chi tiết</button>
                </div>
            </div>
        </div>

    </section>
    <!--family tour-->
    <!--tour-->

    <!--customer reviews-->
    <!--customer reviews-->

    <!--Footer-->
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