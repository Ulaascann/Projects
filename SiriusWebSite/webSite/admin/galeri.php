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
                  <h3 class="box-title">Galeri</h3>

              <a href="galeri-ekle.php"><button type="button" class="btn btn-primary" style="float:right" >Fotoğraf Ekle</button>
</a>
                </div>

                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Galeri Fotoğrafları</th>
                      <th>Galeri Sıra</th>
                      <th>Düzenle</th>
                      <th>Sil</th>
                    </tr>
 <?php $galeri=$baglan->prepare("SELECT * FROM galeri order by galeri_sira ASC");

 $galeri->execute();
while ($galericek=$galeri->fetch(PDO::FETCH_ASSOC)) { ?>

                    <tr style=" height:50px !important">
                      <td><img style="width:300px !important" src="../resimler/<?php echo $galericek['galeri_resim'] ?>"></td>
                      <td><?php echo $galericek['galeri_sira'] ?></td>
                      <td ><a href="galeri-duzenle.php?id=<?php echo $galericek['galeri_id'] ?>"><span style="width:75px !important; height:35px" class="btn btn-success">Düzenle</span>
           </a>
                      </td>

                      <td>
                        <form  action="yukle.php" method="post">

                      <input type="hidden" name="id" value="<?php echo $galericek['galeri_id'] ?>">
                        <input type="hidden" name="resim" value="<?php echo $galericek['galeri_resim'] ?>">
                        <button name="galerisil" style="width:75px !important; height:35px" class="btn btn-danger">Sil</button>
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
