<?php

include_once "backend/koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="frontend/img/logo2.png">
	<title>Situs Resmi MAN 2 Yogyakarta</title>

	<link rel="shortcut icon" href="frontend/img/logo2.png">

  <?php include_once "halaman_administrator_bundle_css.php" ?>

	<!-- INDEX -->
	<link href="frontend/tampilan_index/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="frontend/tampilan_index/css/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="frontend/tampilan_index/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="frontend/tampilan_index/css/animate.css" rel="stylesheet" type="text/css" media="all" />
	<link href="frontend/tampilan_index/css/owl.carousel.css" rel="stylesheet">
	<link href="frontend/tampilan_index/css/style.css" rel="stylesheet" type="text/css" />
	<link href="frontend/icon/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
	<!-- END INDEX -->

	<style media="screen">

		/*BACKGROUND CAPTION*/
		.background-caption{
			position: absolute;
			width: 900px;
			height: 170px;
			z-index: 999;
			top: 50%;
			left: 17%;
			margin: -120px 0 0 -150px;
			background: rgba(0, 0, 0, 0.4);
		}
		/*END BACKGROUND CAPTION*/

		.menu_block{
			background-color: #009933;
		}

		.navmenu li:hover a, .navmenu li.active a{
			color:white;
		}
		.flexslider.top_slider .flex-direction-nav li a{
			background-color: #009933;
		}
		.flexslider.top_slider .flex-direction-nav li a::before{
		color:white;
		}

		.top_slider .slide_btn{
			background-color: #009933;
		}
		.top_slider .slide_btn::before{
		color:white;
		}
		.top_slider .slide_btn{
		color:white;
		}

		.navmenu ul li a{
			color: white;
		}
	</style>

	<!-- FONTS -->
	<!-- <link href='frontend/tampilan_index/css/font.css' rel='stylesheet' type='text/css'> -->
  	<!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'> -->


	<!-- SCRIPTS -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->

    <script src="frontend/tampilan_index/js/jquery.min.js" type="text/javascript"></script>
    <script src="frontend/tampilan_index/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="frontend/tampilan_index/js/jquery.prettyPhoto.js" type="text/javascript"></script>
    <script src="frontend/tampilan_index/js/jquery.nicescroll.min.js" type="text/javascript"></script>
    <script src="frontend/tampilan_index/js/superfish.min.js" type="text/javascript"></script>
    <script src="frontend/tampilan_index/js/jquery.flexslider-min.js" type="text/javascript"></script>
    <script src="frontend/tampilan_index/js/owl.carousel.js" type="text/javascript"></script>
    <script src="frontend/tampilan_index/js/animate.js" type="text/javascript"></script>
    <script src="frontend/tampilan_index/js/jquery.BlackAndWhite.js"></script>
    <script src="frontend/tampilan_index/js/myscript.js" type="text/javascript"></script>
    <script>

    	//PrettyPhoto
    	jQuery(document).ready(function() {
    		$("a[rel^='prettyPhoto']").prettyPhoto();
    	});

    	//BlackAndWhite
    	$(window).load(function(){
    		$('.client_img').BlackAndWhite({
    			hoverEffect : true, // default true
    			// set the path to BnWWorker.js for a superfast implementation
    			webworkerPath : false,
    			// for the images with a fluid width and height
    			responsive:true,
    			// to invert the hover effect
    			invertHoverEffect: false,
    			// this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
    			intensity:1,
    			speed: { //this property could also be just speed: value for both fadeIn and fadeOut
    				fadeIn: 300, // 200ms for fadeIn animations
    				fadeOut: 300 // 800ms for fadeOut animations
    			},
    			onImageReady:function(img) {
    				// this callback gets executed anytime an image is converted
    			}
    		});
    	});

    </script>

</head>
<body>

<!-- PRELOADER -->
<img id="preloader" src="images/preloader.gif" alt="" />
<!-- //PRELOADER -->
<div class="preloader_hide">

	<!-- PAGE -->
	<div id="page">

		<!-- HEADER -->
		<header>

			<!-- MENU BLOCK -->
			<div class="menu_block">

				<!-- CONTAINER -->
				<div class="container clearfix">

					<!-- LOGO -->
					<div class="logo pull-left">
						<a href="index.php" class="navbar-brand" style="color:white"><img src="frontend/img/logo2.png" style="width:100px;margin-top:-10px;margin-left:0px;"></a>
					</div><!-- //LOGO -->

					<!-- MENU -->
					<div class="pull-right">
						<nav class="navmenu center">
							<ul>
								<li class="first active scroll_btn"><a href="#home" >Home</a></li>
								<li class="scroll_btn"><a href="#about" >About Us</a></li>
								<li class="scroll_btn"><a href="#news" >News</a></li>
								<li class="scroll_btn last"><a href="#contacts" >Contacts</a></li>
								<li class="scroll_btn last"><a href="halaman_login.php" >Login</a></li>
								<!-- <li class="sub-menu">
									<a href="javascript:void(0);" >Pages</a>
									<ul>
										<li><a href="blog.html" >Blog</a></li>
										<li><a href="blog-post.html" >Blog Post</a></li>
										<li><a href="portfolio-post.html" >Portfolio Single Work</a></li>
									</ul>
								</li> -->
							</ul>
						</nav>
					</div><!-- //MENU -->
				</div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
		</header><!-- //HEADER -->

		<!-- HOME -->
		<section id="home" class="padbot0">

			<!-- TOP SLIDER -->
			<div class="flexslider top_slider">
				<ul class="slides">

					<?php
					$query_data_website_slide1 = "SELECT * from data_website where id_data_website='2'";
					$result_data_website_slide1 = mysqli_query($connect, $query_data_website_slide1);
					$row_data_website_slide1 = mysqli_fetch_array($result_data_website_slide1);
					?>

					<li class="slide1">
						<div class="background-caption">
						</div>
						<div class="flex_caption1" style="color:white;z-index: 1000;margin-top:15px;">
							<p class="title4 captionDelay3 FromBottom" style="font-size:65px;"><?php echo $row_data_website_slide1['judul_konten_slide_data_website'] ?></p>
							<!-- <p class="title1 captionDelay2 FromTop"><?php echo $row_data_website_slide1['judul_konten_slide_data_website'] ?></p>
							<p class="title2 captionDelay4 FromTop">White</p>
							<p class="title3 captionDelay6 FromTop">Templates</p> -->
							<p class="title4 captionDelay7 FromBottom" style="font-size:18.5px;"><?php echo $row_data_website_slide1['isi_konten_slide_data_website'] ?></p>
						</div>
						<a class="slide_btn FromRight" href="javascript:void(0);" >Baca Yuk!</a>
					</li>

					<?php
					$query_data_website_slide2 = "SELECT * from data_website where id_data_website='3'";
					$result_data_website_slide2 = mysqli_query($connect, $query_data_website_slide2);
					$row_data_website_slide2 = mysqli_fetch_array($result_data_website_slide2);
					?>

					<li class="slide2">
						<div class="background-caption">
						</div>
						<div class="flex_caption1" style="color:white;z-index: 1000;margin-top:15px;">
							<p class="title4 captionDelay3 FromLeft" style="font-size:65px;"><?php echo $row_data_website_slide2['judul_konten_slide_data_website'] ?></p>
							<p class="title4 captionDelay7 FromLeft" style="font-size:18.5px;"><?php echo $row_data_website_slide2['isi_konten_slide_data_website'] ?></p>
						</div>
						<a class="slide_btn FromRight" href="javascript:void(0);" >Baca Yuk!</a>
					</li>

					<?php
					$query_data_website_slide3 = "SELECT * from data_website where id_data_website='4'";
					$result_data_website_slide3 = mysqli_query($connect, $query_data_website_slide3);
					$row_data_website_slide3 = mysqli_fetch_array($result_data_website_slide3);
					?>

					<li class="slide3">
						<div class="background-caption">
						</div>
						<div class="flex_caption1" style="color:white;z-index: 1000;margin-top:15px;">
							<p class="title4 captionDelay3 FromLeft" style="font-size:65px;"><?php echo $row_data_website_slide3['judul_konten_slide_data_website'] ?></p>
							<p class="title4 captionDelay7 FromLeft" style="font-size:18.5px;"><?php echo $row_data_website_slide3['isi_konten_slide_data_website'] ?></p>
						</div>
						<a class="slide_btn FromRight" href="javascript:void(0);" >Baca Yuk!</a>

						<!-- VIDEO BACKGROUND -->
						<a id="P2" class="player" data-property="{videoURL:'tDvBwPzJ7dY',containment:'.top_slider .slide3',autoPlay:true, mute:true, startAt:0, opacity:1}" ></a>
						<!-- //VIDEO BACKGROUND -->
					</li>
				</ul>
			</div>

		  <?php
		  $query_data_website_slide1 = "SELECT * from data_website where id_data_website='2'";
		  $result_data_website_slide1 = mysqli_query($connect, $query_data_website_slide1);
		  $row_data_website_slide1 = mysqli_fetch_array($result_data_website_slide1);
		  ?>

			<div id="carousel">
				<ul class="slides">
					<li><img src="frontend/img/profil/<?php echo "gambar_slide_data_website1" ?>" alt="" /></li>
					<li><img src="frontend/img/profil/<?php echo "gambar_slide_data_website2" ?>" alt="" /></li>
					<li><img src="frontend/img/profil/<?php echo "gambar_slide_data_website3" ?>" alt="" /></li>
				</ul>
			</div><!-- //TOP SLIDER -->
		</section><!-- //HOME -->


		<!-- ABOUT -->
		<section id="about">

			<!-- SERVICES -->
			<div class="services_block padbot40" data-appear-top-offset="-200" data-animated="fadeInUp">

				<!-- CONTAINER -->
				<div class="container">

					<!-- ROW -->
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Fasilitas</b> Lengkap	</p>
								<span>Memiliki fasilitas lengkap untuk belajar mengajar dengan berbagai macam kegiatan ektra kurikuler.</span>
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Bakat</b> dan <b>Minat</b></p>
								<span>Kegiatan kesiswaaan yang mendukung pendidikan dan pembentukan karakter siswa yang tagwa, mandiri, berprestasi, inovatif berwawasan lingkungan dan Islami.</span>
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Akreditasi A</b></p>
								<span>MAN 2 Yogyakarta telah mendapatkan akreditasi “A” sehingga siswa dan orangtua siswa tidak perlu khawatir tentang kualitas pendidikan dan proses belajar mengajar sekolah ini.</span>
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Kerajinan</b> dari <b>Barang Bekas</b></p>
								<span>Guru dan siswa bersama-sama berpartisipasi dalam pengolahan sampah menjadi bahan yang dapat digunakan kembali.</span>
							</a>
						</div>
					</div><!-- //ROW -->
				</div><!-- //CONTAINER -->
			</div><!-- //SERVICES -->

			<!-- CLEAN CODE -->
			<div class="cleancode_block">

				<!-- CONTAINER -->
				<div class="container" data-appear-top-offset="-200" data-animated="fadeInUp">

					<!-- CASTOM TAB -->
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active clearfix" id="tab2">
							<p class="title"><b>Technical</b> Support</p>
							<span>Kami mencoba untuk membuat produk dengan kualitas yang bagus, sehingga website akan terasa berisi dan tidak monoton.</span>
						</div>
						<div class="tab-pane fade clearfix" id="tab3">
							<p class="title"><b>Responsive</b></p>
							<span>Website ini sudah mendukung fitur responsif, dimana PC, Laptop, Tablet dan Smartphone dapat mengakses website tersebut dengan tampilan yang telah disesuaikan resolusinya.</span>
						</div>
						<div class="tab-pane fade clearfix" id="tab5">
							<p class="title"><b>Quality</b></p>
							<span>Teknologi yang kami pakai untuk membangun website ini yaitu dengan mengkombinasikan beberapa fitur yang handal.</span>
						</div>
					</div>
					<ul id="myTab" class="nav nav-tabs">
						<li><a class="i2" href="#tab2" data-toggle="tab" ><i></i><span>Support</span></a></li>
						<li><a class="i3" href="#tab3" data-toggle="tab" ><i></i><span>Responsive</span></a></li>
						<li><a class="i5" href="#tab5" data-toggle="tab" ><i></i><span>Quality</span></a></li>
					</ul><!-- CASTOM TAB -->
				</div><!-- //CONTAINER -->
			</div><!-- //CLEAN CODE -->

		</section><!-- //ABOUT -->

		<!-- NEWS -->
		<section id="news">

			<!-- CONTAINER -->
			<div class="container">
				<h2><b>Tentang</b> MAN YOGYAKARTA 2</h2>

				<!-- TESTIMONIALS -->
				<div class="testimonials" data-appear-top-offset="-200" data-animated="fadeInUp">

					<!-- TESTIMONIALS SLIDER -->
					<div class="owl-demo owl-carousel testim_slider">

						<!-- TESTIMONIAL1 -->
						<div class="item">
							<div class="testim_content">“MAN 2 Yogyakarta merupakan Madrasah Aliyah Negeri yang berdiri tahun 1978 dan sudah berpengalaman dalam bidang pendidikan.”</div>
							<div class="testim_author">—  Madrasah Aliyah Negeri 2, <b>Yogyakarta</b></div>
						</div><!-- TESTIMONIAL1 -->

						<!-- TESTIMONIAL2 -->
						<div class="item">
							<div class="testim_content">“Memiliki fasilitas lengkap untuk belajar mengajar dengan berbagai macam kegiatan ektra kurikuler dan kegiatan kesiswaaan yang mendukung pendidikan dan pembentukan karakter siswa yang tagwa, mandiri, berprestasi, inovatif berwawasan lingkungan dan Islami.”</div>
							<div class="testim_author">—  Madrasah Aliyah Negeri 2, <b>Yogyakarta</b></div>
						</div><!-- TESTIMONIAL2 -->

						<!-- TESTIMONIAL3 -->
						<div class="item">
							<div class="testim_content">“Sekolah ini berada di pusat kota Yogyakarta, tepatnya di Jl. K.H Ahmad Dahlan No. 130 Yogyakarta . Anda bisa menghubungi kami dengan telepon ke (0274) 513347”</div>
							<div class="testim_author">—  Madrasah Aliyah Negeri 2, <b>Yogyakarta</b></div>
						</div><!-- TESTIMONIAL3 -->
					</div><!-- TESTIMONIALS SLIDER -->
				</div><!-- //TESTIMONIALS -->

			</div><!-- //CONTAINER -->
		</section><!-- //NEWS -->
	</div><!-- //PAGE -->

	<!-- CONTACTS -->
	<section id="contacts">
	</section><!-- //CONTACTS -->

	<!-- FOOTER -->
	<footer>

		<!-- CONTAINER -->
		<div class="container">

			<!-- ROW -->
			<div class="row" data-appear-top-offset="-200" data-animated="fadeInUp">

				<?php
				$query_data_website_global = "SELECT * from data_website where id_data_website='1'";
				$result_data_website_global = mysqli_query($connect, $query_data_website_global);
				$row_data_website_global = mysqli_fetch_array($result_data_website_global);
				?>

				<div class="col-lg-4 col-md-4 col-sm-6 padbot30">
					<div class="recent_posts_small clearfix">
						<div class="post_item_img_small">
							<img src="images/blog/2.jpg" alt="" />
						</div>
						<div class="post_item_content_small">
							<a class="title" href="blog.html" ><span class="glyphicon glyphicon-phone-alt"></span>&nbsp&nbsp <?php echo $row_data_website_global['hubungi_kami_data_website'] ?></a>
							<ul class="post_item_inf_small">
								<li>Telephone</li>
							</ul>
						</div>
					</div>
					<div class="recent_posts_small clearfix">
						<div class="post_item_img_small">
							<img src="images/blog/3.jpg" alt="" />
						</div>
						<div class="post_item_content_small">
							<a class="title" href="blog.html" ><span class="glyphicon glyphicon-map-marker"></span>&nbsp&nbsp KH.A Dahlan No. 130 Yogyakarta (0274) 513347</a>
							<ul class="post_item_inf_small">
								<li>Alamat</li>
							</ul>
						</div>
					</div>
					<div class="recent_posts_small clearfix">
						<div class="post_item_img_small">
							<img src="images/blog/3.jpg" alt="" />
						</div>
						<div class="post_item_content_small">
							<a class="title" href="blog.html" ><span class="glyphicon glyphicon-map-marker"></span>&nbsp&nbsp <?php echo $row_data_website_global['email_data_website'] ?></a>
							<ul class="post_item_inf_small">
								<li>Email</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6 padbot30 foot_about_block">
					<h4><b>About</b> us</h4>
					<p>MAN 2 Yogyakarta merupakan Madrasah Aliyah Negeri yang berdiri tahun 1978 dan sudah berpengalaman dalam bidang pendidikan.</p>
					<ul class="social">
						<li><a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="fa fa-facebook"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="fa fa-pinterest-square"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="map_show fa fa-map-marker"></i></a></li>
					</ul>
				</div>

				<div class="respond_clear"></div>

				<div class="col-lg-4 col-md-4 padbot30">
					<h4><b>Contacts</b> Us</h4>

					<!-- CONTACT FORM -->
					<div class="span9 contact_form">
						<div id="note"></div>
						<div id="fields">
							<form id="contact-form-face" class="clearfix" action="#">
								<input type="text" name="name" value="Name" onFocus="if (this.value == 'Name') this.value = '';" onBlur="if (this.value == '') this.value = 'Name';" />
								<textarea name="message" onFocus="if (this.value == 'Message') this.value = '';" onBlur="if (this.value == '') this.value = 'Message';">Message</textarea>
								<!-- <input class="contact_btn disabled" type="submit" value="Send message" /> -->
								<a class="contact_btn disabled" href="javascript:void(0)" value="Send message" />Kirim Pesan</a>
							</form>
						</div>
					</div><!-- //CONTACT FORM -->
				</div>
			</div><!-- //ROW -->
			<div class="row copyright">
				<div class="col-lg-12 text-center">

				 <!-- <p>Crafted with <i class="fa fa-heart"></i>, <a href="http://designscrazed.org/" >Designscrazed</a></p> -->
				</div>

			</div><!-- //ROW -->
		</div><!-- //CONTAINER -->
	</footer><!-- //FOOTER -->


	<!-- MAP -->
	<div id="map">
		<a class="map_hide" href="javascript:void(0);" ><i class="fa fa-angle-right"></i><i class="fa fa-angle-left"></i></a>
		<!-- <iframe src="http://maps.google.com/maps?f=q&amp;give%20a%20hand=s_q&amp;hl=en&amp;geocode=&amp;q=london&amp;sll=37.0625,-95.677068&amp;sspn=42.631141,90.263672&amp;ie=UTF8&amp;hq=&amp;hnear=London,+United+Kingdom&amp;ll=51.500141,-0.126257&amp;spn=0.026448,0.039396&amp;z=14&amp;output=embed" ></iframe> -->
	</div><!-- //MAP -->

</div>
</body>
</html>
