<?php
session_start();

include("connect.php");
include("function.php");

$user_data = check_login($con);

?>

<html>
<head>
<title>MAINPY</title>

<link href="css/global.css" rel="stylesheet">
<link href="css/mainpg.css" rel="stylesheet" media="screen and (min-width: 1000px)">
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
		<a href="logout.php">登出</a>
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
		<h2><b>海島漫步</b></h2>
		<p>享受海洋微風輕拂..</p>
		<div class="item">
			<div>
				<ul>
                    <li><h4><b> DAY 1</b></h4></li>
                    <H4>雅加達國際機場 -> 舊城區飯店check in -> 舊城區 -> 文化風味晚餐</H4>
                    <li><h4><b> DAY 2</b></h4></li>
                    <H4>茂物動物園一日遊 Taman sarafi -> 茂物區住一晚</H4>
                    <li><h4><b> DAY 3</b></h4></li>
                    <H4>茂物動物園早晨散步(上午自由活動) -> 縮影公園 -> 回飯店check in </H4>
                    <li><h4><b> DAY 4</b></h4></li>
                    <H4>早上搭郵輪 -> 千島群島 -> 水上活動 -> 島上用餐 -> 回雅加達</H4>
                    <li><h4><b> DAY 5</b></h4></li>
                    <H4>安佐爾夢幻公園一日遊</H4>
                    <li><h4><b> DAY 6</b></h4></li>
                    <H4>傳統市場淘寶 -> 飯店check out -> 回台灣</H4>
                </ul>	
			</div>
		</div>
	</div>
</div>
<div class="banner_b full-width">
	<div class="fixed-width">
		<div class="desktop">
            <div class="item">
				<div><img src="images/jernej-graj-Qjg_-iRJkqw-unsplash.jpg"></div>
				<h4>千島群島 (Kepulauan Seribu Regency)</h4>
				<p>千島群島位於當地著名的千島區。在這裡可以加入很多水上活動。重點是，可以好好放鬆。有優美的風景，清澈的水質，是潛水愛好者的天堂。</p>
			</div>
            <div class="item">
				<div><img src="images/banner_b_3.jpg"></div>
				<h4>舊城區 (Kota Jakarta)</h4>
				<p>是荷蘭人統治時代的行政中心，沿途有Mindori Musuem與Bank Indonesia Musuem等前荷蘭人時期的銀行總行改建成的博物館，裡面有以前老銀行總行地下的大型金庫！</p>
			</div>
            <div class="item">
				<div><img src="images/abby-lim-EMCJA7bJap8-unsplash.jpg"></div>
				<h4>茂物動物園 (Taman Sarafi)</h4>
				<p>是印尼最大的野生動物園，最大的特色就是可以自己駕車遊園，近距離餵食動物。除了車子之外，人和動物之間沒有其他阻隔，近距離直擊讓人融化的萌萌動物們，十分療癒。</p>
			</div>
			<div class="item">
				<div><img src="images/banner_b_1.jpg"></div>
				<h4>安佐爾夢幻公園 (Dunia Fantasi)</h4>
				<p>安佐爾夢幻公園位於雅加達市區北端，緊靠雅加達海灣。園內建有新型設計的大旅館、露天電影院、兒童娛樂場等。安佐爾夢幻公園內還建有別墅區，具有典型的印尼民族特色。</p>
			</div>
			<div class="item">
				<div><img src="images/damar-handyanjaya-UGkh7W3nWDg-unsplash.jpg"></div>
				<h4>傳統市場淘寶 (Indonesia Market)</h4>
				<p>印尼的傳統市場是尋覓當地文化最好的去處，有假日和平日之分，因此也會有不同的活動，蔬果、遊樂設施、鍋碗瓢盆、小吃好料都不能錯過。</p>
			</div>
		</div>
		<div class="phone">
            <div class="item">
				<div><img src="images/jernej-graj-Qjg_-iRJkqw-unsplash.jpg"></div>
				<h4>千島群島 (Kepulauan Seribu Regency)</h4>
				<p>千島群島位於當地著名的千島區。在這裡可以加入很多水上活動。重點是，可以好好放鬆。有優美的風景，清澈的水質，是潛水愛好者的天堂。</p>
			</div>
			<div class="item">
				<div><img src="images/banner_b_3.jpg"></div>
				<h4>舊城區 (Kota Jakarta)</h4>
				<p>是荷蘭人統治時代的行政中心，沿途有Mindori Musuem與Bank Indonesia Musuem等前荷蘭人時期的銀行總行改建成的博物館，裡面有以前老銀行總行地下的大型金庫！</p>
			</div>
            <div class="item">
				<div><img src="images/abby-lim-EMCJA7bJap8-unsplash.jpg"></div>
				<h4>茂物動物園 (Taman Sarafi)</h4>
				<p>是印尼最大的野生動物園，最大的特色就是可以自己駕車遊園，近距離餵食動物。除了車子之外，人和動物之間沒有其他阻隔，近距離直擊讓人融化的萌萌動物們，十分療癒。</p>
			</div>
			<div class="item">
				<div><img src="images/banner_b_1.jpg"></div>
				<h4>安佐爾夢幻公園 (Dunia Fantasi)</h4>
				<p>安佐爾夢幻公園位於雅加達市區北端，緊靠雅加達海灣。園內建有新型設計的大旅館、露天電影院、兒童娛樂場等。安佐爾夢幻公園內還建有別墅區，具有典型的印尼民族特色。</p>
			</div>
			<div class="item">
				<div><img src="images/damar-handyanjaya-UGkh7W3nWDg-unsplash.jpg"></div>
				<h4>傳統市場淘寶 (Indonesia Market)</h4>
				<p>印尼的傳統市場是尋覓當地文化最好的去處，有假日和平日之分，因此也會有不同的活動，蔬果、遊樂設施、鍋碗瓢盆、小吃好料都不能錯過。</p>
			</div>
		</div>	
	</div>
</div>
<div class="icon full-width clearfix">
	<div class="fixed-width">
		<h2><b>城街走訪</b></h2>
		<p>自在探索繁華生活..</p>
		<div class="item">
			<div>
				<ul>
                    <li><h4><b> DAY 1</b></h4></li>
                    <H4>雅加達國際機場 -> 舊城區飯店check in -> 舊城區 -> 文化風味晚餐</H4>
                    <li><h4><b> DAY 2</b></h4></li>
                    <H4>早上搭郵輪 -> 千島群島 -> 水上活動 -> 島上用餐 -> 回雅加達</H4>
                    <li><h4><b> DAY 3</b></h4></li>
                    <H4>獨立廣場 -> 國家博物館 ->  大清真寺 -> Grand Indonesia 百貨購物</H4>
                    <li><h4><b> DAY 4</b></h4></li>
                    <H4>安佐爾夢幻公園一日遊</H4>
                    <li><h4><b> DAY 5</b></h4></li>
                    <H4>縮影公園 -> 逛大賣場和買伴手禮 -> 雅加達大教堂 -> 小東京</H4>
                    <li><h4><b> DAY 6</b></h4></li>
                    <H4>傳統市場淘寶 -> 飯店check out -> 回台灣</H4>
                </ul>	
			</div>
		</div>
	</div>
</div>
<div class="banner_b full-width">
	<div class="fixed-width">
		<div class="desktop">
			<div class="item">
				<div><img src="images/banner_b_3.jpg"></div>
				<h4>舊城區 (Kota Jakarta)</h4>
				<p>是荷蘭人統治時代的行政中心，沿途有Mindori Musuem與Bank Indonesia Musuem等前荷蘭人時期的銀行總行改建成的博物館，裡面有以前老銀行總行地下的大型金庫！</p>
			</div>
            <div class="item">
				<div><img src="images/jernej-graj-Qjg_-iRJkqw-unsplash.jpg"></div>
				<h4>千島群島 (Kepulauan Seribu Regency)</h4>
				<p>千島群島位於當地著名的千島區。在這裡可以加入很多水上活動。重點是，可以好好放鬆。有優美的風景，清澈的水質，是潛水愛好者的天堂。</p>
			</div>
            <div class="item">
				<div><img src="images/mountain_3_1.jpg"></div>
				<h4>獨立廣場 (Medan Merdeka)</h4>
				<p>獨立廣場位於雅加達中區，又稱莫迪卡廣場。以印尼人民英雄紀念碑為中心，廣場北邊是總統府，西街上有國防部大院和中央博物館，東邊是Gambir火車站。</p>
			</div>
            <div class="item">
				<div><img src="images/zalfa-imani-3hxlxmo2Oc0-unsplash.jpg"></div>
				<h4>國家博物館 (National Museum)</h4>
				<p>印尼國家博物館是一座歐式的白色建築，館前草坪石墩上立有一座銅大象，是暹羅王拉瑪五世來訪時所贈，故印尼國家博物館又稱“大象博物館”或“象屋”。</p>
			</div>
            <div class="item">
				<div><img src="images/banner_b_2.jpg"></div>
				<h4>大清真寺 (Istiqlal Mosque)</h4>
				<p>東南亞最大的清真寺，位在獨立廣場的東北方，會有住持跟各位講解動線，並在專人的陪同下，從二樓上觀看整個清真寺內部，若體力不錯可以在參觀完中央的摩納斯紀念塔。</p>
			</div>
            <div class="item">
				<div><img src="images/dias-saa3uVuKJrE-unsplash.jpg"></div>
				<h4>Grand Indonesia 購物城</h4>
				<p>這家高端商場以一系列豪華品牌商店縱容你，你絕對能體驗完美的一天購物。雅加達市中心的這家大商場有很多設施如自動提款機中心、兌換商、超市和各種餐館，讓購物更加方便。</p>
			</div>
            <div class="item">
				<div><img src="images/banner_b_1.jpg"></div>
				<h4>安佐爾夢幻公園 (Dunia Fantasi)</h4>
				<p>安佐爾夢幻公園位於雅加達市區北端，緊靠雅加達海灣。園內建有新型設計的大旅館、露天電影院、兒童娛樂場等。安佐爾夢幻公園內還建有別墅區，具有典型的印尼民族特色。</p>
			</div>
            <div class="item">
				<div><img src="images/josef-panuksmo-4-7He9_9S_k-unsplash.jpg"></div>
				<h4>縮影公園 (Taman Mini Indonesia Indah)</h4>
				<p>又稱“迷你公園”，也有的稱它為“縮影國”，園內建有博物館、圖書館、影像中心、少年宮和兒童樂園，青少年可定期到公園學習傳統音樂和舞蹈。</p>
			</div>
            <div class="item">
				<div><img src="images/yusron-el-jihan-tkLO_QIZU5o-unsplash.jpg"></div>
				<h4>雅加達聖母升天主教座堂 (Jakarta Cathedral)</h4>
				<p>是雅加達的地標建築之一，採用的是當時盛行的新歌德建築風格，外觀十分漂亮，帶著歐式建築的優雅。教堂不是很大，但給人別有情調的感覺，時常看到西人、信徒在裡面舉行婚禮。</p>
			</div>
			<div class="item">
				<div><img src="images/damar-handyanjaya-UGkh7W3nWDg-unsplash.jpg"></div>
				<h4>傳統市場淘寶 (Indonesia Market)</h4>
				<p>印尼的傳統市場是尋覓當地文化最好的去處，有假日和平日之分，因此也會有不同的活動，蔬果、遊樂設施、鍋碗瓢盆、小吃好料都不能錯過。</p>
			</div>
		</div>
		<div class="phone">
            <div class="item">
				<h4>舊城區 (Kota Jakarta)</h4>
				<p>是荷蘭人統治時代的行政中心，沿途有Mindori Musuem與Bank Indonesia Musuem等前荷蘭人時期的銀行總行改建成的博物館，裡面有以前老銀行總行地下的大型金庫！</p>
			</div>
            <div class="item">
				<div><img src="images/jernej-graj-Qjg_-iRJkqw-unsplash.jpg"></div>
				<h4>千島群島 (Kepulauan Seribu Regency)</h4>
				<p>千島群島位於當地著名的千島區。在這裡可以加入很多水上活動。重點是，可以好好放鬆。有優美的風景，清澈的水質，是潛水愛好者的天堂。</p>
			</div>
            <div class="item">
				<div><img src="images/mountain_3_1.jpg"></div>
				<h4>獨立廣場 (Medan Merdeka)</h4>
				<p>獨立廣場位於雅加達中區，又稱莫迪卡廣場。以印尼人民英雄紀念碑為中心，廣場北邊是總統府，西街上有國防部大院和中央博物館，東邊是Gambir火車站。</p>
			</div>
            <div class="item">
				<div><img src="images/zalfa-imani-3hxlxmo2Oc0-unsplash.jpg"></div>
				<h4>國家博物館 (National Museum)</h4>
				<p>印尼國家博物館是一座歐式的白色建築，館前草坪石墩上立有一座銅大象，是暹羅王拉瑪五世來訪時所贈，故印尼國家博物館又稱“大象博物館”或“象屋”。</p>
			</div>
            <div class="item">
				<div><img src="images/banner_b_2.jpg"></div>
				<h4>大清真寺 (Istiqlal Mosque)</h4>
				<p>東南亞最大的清真寺，位在獨立廣場的東北方，會有住持跟各位講解動線，並在專人的陪同下，從二樓上觀看整個清真寺內部，若體力不錯可以在參觀完中央的摩納斯紀念塔。</p>
			</div>
            <div class="item">
				<div><img src="images/dias-saa3uVuKJrE-unsplash.jpg"></div>
				<h4>Grand Indonesia 購物城</h4>
				<p>這家高端商場以一系列豪華品牌商店縱容你，你絕對能體驗完美的一天購物。雅加達市中心的這家大商場有很多設施如自動提款機中心、兌換商、超市和各種餐館，讓購物更加方便。</p>
			</div>
            <div class="item">
				<div><img src="images/banner_b_1.jpg"></div>
				<h4>安佐爾夢幻公園 (Dunia Fantasi)</h4>
				<p>安佐爾夢幻公園位於雅加達市區北端，緊靠雅加達海灣。園內建有新型設計的大旅館、露天電影院、兒童娛樂場等。安佐爾夢幻公園內還建有別墅區，具有典型的印尼民族特色。</p>
			</div>
            <div class="item">
				<div><img src="images/josef-panuksmo-4-7He9_9S_k-unsplash.jpg"></div>
				<h4>縮影公園 (Taman Mini Indonesia Indah)</h4>
				<p>又稱“迷你公園”，也有的稱它為“縮影國”，園內建有博物館、圖書館、影像中心、少年宮和兒童樂園，青少年可定期到公園學習傳統音樂和舞蹈。</p>
			</div>
            <div class="item">
				<div><img src="images/yusron-el-jihan-tkLO_QIZU5o-unsplash.jpg"></div>
				<h4>雅加達聖母升天主教座堂 (Jakarta Cathedral)</h4>
				<p>是雅加達的地標建築之一，採用的是當時盛行的新歌德建築風格，外觀十分漂亮，帶著歐式建築的優雅。教堂不是很大，但給人別有情調的感覺，時常看到西人、信徒在裡面舉行婚禮。</p>
			</div>
			<div class="item">
				<div><img src="images/damar-handyanjaya-UGkh7W3nWDg-unsplash.jpg"></div>
				<h4>傳統市場淘寶 (Indonesia Market)</h4>
				<p>印尼的傳統市場是尋覓當地文化最好的去處，有假日和平日之分，因此也會有不同的活動，蔬果、遊樂設施、鍋碗瓢盆、小吃好料都不能錯過。</p>
			</div>
		</div>	
	</div>
</div>
<div class="content full-width clearfix">
	<div class="fixed-width">
		<h2><b>請選擇以下兩種行程</b></h2>
		<p>選擇完請提交並送出</p>
		<div class="item">
			<form action="choice.php" method="post">
				<label for="choice"><h2>海島漫步</h2></label><br>
				<input type="radio" id="A" name="choice" value="A"><label for="A"><h4>海島漫步</h4></label><br>
				<input type="radio" id="B" name="choice" value="B"><label for="B"><h4>城街走訪</h4></label><br>
				<input type="submit" name= "insert" >
			</form>
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
				<li><a href="sign_up.html">馬上註冊</a></li>
				<li><a href="login.html">馬上登入</a></li>
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















