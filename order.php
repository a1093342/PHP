<html>
<head>
<title>MAINPY</title>

<link href="css/global.css" rel="stylesheet">
<link href="css/order.css" rel="stylesheet" media="screen and (min-width: 1000px)">
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
			雅加達<span>醬油旅遊</span>
		</div>
		<div class="menu">
			<a href="#">Menu<i class="fas fa-bars"></i></a>
		</div>
	</div>
</div>
<div class="navigator">
	<p><a href="#"><i class="fas fa-times"></i></a></p>
	<ul>
		<li><a href="#">海島漫步</a></li>
		<li><a href="#">城街走訪</a></li>
	</ul>
	<div>
        <a href="edit.php">編輯會員資料</a>
		<a href="index.php">登出</a>
	</div>
</div>
<div class="banner full-width clearfix">
	<div class="fixed-width">
		<div class="slider">
			<ul>
				<li><img src="images/banner_2.jpg"></li>
				<li><img src="images/gema-saputera-moDWHKqggFc-unsplash.jpg"></li>
				<li><img src="images/eugenia-clara-rF7wHTvZbwo-unsplash.jpg"></li>
			</ul>	
		</div>
		<div class="main">
			<div>
				<h2>海島漫步</h2>
				<p>行程A主打清新放鬆的慢旅遊，行程會帶大家體驗印尼海島風情等雅加達近郊景點...</p>
				<a href="#">A</a>
			</div>
			<div>
				<h2>城街走訪</h2>
				<p>行程B主打雅加達市區，城市旅遊的逛街、夜生活，行程除了帶大家探索印尼大城市的繁華...</p>
				<a href="#">B</a>
			</div>
		</div>
	</div>
</div>
<div class="icon full-width clearfix">
	<div class="fixed-width">
		<h2><b>選擇您的行程</b></h2>
		<p>請填上您的姓名和行程並提交</p>
		<div class="item">
			<div>
				<div class="form">
                    <form action="" method="post">
                    <label for="name">姓名：</label><br>
                    <input type="text" id="name" name="name" placeholder="請輸入您的姓名">
                    <br>
                    <label for="type">行程：</label>
                    <input type="radio" id="type1" name="type" value="1"><label for="type1">海洋漫步</label>
                    <input type="radio" id="type2" name="type" value="2"><label for="type2">城街走訪</label>
                    <br>
                    <input type="submit" name="insert" value="確認送出">
                    </form>
                </div>
                <div class="ps">
                    <a href="MAINPG.php">上一頁</a>
                </div>  
			</div>
		</div>
	</div>
</div>

<div class="map full-width clearfix">
	<div class="fixed-width">
		<div>
			<h4>關於醬油</h4>
			<ul>
				<li><a href="#">關於我們</a></li>
				<li><a href="#">最新資訊</a></li>
				<li><a href="sign_up.php">馬上註冊</a></li>
				<li><a href="login.php">馬上登入</a></li>
			</ul>
		</div>
		<div>
			<h4>醬油特色</h4>
			<ul>
				<li><a href="#">客製旅遊</a></li>
				<li><a href="#">半自由行旅遊</a></li>
				<li><a href="#">了解更多</a></li>
				<li><a href="#">其他意見</a></li>
			</ul>
		</div>
		<div>
			<h4>旅遊地圖</h4>
			<ul>
				<li><a href="https://nina1224.pixnet.net/blog/post/329205555-%5B%E5%8D%B0%E5%B0%BC%E5%9C%B0%E5%9C%96%5D%E5%8D%B0%E5%B0%BC%E5%9C%B0%E5%9C%96-indonesia-map-%E5%90%84%E7%9C%81%E5%88%86%E4%BD%88">印尼地圖</a></li>
				<li><a href="https://www.agoda.com/zh-tw/travel-guides/indonesia/jakarta/discover-5-secret-holiday-destinations-locals-love-indonesia">印尼景點</a></li>
				<li><a href="https://nina1224.pixnet.net/blog/post/333807693-%5B%E5%8D%B0%E5%B0%BC%E7%BE%8E%E9%A3%9F%5D-%E9%80%99%E9%BA%BC%E5%A4%9A%E7%9A%84%E9%81%93%E5%9C%B0%E5%8D%B0%E5%B0%BC%E7%BE%8E%E9%A3%9F-%E4%BD%A0%E5%96%9C%E6%AD%A1%E5%93%AA">印尼飲食</a></li>
				<li><a href="https://hemelytw.pixnet.net/blog/post/308091813-%E3%80%90%E5%88%86%E4%BA%AB%E3%80%91%E5%8D%B0%E5%B0%BC%E2%98%85%E8%AA%8D%E8%AD%98%E5%8D%B0%E5%B0%BC%E7%AF%87%E2%98%85%E5%8D%B0%E5%B0%BC%E4%BA%A4%E9%80%9A%28%E4%BA%A4%E9%80%9A">印尼交通</a></li>
			</ul>
		</div>
		<div>
			<h4>來雅加達</h4>
			<ul>
				<li><a href="https://hk.trip.com/travel-guide/attraction/central-jakarta-1457454/tourist-attractions/type-169-28/">自然景觀</a></li>
				<li><a href="https://pj20120619.pixnet.net/blog/post/220597515-%E3%80%90%E8%90%AC%E9%9A%86-%E6%97%85%E9%81%8A%E3%80%91taman-aggerek%E3%80%82%E7%9C%BE%E5%A4%9A%E9%9B%BB%E5%BD%B1%E6%98%8E%E6%98%9F%E5%87%BA%E5%A0%B4~">血拚放鬆</a></li>
				<li><a href="https://r03323013.pixnet.net/blog/post/223036485">大飽口福</a></li>
				<li><a href="https://www.shopback.com.tw/blog/10-best-places-to-visit-in-jakarta">景點介紹</a></li>
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
			© Soybin. All rights reserved.
		</div>
	</div>
</div>
</body>
</html>

<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'try');

if(isset($_POST['insert']))
{
    $name=$_POST['name'];
    $choice=$_POST['type'];

    $query = "INSERT INTO `users` (`Name`,`Choice`) VALUES ('$name','$choice')";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['status'] = "inserted successfully";
		header("Location: confirm_1.php");
    }else
    {
        $_SESSION['status'] = "inserted successfully";
		header("Location: confirm_1.php");
    }
}
?>














