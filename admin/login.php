<?php
ob_start();
session_start();

 include('../config/header.php');
 include('../config/conection.php');

if(isset($_SESSION["login"]))
{
    header("location:../admin/admin.php");
}
?>
<section class="text-center container mt-5 ">
    <style>
.form-signin{
            max-width: 50%;
            margin: 0 auto;
}
 .button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
    </style>
    <main class="form-signin">
        <form method="POST">
            <?php
            // session_destroy();
                if(isset($_POST["login"]))
                {
                    $username=trim($_POST["username"]);
                    $password=($_POST["password"]);
                    $sqllogin="SELECT * FROM admin WHERE ad_username='$username' AND ad_password='$password'";
                    $result = mysqli_query($con,$sqllogin);
                    if(mysqli_num_rows($result)){
                        $rowlogin= mysqli_fetch_row($result);
                        $_SESSION['login']= $rowlogin;
                        header('location:../admin/admin.php');
                    }else{
                       
                        header("location:../admin/login.php");
                    }
                   
                }
            ?>

            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
            <input type="email" class="form-control" id="username" name="username" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
            </div>
            <button class="button" type="submit" name="login"style="vertical-align:middle"><span>Login </span></button>
            
            
            
            <!-- <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Sign in</button> -->
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
        </form>
    </main>
</section>

<?php
include('../config/footer.php')

?>