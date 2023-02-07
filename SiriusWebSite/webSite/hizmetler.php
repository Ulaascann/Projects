<?php require_once 'header.php';

?>




<section class="section service-2">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<h2>Hizmetlerimiz</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Tüm hizmetlerimize bu sayfadan erişebilirsiniz.</p>
				</div>
			</div>
		</div>

		<div class="row">
			 <?php $hizmet=$baglan->prepare("SELECT * FROM hizmetler order by hizmet_sira");

 $hizmet->execute();
while ($hizmetcek=$hizmet->fetch(PDO::FETCH_ASSOC)) { ?>

			<div class="col-lg-4 col-md-6 ">
				<div class="department-block mb-5">
					<img src="resimler/<?php echo $hizmetcek['hizmet_resim'] ?>" alt="" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color"><?php echo $hizmetcek['hizmet_baslik'] ?></h4>
						<p class="mb-4"><?php echo $hizmetcek['hizmet_aciklama'] ?></p>
						<h6 class="mt-4 mb-2 title-color">Ücret:<?php echo $hizmetcek['hizmet_fiyat'] ?>₺ </h6>
					</div>
				</div>
			</div>

		<?php } ?>

			
		</div>
	</div>
</section>
<?php require_once 'footer.php'; ?>
