<?php session_start(); ?>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

<?
	// $dbhost = 'localhost';
	// $dbuser = 'root';
	// $dbpass = ' daniel';
	// $dbname = 'tomorrowenglish';
	// $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
	// mysqli_select_db($conn,$dbname);
	// mysqli_query($conn,"SET NAMES 'utf8'");
?>
<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>	
	<title>主題分類檢視系統</title>
	<link rel=stylesheet type="text/css" href="CSS/IndexCSS.css">
	
</head>
<body>

	<div class="Info" >
		<div class="UserStatus">
			<p >登入者：<?php echo $_SESSION['account'];  ?></p>
			<p>身份：教師</p>


		</div>	


		<div class="SelectGroup">

			<p>全校</p> 
			<p>各團</p>
			<p>個人</p>






		</div>






	</div>




	<div class="SelectTheme">

		<div class="AllBook">
			
			<div class="img_class">
				<img src="material/AllBook.png"  class="ThemeBook_png">

			</div>


			<div class="Theme_text"> 


				<span>
				250
				</span>
				<br>
				總紀錄書籍數

			</div>


		</div>

		<div class="Theme1">

			<div class="img_class">
				<img src="material/ThemeBook.png" width="50px" height="50px"  class="ThemeBook_png">
			</div>

			<div class="Theme_text"> 


				<span>
				250
				</span>
				<br>
				故事洲書籍數

			</div>


		</div>

		<div class="Theme2">
			<div class="img_class">
				<img src="material/TechBook.png" width="50px" height="50px"  class="ThemeBook_png">
			</div>

			<div class="Theme_text"> 


				<span>
				250
				</span>
				<br>
				科技洲書籍數

			</div>

		</div>

		<div class="Theme3">
			<div class="img_class">
				<img src="material/SocietyBook.png" width="50px" height="50px"  class="ThemeBook_png">
			</div>

			<div class="Theme_text"> 


				<span>
					250
				</span>
				<br>
				人社洲書籍數

			</div>
			



		</div>			



	</div>



	<div class="chart_class">
		
		<div class="chart1">
			



		</div>


		<div class="chart2">
			


		</div>


		<div class="chart3">

			
			


		</div>





	</div>

	












</body>


<script type="text/javascript">
	$(function(){
		$("#nav li").click(function(){
			$("#nav li").eq($(this).index()).addClass("navdown").siblings().removeClass("navdown");
		})
	})
</script>
</html>