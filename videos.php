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
						<li class="nav-item active">
							<a class="nav-link" href="videos.php"><?php echo $lang['Videos'] ?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="ghotale.php"><?php echo $lang['Ghotale'] ?></a>
						</li>
					</ul>
					 <li class="language_button nav-item ml-auto pr-4">
						<a class="english" href="videos.php?lang=en"><?php echo $lang['lang_en'] ?></a>
						| <a class="hindi" href="videos.php?lang=hn"><?php echo $lang['lang_hn'] ?></a>
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
	
	
	
	
	<div class="video_section_vd">
		<div class="container">
			<div class="row vs_row">
					<div class="col-md-4">
						<iframe class="hp_ifrm" width="100%" src="https://www.youtube.com/embed/8bqKFmnvqL0" frameborder="0" 
				allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="col-md-4">
						<iframe class="hp_ifrm" width="100%" src="https://www.youtube.com/embed/nWSIEI3aMTk" frameborder="0" 
				allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="col-md-4">
						<iframe class="hp_ifrm" width="100%" src="https://www.youtube.com/embed/P7cOcqOdj-A" frameborder="0" 
				allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
				<div class="row vs_row">
					<div class="col-md-4">
						<iframe class="hp_ifrm" width="100%" src="https://www.youtube.com/embed/A7Gie_PTwWQ" frameborder="0" 
				allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="col-md-4">
						<iframe class="hp_ifrm" width="100%" src="https://www.youtube.com/embed/IpPZGf8LVdg" frameborder="0"
				allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="col-md-4">
						<iframe class="hp_ifrm" width="100%" src="https://www.youtube.com/embed/P7cOcqOdj-A" frameborder="0" 
				allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
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
        <a class="english" href="videos.php?lang=en"><?php echo $lang['lang_en'] ?></a>
        | <a class="hindi" href="videos.php?lang=hn"><?php echo $lang['lang_hn'] ?></a>
    </div>
	
		
		
		
		
	
	
	
	
	
	
	
	
	
	

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jquery.sticky.js"></script>
	
	
	<script src="assets/js/main.js" ></script>
</body>
</html>