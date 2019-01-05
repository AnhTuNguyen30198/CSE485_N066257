<?php
	include "connection.php";
	mysqli_set_charset($conn, 'UTF8');

	$q = $_REQUEST["q"];
	$hint = "";

	$sql = "SELECT *FROM baihat";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0){
		while($row= mysqli_fetch_assoc($result)){
			if($q !== ""){
				$q = strtolower($q);
				$len=strlen($q);
				foreach ($row['tenBaiHat'] as $name) {
					if(stristr($q, substr($name, 0, $len))){
						if ($hint === ""){
							$hint = $name;
						}else{
							$hint .= ", $name";
						}
					}
				}
			}
		}
	}

	echo $hint === "" ? "no suggestion" : $hint;
?>