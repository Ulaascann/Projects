<?php require_once 'header.php';
require_once'sidebar.php'; 


$hakkimizda=$baglan->prepare("SELECT * FROM hakkimizda where hakkimizda_id=?");

$hakkimizda->execute(array(1));

$hakkimizdacek=$hakkimizda->fetch(PDO::FETCH_ASSOC);

?>
 
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <section class="col-lg-12 connectedSortable">
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Hakkımızda</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          <?php if(@$_GET['yukleme']=="basarili"){?>
            <b style="color:green">Yükleme işleminiz başarılı bir şekilde gerçekleşmiştir.</b>
          <?php } elseif(@$_GET['yukleme']=="basarisiz"){?>
            <b style="color:red">Yükleme işleminiz başarısız olmuştur.</b>
          <?php } ?>
            <form action=yukle.php method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Başlık</label>
                  <input name="baslik" value="<?php echo $hakkimizdacek['hakkimizda_baslik']; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Başlık Giriniz">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Açıklama</label>
                  <textarea name="aciklama" id="editor1" rows="8" cols="80"> <?php echo $hakkimizdacek['hakkimizda_aciklama']; ?>"></textarea>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Misyon</label>
                  <input name="misyon" value="<?php echo $hakkimizdacek['hakkimizda_misyon']; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Misyon Giriniz">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Vizyon</label>
                  <input name="vizyon" value="<?php echo $hakkimizdacek['hakkimizda_vizyon']; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Vizyon Giriniz">
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="hakkimizdakaydet" type="submit" class="btn btn-primary">Kaydet</button>
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
 