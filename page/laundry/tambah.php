<script type="text/javascript">

  function sum() {
    var jumlah_kiloan = document.getElementById('jumlah_kiloan').value;
    var total = parseInt(jumlah_kiloan)*7000;

    if (!isNaN(total)){

      document.getElementById('nominal').value = total;

    }
  }

</script>

<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Transaksi Laundry</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST">
              <div class="box-body">


              <div class="form-group">
                <label>Minimal</label>
                <select class="form-control select2" style="width: 100%;" name="pelanggan" required="">
                  <option value=""> Pilih Pelanggan</option>

                <?php
                  
                  $sql = $koneksi->query("SELECT * FROM tb_pelanggan");
                  
                  while ($data=$sql->fetch_assoc()){
                    echo "

                      <option value='$data[kode_pelanggan]'>$data[nama]</option>
                    
                    ";
                  }

                ?>
                  
                </select>
              </div>
               
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Terima</label>
                  <input type="date" class="form-control" name="tgl_terima">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Selesai</label>
                  <input type="date" class="form-control" name="tgl_selesai">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Jumlah Kiloan</label>
                  <input type="number" class="form-control" onkeyup="sum();" id="jumlah_kiloan" name="jml_kiloan" required="">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Total</label>
                  <input type="number" class="form-control" name="total" id="nominal" readonly="">
                </div>

                <div class="form-group">
                <label>Minimal</label>
                <select class="form-control select2" style="width: 100%;" name="status" required="">
                  <option value=""> Pilih Status </option>

                    <option value="lunas"> Lunas </option>
                    <option value="belum lunas"> Belum Lunas </option>
                  
                </select>
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

  $pelanggan = $_POST['pelanggan'];
  $tgl_terima = $_POST['tgl_terima'];
  $tgl_selesai = $_POST['tgl_selesai'];
  $jml_kiloan = $_POST['jml_kiloan'];
  $total = $_POST['total'];
  $status = $_POST['status'];
  $catatan = $_POST['catatan'];

  $sql = $koneksi->query("insert into tb_laundry (id_pelanggan, kode_user, tanggal_terima, tanggal_selesai
  , jumlah_kiloan, nominal, status, catatan)
  values('$pelanggan', '$id_user', '$tgl_terima', '$tgl_selesai', '$jml_kiloan', '$total', '$status', '$catatan') ");

  if ($sql) {
    ?>

    <script type="text/javascript">
      alert ("Data Berhasil Disimpan");
      window.location.href="?page=laundry";
    </script> 
    
    <?php
  }

  if ($status="lunas"){

    $sql = $koneksi->query("insert into tb_transaksi (kode_user, tgl_transaksi, pemasukan
  , catatan, keterangan)
  values('$id_user', '$tgl_terima', '$total', '$catatan', 'pemasukan') ");

  if ($sql) {
    ?>

    <script type="text/javascript">
      alert ("Data Berhasil Disimpan");
      window.location.href="?page=laundry";
    </script> 
    
    <?php
  }

  }


}



?>