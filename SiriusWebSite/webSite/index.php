<?php require_once 'header.php';
    $slider=$baglan->prepare("SELECT * FROM slider order by slider_sira ASC");

 $slider->execute();
while ($slidercek=$slider->fetch(PDO::FETCH_ASSOC)) { ?>


<!-- Slider Start -->
<section style="background-image:url(resimler/<?php echo $slidercek['slider_resim'] ?>)"  class="banner">
	<br>
	<div class="container">
		<div class="row" >
			<div class="col-lg-6 col-md-12 col-xl-7">
				<div class="block" style="background-color: white; height: 350px; text-align:center">
				
					<h1 class="mb-3 mt-3"><?php echo $slidercek['slider_baslik'] ?></h1>

					<p class="mb-4 pr-5"><?php echo $slidercek['slider_aciklama'] ?></p>
					<div class="btn-container ">
						<a href="contact.php" target="_blank" class="btn btn-main-2 btn-icon btn-round-full">İletişim <i class="icofont-simple-right ml-2  "></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php } ?>
<section class="features">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="feature-block d-lg-flex">
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-surgeon-alt"></i>
						</div>
						<span>24 Saat Hizmet</span>
						<h4 class="mb-3">Online Görüşme</h4>
						<p class="mb-4">Hzimetlerimizden faydalanmak için bizimle iletişime geçin.</p>
						<a href="contact.php" class="btn btn-main btn-round-full">İletişim</a>
					</div>

					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-ui-clock"></i>
						</div>
						<h4 class="mb-3">Çalışma Saatlerimiz</h4>
						<ul class="w-hours list-unstyled">
		                    <li class="d-flex justify-content-between">P.tesi-C.tesi : <span>9:00 - 23:00</span></li>
		                    <li class="d-flex justify-content-between">Pazar: <span>9:00 - 17:00</span></li>
		                    
		                </ul>
					</div>

					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-support"></i>
						</div>
						<span>Telefon Numaramız</span>
						<h4 class="mb-3"><?php echo $ayarcek['telnumarasi'] ?></h4>
						<p>Yukarıdaki numaradan bizlere ulaşabilirsiniz.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<br>
<br>
<section class="cta-section ">
	<div class="container">
		<div class="cta position-relative">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-doctor"></i>
						<span class="h3">58</span>k
						<p>Müşteri</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-flag"></i>
						<span class="h3">700</span>+
						<p>Proje</p>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-badge"></i>
						<span class="h3">40</span>+
						<p>Kişilik Ekip</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-globe"></i>
						<span class="h3">7</span>
						<p>Hizmet</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section fotos">
  <div class="container">
  	  <div class="row justify-content-center">
             <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Örnek Çalışmalar</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p>Çalışmalarımızın  örneklerini aşağıda bulabilirsiniz. Daha fazlası için; <br><a href="galeri.php">Galeri</a> sayfamızı ziyaret ediniz.</p>
                </div>
            </div>
        </div>



    <div class="row shuffle-wrapper portfolio-gallery">
      <?php $galeri=$baglan->prepare("SELECT * FROM galeri order by galeri_sira ASC limit 3 ");

      $galeri->execute();
     while ($galericek=$galeri->fetch(PDO::FETCH_ASSOC)) { ?>
      	<div class="col-lg-4 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;cat1&quot;,&quot;cat2&quot;]">
	      	<div class="position-relative doctor-inner-box">
		        <div class="hizmets-img">
	               <div class="hizmet-img">
	               		<img src="resimler/<?php echo $galericek['galeri_resim'] ?>" alt="Galeri sayfası" class="img-fluid w-100">
	               </div>
	            </div>

	      	</div>
      	</div>
<?php } ?>
    </div>
  </div>
</section>
<br>
<?php require_once 'footer.php'; ?>