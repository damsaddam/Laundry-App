<?php

    $id = $_GET['id'];

    $sql = $koneksi->query("SELECT * FROM tb_laundry WHERE id_laundry='$id'");
    $data = $sql->fetch_assoc();

    $tanggal = $data['tanggal_terima'];
    $nominal = $data['nominal'];
    $catatan = $data['catatan'];

    $kode_user = $data['kode_user'];

    $sql2 = $koneksi->query("insert into tb_transaksi(kode_user, tgl_transaksi, pemasukan, catatan, keterangan)
    values('$kode_user', '$tanggal', '$nominal', '$catatan', 'pemasukan') ");

    $sql2 = $koneksi->query("update tb_laundry set status='lunas' where id_laundry
    ='$id'");

    if ($sql2) {
        ?>
    
        <script type="text/javascript">
          alert ("Data Berhasil Disimpan");
          window.location.href="?page=laundry";
        </script> 
        
        <?php
      }

?>