<?php require_once 'header.php';

$hakkimizda=$baglan->prepare("SELECT * FROM hakkimizda where hakkimizda_id=?");

$hakkimizda->execute(array(1));

$hakkimizdacek=$hakkimizda->fetch(PDO::FETCH_ASSOC);

?>
<section style="background-image:url(resimler/foto.jpg)"  class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Sirius Digital</span>
          <h1 class="text-capitalize mb-5 text-lg">Hakkımızda</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section about-page">
	<div class="container">
		<div class="row">
			<div class="col-lg">
				<h2 class="title-color"><?php echo $hakkimizdacek['hakkimizda_baslik']; ?></h2>
				<div class="divider  my-4"></div>
				<div class="col-lg">
				<p><?php echo $hakkimizdacek['hakkimizda_aciklama']; ?></p>
			</div>
			</div>
			
			<div class="col-lg">
				<h2 class="title-color">Misyonumuz</h2>
				<div class="divider  my-4"></div>
				<div class="col-lg">
				<p><?php echo $hakkimizdacek['hakkimizda_misyon']; ?></p>
			</div>
			</div>
			
			<div class="col-lg">
				<h2 class="title-color">Vizyonumuz</h2>
				<div class="divider  my-4"></div>
				<div class="col-lg">
				<p><?php echo $hakkimizdacek['hakkimizda_vizyon']; ?></p>
			</div>
			</div>
			
		</div>
	</div>
</section>

<div class="container">
		<div class="row">
			<div class="col-lg offset-lg">
				<div class="section-title">
					<h2 class="mb-4">Yorumlarınız</h2>
					<div class="divider  my-4"></div>
				</div>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-lg testimonial-wrap offset-lg">
				
				<div class="testimonial-block">
					<div class="client-info">
						<h4>İyi Destek!</h4>
						<span>Ali Kaya</span>
					</div>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block">
					<div class="client-info">
						<h4>Hızlı Geri Dönüş!</h4>
						<span>Emre Erdoğan</span>
					</div>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block">
					<div class="client-info">
						<h4>Modern Tasarımlar!</h4>
						<span>Ayşe Yılmaz</span>
					</div>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<i class="icofont-quote-right"></i>
				</div>
			</div>
		</div>
	</div>

<?php require_once 'footer.php';?>

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/counterup/jquery.easing.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="js/script.js"></script>
    <script src="js/contact.js"></script>

  </body>
  </html>