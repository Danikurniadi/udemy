<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="images/logo.ico">
	<title>Tech Mayantara Asia</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Working Signin form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<!-- //Meta tag Keywords -->
	<link href="//fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet">
	<!--/Style-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!--//Style-CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>

<body>

	 <!-- form section start -->
	 <section class="w3l-workinghny-form">
         <!-- cek pesan notifikasi -->
        <!-- /form -->
        <div class="workinghny-form-grid">
            <div class="wrapper">
                <div class="logo">
                    <h1><a class="brand-logo"> Sign In</a></h1>
                </div>
                <div class="workinghny-block-grid">
                    <div class="workinghny-left-img align-end">
                        <img src="images/logo.png" class="img-responsive" alt="img" />
                    </div>
                    <div class="form-right-inf">
                        <div class="login-form-content">
                            <form action="login.php" class="signin-form" method="post">
								<div class="one-frm">
									<label>Username</label>
									<input type="text" name="username"  placeholder="" required="">
								</div>
								<div class="one-frm">
									<label>Password</label>
									<input type="password" name="password"  placeholder="" required="">
								</div>
                                <label class="check-remaind">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    <p class="remember">Remember Me</p>

                                </label>
                                <button class="btn btn-style mt-3">Sign In </button>
                            </form>
                            <?php 
                                if(isset($_GET['pesan'])){
                                if($_GET['pesan'] == "gagal"){
                                    echo "Login gagal! username dan password salah!";
                                }else if($_GET['pesan'] == "logout"){
                                    echo "Anda telah berhasil logout";
                                }else if($_GET['pesan'] == "belum_login"){
                                    echo "Anda harus login dulu";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //form -->
    </section>
    <!-- //form section start -->

</body>

</html>