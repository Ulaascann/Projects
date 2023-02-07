<?php require_once 'header.php';
require_once'sidebar.php'; 


$ayar=$baglan->prepare("SELECT * FROM ayarlar where id=?");

$ayar->execute(array(1));

$ayarcek=$ayar->fetch(PDO::FETCH_ASSOC);

?>
 
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <section class="col-lg-12 connectedSortable">
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ayarlar</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          <?php if(@$_GET['yukleme']=="basarili"){?>
            <b style="color:green">Yükleme işleminiz başarılı bir şekilde gerçekleşmiştir.</b>
          <?php } elseif(@$_GET['yukleme']=="basarisiz"){?>
            <b style="color:red">Yükleme işleminiz başarısız olmuştur.</b>
          <?php } ?>




<form action="yukle.php" method="post" enctype="multipart/form-data">
<div class="box-body">
  <div class="form-group">
                  <img src="../resimler/<?php echo $ayarcek['ayar_logo'] ?>">
                  <br>
                  <label for="exampleInputEmail1">Logo</label>
                 
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Başlık</label>
                  <input name="resim" type="file" class="form-control" id="exampleInputEmail1">
                </div>
                <button style="float:left" class="btn btn-primary" type="submit" name="logokaydet">Logo Yükle</button>
              </div>
</form>
            <form action=yukle.php method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Başlık</label>
                  <input name="baslik" value="<?php echo $ayarcek['baslik']; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Başlık Giriniz">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Açıklama</label>
                  <input name="aciklama" value="<?php echo $ayarcek['aciklama']; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Açıklama Giriniz">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Anahtar Kelime</label>
                  <input name="anahtar" value="<?php echo $ayarcek['anahtarkelime']; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Anahtar Kelime Giriniz">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Mail Adresi</label>
                  <input name="mail" value="<?php echo $ayarcek['mailadresi']; ?>" type="email" class="form-control" id="exampleInputEmail1" placeholder="Mail Adresi Giriniz">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Adres</label>
                  <input name="adres" value="<?php echo $ayarcek['adres']; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Adres Giriniz">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Telefon</label>
                  <input name="telefon" value="<?php echo $ayarcek['telnumarasi']; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Telefon Giriniz">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Whatsapp Telefonu</label>
                  <input name="whatsapp" value="<?php echo $ayarcek['whatsapptel']; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Whatsapp Telefonu Giriniz">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Instagram Adresi</label>
                  <input name="instagram" value="<?php echo $ayarcek['instagram']; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Instagram Adresi Giriniz">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Facebook Adresi</label>
                  <input name="facebook" value="<?php echo $ayarcek['facebook']; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Facebook Adresi Giriniz">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Twitter Adresi</label>
                  <input name="twitter" value="<?php echo $ayarcek['twitter']; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Twitter Adresi Giriniz">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Linkedin Adresi</label>
                  <input name="linkedin" value="<?php echo $ayarcek['linkedin']; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Linkedin Adresi Giriniz">
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="ayarkaydet" type="submit" class="btn btn-primary">Kaydet</button>
              </div>
            </form>
          </div>
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <?php require_once 'footer.php'; ?>
  <!-- /.content-wrapper -->
 