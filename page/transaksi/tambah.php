

<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Transaksi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST">
              <div class="box-body">


              
            
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal</label>
                  <input type="date" class="form-control" name="tgl_transaksi">
                </div>


                <div class="form-group">
                  <label for="exampleInputPassword1">Nominal</label>
                  <input type="number" class="form-control" name="nominal">
                </div>

                
                <div class="form-group">
                  <label>Catatan</label>
                  <textarea class="form-control" rows="3" name="catatan"></textarea>
                </div>

              <div class="box-footer">
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>

<?php

if (isset($_POST['simpan']))
{

  $tgl_transaksi = $_POST['tgl_transaksi'];
  $nominal = $_POST['nominal'];
  $catatan = $_POST['catatan'];


    $sql = $koneksi->query("insert into tb_transaksi (kode_user, tgl_transaksi, pengeluaran
  , catatan, keterangan)
  values('$id_user', '$tgl_transaksi', '$nominal', '$catatan', 'pengeluaran') ");

  if ($sql) {
    ?>

    <script type="text/javascript">
      alert ("Data Berhasil Disimpan");
      window.location.href="?page=transaksi";
    </script> 
    
    <?php
  }

  }






?>