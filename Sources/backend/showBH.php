<?php require 'connection.php'; 
	$sql = 'SELECT * FROM `vw_TopXepHang`';
	$result = mysqli_query($conn,$sql);
	if(!$result) {
        die('Query error: [' . $database->error . ']');
    }

        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		<?php while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)): ?>
			<p>
				<?php  echo $row['tenBaiHat'];
			</p>
		<?php endwhile; ?>

?>