<?php

    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    include "../../include/koneksi.php";


?>

<script>


    window.print();
    window.onfocus=function () {window.close();}

</script>

<body onload="window.print()">

<div style="text-align: center"> Laporan Transaksi Pemasukan dan Pengeluaran </div><p><p>

<table width="100%" border="1">
    
    <thead>
        <tr> 
            <th>No</th>
            <th>Tanggal Transaksi</th>
            <th>Keterangan</th>
            <th>Catatan</th>
            <th>Kasir</th>
            <th>Pemasukan</th>
            <th>Pengeluaran</th>
        </tr>
    </thead>
    <tbody>
    <?php

            $no = 1;

            $sql = $koneksi->query("SELECT * FROM tb_transaksi, tb_user WHERE 
            tb_transaksi.kode_user=tb_user.id");
            while ($data = $sql->fetch_assoc()) {

            ?>
        <tr>
            <td> <?php echo $no++; ?> </td>

            <td> <?php echo $data ['tgl_transaksi'] ?> </td>
            <td> <?php echo $data ['keterangan'] ?> </td>
            <td> <?php echo $data ['catatan'] ?> </td>
            <td> <?php echo $data ['nama_user'] ?> </td>
            <td> <?php echo number_format($data['pemasukan']) ?> </td>
            <td> <?php echo number_format($data['pengeluaran']) ?> </td>
        </tr>

        <?php

        $masuk = $masuk + $data['pemasukan'];
        $keluar = $keluar + $data['pengeluaran'];
        $saldo = $masuk - $keluar;

        }
        ?>
    </tbody>

        <tr>
            <th colspan="5" style="text-align:center"> Total Pemasukan dan Pengeluaran</th>
                <td><?php echo number_format($masuk) ?></td>
                <td><?php echo number_format($keluar) ?></td>
        </tr>

        <tr>
            <th colspan="5" style="text-align:center"> Saldo Akhir </th>
                <td><?php echo number_format($saldo) ?></td>
                    
                </tr>
</table>

</body>