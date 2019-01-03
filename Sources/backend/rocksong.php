<?php 
	include "connection.php";
	mysqli_set_charset($conn, 'UTF8');
	$sql = "
	SELECT tenBaiHat, tenCaSi
	FROM baihat
	WHERE tenTheLoai = 'rock'
	";

	$result= mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<p>";
			echo "<strong>";
			echo $row['tenBaiHat'];
			echo "</strong>";
			echo "<br>";
			echo '<i>';
			echo $row['tenCaSi'];
			echo '</i>'; 
			echo "</p>";
			echo "<br>";
		}
	}else{
		echo "Không tìm thấy bài hát.";
	}
?>