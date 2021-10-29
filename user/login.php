<?php
ob_start();
session_start();
 include('../config/header.php');
 include('../config/conection.php');
?>

<section class="text-center container mt-5 ">
    <style>
        .form-signin{
            max-width: 50%;
            margin: 0 auto;
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
                    $sqllogin="SELECT * FROM user WHERE guest_emai='$username' AND guest_password='$password'";
                    $result = mysqli_query($con,$sqllogin);
                    if(mysqli_num_rows($result)){
                        $rowlogin= mysqli_fetch_row($result);
                        $_SESSION['login']= $rowlogin;
                        header('location:../user/user.php');
                    }else{
                       
                        header("location:../user/login.php");
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
            <button type="submit" name="login"> Login</button>
            
            
            <!-- <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Sign in</button> -->
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
        </form>
    </main>
</section>

<?php
include('../config/footer.php')

?>