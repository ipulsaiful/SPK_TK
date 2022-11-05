<?php include("header.php") ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-2">
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="container">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Informasi Taman Kanak-Kanak</h3>
          </div>
          <div class="card-body">
           <div class="row">
            <div class="col-sm-1 ml-auto">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah" data-whatever="@mdo">tambah</button>
            </div>

            <div class="col-sm-4">
              <form action="admin.php" method="post">
                <div class="input-group">
                  <input name="katakunci" type="search" class="form-control form-control-md" placeholder="masukkan kata kunci" autocomplete="off">
                  <div class="input-group-append">
                    <button name="cari" type="submit" class="btn btn-md btn-default">
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr class="bg-gray-dark color-palette">
                <th>No </th>
                <th>Nama TK</th>
                <th>Biaya SPP</th>
                <th>Biaya Masuk</th>
                <th>Batas Tampung Kelas</th>
                <th>Jumlah Pengajar Perkelas</th>
                <th>Akreditasi</th>
                <th>ABK</th>
                <th>Jumlah Fasilitas</th>
                <th width="100px">opsi</th>
              </tr>
            </thead>
            <tbody>

              <?php
              echo var_dump($_SESSION['array']);   
              include("LihatInformasiTK.php");

              if ($result->num_rows>0) {
                $number=1;
                while ( $row=$result->fetch_assoc()) { ?>

                  <tr>
                    <td><?php echo $number; ?></td>
                    <td><?php echo $row['Nama_TK']; ?></td>
                    <td><?php echo $row['biaya_spp']; ?></td>
                    <td><?php echo $row['biaya_masuk']; ?></td>
                    <td><?php echo $row['batas_tampung']; ?></td>
                    <td><?php echo $row['jumlah_pengajar']; ?></td>
                    <td><?php echo $row['akreditasi']; ?></td>
                    <td><?php echo $row['abk']; ?></td>
                    <td><?php echo $row['jumlah_fasilitas']; ?></td>
                    <td>
                      <a id="editdata" data-toggle="modal" data-target="#edit" data-id="<?php echo $row['Id_TK']; ?>" data-nama="<?php echo $row['Nama_TK']; ?>" data-spp="<?php echo $row['biaya_spp']; ?>" data-akreditasi="<?php echo $row['akreditasi']; ?>" data-masuk="<?php echo $row['biaya_masuk']; ?>" data-btk="<?php echo $row['batas_tampung']; ?>" data-pengajar="<?php echo $row['jumlah_pengajar']; ?>" data-abk="<?php echo $row['abk']; ?>" data-fasilitas="<?php echo $row['jumlah_fasilitas']; ?>">
                        <button class="btn btn-success btn-xs"><i class="fa fa-edit"></i>edit</button> </a>

                        

                        <a href="CrudDataTK.php?ACT=hapus&id=<?php echo $row['Id_TK']; ?>"><button class="btn btn-danger btn-xs">hapus <i class="fa fa-trash"></i>
                        </button></a></td>
                      </tr>
                      <?php 
                      $number++;
                    }
                  }

                  ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        
        
      </div>
      <!-- /.card -->
    </div>
    <!-- /.container-fluid -->
  </section>
</div>

<?php include("modal.php"); ?>
  
<!-- /.content-wrapper -->
<?php include("footer.php"); ?>
<script type="text/javascript">
  var akre = document.getElementById("akreditasitk");
  var anakbk = document.getElementById("abk");
  $(document).on("click","#editdata", function(){
    var idtk = $(this).data("id");
    var namatk = $(this).data("nama");
    var spp = $(this).data("spp");
    var akreditasi = $(this).data("akreditasi");
    var biayamasuk = $(this).data("masuk");
    var batas = $(this).data("btk");
    var pengajar = $(this).data("pengajar");
    var abk = $(this).data("abk");
    var fa = $(this).data("fasilitas");

    $("#modal-edit #idtk").val(idtk);
    $("#modal-edit #namatk").val(namatk);
    $("#modal-edit #biayaspp").val(spp);
    $("#modal-edit #biayamasuk").val(biayamasuk);
    $("#modal-edit #batastampung").val(batas);
    $("#modal-edit #jumlahpengajar").val(pengajar);
    $("#modal-edit #jumlahfasilitas").val(fa);

    for (var i = 0; i < anakbk.options.length; i++) {
      console.log(akre.options[i].text, abk)
      if (anakbk.options[i].text === abk) {
        anakbk.selectedIndex = i;
        break;
      }
    }


    for (var i = 0; i < akre.options.length; i++) {
      console.log(akre.options[i].text, akreditasi)
      if (akre.options[i].text === akreditasi) {
        akre.selectedIndex = i;
        break;
      }
    }

  })
</script>