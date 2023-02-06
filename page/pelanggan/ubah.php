<?php

    $kode = $_GET['id'];
    $sql = $koneksi->query("SELECT * FROM tb_pelanggan WHERE kode_pelanggan='$kode'");
    $data = $sql->fetch_assoc();

?>
<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Pengguna</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Pelanggan</label>
                  <input type="text" class="form-control" value="<?php echo $data['kode_pelanggan'] ?>" readonly name="kode">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <input type="text" class="form-control" value="<?php echo $data['nama'] ?>" name="nama">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">No.Telpon</label>
                  <input type="text" class="form-control" value="<?php echo $data['telpon'] ?>" name="telpon">
                </div>
                
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" rows="3" name="alamat"><?php echo $data['alamat']; ?></textarea>
                </div>

              <div class="box-footer">
                <button type="submit" name="simpan" class="btn btn-primary">Ubah</button>
              </div>
            </form>
          </div>

<?php

if (isset($_POST['simpan']))
{

  $nama = $_POST['nama'];
  $telpon = $_POST['telpon'];
  $alamat = $_POST['alamat'];

  $sql2 = $koneksi->query(" update tb_pelanggan set nama='$nama', telpon='$telpon', alamat='$alamat' where kode_pelanggan
  ='$kode' ");

  if ($sql2) {
    ?>

    <script type="text/javascript">
      alert ("Data Berhasil Diubah");
      window.location.href="?page=pelanggan";
    </script> 
    
    <?php
  }

}



?>