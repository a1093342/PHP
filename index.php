<?php
session_start();

include("connect.php");
include("function.php");

$user_data = check_login($con);

?>


<html>
<head>
<title>HOMEPY</title>

<link href="css/global.css" rel="stylesheet">
<link href="css/desktop.css" rel="stylesheet" media="screen and (min-width: 1000px)">
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
		<li><a href="#">主頁</a></li>
		<li><a href="#">關於我們</a></li>
		<li><a href="#">最新資訊</a></li>
	</ul>
	<div>
		<a href="sign_up.php">註冊</a>
		<a href="login.php">登入</a>
	</div>
</div>
<div class="banner full-width clearfix">
	<div class="fixed-width">
		<div class="slider">
			<ul>
				<li><img src="images/banner_1.jpg"></li>
				<li><img src="images/banner_2.jpg"></li>
				<li><img src="images/banner_3.jpg"></li>
			</ul>	
		</div>
		<div class="main">
			<div>
				<h2>關於我們</h2>
				<p>醬油旅遊創立於2022年，因高大資管系網頁設計課程誕生出的旅遊品牌，為主辦方為客戶準備的旅遊...</p>
				<a href="#">More</a>
			</div>
			<div>
				<h2>最新資訊</h2>
				<p>我們將定期更新最新的旅遊資訊和行程菜單，歡迎用戶們進行登入後選擇喜歡的行程...</p>
				<a href="#">More</a>
			</div>
		</div>
	</div>
</div>
<div class="icon full-width clearfix">
	<div class="fixed-width">
		<h2><b>雅加達七日遊</b></h2>
		<p>最新旅遊菜單</p>
		<div class="item">
			<div>
				<i class="fas fa-route"></i>
				<h4>行程安排</h4>
				<p>兩種方式的旅遊體驗</p>
			</div>
			<div>
				<i class="fas fa-gopuram"></i>
				<h4>景點選擇</h4>
				<p>探索文化和自然之美</p>
			</div>
			<div>
				<i class="fas fa-satellite-dish"></i>
				<h4>專人服務</h4>
				<p>隨時有客服人員與您洽談</p>
			</div>
		</div>
	</div>
</div>
<div class="banner_b full-width">
	<div class="fixed-width">
		<div class="desktop">
			<div class="item">
				<div><img src="images/banner_b_1.jpg"></div>
				<h4>安佐爾夢幻公園 (Dunia Fantasi)</h4>
				<p>安佐爾夢幻公園位於雅加達市區北端，緊靠雅加達海灣。園內建有新型設計的大旅館、露天電影院、兒童娛樂場等。安佐爾夢幻公園內還建有別墅區，具有典型的印尼民族特色。</p>
			</div>
			<div class="item">
				<div><img src="images/banner_b_2.jpg"></div>
				<h4>大清真寺 (Istiqlal Mosque)</h4>
				<p>東南亞最大的清真寺，位在獨立廣場的東北方，會有住持跟各位講解動線，並在專人的陪同下，從二樓上觀看整個清真寺內部，若體力不錯可以在參觀完中央的摩納斯紀念塔。</p>
			</div>
			<div class="item">
				<div><img src="images/banner_b_3.jpg"></div>
				<h4>舊城區 (Kota Jakarta)</h4>
				<p>是荷蘭人統治時代的行政中心，沿途有Mindori Musuem與Bank Indonesia Musuem等前荷蘭人時期的銀行總行改建成的博物館，裡面有以前老銀行總行地下的大型金庫！</p>
			</div>
		</div>
		<div class="phone">
			<div class="item">
				<div><img src="images/banner_b_1.jpg"></div>
				<h4>安佐爾夢幻公園 (Dunia Fantasi)</h4>
				<p>安佐爾夢幻公園位於雅加達市區北端，緊靠雅加達海灣。園內建有新型設計的大旅館、露天電影院、兒童娛樂場等。安佐爾夢幻公園內還建有別墅區，具有典型的印尼民族特色。</p>
			</div>
			<div class="item">
				<div><img src="images/banner_b_2.jpg"></div>
				<h4>大清真寺 (Istiqlal Mosque)</h4>
				<p>東南亞最大的清真寺，位在獨立廣場的東北方，會有住持跟各位講解動線，並在專人的陪同下，從二樓上觀看整個清真寺內部，若體力不錯可以在參觀完中央的摩納斯紀念塔。</p>
			</div>
			<div class="item">
				<div><img src="images/banner_b_3.jpg"></div>
				<h4>舊城區 (Kota Jakarta)</h4>
				<p>是荷蘭人統治時代的行政中心，沿途有Mindori Musuem與Bank Indonesia Musuem等前荷蘭人時期的銀行總行改建成的博物館，裡面有以前老銀行總行地下的大型金庫！</p>
			</div>
		</div>	
	</div>
</div>
<div class="content full-width clearfix">
	<div class="fixed-width">
		<h2><b>為甚麼選擇醬油旅遊？</b></h2>
		<p>醬油能帶你們到心之所處</p>
		<div class="item">
			<div>
				<div><img src="images/mountain_3.jpg"></div>
				<div>
					<h4>客製旅程</h4>
					<p>醬油會定期發送問卷至會員信箱，蒐集會員旅遊各種需求並客製最新潮的旅遊菜單</p>
					<a href="#">More</a>
				</div>
			</div>
			<div>
				<div><img src="images/mountain_2.jpg"></div>
				<div>
					<h4>半自由行旅遊</h4>
					<p>旅遊菜單中我們不只會以遊覽車等為交通工具，我們會帶會員們體驗最富當地文化的旅遊方式。如會員們有任何需求，會員們也能和我們討論想要的行程。也因此，各菜單有人數限制，會以先搶先贏的方式，這也是我們的特色之一</p>
					<a href="#">More</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="notified full-width">
	<div class="fixed-width">
		<h2>了解更多？</h2>
		<p>與醬油一起探索世界大小事</p>
		<form>
			<input name="email" type="email" placeholder="Email address"><button>Sign Up</button>
		</form>
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















