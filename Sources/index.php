
<?php include "backend/connection.php" ?>
<?php include "backend/header.php" ?>
	<!-----end header----->
	<!-----Begin Main----->
	<main>
		<div class="container">
			<div class="row">
				<div class="col-md-12" id="bigimg">
					<a href="#">
						<img src="img/bigimg.jpg" alt="big image">
					</a>
				</div>
			</div>
		</div>
		<!-----Begin Content----->
		<div class="container content1">
			<div class="row">
				<div class="col-md-3" id= "leftmenu">							
					<!-----Begin LeftMenu: Vpop,kpop,usuk----->
					<nav>
						<ul>
							<li class="vpop"><a href=""><img src="img\vpop.jpg" alt="vpop img"></a></li>
							<li class="kpop"><a href=""><img src="img\kpop.jpg" alt="kpop img"></a></li>
							<li class="usuk"><a href=""><img src="img\usuk.jpg" alt="usuk img"></a></li>
						</ul>
					</nav>
				</div>
					<!-----End LeftMenu: Vpop,kpop,usuk----->

				<div id="topbxh" class="col-md-3 box1" >	<!-----Top BXH----->
					<h2>TOP BXH</h2>
					<div class="ndtopbxh ndbox1">
						<p>pđây là nội dung</p>
					</div>
				</div>

				<div id="likedmusic" class="col-md-3 box1">	<!-----The most favorite songs----->
					<h2>Được yêu thích</h2>
					<div class="ndlikedmusic ndbox1">	
						<p>Đây là nội dung</p>
					</div>
				</div>

				<div id="singer" class="col-md-3 box1">	<!-----Outstanding singer----->
					<h2>Nghệ sĩ nổi bật</h2>
					<div class="ndsinger ndbox1">
						<p>Đây là nội dung</p>
					</div>
				</div>
			</div>
		</div>
		<!-----End Content1----->
							

		
		
		<!-----Begin Content2----->

		<div class="content2 container">
			<!-----Begin Leftside----->
			<div class="container">
				<div class="row">
					<div class="col-md-12" id="musicstyle">
						<a href="#content21">
							<h1>Nhạc theo chủ đề</h1>
						</a>
					</div>
				</div>
			</div>

			<div class="container content21">	
				<div class="row" id="row_content21">					
					<div id="jazz" class="box2">
				 		<h2>Jazz</h2>
				 		<div id="ndjazz" class="ndbox2">
				 			<p>Đây là nội dung</p>
				 		</div>
					</div>

					<div id="pop" class="box2">
						<h2>Pop</h2>
				 		<div id="ndpop" class="ndbox2">
				 			<p>Đây là nội dung</p>
				 		</div>
					</div>

					<div id="rock" class="box2">
						<h2>Rock</h2>
				 		<div id="ndrock" class="ndbox2">
				 			<p>Đây là nội dung</p>
				 		</div>			
					</div>

					<div id="blue" class="box2">
						<h2>Blue</h2>
				 		<div id="ndblue" class="ndbox2">
				 			<p>Đây là nội dung</p>
				 		</div>
					</div>
				</div>		<!-----End Row2----->
			</div>

			<div class="container content22">
				<div class="row" id="row_content22">				<!-----Begin Row3----->
					<div id="soul" class="box2">
						<h2>Soul</h2>
				 		<div id="ndsoul" class="ndbox2">
				 			<p>Đây là nội dung</p>
				 		</div>
					</div>	

					<div id="hiphop" class="box2">
						<h2>HipHop</h2>
				 		<div id="ndhiphop" class="ndbox2">
				 			<p>Đây là nội dung</p>
				 		</div>
					</div>

					<div id="folk" class="box2">
						<h2>Folk</h2>
				 		<div id="ndfolk" class="ndbox2">
				 			<p>Đây là nội dung</p>
				 		</div>		
					</div>

					<div id="latin" class="box2">
				 		<h2>Latin</h2>
				 		<div id="ndlatin" class="ndbox2">
				 			<p>Đây là nội dung</p>
				 		</div>
					</div>
				</div>
			</div>						
		</div>	<!-----End Content2----->
	</main>
	<!-----End Main----->
	
<?php include "backend/footer.php" ?>