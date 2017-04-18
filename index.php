<?php 
	include "config/koneksi.php"; 
	session_start();
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="CV Cerdas Group Ahlinya Sedot WC. Kami perusahaan berpengalaman selama hampir 10 tahun dengan banyak cabang biberbagai daerah (Bandar Lampung, Jambi, Pekan Baru, Karawang, Sidempuan, dll.) dan jumlah armada yang memadai. Segera hubungi kami jika wc anda bermasalah, karena hanya kami yang mengerti. Anda telepon maka kami akan segera datang tanpa menunggu lama. \"Profesionalisme Perwujudan Tanggung Jawab\" Kami tahu bahwa ketika masyarakat memilih kami sebagai solusi dalam persoalan wc penuh atau mampet yang mereka alami, hal oini merupakan tanggung jawab yang harus kami selesaikan dengan penuh tanggung jawab. ">
    <meta name="author" content="cv. cerdas grup">
    <meta name="keyword" content="Sedot Wc, Bandar Lampung, Lampung, Jambi, Pekan Baru, Karawang, Sidempuan, CV. Cerdas Group, Ahlinya Sedot WC, WC , Sedot WC Lampung">

    <title>Sedot WC - Cerdas Group -</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom Google Web Font -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!--<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>-->
	<!--<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>-->
	
    <!-- Custom CSS-->
    <link href="css/general.css" rel="stylesheet">
	
	 <!-- Owl-Carousel -->
    <link href="css/custom.css" rel="stylesheet">
	<link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="css/magnific-popup.css"> 
	
	<script src="js/modernizr-2.8.3.min.js"></script>  <!-- Modernizr /-->
	<!--[if IE 9]>
		<script src="js/PIE_IE9.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="js/PIE_IE678.js"></script>
	<![endif]-->

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->
	<style type="text/css">
		.fit-view{
			width: 100%;
			height: 100vh;
			object-fit: cover;
			background-position: center center;
			background-repeat: no-repeat;
			overflow: hidden;
		}
	</style>

</head>

<body id="home">
	<?php
		if(isset($_GET['cmd'])){
			if($_GET['cmd'] == "login"){
				include "config/login.php";
				exit();
			}elseif($_GET['cmd'] == "logout"){
				include "config/logout.php";
				exit();
			}elseif($_GET['cmd'] == "home"){
			}
		}
	?>
	<!-- Preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	
	<!-- FullScreen -->
    <div id="carousel-id" class="carousel slide" data-ride="carousel">
    	<ol class="carousel-indicators">
    		<li data-target="#carousel-id" data-slide-to="0" class="active"></li>
    		<li data-target="#carousel-id" data-slide-to="1" class=""></li>
    		<li data-target="#carousel-id" data-slide-to="2" class=""></li>
    	</ol>
    	<div class="carousel-inner" >
    		<div class="item active" >
    			<center><img class="fit-view" alt="First slide" src="img/slider/intro4.jpg"></center>
    			<div class="container">
    				<div class="carousel-caption abcen1">
						<h1 class="h1_home wow fadeIn" data-wow-delay="0.4s">Sedot WC Cerdas Group</h1>
						<h3 class="h3_home wow fadeIn" data-wow-delay="0.6s">Kami Memberikan Harga Yang Sangat Terjangkau</h3>
						<div class="col-xs-12 text-center abcen wow fadeIn animated animated" style="visibility: visible;">
							<div class="button_down "> 
								<a class="imgcircle wow bounceInUp animated animated" data-wow-duration="1.5s" href="#profil" style="visibility: visible; animation-duration: 1.5s;"> <img class="img_scroll" src="img/icon/circle.png" alt=""> </a>
							</div>
						</div>
    				</div>
    			</div>
    		</div>
    		<div class="item" >
    			<center><img class="fit-view" alt="Second slide" src="img/slider/2.jpg"></center>
    			<div class="container">
    				<div class="carousel-caption abcen1">
					<h1 class="h1_home wow fadeIn" data-wow-delay="0.4s">Sedot WC Cerdas Group</h1>
						<h3 class="h3_home wow fadeIn" data-wow-delay="0.6s">Kami Memberikan Harga Yang Sangat Terjangkau</h3>
						<div class="col-xs-12 text-center abcen wow fadeIn animated animated" style="visibility: visible;">
							<div class="button_down "> 
								<a class="imgcircle wow bounceInUp animated animated" data-wow-duration="1.5s" href="#whatis" style="visibility: visible; animation-duration: 1.5s;"> <img class="img_scroll" src="img/icon/circle.png" alt=""> </a>
							</div>
						</div>
    				</div>
    			</div>
    		</div>
    		<div class="item" >
    			<center><img class="fit-view" alt="Third slide" src="img/slider/3.jpg"></center>
    			<div class="container">
    				<div class="carousel-caption abcen1">
						<h1 class="h1_home wow fadeIn" data-wow-delay="0.4s">Sedot WC Cerdas Group</h1>
						<h3 class="h3_home wow fadeIn" data-wow-delay="0.6s">Kami Memberikan Harga Yang Sangat Terjangkau</h3>
						<div class="col-xs-12 text-center abcen wow fadeIn animated animated" style="visibility: visible;">
							<div class="button_down "> 
								<a class="imgcircle wow bounceInUp animated animated" data-wow-duration="1.5s" href="#whatis" style="visibility: visible; animation-duration: 1.5s;"> <img class="img_scroll" src="img/icon/circle.png" alt=""> </a>
							</div>
						</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

	
	<!-- NavBar-->
	<nav class="navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#home">Sedot WC - Cerdas Group</a>
			</div>

			<div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					
					<li class="menuItem"><a href="#profil">Profil</a></li>
					<li class="menuItem"><a href="#visi">Visi</a></li>
					<li class="menuItem"><a href="#misi">Misi</a></li>
					<li class="menuItem"><a href="#galeri">Galeri</a></li>
					<li class="menuItem"><a href="#jangkauan">Jangkauan</a></li>
					<li class="menuItem"><a href="#contact">Kontak</a></li>
					<?php
					if(isset($_SESSION['username'])){
						echo'
						<li class="dropdown">
	                        <a class="page-scroll dropdown-toggle" data-toggle="dropdown" href="javascript:;">Admin<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="admin/?data=user" style="color: #555">Ganti Password</a></li>
                                <li><a href="?cmd=logout" style="color: #555">Logout</a></li>
                            </ul>
	                    </li>
						';
					}
					?>
				</ul>
			</div>
		</div>
	</nav> 
	
	<?php
		$profil = getProfil();
	?>

	<!-- What is -->
	<div id="profil" class="content-section-b" style="border-top: 0">
		<div class="container">
			<center><div class="col-md-12 col-md-offset-3 text-center wrap_title" style="margin-left:0px;">
				<h2>Profil</h2>
				<p class="lead" style="margin-top:0">CV Cerdas Group Ahlinya Sedot WC</p>
			</div>
			</center>

			<div class="row lead">
				<?php echo $profil['detail_profil']; ?>
				<!--<img src="<?php echo "img/galeri/profil/".$profil['foto_profil']; ?>" class="col-md-12 img-responsive img-rounded" style="padding-right: 0px; padding-left: 0px;">-->
			</div><!-- /.row -->
		</div>
	</div>
	
	<!-- Use it -->
    <div id ="visi" class="content-section-a">
        <div class="container">
            <div class="row">
				<div class="col-sm-6 pull-right wow fadeInRightBig">
                    <img class="img-responsive img-rounded" src="<?php echo "img/galeri/profil/".$profil['foto_visi']; ?>" alt="">
                </div>
                <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
                    <h2 class="section-heading">Visi</h2>
					<div class="lead">Visi kami dalam mewujudkan cita-cita perusahaan ini yaitu: </div>
                    <p class="lead">
						<?php echo $profil['visi']; ?>
					</p>
				</div>   
            </div>
        </div>
        <!-- /.container -->
    </div>

    <div id="misi" class="content-section-b"> 
		<div class="container">
            <div class="row">
                <div class="col-sm-6 pull-left wow fadeInRightBig">
                    <img class="img-responsive img-rounded" src="<?php echo "img/galeri/profil/".$profil['foto_misi']; ?>" alt="">
                </div>
                <div class="col-sm-6 wow fadeInRightBig"  data-animation-delay="200">   
                    <h2 class="section-heading">Misi</h2>
					<div class="sub-title lead">Misi kami dalam mewujudkan cita-cita perusahaan ini yaitu: </div>
                    <p class="lead">
						<?php echo $profil['misi']; ?>
					</p>
				</div>  			
			</div>
        </div>
    </div>

	<!--Pelayanan-->
    <div class="content-section-c">
        <div class="container">
             <div class="row">
                <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
                    <h2 class="section-heading white">Pelayanan</h2>
                    <p class="lead white">Kami CV Cerdas Group merupakan perusahaan yang secara khusus menangani masalah-masalah antara lain:
					</p>
					<ul class="descp lead2 white">
						<li><i class="glyphicon glyphicon-check"></i> Penyedotan wc / tinja rumah tangga & Industri</li>
						<li><i class="glyphicon glyphicon-check"></i> Penyedotan limbah industri</li>
						<li><i class="glyphicon glyphicon-check"></i> Penyedotan air kotor</li>
						<li><i class="glyphicon glyphicon-check"></i> Pengurasan air sumur</li>
						<li><i class="glyphicon glyphicon-check"></i> Pelancaran wc / kloset tersumbat</li>
						<li><i class="glyphicon glyphicon-check"></i> Dan lain-lain.</li>
					</ul>
					<p><a class="btn btn-embossed btn-info" href="#contact" role="button"><i class="fa fa-phone"></i> Hubungi Kami</a></p>
				</div>    
				<div class="col-sm-6 wow fadeInRightBig white">
					<br/><br/>
                    <iframe class="img-rounded" width="560" height="400" src="https://www.youtube.com/embed/yaowjxs2K0g" frameborder="0" allowfullscreen></iframe>
                </div>       
            </div>
        </div>
    </div>
    <?php
    	$galeri = getGaleri();
    	//$galeri = PdoQuery("SELECT foto FROM galeri");
    	//while($gal = $galeri->fetch(PDO::FETCH_ASSOC)) { echo "$gal[foto]";}
    ?>
	<!-- Screenshot -->
	<div id="galeri" class="content-section-b">
        <div class="container">
          <div class="row" >
			 <div class="col-md-6 col-md-offset-3 text-center wrap_title ">
				<h2>Galeri</h2>
				<p class="lead" style="margin-top:0">Galeri Perusahaan CV Cerdas Group.</p>
			 </div>
		  </div>
		    <div class="row wow bounceInUp" >
				<div id="owl-demo" class="owl-carousel">
					<?php while($gal = $galeri->fetch(PDO::FETCH_ASSOC)) { ?>
						<a href="<?php echo 'img/galeri/'.$gal['foto']; ?>" class="image-link">
							<div class="item">
								<img  class="img-responsive img-rounded" style="object-fit:cover; width:100%; height:678px;" src="<?php echo 'img/galeri/'.$gal['foto']; ?>" alt="Owl Image">
							</div>
						</a>
					<?php  } ?>
				</div>       
			</div>
        </div>
	</div>

	<!-- jangkauan -->
	<div id="jangkauan" class="content-section-a">
		<div class="container">
			<div class="row">
			
			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Jangkauan</h2>
				<p class="lead" style="margin-top:0">Dapat melayani disegala jangkauan.</p>
			 </div>
			 
				<div class="col-sm-6  block wow bounceIn">
					<div class="row">
						<div class="col-md-4 box-icon rotate"> 
							<i class="fa fa-building-o fa-4x "> </i> 
						</div>
						<div class="col-md-8 box-ct">
							<h3> Perkantoran </h3>
							<p> Dari perkantoran biasa hingga perkantoran gedung bertingkat kami siap melayani anda.</p>
						</div>
				  </div>
			  </div>
			  <div class="col-sm-6 block wow bounceIn">
					<div class="row">
					  <div class="col-md-4 box-icon rotate"> 
						<i class="fa fa-hospital-o fa-4x "> </i> 
					  </div>
					  <div class="col-md-8 box-ct">
						<h3> Rumah Sakit </h3>
						<p> Kebersihan merupakan salah satu kunci kesehatan baik itu untuk pasien maupun dokter rumah sakit.</p> 
					  </div>
					</div>
			  </div>
		  </div>
		  
		  <div class="row tworow">
				<div class="col-sm-6  block wow bounceIn">
					<div class="row">
						<div class="col-md-4 box-icon rotate"> 
							<i class="fa fa-home fa-4x "> </i> 
						</div>
						<div class="col-md-8 box-ct">
							<h3> Perumahan </h3>
							<p> Wc rumah anda mampet ? segerah hubungi kami maka kami akan dengan cepat menanganinya.</p>
						</div>
				  </div>
			  </div>
			  <div class="col-sm-6 block wow bounceIn">
					<div class="row">
					  <div class="col-md-4 box-icon rotate"> 
						<i class="fa fa-globe fa-4x "> </i> 
					  </div>
					  <div class="col-md-8 box-ct">
						<h3> Dan Lain Lain</h3>
						<p> Sekolah, pabrik, hotel, restoran, dll.</p> 
					  </div>
					</div>
			  </div>
		  </div>
		</div>
	</div>
	
	<!-- Contact -->
	<?php 
		$kontak = getKontak();
	?>
	<div id="contact" class="content-section-a">
		<div class="container">
			<div class="row">
			
			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Kontak Kami</h2>
				<p class="lead" style="margin-top:0">Kami akan menanggapi dengan cepat.</p>
			</div>
			<div class="col-md-6">
				<iframe class="img-rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.3773424128985!2d105.26081711476498!3d-5.359259896112551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40c528a740f285%3A0xb978557697fb5d2a!2sPerumahan+Panorama+Alam!5e0!3m2!1sen!2sid!4v1491218006815" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>					
				</iframe>
			</div>	
			<hr class="featurette-divider hidden-lg">
				<div class="col-md-5 col-md-push-1 address">
					<address>
					<h3>Lokasi Perusahaan</h3>
					<p class="lead"><a href="https://goo.gl/maps/oViYdcNcSWn" target="_blank">
						<?php echo $kontak['kontak']; ?>
					</p>
					</address>
				</div>
			</div>
		</div>
	</div>
	<footer>
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h3 class="footer-title">CV. Cerdas Grup</h3>
			
			<!-- LICENSE -->
			Desain By <a rel="cc:attributionURL" href="http://www.andreagalanti.it/flatfy" property="dc:title">Flatfy Theme </a> by
		   <a rel="dc:creator" href="http://www.andreagalanti.it" property="cc:attributionName">Andrea Galanti</a>
		   is licensed to the publi under 
		   <br>the <a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/it/deed.it">Creative
		   Commons Attribution 3.0 LicenseL</a>.
              <p class="footer-title">Deveplover By <a href="http://suntech.id">Suntech.id</a></p>
		   
	   
          </div> <!-- /col-xs-7 -->

          <div class="col-md-5">
            <div class="footer-banner">
            </div>
          </div>
        </div>
      </div>
    </footer>
	
	
    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/script.js"></script>
	<!-- StikyMenu -->
	<script src="js/stickUp.min.js"></script>
	<script type="text/javascript">
	  jQuery(function($) {
		$(document).ready( function() {
		  $('.navbar-default').stickUp();
		});
	  });
	</script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="js/jquery.corner.js"></script> 
	<script src="js/wow.min.js"></script>
	<script>
	 new WOW().init();
	</script>
	<script src="js/classie.js"></script>
	<script src="js/uiMorphingButton_inflow.js"></script>
	<!-- Magnific Popup core JS file -->
	<script src="js/jquery.magnific-popup.js"></script> 
</body>

</html>

<?php 
	function getProfil(){
		$sql_profil = "SELECT *FROM profil ORDER BY id_profil DESC LIMIT 1";
		$profil = PdoSelect($sql_profil);

		return $profil;
	}

	function getGaleri(){
		$sql_galeri = "SELECT foto FROM galeri ORDER BY id_galeri DESC";
		$galeri = PdoQuery($sql_galeri);

		return $galeri;
	}

	function getSlider(){
		$sql_slider = "SELECT foto FROM galeri WHERE slider = '1' ORDER BY id_galeri DESC";
		$slider = PdoQuery($sql_slider);

		return $slider;
	}

	function getKontak(){
		$sql_kontak = "SELECT *FROM kontak ORDER BY id_kontak DESC LIMIT 1";
		$kontak = PdoSelect($sql_kontak);

		return $kontak;
	}
?>
