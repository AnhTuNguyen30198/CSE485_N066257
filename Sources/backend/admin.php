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

<?php
		
			// Cap nhat bai hat
			mysqli_set_charset($conn, "UTF8");
			if (isset($_POST["btn-them"])) {
	  			//lấy thông tin từ các form bằng phương thức POST
				$tenbaihat = $_POST["tenBaiHat"];
				$tencasi = $_POST["tenCaSi"];
				$theloai = $_POST["theLoai"];
				$quocgia = $_POST["quocGia"];
				$tennhom = $_POST["tenNhom"];
				$path = $_POST["path"];
	  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
				  if ($tenbaihat == "" || $tencasi == "" || $path == "" || $quocgia == "") {
					   echo "<script>alert('Vui lòng nhập đầy đủ thông tin!')</script>";
					}
					
				  else{
	  					// Kiểm tra tài khoản đã tồn tại chưa
	  					$sql="SELECT * FROM baihat WHERE tenBaiHat ='$tenbaihat' AND tenCaSi = '$tencasi'";

						$kt=mysqli_query($conn, $sql);
	 
						if(mysqli_num_rows($kt)  > 0){
							echo "<script>alert('Bài hát đã tồn tại!')</script> ";
						}else{
							//thực hiện việc lưu trữ dữ liệu vào db
		    				$sql = "
								INSERT INTO baihat(tenBaiHat, tenTheLoai, tenCaSi, tenNhom, quocGia, path, dangBoi) VALUES ('$tenbaihat', '$theloai', '$tencasi', '$tennhom', '$quocgia', '$path', 'admin');
								";		
						    // thực thi câu $sql với biến conn lấy từ file connection.php
	   						if(mysqli_query($conn,$sql)){
					   		echo "<script>alert('Thêm bài hát thành công!')</script>";
							}else{
								echo "Error: " . $sql . "<br>" . mysqli_error($conn);
							}
							
						}
										    
						
				  }
			}
			$conn->close();
	?>

	<?php
	// xoa bai hat
	
		If(isset($_POST["btn-xoa"])){
			$tenbaihat = $_POST['tenBaiHat'];
			$tencasi = $_POST['tenCaSi'];
			
			if($tenbaihat == "" || $tencasi ==""){
				echo "<script>alert('Vui lòng điền đầy đủ thông tin để xóa.')</script>;";
			}
			else{
				$sql="DELETE  FROM baihat WHERE tenBaiHat ='$tenbaihat' AND tenCaSi = '$tencasi'";
				$kt=mysqli_query($conn, $sql);
				if($kt){
					echo "<script>alert('Xóa bài hát thành công!')</script>;";

				}else{
					echo "<script>alert('Xóa bài hát thất bại!')</script>;";
				}
				}
		}
	?>
	
	

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
				
				<div class="col-md-5" id="headermenu">
					<nav>
						<ul>
							<li style="width: 13em; background-color: #e7b96d;"><span>Xin chào <b >Admin!</b></span></li>
							<li><a href="">Cập nhật</a></li>
							<li><a href="">Xem dữ liệu</a></li>
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
				    <input type="text" class="form-control" id="" placeholder="Đường dẫn" name="path">
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
		<div style="margin-top: 2em; padding-top: 2em; border-top: 2px solid black;" id="view">
			<h1>Xem dữ liệu</h1>
		</div>
	</main>
</body>
</html>