<?php require_once 'header.php';
require_once 'sidebar.php';

$hizmet=$baglan->prepare("SELECT * FROM hizmetler where hizmet_id=?");

$hizmet->execute(array(
$_GET['id']

));

$hizmetcek=$hizmet->fetch(PDO::FETCH_ASSOC);

 ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

      <div class="row">


        <section class="col-lg-12 connectedSortable">


          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Hizmet Ekle</h3>
            </div>


            <form action="yukle.php" method="POST" enctype="multipart/form-data">
              
              <div class="box-body">
              <img style="width:300px !important" src="../resimler/<?php echo $hizmetcek['hizmet_resim'] ?>">
                
      <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
      <input type="hidden" name="eskiresim" value="<?php echo $hizmetcek['hizmet_resim'] ?>">
      
                 <div class="form-group">
                  <label for="exampleInputEmail1">Fotoğraf</label>
                  <input name="resim"  type="file" class="form-control" id="exampleInputEmail1" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Başlık</label>
                  <input name="baslik" value="<?php echo $hizmetcek['hizmet_baslik'] ?>" type="text" class="form-control" id="exampleInputEmail1" >
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Açıklama</label>
                  <textarea name="aciklama" id="editor1" rows="8" cols="80"><?php echo $hizmetcek['hizmet_aciklama'] ?></textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Sıra</label>
                  <input value="<?php echo $hizmetcek['hizmet_sira'] ?>" name="sira" type="text" class="form-control" id="exampleInputEmail1" placeholder="Sıra Giriniz">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Fiyat</label>
                  <input name="fiyat" value="<?php echo $hizmetcek['hizmet_fiyat'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Açıklama Giriniz">
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="hizmetduzenle" type="submit" class="btn btn-primary">Kaydet</button>
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
