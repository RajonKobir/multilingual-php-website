<?php
    include "config.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $lang['title'] ?></title>
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/lightbox.css">
	
    <link rel="stylesheet" href="assets/css/bootstrap.css">
	
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>

	<header>
		<div class="header_inner">
			<div class="menu">
				<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="index.php"><?php echo $lang['Home'] ?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="videos.php"><?php echo $lang['Videos'] ?></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="ghotale.php"><?php echo $lang['Ghotale'] ?></a>
						</li>
					</ul>
					 <li class="language_button nav-item ml-auto pr-4">
						<a class="english" href="ghotale.php?lang=en"><?php echo $lang['lang_en'] ?></a>
						| <a class="hindi" href="ghotale.php?lang=hn"><?php echo $lang['lang_hn'] ?></a>
					</li>
					<li class="ic_for_smdev ml-auto pr-4">
						<ul>
							<li><a href="mailto:put your email" class="contact-link"><i class="far fa-envelope"></i></a></li>
							<li><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a></li>
						</ul>
					</li>
				</nav>
				<div class="logo">
					<a href="index.php">
						<img class="logo_img" src="assets/images/CG-logo.png" alt="" />
					</a>
				</div>
			</div>
		</div>
	</header>
	
	
	
	
	
	
	<div class="small_ig_gho">
		<div class="container">
			<div class="row">
				<div class="col-md-12 small_info_1 text-center">
					<a href="assets/images/1.jpg" data-lightbox="mygallery"><img src="assets/images/1.jpg" alt="" /></a>
				</div>
				<div class="col-md-12 small_info_1 text-center">
					<a href="assets/images/2.jpg" data-lightbox="mygallery"><img src="assets/images/2.jpg" alt="" /></a>
				</div>
				<div class="col-md-12 small_info_1 text-center">
					<a href="assets/images/3.jpg" data-lightbox="mygallery"><img src="assets/images/3.jpg" alt="" /></a>
				</div>
				<div class="col-md-12 small_info_1 text-center">
					<a href="assets/images/4.jpg" data-lightbox="mygallery"><img src="assets/images/4.jpg" alt="" /></a>
				</div>
				<div class="col-md-12 small_info_1 text-center">
					<a href="assets/images/5.jpg" data-lightbox="mygallery"><img src="assets/images/5.jpg" alt="" /></a>
				</div>
			</div>
		</div>
	</div>
	
	
	
	
	
	
	
	
	<div class="stack stack-list">
        <div class="icon-list">
            <ul class="social-links-list pull-right ">
                <li><a href="mailto:put your email" class="contact-link"><span class="shw-top">Contact Us</span><span class="shw-line"><i class="far fa-envelope"></i></span></a></li>
                <li><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a></li>
            </ul>
        </div>
    </div>
	
	
	
	
	
	<div class="footer bg-dark">
        <a class="english" href="ghotale.php?lang=en"><?php echo $lang['lang_en'] ?></a>
        | <a class="hindi" href="ghotale.php?lang=hn"><?php echo $lang['lang_hn'] ?></a>
    </div>
	
		
		
		
		
	
	
	
	
	
	
	
	
	
	

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/lightbox-plus-jquery.js"></script>
	
	
	<script src="assets/js/main.js" ></script>
</body>
</html>