<?php
			include "connection.php";
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