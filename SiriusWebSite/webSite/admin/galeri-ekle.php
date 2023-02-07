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


          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Fotoğraf Ekle</h3>
            </div>
            <!-- /.box-header -->


            <form action="yukle.php" method="POST"  enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Fotoğraf</label>
                  <input name="resim"  type="file" class="form-control" id="exampleInputEmail1" >
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Sıra</label>
                  <input name="sira" type="text" class="form-control" id="exampleInputEmail1" placeholder="Sıra Giriniz">
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="galerikaydet" type="submit" class="btn btn-primary">Kaydet</button>
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
