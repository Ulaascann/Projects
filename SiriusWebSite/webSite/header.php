<?php require_once 'admin/baglan.php';
require_once 'function.php';


$ayar=$baglan->prepare("SELECT * FROM ayarlar where id=?");

$ayar->execute(array(1));

$ayarcek=$ayar->fetch(PDO::FETCH_ASSOC);



?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="<?php echo $ayarcek['aciklama'] ?>">
  <meta name="keywords" content="<?php echo $ayarcek['anahtarkelime'] ?>">
  <meta name="author" content="Sirius">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php echo $ayarcek['baslik'] ?></title>

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

<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="mailto:<?php echo $ayarcek['mailadresi'] ?>"><i class="icofont-support-faq mr-2"></i><?php echo $ayarcek['mailadresi'] ?></a></li>
						<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i><?php echo $ayarcek['adres'] ?></li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="tel:+09-501-2323456" >
							<span>İletişim : </span>
							<span class="h4"><?php echo $ayarcek['telnumarasi'] ?></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	 <a class="navbar-brand" href="index.php">
			  	<img style="width:200px ;"src="resimler/<?php echo $ayarcek['ayar_logo'] ?>" alt="" class="img-fluid">
			  </a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="index.php">Anasayfa</a>
			  </li>
			  <li class="nav-item"><a class="nav-link" href="hakkimizda.php">Hakkımızda</a></li>
			  <li class="nav-item"><a class="nav-link" href="hizmetler.php">Hizmetlerimiz</a></li>
				<li class="nav-item"><a class="nav-link" href="galeri.php">Galeri</a></li>
			  <li class="nav-item"><a class="nav-link" href="contact.php">iletişim</a></li>
			</ul>
		  </div>
		</div>
	</nav>
</header>