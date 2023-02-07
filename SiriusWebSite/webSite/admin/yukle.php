<?php require_once'baglan.php';
ob_start();
session_start();

if(isset($_POST['ayarkaydet'])){
	$baslik= $_POST['baslik'];
	$aciklama=$_POST['aciklama'];
	$anahtar=$_POST['anahtar'];
	$mail=$_POST['mail'];
	$adres=$_POST['adres'];
	$telefon=$_POST['telefon'];
	$whatsapp=$_POST['whatsapp'];
	$instagram=$_POST['instagram'];
	$facebook=$_POST['facebook'];
	$twitter=$_POST['twitter'];
	$linkedin=$_POST['linkedin'];



$yukle=$baglan->prepare("UPDATE ayarlar SET

baslik=?,
aciklama=?,
anahtarkelime=?,
mailadresi=?,
adres=?,
telnumarasi=?,
whatsapptel=?,
instagram=?,
facebook=?,
twitter=?,
linkedin=?

WHERE id=1

	" );

$degistir=$yukle->execute(array(
$baslik,$aciklama,$anahtar,$mail,$adres,$telefon,$whatsapp,$instagram,$facebook,$twitter,$linkedin
));


if($degistir){
	Header("Location:ayarlar.php?yukleme=basarili");
}
else{
	Header("Location:ayarlar.php?yukleme=basarisiz");
}
}



if(isset($_POST['hakkimizdakaydet'])){
	$baslik= $_POST['baslik'];
	$aciklama=$_POST['aciklama'];
	$misyon=$_POST['misyon'];
	$vizyon=$_POST['vizyon'];
	



$yukle=$baglan->prepare("UPDATE ayarlar SET

hakkimizda_baslik=?,
hakkimizda_aciklama=?,
hakkimizda_misyon=?,
hakkimizda_vizyon=?,


WHERE hakkimizda_id=1

	" );

$degistir=$yukle->execute(array(
$baslik,$aciklama,$misyon,$vizyon
));


if($degistir){
	Header("Location:hakkimizda.php?yukleme=basarili");
}
else{
	Header("Location:hakkimizda.php?yukleme=basarisiz");
}
}


if (isset($_POST['galerikaydet'])) {
$sira=$_POST['sira'];
  $yukle = '../resimler';


  @$resimad =$_FILES['resim'] ["tmp_name"];
  @$isim = $_FILES['resim'] ["name"];

  $sayi1=rand(20000,30000);
  $sayi2=rand(20000,30000);
  $sayilar=$sayi1.$sayi2;
  $resimyolu=$sayilar.$isim;
  @move_uploaded_file($resimad, "$yukle/$resimyolu");


      $yukle=$baglan->prepare("insert into  galeri SET

      galeri_sira=?,
      galeri_resim=?

         ");
      $degistir=$yukle->execute(array(
      $sira,   $resimyolu
      ));

      if ($degistir) {
        Header("Location:galeri.php?yukleme=basarili");
      }
      else{
        Header("Location:galeri.php?yukleme=basarisiz");
      }
}




if (isset($_POST['galeriduzenle'])) {

  if ($_FILES['resim'] ["size"]>0) {

  $sira=$_POST['sira'];
    $yukle = '../resimler';
    @$resimad =$_FILES['resim'] ["tmp_name"];
    @$isim = $_FILES['resim'] ["name"];

    $sayi1=rand(20000,30000);
    $sayi2=rand(20000,30000);
    $sayilar=$sayi1.$sayi2;
    $resimyolu=$sayilar.$isim;
    @move_uploaded_file($resimad, "$yukle/$resimyolu");
  $sira=$_POST['sira'];
  $id=$_POST['id'];

  $yukle=$baglan->prepare(" UPDATE galeri SET

  galeri_sira=?,
  galeri_resim=?
  WHERE galeri_id=$id
     ");
  $degistir=$yukle->execute(array(
  $sira,$resimyolu
  ));
$sil=$_POST['eskiresim'];
unlink("../resimler/$sil");
  if ($degistir) {
    Header("Location:galeri.php?yukleme=basarili");
  }
  else{
    Header("Location:galeri.php&yukleme=basarisiz");
  }


}
else{

  $sira=$_POST['sira'];
  $id=$_POST['id'];

  $yukle=$baglan->prepare(" UPDATE galeri SET

  galeri_sira=?
  WHERE galeri_id=$id
     ");
  $degistir=$yukle->execute(array(
  $sira
  ));

  if ($degistir) {
    Header("Location:galeri.php?yukleme=basarili");
  }
  else{
    Header("Location:galeri.php&yukleme=basarisiz");
  }

}

}


if (isset($_POST['galerisil'])) {

  $id=$_POST['id'];
  $resim=$_POST['resim'];

  $yukle=$baglan->prepare(" DELETE from galeri

  WHERE galeri_id=?
     ");
  $degistir=$yukle->execute(array(
$id
  ));
  unlink("../resimler/$resim");
  if ($degistir) {
    Header("Location:galeri.php?yukleme=basarili");
  }
  else{
    Header("Location:galeri.php&yukleme=basarisiz");
  }
}





if (isset($_POST['hizmetkaydet'])) {
$baslik=$_POST['baslik'];
$aciklama=$_POST['aciklama'];
$sira=$_POST['sira'];
$fiyat=$_POST['fiyat'];

  $yukle = '../resimler';


  @$resimad =$_FILES['resim'] ["tmp_name"];
  @$isim = $_FILES['resim'] ["name"];

  $sayi1=rand(20000,30000);
  $sayi2=rand(20000,30000);
  $sayilar=$sayi1.$sayi2;
  $resimyolu=$sayilar.$isim;
  @move_uploaded_file($resimad, "$yukle/$resimyolu");


      $yukle=$baglan->prepare("insert into  hizmetler SET

      hizmet_baslik=?,
      hizmet_aciklama=?,
      hizmet_sira=?,
      hizmet_fiyat=?,
      hizmet_resim=?
         ");
      $degistir=$yukle->execute(array(
      $baslik,$aciklama,$sira,$fiyat,$resimyolu
      ));

      if ($degistir) {
        Header("Location:hizmetler.php?yukleme=basarili");
      }
      else{
        Header("Location:hizmetler.php&yukleme=basarisiz");
      }
}



if (isset($_POST['hizmetduzenle'])) {
  $baslik=$_POST['baslik'];
  $aciklama=$_POST['aciklama'];
  $sira=$_POST['sira'];
  $fiyat=$_POST['fiyat'];
  $id=$_POST['id'];

  if ($_FILES['resim'] ["size"]>0) {

    $yukle = '../resimler';
    @$resimad =$_FILES['resim'] ["tmp_name"];
    @$isim = $_FILES['resim'] ["name"];

    $sayi1=rand(20000,30000);
    $sayi2=rand(20000,30000);
    $sayilar=$sayi1.$sayi2;
    $resimyolu=$sayilar.$isim;
    @move_uploaded_file($resimad, "$yukle/$resimyolu");
  
  

  $yukle=$baglan->prepare(" UPDATE hizmetler SET

      hizmet_baslik=?,
      hizmet_aciklama=?,
      hizmet_sira=?,
      hizmet_fiyat=?,
      hizmet_resim=?

  WHERE hizmet_id=$id
     ");
  $degistir=$yukle->execute(array(
  $baslik,$aciklama,$sira,$fiyat,$resimyolu
  ));
$sil=$_POST['eskiresim'];
unlink("../resimler/$sil");
  if ($degistir) {
    Header("Location:hizmetler.php?yukleme=basarili");
  }
  else{
    Header("Location:hizmetler.php&yukleme=basarisiz");
  }
}
else{
  $yukle=$baglan->prepare(" UPDATE hizmetler SET

      hizmet_baslik=?,
      hizmet_aciklama=?,
      hizmet_sira=?,
      hizmet_fiyat=?
      
  WHERE hizmet_id=$id
     ");
  $degistir=$yukle->execute(array(
  $baslik,$aciklama,$sira,$fiyat
  ));

if ($degistir) {
    Header("Location:hizmetler.php?yukleme=basarili");
  }
  else{
    Header("Location:hizmetler.php&yukleme=basarisiz");
  }
}
}

if (isset($_POST['hizmetsil'])) {

  $id=$_POST['id'];
  $resim=$_POST['resim'];

  $yukle=$baglan->prepare(" DELETE from hizmetler

  WHERE hizmet_id=?
     ");
  $degistir=$yukle->execute(array(
$id
  ));
  unlink("../resimler/$resim");
  if ($degistir) {
    Header("Location:hizmetler.php?yukleme=basarili");
  }
  else{
    Header("Location:hizmetler.php&yukleme=basarisiz");
  }
}

if (isset($_POST['sliderkaydet'])) {
$sira=$_POST['sira'];
$baslik=$_POST['baslik'];
$aciklama=$_POST['aciklama'];

  $yukle = '../resimler';


  @$resimad =$_FILES['resim'] ["tmp_name"];
  @$isim = $_FILES['resim'] ["name"];

  $sayi1=rand(20000,30000);
  $sayi2=rand(20000,30000);
  $sayilar=$sayi1.$sayi2;
  $resimyolu=$sayilar.$isim;
  @move_uploaded_file($resimad, "$yukle/$resimyolu");


      $yukle=$baglan->prepare("insert into slider SET

      slider_baslik=?,
      slider_aciklama=?,
      slider_sira=?,
      slider_resim=?

         ");
      $degistir=$yukle->execute(array(
      $baslik,$aciklama,$sira,$resimyolu
      ));

      if ($degistir) {
        Header("Location:slider.php?yukleme=basarili");
      }
      else{
        Header("Location:slider.php?yukleme=basarisiz");
      }
}
if (isset($_POST['sliderduzenle'])) {
  $sira=$_POST['sira'];
  $baslik=$_POST['baslik'];
  $aciklama=$_POST['aciklama'];
  $id=$_POST['id'];
  if ($_FILES['resim'] ["size"]>0) {

  $sira=$_POST['sira'];
    $yukle = '../resimler';
    @$resimad =$_FILES['resim'] ["tmp_name"];
    @$isim = $_FILES['resim'] ["name"];

    $sayi1=rand(20000,30000);
    $sayi2=rand(20000,30000);
    $sayilar=$sayi1.$sayi2;
    $resimyolu=$sayilar.$isim;
    @move_uploaded_file($resimad, "$yukle/$resimyolu");
  
    
    $yukle=$baglan->prepare(" UPDATE slider SET

      slider_baslik=?,
      slider_aciklama=?,
      slider_sira=?,
      slider_resim=?
  WHERE slider_id=$id
     ");
  $degistir=$yukle->execute(array(
  $baslik,$aciklama,$sira,$resimyolu
  ));
$sil=$_POST['eskiresim'];
unlink("../resimler/$sil");
  if ($degistir) {
    Header("Location:slider.php?yukleme=basarili");
  }
  else{
    Header("Location:slider.php&yukleme=basarisiz");
  }


}
else{

  $yukle=$baglan->prepare(" UPDATE slider SET

      slider_baslik=?,
      slider_aciklama=?,
      slider_sira=?

  WHERE slider_id=$id
     ");
  $degistir=$yukle->execute(array(
  $baslik,$aciklama,$sira
  ));

  if ($degistir) {
    Header("Location:slider.php?yukleme=basarili");
  }
  else{
    Header("Location:slider.php&yukleme=basarisiz");
  }

}

}

if (isset($_POST['slidersil'])) {

  $id=$_POST['id'];
  $resim=$_POST['resim'];

  $yukle=$baglan->prepare(" DELETE from slider

  WHERE slider_id=?
     ");
  $degistir=$yukle->execute(array(
$id
  ));
  unlink("../resimler/$resim");
  if ($degistir) {
    Header("Location:slider.php?yukleme=basarili");
  }
  else{
    Header("Location:slider.php&yukleme=basarisiz");
  }
}


if (isset($_POST['logokaydet'])) {
  $yukle = '../resimler';


  @$resimad =$_FILES['resim'] ["tmp_name"];
  @$isim = $_FILES['resim'] ["name"];

  $sayi1=rand(20000,30000);
  $sayi2=rand(20000,30000);
  $sayilar=$sayi1.$sayi2;
  $resimyolu=$sayilar.$isim;
  @move_uploaded_file($resimad, "$yukle/$resimyolu");


      $yukle=$baglan->prepare("UPDATE ayarlar SET

      ayar_logo=?
      where id=1

         ");
      $degistir=$yukle->execute(array(
      $resimyolu
      ));

      if ($degistir) {
        Header("Location:ayarlar.php?yukleme=basarili");
      }
      else{
        Header("Location:ayarlar.php&yukleme=basarisiz");
      }
}

if (isset($_POST['admin_giris'])) {
 $mail=($_POST['admin_email']);
 $sifre=($_POST['admin_sifre']);



if ($mail && $sifre) {
  $ksor=$baglan->prepare("SELECT * FROM adminkullanici where adminkullanici_mail=? and adminkullanici_sifre=?");
  
  $ksor->execute(array(
  $mail,$sifre
  ));
$count=$ksor -> rowCount();

if ($count> 0) {
  $_SESSION['kad']=$mail;
  header("Location:index.php");
}
else{
  header("Location:giris.php?bilgi=hata");
}

}

}


?>