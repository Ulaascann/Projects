<?php require_once 'header.php'; ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>Sirius Digital Yazılım ve Bilişim Sistemleri</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="top">

<?php require_once 'header.php';?>
	


<section style="background-image:url(resimler/foto.jpg)" class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Sirius Digital</span>
          <h1 class="text-capitalize mb-5 text-lg">Bizimle İletişime Geçin</h1>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact form start -->

<section class="section contact-info pb-0">
    <div class="container">
         <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-live-support"></i>
                    <h5>Telefon Numarası</h5>
                    <?php echo $ayarcek['telnumarasi']; ?>
                     
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-support-faq"></i>
                    <h5>Email</h5>
                     <?php echo $ayarcek['mailadresi']; ?>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-location-pin"></i>
                    <h5>Adres</h5>
                     <?php echo $ayarcek['adres']; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-form-wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="text-md mb-2">Bizimle İletişime Geçin</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p class="mb-5">Hizmetlerimizden faydalanmak için aşağıdaki bölümden sorularınızı iletebilirisiniz.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form id="contact-form" class="contact__form " method="post" action="mail.php">
                 <!-- form message -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name" type="text" class="form-control" placeholder="Ad Soyad" >
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="Email Adresi">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="subject" type="text" class="form-control" placeholder="Almak istediğiniz hizmet">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="phone"  type="text" class="form-control" placeholder="Telefon Numaranız">
                            </div>
                        </div>
                    </div>

                    <div class="form-group-2 mb-4">
                        <textarea name="message" class="form-control" rows="8" placeholder="Mesajınız"></textarea>
                    </div>

                    <div class="text-center">
                        <input class="btn btn-main btn-round-full" name="submit" type="submit" value="Mesaj Gönder"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12046.327737648855!2d28.89614!3d40.99063445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cabb77a464c6d3%3A0xcff981f89f4c03d0!2sZeytinburnu%2C%20S%C3%BCmer%2C%2034025%20Zeytinburnu%2F%C4%B0stanbul!5e0!3m2!1str!2str!4v1675108156653!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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