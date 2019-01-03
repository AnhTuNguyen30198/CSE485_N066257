<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="../assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
<?php
			include ("connection.php");
			if (isset($_POST["btn_submit"])) {
	  			//lấy thông tin từ các form bằng phương thức POST
				$username =  $_POST["username"];
	   			$email = $_POST["email"];
				$password = $_POST["password"];
				$password_repeat = $_POST["password-repeat"];
	  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
				  if ($password == "" || $email == "" || $username == "") {
					   echo "<script>alert('bạn vui lòng nhập đầy đủ thông tin!')</script>";
					}
				  elseif ($password != $password_repeat) {
						echo "<script>alert('Nhập lại mật khẩu không khớp')</script>";
					}
				  else{
	  					// Kiểm tra tài khoản đã tồn tại chưa
	  					$sql="SELECT * FROM users WHERE email='$email' AND username = '$username'";
						$kt=mysqli_query($conn, $sql);
	 
						if(mysqli_num_rows($kt)  > 0){
							echo "<script>alert('Tài khoản đã tồn tại!')</script> ";
						}else{
							//thực hiện việc lưu trữ dữ liệu vào db
		    				$sql = "INSERT INTO users(username,email,password) 
							VALUES (
							'$username',
		    					'$email',
		    					'$password'
		    					)";
						    // thực thi câu $sql với biến conn lấy từ file connection.php
	   						mysqli_query($conn,$sql);
					   		echo "<script>alert('Chúc mừng bạn đã đăng ký thành công!')</script>";
						}
										    
						
				  }
		}
	?>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder" ></div>
            <form method="post" action="register.php">
                <h2 class="text-center"><strong>Tạo</strong> tài khoản</h2>
      			<div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username" required></div>
				<div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" required></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Mật khẩu" required></div>
                <div class="form-group"><input class="form-control" type="password" name="password-repeat" placeholder="Nhập lại mật khẩu" required></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" required>Tôi đồng ý với các điều khoản</label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color:rgb(17,17,17);" name="btn_submit">Đăng ký</button></div>
				<a href="login.php" class="already">Bạn đã có tài khoản? Hãy<strong> đăng nhập</strong> tại đây.</a></form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	
</body>

</html>