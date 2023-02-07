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
                  <h3 class="box-title">Slider</h3>

              <a href="slider-ekle.php"><button type="button" class="btn btn-primary" style="float:right" >Slider Ekle</button>
</a>
                </div>

                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Slider Fotoğrafları</th>
                      <th>Slider Başlık</th>
                      <th>Slider Sıra</th>
                      <th>Düzenle</th>
                      <th>Sil</th>
                    </tr>
 <?php $slider=$baglan->prepare("SELECT * FROM slider order by slider_sira ASC");

 $slider->execute();
while ($slidercek=$slider->fetch(PDO::FETCH_ASSOC)) { ?>

                    <tr style=" height:50px !important">
                      <td><img style="width:300px !important" src="../resimler/<?php echo $slidercek['slider_resim'] ?>"></td>
                      <td><?php echo $slidercek['slider_baslik'] ?></td>
                      <td><?php echo $slidercek['slider_sira'] ?></td>
                      <td ><a href="slider-duzenle.php?id=<?php echo $slidercek['slider_id'] ?>"><span style="width:75px !important; height:35px" class="btn btn-success">Düzenle</span>
           </a>
                      </td>

                      <td>
                        <form  action="yukle.php" method="post">

                      <input type="hidden" name="id" value="<?php echo $slidercek['slider_id'] ?>">
                        <input type="hidden" name="resim" value="<?php echo $slidercek['slider_resim'] ?>">
                        <button name="slidersil" style="width:75px !important; height:35px" class="btn btn-danger">Sil</button>
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
