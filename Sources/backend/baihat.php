<?php
session_start();
?>
<!DOCTYPE html>
<html style="background-image: url(../img/background1.jpeg); background-size: 100%;">
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		#gohome:hover{
			background: #e7b96d !important;
			font-weight: bolder;
			border-width: 2px !important;
		}

		audio:hover, audio:focus, audio:active
		{
		-webkit-box-shadow: 15px 15px 20px rgba(0,0, 0, 0.4);
		-moz-box-shadow: 15px 15px 20px rgba(0,0, 0, 0.4);
		box-shadow: 15px 15px 20px rgba(0,0, 0, 0.4);
		-webkit-transform: scale(1.05);
		-moz-transform: scale(1.05);
		transform: scale(1.05);
		}
		audio
		{
		-webkit-transition:all 0.5s linear;
		-moz-transition:all 0.5s linear;
		-o-transition:all 0.5s linear;
		transition:all 0.5s linear;
		-moz-box-shadow: 2px 2px 4px 0px #006773;
		-webkit-box-shadow:  2px 2px 4px 0px #006773;
		box-shadow: 2px 2px 4px 0px #006773;
		-moz-border-radius:7px 7px 7px 7px ;
		-webkit-border-radius:7px 7px 7px 7px ;
		border-radius:7px 7px 7px 7px ;
		}
	</style>
</head>
<body>
	<?php
	include"connection.php";
	mysqli_set_charset($conn, 'UTF8');

	$idbaihat = $_REQUEST['idBaiHat'];

	$sql = "SELECT * FROM baihat WHERE idBaiHat = $idbaihat";
	$baihat = mysqli_query($conn, $sql);

	$baihathientai = mysqli_fetch_assoc($baihat);
?>	
	<div style="padding-top: 5em">
		<div style="margin: 0 15em 2em 10em;
		padding: 1em 1em 1em 2em;
		background: #aa2f1b;
		border-radius: 0.5em;">
			<label >
				<h1>
					<b style="font-size: 0.9em;"> <?php echo $baihathientai['tenBaiHat'] ?></b>
				</h1>
				<h2>Nghệ sĩ:
					<b style="font-size: 0.9em;"> <?php echo $baihathientai['tenCaSi'] ?></b>
				</h2>
				<h2>Thể loại:
					<b style="font-size: 0.9em;"> <?php echo $baihathientai['tenTheLoai'] ?></b>
				</h2>
			</label>
				<button style="width: 10em; height: 3em; font-size: 1em; 
				position: relative;
				left: 50em;
				bottom: 1em;
				background: #aa2f1b;
				border: 1px solid black;
				border-radius: 4px; "
				 type="submit" name="return" id="gohome">Về trang chủ</button>
		</div>
	<audio controls style="width: 80%;
	 position: relative; 
	 left: 6em; 
	 top: 1em;
	 border: 1px solid #fcfdfd;
	 border-radius: 30px;
	 ;
	 ">
	<source type = "audio/mpeg" src="<?php echo $baihathientai['path']; ?>" />
	</audio>
	</div>

	<script type="text/javascript">
		var home = document.getElementById('gohome');
		home.addEventListener('click', function(){
			if(confirm('Bạn thực sự muốn quay trở lại trang chủ?')){
			window.location= "../index.php";
				}
		} ,false);
	</script>
	
</body>
</html>
