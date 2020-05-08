<?php 
include "koneksi.php";
session_start();
session_destroy();
?>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="plugins/ionicons/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="plugins/icon-kit/dist/css/iconkit.min.css">
        <link rel="stylesheet" href="plugins/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="dist/css/theme.min.css">
        <script src="src/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <style>
        .bold {
            font-size: 25px;
            font-weight: bold;
        }
        .putih {
            color: white;
        }
    </style>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="auth-wrapper">
            <div class="container-fluid h-100">
                <div class="row flex-row h-100 bg-dark">
                    <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                        <div class="lavalite-bg" style="background-image: url('img/auth/smk.jpg')">
                            <div class="laralite-overlay"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                        <div class="authentication-form mx-auto">
                            <p class="bold putih">Login Ke PPDB</p>
                            <p class="putih">Selamat Datang Ke Login Page PPDB</p>
                            <form method="POST">
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control" id="name" placeholder="NISN" require/>
                                    <i class="ik ik-user"></i>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="pass" class="form-control" id="pass" placeholder="PASSWORD" require/>
                                    <i class="ik ik-lock"></i>
                                </div>
                                <!-- <div class="row">
                                    <div class="col text-left">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">
                                            <span class="custom-control-label">&nbsp;Remember Me</span>
                                        </label>
                                    </div>
                                    <div class="col text-right">
                                        <a href="forgot-password.html">Forgot Password ?</a>
                                    </div>
                                </div> -->
                                <div class="sign-btn text-center">
                                    <input type="submit" name="login" id="masuk" class="btn btn-theme" value="Masuk">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php 
    if($_SERVER['REQUEST_METHOD']=='POST')  
    {  
		if(empty($_POST["username"]) && empty($_POST["pass"]))  
		{  
			 echo '<script>alert("Username & Password")</script>';  
		}  
		else  
		{  
			 $username = mysqli_real_escape_string($konek, $_POST["username"]);  
			 $password = mysqli_real_escape_string($konek, $_POST["pass"]);  
			 $passwordhash = md5($password); 
            //  $query = "SELECT * FROM tabel_admin WHERE username = '$username' AND password = '$passwordhash'";
             $query = "SELECT username, password, nama FROM tabel_admin WHERE username = '$username' AND password = '$passwordhash'";
             $result = mysqli_query($konek, $query);
			 if(mysqli_num_rows($result) > 0)  
			 {  
                    session_start();
                    $_SESSION['login-admin']	= true;
                    $_SESSION['username'] = $username;
					header("location:admin-panel/index.php");
			 }  
			 else  
			 {  
                $query = "SELECT nisn, password, kode_siswa, nama FROM tabel_datadiri WHERE nisn = '$username' AND password = '$passwordhash'";
                $result = mysqli_query($konek, $query);
                if(mysqli_num_rows($result) > 0)  
                {  
                    while ($result = mysqli_fetch_array($result)) {
                       session_start();
                       $_SESSION['login-siswa']	= true;
                       $_SESSION['nisn'] = $username;
                       $_SESSION['kode_siswa'] = $result['kode_siswa'];
                       header("location:siswa-panel/index.php");
                    }
                }  
                else  
                {  
                     echo '<script>alert("NISN & PASSWORD SALAH")</script>';
                }  
			 }  
		}  
    } 
    ?>
        <script>
        function normal () {
        alert("Normal Alert!");
        }
        </script>
        <script>window.jQuery || document.write('<script src="src/js/vendor/jquery-3.3.1.min.js"></script>')</script>
        <script src="plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="plugins/screenfull/dist/screenfull.js"></script>
        <script src="dist/js/theme.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
