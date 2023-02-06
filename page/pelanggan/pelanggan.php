<section class="content">
    <div class="row">
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pelanggan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <a href="?page=pelanggan&aksi=tambah" class="btn btn-info" style="margin-bottom:10px;"> Tambah </a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Pelanggan</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No Telpon</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php

                    $no = 1;
                    $sql = $koneksi->query("SELECT * FROM tb_pelanggan");
                    while ($data = $sql->fetch_assoc()) {

                ?>

                <tr>
                  <td> <?php echo $no++; ?> </td>
                  <td> <?php echo $data ['kode_pelanggan'] ?></td>
                  <td> <?php echo $data ['nama'] ?> </td>
                  <td> <?php echo $data ['alamat'] ?> </td>
                  <td> <?php echo $data ['telpon'] ?> </td>
                  <td> 
                  
                  <a href="?page=pelanggan&aksi=ubah&id=<?php echo $data['kode_pelanggan']; ?>" class="btn btn-success" title=""><i class="fa fa-edit"></i> Ubah</a>
                  <a onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini')" href="?page=pelanggan&aksi=hapus&id=<?php echo $data['kode_pelanggan']; ?>" class="btn btn-danger" title=""><i class="fa fa-trash"></i> Hapus</a>
                  </td>

                </tr>
                
                <?php
                    }
                ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>