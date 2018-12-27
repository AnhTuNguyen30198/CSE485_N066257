<?php 
	session_start();
	if($_SESSION['phanquyen'] == 1){
		//
	}
	else{
		header("location: login.php");
		exit();
	}
?>

<?php	include "connection.php";?>
<?php include "update.php"?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Lưu Viết Thuận">
	<meta name="author" content="Nguyễn Anh Tú">
	<meta name="description" content="Website nghe nhạc trực tuyến">
	<meta name="keyword" content="MusicAdmin">
	<link rel="stylesheet" type="text/css" href="../mycss/normalize.css">		<!-----Reset Css----->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	<!-----Font Awesome----->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap	.min.css">
	<link rel="stylesheet" type="text/css" href="../mycss/musicweb.css">
	<link rel="stylesheet" type="text/css" href="../mycss/admin.css">
	<script type="text/javascript" src="../jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>
<body>
    	<!-----begin header----->
	<header>
		<div class="container" id="topbar">
			<!-----Header Logo----->
			<div class="row">
				<div class="col-md-2" id="headerlogo">
					<a href="../index.php"><img src="../img/footerlogo.png" alt="Logo"></a>
				</div>
				
				<div class="col-md-10" id="headermenu">
					<nav>
						<ul>
							<li style="width: 13em; background-color: #e7b96d;"><span>Xin chào <b >Admin!</b></span></li>
							<li><a href="#">Cập nhật</a></li>
							<li><a href="v_view.php">Xem dữ liệu</a></li>
							<li><a href="logout.php">Đăng xuất</a></li>
						</ul>	
					</nav>	
				</div>
			</div>
		</div>
	</header>
	<main>
	<!--Cập nhật dữ liệu cho database-->
		<div id="capnhat">
			<h1>Cập nhật bài hát</h1>
			 <form action="admin.php" method="post">
			 
				  <div class="form-group">
				    <label for="" class="la-bel">Tên ca khúc</label>
				    <input type="text" class="form-control" id="t" placeholder="Tên bài hát" name="tenBaiHat" maxlength="30" required>
				  </div>
				  
				  <div class="form-group">
				    <label for="" class="la-bel">Ca sĩ</label>
				    <input type="text" class="form-control" id="" placeholder="Ca sĩ" name="tenCaSi" maxlength="30">
				  </div>
				  
				  <div class="form-group">
				    <label for="" class="la-bel">Quốc gia</label>
				    <input type="text" class="form-control" id="" placeholder="Quốc gia" name="quocGia" maxlength="30">
				  </div>
				  
				  <div class="form-group">
				    <label for="" class="la-bel">Thể loại</label>
				    <select class="choose" name="theLoai">
					  <option value="jazz">Jazz</option>
					  <option value="pop">Pop</option>
					  <option value="rock">Rock</option>
					  <option value="blue">Blue</option>
					  <option value="soul">Soul</option>
					  <option value="hiphop">Hip Hop</option>
					  <option value="folk">Folk</option>
					  <option value="latin">Latin</option>
					 </select>
				   </div>
				  
				  <div class="form-group">
				    <label for="" class="la-bel">Nhóm ca khúc</label>
				    <select  class="choose" name="tenNhom">
					  <option value="vpop">V-Pop</option>
					  <option value="kpop">K-Pop</option>
					  <option value="usuk">Us-Uk</option>
					</select>
				  </div>
				  
				  <div class="form-group">
				    <label for="" class="la-bel">Đường dẫn</label>
				    <input type="text" class="form-control" id="sources" placeholder="Đường dẫn" name="path">
				  </div>
				 	<button type="submit" class="btn btn-primary btn-lg capnhat" name="btn-them">Thêm bài hát</button>		
			</form>
		<!--Xóa bài hát trong Database-->
	<div id="xoa">	
		<h1>Xóa bài hát</h1>
			<form method="POST" action="admin.php">
				 <div class="form-group">
				    <label for="" class="la-bel">Tên ca khúc</label>
				    <input type="text" class="form-control" id="t" placeholder="Tên bài hát" name="tenBaiHat" maxlength="30" required>
				  </div>
				  
				  <div class="form-group">
				    <label for="" class="la-bel">Ca sĩ</label>
				    <input type="text" class="form-control" id="" placeholder="Ca sĩ" name="tenCaSi" maxlength="30">
				  </div>
				  <button type="submit" class="btn btn-secondary btn-lg xoa " name="btn-xoa">Xóa bài hát</button>
			</form>
	</div>
	<!--Xem dữ liệu cho database-->
		<!-- <div style="margin-top: 2em; padding-top: 2em; border-top: 2px solid black;" id="view">
			<h1>Xem dữ liệu</h1>
		</div> -->
	</main>
</body>
</html>