<footer class="footer section gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mr-auto col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<div class="logo mb-4">
						<img style="width:200px ;"src="resimler/<?php echo $ayarcek['ayar_logo'] ?>" alt="" class="img-fluid">
					</div>
					<p><?php echo $ayarcek['aciklama']; ?></p>

					<ul class="list-inline footer-socials mt-4">
						<li class="list-inline-item"><a href="<?php echo $ayarcek['facebook']; ?>"><i class="icofont-facebook"></i></a></li>
						<li class="list-inline-item"><a href="<?php echo $ayarcek['twitter']; ?>"><i class="icofont-twitter"></i></a></li>
						<li class="list-inline-item"><a href="<?php echo $ayarcek['linkedin']; ?>"><i class="icofont-linkedin"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Hizmetlerimiz</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<?php $hizmet=$baglan->prepare("SELECT * FROM hizmetler order by hizmet_sira");

 $hizmet->execute();
while ($hizmetcek=$hizmet->fetch(PDO::FETCH_ASSOC)) { ?>
						<li><a href="hizmetler.php"><?php echo $hizmetcek['hizmet_baslik'] ?></a></li>
						<?php } ?>
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Sayfalar</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="index.php">Anasayfa</a></li>
						<li><a href="hakkimizda.php">Hakkımızda </a></li>
						<li><a href="galeri.php">Galeri</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget widget-contact mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">İletişim</h4>
					<div class="divider mb-4"></div>

					<div class="footer-contact-block mb-4">
						<div class="icon d-flex align-items-center">
							<i class="icofont-email mr-3"></i>
							<span class="h6 mb-0">7/24 İletişim</span>
						</div>
						<h4 class="mt-2"><a href="mailto:<?php echo $ayarcek['mailadresi']; ?>"><?php echo $ayarcek['mailadresi']; ?></a></h4>
					</div>

					<div class="footer-contact-block">
						<div class="icon d-flex align-items-center">
							<i class="icofont-support mr-3"></i>
							<span class="h6 mb-0">Haftaiçi : 08:30 - 18:00</span>
						</div>
						<h4 class="mt-2"><a href="tel:+09-501-2323456" ><?php echo $ayarcek['telnumarasi']; ?></h4>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-btm py-4 mt-5">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6">
					<div class="copyright">
						Tüm Hakları Saklıdır.<a href="https://siriusdigital.com.tr" target="_blank"> Sirius Digital</a>
					</div>
		</div>
	</div>
</footer>