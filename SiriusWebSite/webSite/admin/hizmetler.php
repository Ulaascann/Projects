<?php require_once 'header.php';
require_once 'sidebar.php';
 ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

      <div class="row">

        <section class="col-lg-12 connectedSortable">
          <?php if (@$_GET['yukleme']=="basarili") { ?>
          <b style="color:green">Yükleme işleminiz başarılı bir şekilde gerçekleşmiştir.</b>
        <?php   } elseif(@$_GET['yukleme']=="basarisiz"){ ?>
          <b style="color:red">Yükleme işleminiz başarısız olmuştur.</b>

        <?php } ?>
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Hizmetler</h3>

              <a href="hizmet-ekle.php"><button type="button" class="btn btn-primary" style="float:right" >Hizmet Ekle</button>
</a>
                </div>

                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Hizmet Fotoğraf</th>
                      <th>Hizmet Sıra</th>
                      <th>Hizmet Başlık</th>
                      <th>Hizmet Fiyat</th>
                      <th>Düzenle</th>
                      <th>Sil</th>
                    </tr>
 <?php $hizmet=$baglan->prepare("SELECT * FROM hizmetler order by hizmet_sira ASC");

 $hizmet->execute();
while ($hizmetcek=$hizmet->fetch(PDO::FETCH_ASSOC)) { ?>

                    <tr style=" height:50px !important">
                      <td><img style="width:300px !important" src="../resimler/<?php echo $hizmetcek['hizmet_resim'] ?>"></td>
                      <td><?php echo $hizmetcek['hizmet_sira'] ?></td>
                      <td><?php echo $hizmetcek['hizmet_baslik'] ?></td>
                      <td><?php echo $hizmetcek['hizmet_fiyat'] ?></td>
                      <td ><a href="hizmet-duzenle.php?id=<?php echo $hizmetcek['hizmet_id'] ?>"><span style="width:75px !important; height:35px" class="btn btn-success">Düzenle</span>
           </a>
                      </td>

                      <td><form  action="yukle.php" method="post">

                      <input type="hidden" name="id" value="<?php echo $hizmetcek['hizmet_id'] ?>">
                        <input type="hidden" name="resim" value="<?php echo $hizmetcek['hizmet_resim'] ?>">
                        <button name="hizmetsil" style="width:75px !important; height:35px" class="btn btn-danger">Sil</button>
                          </form>
                      </td>
                      
                    </tr>

<?php } ?>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
<?php require_once 'footer.php'; ?>
