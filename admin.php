<html>
<head>
<title>admin</title>

<link href="css/global.css" rel="stylesheet">
<link href="css/admin.css" rel="stylesheet" media="screen and (min-width: 1000px)">
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
    $(function(){
    function receiveMessageFromIframePage (event) {
        var height = ('receiveMessageFromIframePage',event.data.h);
        console.log(height);//接收source.html頁面所回傳的高度值
        $('#myIframe').height(height);//將取得的高度，變更myIframe高度

    }
    window.addEventListener("message", receiveMessageFromIframePage, false);//監聽receiveMessageFromIframePage
});
</script>

</head>
<body>
<div class="header full-width clearfix">
	<div class="fixed-width">
		<div class="logo">
			歡迎<span>ADMIN</span>
		</div>
		<div class="menu">
			<a href="#">Menu<i class="fas fa-bars"></i></a>
		</div>
	</div>
</div>
<div class="navigator">
	<p><a href="#"><i class="fas fa-times"></i></a></p>
	<ul>
		<li><a href="index.php">首頁</a></li>
		<li><a href="index.php">關於我們</a></li>
		<li><a href="index.php">最新資訊</a></li>
	</ul>
	<div>
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
				<h2>歡迎<h2><span>ADMIN</span></h2>
			</div>
			<div class="d">
				<h2>訂單及顧客查詢</h2>
				<P>資料會直接顯示顧客及訂單資訊</P>
                <form action="check2.php" method="post">
                    <input type="submit" value="查詢">
                </form>
			</div>
		</div>
	</div>	
</div>

<div class="map full-width clearfix">
	<div class="fixed-width">
		<div>
			<h4>關於醬油</h4>
			<ul>
				<li><a href="index.php">關於我們</a></li>
				<li><a href="index.php">最新資訊</a></li>
				<li><a href="sign_up.html">馬上註冊</a></li>
				<li><a href="login.php">馬上登入</a></li>
			</ul>
		</div>
		<div>
			<h4>醬油特色</h4>
			<ul>
				<li><a href="index.php">客製旅遊</a></li>
				<li><a href="index.php">半自由行旅遊</a></li>
				<li><a href="index.php">了解更多</a></li>
				<li><a href="index.php">其他意見</a></li>
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















