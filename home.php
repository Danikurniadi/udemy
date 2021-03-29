<!DOCTYPE html>
<html lang="en">
<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:index.php?pesan=belum_login");
	}
	?>
<head>
    <link rel="shortcut icon" href="images/logo.ico">
	<title>Tech Mayantara Asia</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<link href="//fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet">
	<!--/Style-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!--//Style-CSS -->
</head>

<body>

	 <!-- form section start -->
	 <section class="w3l-workinghny-form">
        <!-- /form -->
        <div class="workinghny-form-grid">
            <div class="wrapper">
                <div class="logo">
                    <h1><a class="brand-logo"> Welcome </a></h1>
                </div>
                <div class="workinghny-block-grid">
                    <div class="workinghny-left-img align-end">
                        <img src="images/logo.png" class="img-responsive" alt="img" />
                    </div>
                    <div class="form-right-inf">
                        <div class="login-form-content">
                                <button class="btn btn-style mt-3" onclick="window.location.href='daily.php'">Daily Performance </button>
                                <button class="btn btn-style mt-3" onclick="window.location.href='years.php'">Years Performance </button>
                                <button class="btn btn-style mt-3" onclick="window.location.href='404.php'">Task Management </button>
                                <button class="btn btn-style mt-3" onclick="window.location.href='404.php'">Project Management </button>
                                <button class="btn btn-style mt-3" onclick="window.location.href='404.php'">Messages Area </button>
                                <button class="btn btn-style mt-3" onclick="window.location.href='logout.php'">Exit </button>
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