<?php
session_start();

include("connect.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	//something was posted
	$user_name = $_POST['email'];
	$password = $_POST['password'];

	if(!empty($user_name) && !empty($password) )
	{
			//read from database
			
			$query = "select * from users where user_name = '$user_name' limit 1";

			$result = mysqli_query($con, $query);
			
			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] == $password && $user_data['type'] == "0")
					{
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: MAINPG.php");
						die;
					}elseif($user_data['password'] == $password && $user_data['type'] == "1"){
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: admin.php");
						die;
					}else{
						echo "Wrong username or password!";
					}
				}
			}
			echo "Wrong username or password!";
	}else
	{
		echo "Please enter valid information";
	}
}


?>

<html>
<head>
<title>LOGIN</title>

<link href="css/global.css" rel="stylesheet">
<link href="css/login.css" rel="stylesheet" media="screen and (min-width: 1000px)">
<link href="css/phone.css" rel="stylesheet" media="screen and (max-width: 999.9px)">
<link href="fontawesome/css/all.css" rel="stylesheet">
<link href="bxslider/jquery.bxslider.css" rel="stylesheet">
<link href="slick/slick.css" rel="stylesheet">
<link href="slick/slick-theme.css" rel="stylesheet">

<script src="bxslider/jquery-1.12.3.min.js"></script>
<script src="bxslider/jquery.bxslider.js"></script>
<script src="slick/slick.js"></script>

<script>
	$('document').ready(function() {
		$('.slider ul').bxSlider({
			controls: false,
			mode: 'fade',
			auto: true,
			pager: false
		});
		
		$('.banner_b .desktop').slick();
		
		$('.menu a').click(function() {
			$('.navigator').animate({right: 0},800);
			
			return false;
		});
		
		$('.navigator p a').click(function() {
			$('.navigator').animate({right: '-350px'},800);
			
			return false;
		});
	});
</script>

</head>
<body>
<div class="header full-width clearfix">
	<div class="fixed-width">
		<div class="logo">
			?????????<span>????????????</span>
		</div>
		<div class="menu">
			<a href="#">Menu<i class="fas fa-bars"></i></a>
		</div>
	</div>
</div>
<div class="navigator">
	<p><a href="#"><i class="fas fa-times"></i></a></p>
	<ul>
		<li><a href="index.php">??????</a></li>
		<li><a href="index.php">????????????</a></li>
		<li><a href="index.php">????????????</a></li>
	</ul>
	<div>
		<a href="sign_up.php">??????</a>
		<a href="login.php">??????</a>
	</div>
</div>
<div class="banner full-width clearfix">
	<div class="fixed-width">
		<div class="slider">
			<div class="form">
				<form action="" method="post">
				<label for="account">??????</label><br>
				<input type="text" id="account" name="email" placeholder="???????????????email???????????????">
				<br>
				<label for="password">??????</label><br>
				<input type="password" id="password" name="password" placeholder="?????????????????????">
				<br>
				<input type="submit" name="login" value="????????????">
				<a href="sign_up.php">????????????</a>
				<hr>
				</form>
			
			<div class="ps">
				<a href="">????????????</a>
			</div>    
		</div>
		</div>
		<div class="main">
			<div>
				<h2>????????????</h2>
                <p>
                ??????????????????<br>?????????<br>??????????????????????????????
                </p>
			</div>
			<div>
				<h2>????????????</h2>
                <p>
                ??????????????????<br>?????????<br>??????????????????????????????
                </p>
			</div>
            
		</div>
	</div>	
</div>

<div class="notified full-width">
	<div class="fixed-width">
		<h2>???????????????</h2>
		<p>????????????????????????????????????</p>
		<form>
			<input name="email" type="email" placeholder="Email address"><button>Sign Up</button>
		</form>
	</div>
</div>
<div class="map full-width clearfix">
	<div class="fixed-width">
		<div>
			<h4>????????????</h4>
			<ul>
				<li><a href="index.php">????????????</a></li>
				<li><a href="index.php">????????????</a></li>
				<li><a href="sign_up.php">????????????</a></li>
				<li><a href="login.php">????????????</a></li>
			</ul>
		</div>
		<div>
			<h4>????????????</h4>
			<ul>
				<li><a href="index.php">????????????</a></li>
				<li><a href="index.php">??????????????????</a></li>
				<li><a href="index.php">????????????</a></li>
				<li><a href="index.php">????????????</a></li>
			</ul>
		</div>
		<div>
			<h4>????????????</h4>
			<ul>
				<li><a href="https://nina1224.pixnet.net/blog/post/329205555-%5B%E5%8D%B0%E5%B0%BC%E5%9C%B0%E5%9C%96%5D%E5%8D%B0%E5%B0%BC%E5%9C%B0%E5%9C%96-indonesia-map-%E5%90%84%E7%9C%81%E5%88%86%E4%BD%88">????????????</a></li>
				<li><a href="https://www.agoda.com/zh-tw/travel-guides/indonesia/jakarta/discover-5-secret-holiday-destinations-locals-love-indonesia">????????????</a></li>
				<li><a href="https://nina1224.pixnet.net/blog/post/333807693-%5B%E5%8D%B0%E5%B0%BC%E7%BE%8E%E9%A3%9F%5D-%E9%80%99%E9%BA%BC%E5%A4%9A%E7%9A%84%E9%81%93%E5%9C%B0%E5%8D%B0%E5%B0%BC%E7%BE%8E%E9%A3%9F-%E4%BD%A0%E5%96%9C%E6%AD%A1%E5%93%AA">????????????</a></li>
				<li><a href="https://hemelytw.pixnet.net/blog/post/308091813-%E3%80%90%E5%88%86%E4%BA%AB%E3%80%91%E5%8D%B0%E5%B0%BC%E2%98%85%E8%AA%8D%E8%AD%98%E5%8D%B0%E5%B0%BC%E7%AF%87%E2%98%85%E5%8D%B0%E5%B0%BC%E4%BA%A4%E9%80%9A%28%E4%BA%A4%E9%80%9A">????????????</a></li>
			</ul>
		</div>
		<div>
			<h4>????????????</h4>
			<ul>
				<li><a href="https://hk.trip.com/travel-guide/attraction/central-jakarta-1457454/tourist-attractions/type-169-28/">????????????</a></li>
				<li><a href="https://pj20120619.pixnet.net/blog/post/220597515-%E3%80%90%E8%90%AC%E9%9A%86-%E6%97%85%E9%81%8A%E3%80%91taman-aggerek%E3%80%82%E7%9C%BE%E5%A4%9A%E9%9B%BB%E5%BD%B1%E6%98%8E%E6%98%9F%E5%87%BA%E5%A0%B4~">????????????</a></li>
				<li><a href="https://r03323013.pixnet.net/blog/post/223036485">????????????</a></li>
				<li><a href="https://www.shopback.com.tw/blog/10-best-places-to-visit-in-jakarta">????????????</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="footer full-width">
	<div class="fixed-width">
		<div class="contect">
			<span><i class="fas fa-igloo"></i>700 Kaohsiung University Road, TW 00000-0000</span>
			<span><i class="fas fa-phone-alt"></i><a href="#">(886) 0000-0000</a></span>
			<span><i class="fas fa-envelope-open-text"></i><a href="#">soiiiibin@nuk.mail.com</a></span>
		</div>
		<div class="copyright">
			?? Soybin. All rights reserved.
		</div>
	</div>
</div>
</body>
</html>















