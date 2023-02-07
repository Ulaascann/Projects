<?php require_once 'header.php'; ?>




<!-- portfolio -->
<section class="section fotos">
  <div class="container">
  	  <div class="row justify-content-center">
             <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Fotoğraf Galerisi</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p>Çalışmalarımızın  Örneklerini Aşağıda Bulabilirsiniz.</p>
                </div>
            </div>
        </div>



    <div class="row shuffle-wrapper portfolio-gallery">
      <?php $galeri=$baglan->prepare("SELECT * FROM galeri order by galeri_sira ASC");

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

<?php require_once 'footer.php'; ?>
