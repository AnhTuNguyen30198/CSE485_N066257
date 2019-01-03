<?php session_start();?>
<html>
	<head>
	<meta charset="utf-8">
	<title>Music Site</title>
	<meta name="author" content="Lưu Viết Thuận">
	<meta name="author" content="Nguyễn Anh Tú">
	<meta name="description" content="Website nghe nhạc trực tuyến">
	<meta name="keyword" content="Music">
	<meta name="viewport" content="width=divice-width, initial-scale=1">	<!-----Responsive Web8----->
	<link rel="stylesheet" type="text/css" href="mycss/normalize.css">		<!-----Reset Css----->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	<!-----Font Awesome----->
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="mycss/musicweb.css">
	<script type="text/javascript" src="../Sources/assets/js/jquery-3.3.1.min.js" async></script>
	<script type="text/javascript" src="../Sources/assets/css/bootstrap/css/bootstrap.min.css" async></script>
	<script type="text/javascript" src="../Sources/backend/vpopKpopUsuk.js" async></script>
</head>
<body>
	<!-----begin header----->
	<header>
		<div class="container" id="topbar">
			<!-----Header Logo----->
			<div class="row">
				<div class="col-md-2" id="headerlogo">
					<a href="#"><img src="img/footerlogo.png" alt="Logo"></a>
				</div>
				<!-----Header Search----->
				<div class="col-md-5" id="headersearch">
 					<form name="search" method="post">
	 					<!-----Thanh tim kiem----->
						<input type="search" name="search" placeholder="Tìm ca khúc, ca sĩ, album,...">
						<!-----Nut bam tim kiem----->
						<button id="btn" type="submit">
							<span class="icon">
								<i class="fa fa-search"></i>
							</span>
						</button>
					</form>
				</div>
				<!-----Upload, Sign in, Sign up----->
				<div class="col-md-5" id="headermenu">
					<nav>
						<ul>
							<!-- <li><a href="">Sưu Tập</a></li> -->
							<!-----Upload----->
<!-- 							<li><a href="backend/upload.php">Cập nhật</a></li> -->
							<?php
								if (isset($_SESSION["username"])) {
									echo "<li><a href='backend/logout.php'>Đăng xuất</a></li>";
									echo "<li><a href=''>Cập nhật</a></li>";
									echo "<li style='width: 13em;'><a href ='' style='background-color: #e7b96d; color: black;'>"."Xin chào ".$_SESSION['username']."!"."</a></li>";
								} else {
									echo "<li><a href='backend/login.php'>Đăng nhập</a></li>";
									echo "<li><a href='backend/register.php'>Đăng ký</a></li>";
								}
							?>
						</ul>	
					</nav>	
				</div>
			</div>
		</div>
		<!-----End top bar----->
	</header>
