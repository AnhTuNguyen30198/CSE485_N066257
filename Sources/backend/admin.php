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
	<script type="text/javascript" src="../jquery-3.3.1.min.js" async></script>
	<script type="text/javascript" src="../js/bootstrap.min.js" async></script>
	<script type="text/javascript" src="../mycss/admin.js" async></script>

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
				
				<div class="col-md-5" id="headermenu">
					<nav>
						<ul style="width: 60em;" >
							<li style="width: 13em; background-color: #e7b96d;"><span>Xin chào <b >Admin!</b></span></li>
							<li id="sub"><a href="" id="choose-capnhat">Cập nhật</a>
								<ul id="sub-menu">
									<li><a href="#them" id="choose-them">Thêm bài hát</a></li>
									<li><a href="#xoa" id="choose-xoa">Xóa bài hát</a></li>
									<li><a href="#sua" id="choose-sua">Sửa bài hát</a></li>
								</ul>
							</li>
							<li><a href="#view" id="choose-view">Xem dữ liệu</a></li>
							<li><a href="logout.php">Đăng xuất</a></li>		
						</ul>	
					</nav>	
				</div>
			</div>
		</div>
	</header>
	<main>
	<!--Cập nhật dữ liệu cho database-->
		<div id="them">
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
				    <input type="text" class="form-control" id="" placeholder="Đường dẫn" name="path">
				  </div>
				 	<button type="submit" class="btn btn-primary btn-lg capnhat" name="btn-them">Thêm bài hát</button>		
			</form>
		</div>
		<!--Sua bai haT -->
		<div id="sua" style="display: none;">
			<h1>Sửa thông tin bài hát</h1>
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
				 	<button type="submit" class="btn btn-primary btn-lg capnhat" name="btn-sua">Sửa bài hát</button>		
			</form>
		</div>
		<!--Xóa bài hát trong Database-->
		<div id="xoa" style="display: none;">	
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
		<div style="display: none;" id="view" >
			<h1>Xem dữ liệu</h1>
			<table  id="viewcontent" style="font-size: 0.8em; overflow: auto; width: 100%;">
			<tr>
				<th>ID bài hát </th>
				<th>Bài hát </th>
				<th>Thể loại</th>
				<th>Ca sĩ</th>
				<th>Nhóm</th>
				<th>Quốc gia</th>
				<!--<th>Đường dẫn</th>-->
				<th>Đăng bởi</th>
			</tr>
			<?php
			
				include "connection.php";
				mysqli_set_charset($conn,"UTF8");
				$sql = "SELECT * FROM baihat;";
				$kt = mysqli_query($conn, $sql);
				if(mysqli_num_rows($kt)>0 ){
					while($row = mysqli_fetch_assoc($kt)){
						
					
			?>
				<tr>
					<td><?php echo $row['idBaiHat']  ?></td>
					<td><?php echo $row['tenBaiHat']  ?></td>
					<td><?php echo $row['tenTheLoai']  ?></td>
					<td><?php echo $row['tenCaSi']  ?></td>
					<td><?php echo $row['tenNhom']  ?></td>
					<td><?php echo $row['quocGia']  ?></td>
					<!--<td><?php //echo $row['path']  ?></td>-->
					<td><?php echo $row['dangBoi']  ?></td>
				</tr>
			<?php
				
					}
				}
			?>
			</table>
			
		</div>
	</main>
</body>
</html>