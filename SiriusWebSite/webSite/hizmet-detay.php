<?php require_once 'header.php'; 


$hizmet=$baglan->prepare("SELECT * FROM hizmetler where hizmet_id=?");

$hizmet->execute(array(
$_GET['id']

));

$hizmetcek=$hizmet->fetch(PDO::FETCH_ASSOC);

 ?>


<section class="section department-single">
	<div class="container">
		 <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
		<div class="row">
			<div class="col-lg-12">
				<div class="department-img">
					<img src="resimler/<?php echo $hizmetcek['hizmet_resim'] ?>" alt="" class="img-fluid">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8">
				<div class="department-content mt-5">
					<h3 class="text-md"><?php echo $hizmetcek['hizmet_baslik'] ?></h3>
					<div class="divider my-4"></div>
					<p class="lead"><?php echo $hizmetcek['hizmet_aciklama'] ?></p>
					


					<h3 class="mt-5 mb-4">Services features</h3>
					<div class="divider my-4"></div>
					<ul class="list-unstyled department-service">
						<li><i class="icofont-check mr-2"></i>International Drug Database</li>
						<li><i class="icofont-check mr-2"></i>Stretchers and Stretcher Accessories</li>
						<li><i class="icofont-check mr-2"></i>Cushions and Mattresses</li>
						<li><i class="icofont-check mr-2"></i>Cholesterol and lipid tests</li>
						<li><i class="icofont-check mr-2"></i>Critical Care Medicine Specialists</li>
						<li><i class="icofont-check mr-2"></i>Emergency Assistance</li>
					</ul>

					<a href="appoinment.html" class="btn btn-main-2 btn-round-full">Make an Appoinment<i class="icofont-simple-right ml-2  "></i></a>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="sidebar-widget schedule-widget mt-5">
					<h5 class="mb-4">Time Schedule</h5>

					<ul class="list-unstyled">
					  <li class="d-flex justify-content-between align-items-center">
					    <a href="#">Monday - Friday</a>
					    <span>9:00 - 17:00</span>
					  </li>
					  <li class="d-flex justify-content-between align-items-center">
					    <a href="#">Saturday</a>
					    <span>9:00 - 16:00</span>
					  </li>
					  <li class="d-flex justify-content-between align-items-center">
					    <a href="#">Sunday</a>
					    <span>Closed</span>
					  </li>
					</ul>

					<div class="sidebar-contatct-info mt-4">
						<p class="mb-0">Need Urgent Help?</p>
						<h3>+23-4565-65768</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><?php require_once 'footer.php'; ?>
