<?php 
	include"connection.php";
	mysqli_set_charset($conn, 'UTF8');
	$sql = "
	SELECT tenCaSi
	FROM baihat
	WHERE tenNhom = 'usuk'
	GROUP BY tenCaSi
	";

	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)){
			echo "<p>";
			echo "<strong>";
			echo $row['tenCaSi'];
			echo "</strong>";
			echo "</p>";
			echo "<br>";
		}
	} else{
		echo "Không tìm thấy ca sĩ";
	}
 ?>