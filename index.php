<?php include 'webkartali/webkartali.php';

$sorgu_blog_konu = $connn->prepare("SELECT * FROM blog_konulari ORDER BY RAND() LIMIT 4");
$sorgu_blog_konu->execute();

// yazı kısaltma fonksiyonu
function kisalt($kelime, $uzunluk, $son="...."){
 $say = strlen($kelime); // harfleri saydık
 if($say > $uzunluk){ // uzunluk değşkeninden uzun ise;
 $yeni = substr($kelime,0,$uzunluk); // büyük olduğunda parçaldık
 $yeni .= $son; // kelimenin sonuna ekledik.
 }elseif(($say == $uzunluk) or ($say < $uzunluk)){ // küçük yada eşit ise;
 $yeni = $kelime; // değişiklilk yapma
 }
 return $yeni;
}

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>WebKartalı | Yazılım</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="color/default.css" rel="stylesheet">
<link rel="shortcut icon" href="img/favicon.ico">
</head>
<body>

<?php 
include 'navbar.php';
 ?>

<!-- Header area -->
<div id="header-wrapper" class="header-slider">
	<header class="clearfix">
		<center>
			<div class="logo">
				<img src="img/logo-image.png" alt="webkartali.com" />
			</div>
		</center>
	<div class="container">
		<div class="row">
			<div class="span12">
				<div id="main-flexslider" class="flexslider">
					<ul class="slides">
						<li>
						<p class="home-slide-content">
							<strong>WEB YAZILIM</strong> ÇÖZÜMLERİ
						</p>
						</li>
						<li>
						<p class="home-slide-content">
							<strong>WEB TASARIM</strong> HİZMETLERİ
						</p>
						</li>
						<li>
						<p class="home-slide-content">
							<strong>ÜCRETSİZ</strong> SCRİPTLER
						</p>
						</li>
						<li>
						<p class="home-slide-content">
							KALİTELİ <strong>HİZMET</strong> 
						</p>
						</li>
						<li>
						<p class="home-slide-content">
							MÜŞTERİ <strong>MEMNUNİYETİ</strong> 
						</p>
						</li>
					</ul>
				</div>
				<!-- end slider -->
			</div>
		</div>
	</div>
	</header>
</div>
<!-- spacer section -->
<section class="spacer green">
<div class="container">
	<div class="row">
		<div class="span6 alignright flyLeft">
			<blockquote class="large">
				 Siz hayal edin...<br> Biz istekleriniz doğrultusunda kod yazalım.. <cite>Çok Kahve, Çok KOD</cite>
			</blockquote>
		</div>
		<div class="span6 aligncenter flyRight">
			<i class="icon-coffee icon-10x"></i>
		</div>
	</div>
</div>
</section>
<!-- end spacer section -->
<!-- section: team -->
<section id="about" class="section">
<div class="container">
	<h4>Biz Kimiz ¿</h4>
	<div class="row">
		<div class="span4 offset1">
			<div>
				<h2>Web Kartalı <strong>Yazılım</strong></h2>
				<p>
					Web tabanlı uygulamalar geliştiren  <strong>Web Kartalı</strong> yazılım ekibi, müşterilerine daha kaliteli, hızlı ve güvenli hizmetler sunmak adına, sektörde emin adımlarla çalışmalarına devam etmektedir. <strong>5. Yılına</strong> giren <strong>Web Kartalı</strong> Kurumsal ve Bireysel bir çok yazılım projesinde bulunarak, yüksek düzeyde müşteri memnuneyeti sağlamıştır. 
				</p>
			</div>
		</div>
		<div class="span6">
			<div class="aligncenter">
				<img src="img/icons/creativity.png" alt="" />
			</div>
		</div>
	</div>
	<div class="row">
		<div class="span2 offset1 flyIn">
			<div class="people">
				<img class="team-thumb img-circle" src="img/team/img-1.jpg" alt="" />
				<h3>Yönetici</h3>
				<p>
					Yazılım<br>Koordinatör
				</p>
			</div>
		</div>
		<div class="span2 flyIn">
			<div class="people">
				<img class="team-thumb img-circle" src="img/team/img-3.jpg" alt="" />
				<h3>Yazılım</h3>
				<p>
					Php, JavaScript<br>
					Html5, Css3
				</p>
			</div>
		</div>
		<div class="span2 flyIn">
			<div class="people">
				<img class="team-thumb img-circle" src="img/team/img-2.jpg" alt="" />
				<h3>Yazılım</h3>
				<p>
					Müşteri<br>
					Destek
				</p>
			</div>
		</div>
		<div class="span2 flyIn">
			<div class="people">
				<img class="team-thumb img-circle" src="img/team/img-4.jpg" alt="" />
				<h3>Grafik</h3>
				<p>
					Web Arayüz<br>Logo Tasarım
				</p>
			</div>
		</div>
		<div class="span2 flyIn">
			<div class="people">
				<img class="team-thumb img-circle" src="img/team/img-5.jpg" alt="" />
				<h3>Veritabanı</h3>
				<p>
					MSSQL, MySQL<br>Oracle
				</p>
			</div>
		</div>
	</div>
</div>
<!-- /.container -->
</section>
<!-- end section: team -->
<!-- section: services -->
<section id="services" class="section green">
<div class="container">
	<h4>Hizmetlerimiz</h4>
	<!-- Four columns -->
	<div class="row">
		<div class="span3 animated-fast flyIn">
			<div class="service-box">
				<img src="img/icons/laptop.png" alt="" height="160" width="160" />
				<h2>Web Tasarım</h2>
				<p>
					 Kurumsal veya Bireysel Web sitelerinizi, Mobil uyumlu olarak kodlayıp en kısa sürede teslim ediyoruz. Sitenizin güvenliği, kalitesi ve sizlerin memnuniyeti bizler için ön planda.
				</p>
			</div>
		</div>
		<div class="span3 animated flyIn">
			<div class="service-box">
				<img src="img/icons/lab.png" alt="" height="170" width="160" />
				<h2>Web Uygulama</h2>
				<p>
					 İstekleriniz doğrultusunda web tabanlı uygulamalarınızı, uygun sürelerde yaparak teslim ediyoruz. Yapmış olduğumuz uygulamalar için ücretsiz 1 yıllık teknik destek hizmeti de sağlıyoruz. 
				</p>
			</div>
		</div>
		<div class="span3 animated-fast flyIn">
			<div class="service-box">
				<img src="img/icons/camera.png" alt="" height="170" width="160" />
				<h2>Ücretsizler Kodladık</h2>
				<p>
					 Siz değerli takipçiler ve müşterilerimiz için ücretsiz olarak kodladığımız tüm hizmetleri bu başlık altında takip edebilir, uygulamaları temin edebilirsiniz.
				</p>
			</div>
		</div>
		<div class="span3 animated-slow flyIn">
			<div class="service-box">
				<img src="img/icons/basket.png" alt="" height="150" width="150" />
				<h2>Ücretli Uygulamalar</h2>
				<p>
					 Tasarım ve Kodlamaları bir bütün olarak Web Kartalı'na ait olan ÜCRETLİ olarak satışa sunduğumuz uygulama vb. scriptler hizmetinizdedir.
				</p>
			</div>
		</div>
	</div>
</div>
</section>
<!-- end section: services -->
<!-- section: works -->
<section id="works" class="section">
<div class="container clearfix">
	<h4>Çalışmalarımız</h4>
	<!-- portfolio filter -->
	<div class="row">
		<div id="filters" class="span12">
			<ul class="clearfix">
				<li><a href="#" data-filter="*" class="active">
				<h5>Tümü</h5>
				</a></li>
				<li><a href="#" data-filter=".web">
				<h5>Ücretsiz</h5>
				</a></li>
				<li><a href="#" data-filter=".print">
				<h5>Ücretli</h5>
				</a></li>
				<li><a href="#" data-filter=".design">
				<h5>Özel</h5>
				</a></li>
				<li><a href="#" data-filter=".photography">
				<h5>Diğerleri..</h5>
				</a></li>
			</ul>
		</div>
		<!-- END PORTFOLIO FILTERING -->
	</div>
	<div class="row">
		<div class="span12">
			<div id="portfolio-wrap">
				<!-- portfolio item -->
				<div class="portfolio-item grid print photography">
					<div class="portfolio">
						<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/1.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Örnek Uygulama</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- portfolio item -->
				<div class="portfolio-item grid print design web">
					<div class="portfolio">
						<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/2.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Örnek Uygulama</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- portfolio item -->
				<div class="portfolio-item grid print design">
					<div class="portfolio">
						<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/3.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Örnek Uygulama</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- portfolio item -->
				<div class="portfolio-item grid photography web">
					<div class="portfolio">
						<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/4.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Örnek Uygulama</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- portfolio item -->
				<div class="portfolio-item grid photography web">
					<div class="portfolio">
						<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/5.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Örnek Uygulama</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- portfolio item -->
				<div class="portfolio-item grid photography web">
					<div class="portfolio">
						<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/6.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Örnek Uygulama</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- portfolio item -->
				<div class="portfolio-item grid photography web">
					<div class="portfolio">
						<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/7.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Örnek Uygulama</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- portfolio item -->
				<div class="portfolio-item grid photography">
					<div class="portfolio">
						<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/8.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Örnek Uygulama</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- portfolio item -->
				<div class="portfolio-item grid photography web">
					<div class="portfolio">
						<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/9.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Örnek Uygulama</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- portfolio item -->
				<div class="portfolio-item grid design web">
					<div class="portfolio">
						<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/10.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Örnek Uygulama</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
			</div>
		</div>
	</div>
</div>
</section>
<!-- spacer section -->
<section class="spacer bg3">
<div class="container">
	<div class="row">
		<div class="span12 aligncenter flyLeft">
			<blockquote class="large">
				 Teknolojiye ayak uydurmak akıntıya karşı yüzmektir.<br>
				 Şimdi koşmanın, uçmanın tam vakti...
			</blockquote>
		</div>
		<div class="span12 aligncenter flyRight">
			<i class="icon-rocket icon-10x"></i>
		</div>
	</div>
</div>
</section>
<!-- end spacer section -->
<!-- section: blog -->
<section id="blog" class="section">
<div class="container">
	<h4>Güncel Blog</h4>
	<!-- Three columns -->
	<div class="row">
		
<?php


while($sorgu_blog_konu_ayrs=$sorgu_blog_konu->fetch(PDO::FETCH_ASSOC)) {
		echo '<div class="span3">
			<div class="home-post">
				<div class="post-image">
					<img class="max-img" src="'.$sorgu_blog_konu_ayrs['blgkonu_resim'].'" alt="" />
				</div>
				<div class="post-meta">
					<i class="icon-file icon-2x"></i>
					<span class="date">'.$sorgu_blog_konu_ayrs['blgkonu_yaz_tarihi'].'</span>
					<span class="tags">'.$sorgu_blog_konu_ayrs['blgkonu_yazan'].'</span>
				</div>
				<div class="entry-content">
					<h5><strong>'.$sorgu_blog_konu_ayrs['blgkonu_baslik'].'</strong></h5>
					<p>
						'.kisalt($sorgu_blog_konu_ayrs['blgkonu_icerik'], 20).' &hellip;
					</p>
					<a href="Blog-Konu/'.$sorgu_blog_konu_ayrs['blgkonu_id'].'" class="more">Yazının Devamı..</a>
				</div>
			</div>
		</div>';
}

?>
		


	</div>
	<div class="blankdivider30"></div>
	<div class="aligncenter">
		<a href="blog.php" class="btn btn-large btn-theme">Tüm Blog Yazıları</a>
	</div>
</div>
</section>

<!-- end spacer section -->
<!-- section: contact -->
<section id="contact" class="section green">
<div class="container">
	<h4>İletişim</h4>
	<p>
		 - Yeni bir Web sitesine, Web tabanlı yazılıma mı ihtiyacınız var ?<br> 
		 - Daha önce kodlamış olduğumuz bir uygulama hakkında öneri, eleştiri veya sorunuz mu var ?<br>
		 - Hayata geçirmek istediğiniz bir projeniz mi var ?<br><br> 

		 İrtibat da kalalım, <strong>BİZE YAZIN</strong>..
	</p>
	<div class="blankdivider30">
	</div>
	<div class="row">
		<div class="span12">
			<div class="cform" id="contact-form">
				
				<form action="iletisimformu.php" method="post">
					<div class="row">
						<div class="span6">
							<div class="field your-name form-group">
								<input type="text" name="adsoyad" placeholder="Adınız" autocomplete="off"/>
							</div>
							<div class="field your-email form-group">
								<input type="text" name="email" placeholder="Mail Adresiniz" autocomplete="off"/>
							</div>
							<div class="field subject form-group">
								<input type="text" name="subject" placeholder="Konu Başlığı" autocomplete="off"/>
							</div>
						</div>
						<div class="span6">
							<div class="field message form-group">
								<textarea name="message" rows="5"></textarea>
							</div>
							<input type='hidden' name='tarih' value='<?php echo date("Y-m-d"); ?>'>
							<input type="submit" value="Gönder" class="btn btn-theme pull-left">
						</div>
					</div>
				</form>
<?php 
$gelen = strip_tags(@$_GET['snc']);

if ($gelen=='3') {
	echo "<b>Hatalı</b>, veya <b>Eksik</b> bilgi girişi..!";
	
} else if ($gelen=='1') {
	echo '<b>Mesajınız Gönderildi, Teşekkür Ederiz.</b>';
}else{
	echo " *** ";
}

 ?>


			</div>
		</div>
<!-- ./span12 -->
	</div>
</div>
</section>

<?php 
include 'footer.php';
 ?>


<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
<script src="js/jquery.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/jquery.localscroll-1.2.7-min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/inview.js"></script>
<script src="js/animate.js"></script>
<script src="js/validate.js"></script>
<script src="js/custom.js"></script>


</body>
</html>