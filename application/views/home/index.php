<section class="default-banner active-blog-slider">
	<div class="item-slider relative" style="background: url(<?= base_url() ?>asset/img/slider1.jpg); background-size: cover;">
		<div class="overlay" style="background: rgba(0,0,0,.3)"></div>
		<div class="container">
			<div class="row fullscreen justify-content-center align-items-center">
				<div class="col-md-10 col-12">
					<div class="banner-content text-center">
						<h4 class="text-white mb-20 text-uppercase">The Shine Of Java</h4>
						<h1 class="text-uppercase text-white">New Adventure</h1>
						<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp <br>
							or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
						<a href="#" class="text-uppercase header-btn">Discover Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="item-slider relative" style="background: url(<?= base_url() ?>asset/img/slide.jpg);background-size: cover;">
		<div class="overlay" style="background: rgba(0,0,0,.3)"></div>
		<div class="container">
			<div class="row fullscreen justify-content-center align-items-center">
				<div class="col-md-10 col-12">
					<div class="banner-content text-center">
						<h4 class="text-white mb-20 text-uppercase">The Shine Of Java</h4>
						<h1 class="text-uppercase text-white">New Trip</h1>
						<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp <br>
							or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
						<a href="#" class="text-uppercase header-btn">Discover Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="item-slider relative" style="background: url(<?= base_url() ?>asset/img/slider.jpg);background-size: cover;">
		<div class="overlay" style="background: rgba(0,0,0,.3)"></div>
		<div class="container">
			<div class="row fullscreen justify-content-center align-items-center">
				<div class="col-md-10 col-12">
					<div class="banner-content text-center">
						<h4 class="text-white mb-20 text-uppercase">Discover the Colorful World</h4>
						<h1 class="text-uppercase text-white">New Experience</h1>
						<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp <br>
							or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
						<a href="#" class="text-uppercase header-btn">Discover Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="container mt-5">
	<h1>Daftar Wisata</h1>
	<!-- <div class="row mt-3">
		<div class="col-md-6">
			
			<ul class="list-group">
				<?php foreach ($wisata as $wst) : ?>
					<li class="list-group-item"><?= $wst['NAME'] ?></li>
					<li class="list-group-item">Rp.<?= $wst['TICKET_PRICE'] ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div> -->
	<div class="card-columns mt-3">
		<?php foreach ($wisata as $wst) : ?>
			<div class="card mt-1" style="width:300px">
				<img class="card-img-top" src="<?= base_url() ?>asset/img/wisata/<?= $wst['ID'] ?>.jpg" style="height:200px" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title"><?= $wst['NAME'] ?></h5>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<?= $this->pagination->create_links(); ?>

<!-- Start about Area -->
<section class="section-gap info-area" id="about">
	<div class="container">
		<!-- <div class="row d-flex justify-content-center">
			<div class="menu-content pb-40 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Why Choose Us Your Fitness Builder</h1>
					<p>Who are in extremely love with eco friendly system.</p>
				</div>
			</div>
		</div> -->
		<div class="single-info row mt-40">
			<div class="col-lg-6 col-md-12 mt-120 text-center no-padding info-left">
				<div class="info-thumb">
					<img src="<?= base_url() ?>asset/img/alun2.jpg" class="img-fluid" alt="">
				</div>
			</div>
			<div class="col-lg-6 col-md-12 no-padding info-rigth">
				<div class="info-content">
					<h2 class="pb-30">Sejarah <br>
						Asal-Usul<br>
						Kabupaten Klaten</h2>
					<p>
						Asal usul nama kabupaten ini mempunyai dua versi berbeda. Versi pertama mengatakan bahwa Klaten berasal dari kata 'kelathi' atau 'buah bibir'.
						Kata kelathi ini kemudian mengalami perubahan menjadi Klaten. Buah bibir tersebut mengacu terhadap Klaten sebagai daerah yang amat subur sampai menjadi buah bibir. </p>
					<br>
					<p>
						Versi kedua ini berdasarkan kata-kata orang tua. Versi ini menyebutkan Klaten berasal dari kata 'melati' atau 'Mlathi' dalam Bahasa Jawa. Kemudian kata itu berubah menjadi Klathi. </p>
					<br>
					<p>
						Untuk memudahkan ucapan Klathi, maka berubah menjadi kata Klathen. Melati sendiri adalah nama seorang kyai yang menginjakkan kaki di sebuah wilayah yang masih berupa hutan
						belantara dan menetap di wilayah itu. Hutan inilah yang kemudian disebut Klaten.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End about Area -->


<!-- Start project Area -->
<section class="project-area section-gap" id="project">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-30 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Yuk mengenal Kabupaten Klaten</h1>
					<p>
						Klaten merupakan kabupaten yang berada di Provinsi Jawa Tengah. Kabupaten ini terletak di antara Solo dan Yogyakarta. Pada 2019, jumlah penduduknya mencapai 1.174.986 jiwa.
						<br>
						Mayoritas penduduk di kabupaten ini adalah etnis Jawa. Salah satu gunung berapi teraktif di Indonesia juga berada di kabupaten ini. Secara administrasi Gunung Merapi juga berada di Klaten.
					</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center d-flex">
			<div class="active-works-carousel mt-40 col-lg-8">
				<div class="item">
					<img class="img-fluid" src="<?= base_url() ?>asset/img/peta.jpg" alt="">
					<div class="caption text-center mt-20">
						<h6 class="text-uppercase">Tentang Kabupaten Klaten</h6>
						<p>
							Klaten adalah sebuah kabupaten di Jawa Tengah dan berdekatan dengan provinsi Yogyakarta. Kabupaten ini memiliki banyak tujuan wisata yang indah terutama wisata sejarah.
							<br>
							Destinasi wisata Klaten dipenuhi dengan objek wisata candi atau air. Salah satu wisata Klaten yang terkenal nya adalah candi Prambanan yang berada di perbatasan kawasan Sleman dan Klaten.
						</p>
					</div>
				</div>
				<div class="item">
					<img class="img-fluid" src="<?= base_url() ?>asset/img/sebarapem.jpg" alt="">
					<div class="caption text-center mt-20">
						<h6 class="text-uppercase">Tradisi Sebar Apem</h6>
						<p>Di Klaten tepatnya di Jatinom ada tradisi sebar apem atau biasa disebut Yaqowiyu. Tradisi ini biasa dilakukan pada setiap bulan Sapar, bulan kedua penanggalan Jawa. Apem sendiri adalah kue berbentuk bundar yang terbuat dari tepung beras.
							<br>
							Dalam pelaksanaanya ribuan apem akan disebar ke warga dan diperebutkan. Biasanya apem akan disebarkan dari panggung di kompleks pemakaman Ki Ageng Gribig. Nama "yaqowiyu" sendiri merupakan penyingkatan bacaan doa.
							"yaa qowiyyu, yaa aziz, qowwina wal muslimiin, yaa qowiyyu warzuqna wal muslimiin," yang merupakan doa memohon kekuatan. Warga percaya kalau apem tersebut dapat membawa kesejahteraan bagi yang berhasil mendapatkannya.
						</p>
					</div>
				</div>
				<div class="item">
					<img class="img-fluid" src="<?= base_url() ?>asset/img/candi.jpg" alt="">
					<div class="caption text-center mt-20">
						<h6 class="text-uppercase">Kabupaten Seribu Candi</h6>
						<p>Klaten memiliki destinasi wisata sejarah berupa candi yang terbilang cukup banyak. Di antaranya terdapat candi merak di Kecamatan Karangnongko, Candi Bubrah yang berada di Kecamatan Prambanan, Candi Plaosan yang juga terdapat di Kecamatan Prambanan, dan lainnya.
							<br>
							Salah satu candi yang cukup terkenal di Klaten yakni Candi Sewu yang terletak di Kecamatan Prambanan. Candi ini merupakan Candi Buddha yang dibangun pada abad ke-8 Masehi.
							Candi Sewu ini juga merupakan kompleks candi Buddha terbesar kedua setelah Candi Borobudur di Jawa Tengah dan usianya lebih tua daripada Candi Borobudur dan Prambanan.
						</p>
					</div>
				</div>
				<div class="item">
					<img class="img-fluid" src="<?= base_url() ?>asset/img/lurik.jpg" alt="">
					<div class="caption text-center mt-20">
						<h6 class="text-uppercase">Kerajinan Kain Lurik</h6>
						<p>Di Klaten ada Desa Wisata yang mengajak anda untuk mengenal Lurik. Destinasi wisata ini berada di Dukuh Cabean, Desa Mlese. Di sana, wisatawan dapat melihat detail proses pembuatan kain tenun lurik yang masih dikerjakan dengan alat tenun tradisional.
							<br>
							Kain lurik tersebut dibuat menjadi baju, kemeja, peci, tas, dompet, dan lainnya. Setelah puas melihat prosesnya, Anda pun bisa membeli kain lurik di sana untuk menambah koleksi. Harga lurik yang ditawarkan berkisar antara Rp200 ribu sampai Rp450 ribu. Lurik sendiri menjadi kerajinan andalan kabupaten ini.
							Bila akan memasuki Klaten, maka di pintu masuknya anda dapat melihat monumen berupa patung seseorang yang sedang menenun.
						</p>
					</div>
				</div>
				<div class="item">
					<img class="img-fluid" src="<?= base_url() ?>asset/img/payung.jpg" alt="">
					<div class="caption text-center mt-20">
						<h6 class="text-uppercase">Payung Kertas Khas Juwiring</h6>
						<p>Klaten punya kerjinan khas berupa payung kertas. Kerajinan ini biasa disebut Payung Juwiring. Nama Juwiring sendiri merupakan daerah tempat para pengrajin payung ini. Konon, payung ini dahulunya hanya digunakan untuk perlengkapan upacara kematian di desa setempat.
							<br>
							Payung ini memiliki motif dan warna yang cantik. Harganya sendiri sekitar Rp15 ribu, namun untuk corak-corak langka bisa dihargai sampai jutaan rupiah. Kini, payung tersebut sering digunakan sebagai hiasan dan pelengkap interior yang biasa dilihat di hotel, perkantoran, atau rumah mewah.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End project Area -->


<!-- Start feature Area -->
<!-- <section class="feature-area section-gap" id="secvice">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Some Features that Made us Unique</h1>
					<p>Who are in extremely love with eco friendly system.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 ">
				<div class="single-feature mb-30">
					<div class="title d-flex flex-row pb-20">
						<span class="lnr lnr-user"></span>
						<h4><a href="#">Expert Technicians</a></h4>
					</div>
					<p>
						Usage of the Internet is becoming more common due to rapid advancement of technology and power.
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 ">
				<div class="single-feature mb-30">
					<div class="title d-flex flex-row pb-20">
						<span class="lnr lnr-license"></span>
						<h4><a href="#">Professional Service</a></h4>
					</div>
					<p>
						Usage of the Internet is becoming more common due to rapid advancement of technology and power.
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 ">
				<div class="single-feature mb-30">
					<div class="title d-flex flex-row pb-20">
						<span class="lnr lnr-phone"></span>
						<h4><a href="#">Great Support</a></h4>
					</div>
					<p>
						Usage of the Internet is becoming more common due to rapid advancement of technology and power.
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 ">
				<div class="single-feature">
					<div class="title d-flex flex-row pb-20">
						<span class="lnr lnr-rocket"></span>
						<h4><a href="#">Technical Skills</a></h4>
					</div>
					<p>
						Usage of the Internet is becoming more common due to rapid advancement of technology and power.
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 ">
				<div class="single-feature">
					<div class="title d-flex flex-row pb-20">
						<span class="lnr lnr-diamond"></span>
						<h4><a href="#">Highly Recomended</a></h4>
					</div>
					<p>
						Usage of the Internet is becoming more common due to rapid advancement of technology and power.
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 ">
				<div class="single-feature">
					<div class="title d-flex flex-row pb-20">
						<span class="lnr lnr-bubble"></span>
						<h4><a href="#">Positive Reviews</a></h4>
					</div>
					<p>
						Usage of the Internet is becoming more common due to rapid advancement of technology and power.
					</p>
				</div>
			</div>
		</div>
	</div>
</section> -->
<!-- End feature Area -->


<!-- Start gallery Area -->
<section class="gallery-area" id="gallery">
	<div class="container-fluid">
		<div class="row no-padding">
			<div class="active-gallery">
				<?php foreach ($wisata as $wst) : ?>
					<div class="item single-gallery">
						<img src="<?= base_url() ?>asset/img/wisata/<?= $wst['ID'] ?>.jpg" style="height:200px" alt="">
					</div>
				<?php endforeach; ?>
			</div>
			<!-- <div class="active-gallery">
				<div class="item single-gallery">
					<img src="<?= base_url() ?>asset/img/g1.jpg" alt="">
				</div>
				<div class="item single-gallery">
					<img src="<?= base_url() ?>asset/img/g2.jpg" alt="">
				</div>
				<div class="item single-gallery">
					<img src="<?= base_url() ?>asset/img/g3.jpg" alt="">
				</div>
				<div class="item single-gallery">
					<img src="<?= base_url() ?>asset/img/g4.jpg" alt="">
				</div>
				<div class="item single-gallery">
					<img src="<?= base_url() ?>asset/img/g5.jpg" alt="">
				</div>
				<div class="item single-gallery">
					<img src="<?= base_url() ?>asset/img/g6.jpg" alt="">
				</div>
			</div>-->
		</div>
	</div>
</section>
<!-- End gallery Area -->


<!-- Start faq Area -->
<!-- <section class="faq-area section-gap" id="faq">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Frequently Asked Questions</h1>
					<p>Who are in extremely love with eco friendly system.</p>
				</div>
			</div>
		</div>
		<div class="row d-flex align-items-center">
			<div class="counter-left col-lg-3 col-md-3">
				<div class="single-facts">
					<h2 class="counter">5962</h2>
					<p>Projects Completed</p>
				</div>
				<div class="single-facts">
					<h2 class="counter">2394</h2>
					<p>New Projects</p>
				</div>
				<div class="single-facts">
					<h2 class="counter">1439</h2>
					<p>Tickets Submitted</p>
				</div>
				<div class="single-facts">
					<h2 class="counter">933</h2>
					<p>Cup of Coffee</p>
				</div>
			</div>
			<div class="faq-content col-lg-9 col-md-9">
				<div class="single-faq">
					<h2 class="text-uppercase">
						Are your Templates responsive?
					</h2>
					<p>
						“Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior.
					</p>
				</div>
				<div class="single-faq">
					<h2 class="text-uppercase">
						Does it have all the plugin as mentioned?
					</h2>
					<p>
						“Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior.
					</p>
				</div>
				<div class="single-faq">
					<h2 class="text-uppercase">
						Can i use the these theme for my client?
					</h2>
					<p>
						“Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
End faq Area -->


<!-- Start Video Area -->
<!-- <section class="video-area pt-40 pb-40 mt-3">
	<div class="overlay overlay-bg">
		
	</div>
	<div class="container">
		<div class="video-content">
			<a href="https://www.youtube.com/watch?v=ZgG7Qrn445s" class="play-btn"><img src="<?php echo base_url() ?>asset/img/play-btn.png" alt=""></a>
			<div class="video-desc">
				<h3 class="h2 text-white text-uppercase">Being unique is the preference</h3>
				<h4 class="text-white">Youtube video will appear in popover</h4>
			</div>
		</div>
	</div>
</section> -->
<!-- Start Video Area -->


<!-- Start logo Area -->
<!-- <section class="logo-area">
	<div class="container">
		<div class="row">

		</div>
	</div>
</section> -->
<!-- End logo Area -->


<!-- start contact Area -->
<!-- <section class="contact-area section-gap" id="contact">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">If you need, Just drop us a line</h1>
					<p>Who are in extremely love with eco friendly system.</p>
				</div>
			</div>
		</div>
		<form class="form-area " id="myForm" action="mail.php" method="post" class="contact-form text-right">
			<div class="row">
				<div class="col-lg-6 form-group">
					<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

					<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

					<input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
				</div>
				<div class="col-lg-6 form-group">
					<textarea class="common-textarea mt-10 form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
					<button class="primary-btn mt-20">Send Message<span class="lnr lnr-arrow-right"></span></button>
					<div class="alert-msg">
					</div>
				</div>
			</div>
		</form>

	</div>
</section> -->
<!-- end contact Area -->