<?php

  $sql = $koneksi->query("SELECT * FROM tb_user");
  $pengguna = $sql->num_rows;

  $sql2 = $koneksi->query("SELECT * FROM tb_pelanggan");
  $pelanggan = $sql2->num_rows;

  $sql23 = $koneksi->query("SELECT * FROM tb_laundry");
  $laundry = $sql23->num_rows;

  $sql4 = $koneksi->query("SELECT * FROM tb_transaksi");
  $transaksi= $sql4->num_rows;

?>

<section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3> <?php echo $pengguna; ?> </h3>

              <p>Pengguna</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="?page=pengguna" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3> <?php echo $pelanggan; ?> <sup style="font-size: 20px"></sup></h3>

              <p>Pelanggan</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="?page=pelanggan" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3> <?php echo $laundry; ?> </h3>

              <p>Transaksi Laundry</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="?page=laundry" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3> <?php echo $transaksi; ?> </h3>

              <p>Transaksi Pemasukan dan Pengeluaran</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="?page=transaksi" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
