<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css">
    <title>Đăng kí</title>
  </head>
  <body>
    <div class="container">
        <h1 class="text-center">Nhập thông tin đăng kí</h1>
        <form action="./process-register.php" method="POST">
            <div class="mb-3 text-center ">
                <label for="exampleInputEmail1" class="form-label">Tên đăng nhập</label>
                <input type="text" class="form-control input-register " name="guest_username" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 text-center">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="guest_password" class="form-control input-register" id="exampleInputPassword1">
            </div>
            <div class="mb-3 text-center">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="text" class="form-control input-register" name="guest_email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3 text-center">
                <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control input-register" name="guest_address" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3 text-center">
                <label for="exampleInputEmail1" class="form-label">Tuổi</label>
                <input type="text" class="form-control input-register" name="guest_age" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3 text-center">
                <label for="exampleInputEmail1" class="form-label">Giới tính</label>
                <select name="guest_gender" id="">
                    <option value="nam">Nam</option>
                    <option value="nữ">Nữ</option>
                </select>
            </div>

            <div class="mb-3 text-center">
                <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
                <input type="text" class="form-control input-register" name="guest_phone" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            
            <button type="submit" name="register" class="btn btn-primary btn-lg">Đăng ký</button>
        </form>
    </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>