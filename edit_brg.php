<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "config.php";

    $kode_brg = $_REQUEST['id'];
    $cek = mysqli_query($koneksi, "SELECT * FROM barang WHERE kode_brg=$kode_brg");
    $result = mysqli_fetch_array($cek);

    $kode_brg = $result['kode_brg'];
    $nama_brg = $result['nama_brg'];
    $merk = $result['merk'];
    $harga = $result['harga'];
    $jumlah = $result['jumlah'];

    include "index.php";
    ?>

    <h2>Edit Barang</h2>
    <form action="proses_edit_brg.php" method="post">
        <table width="450">
            <tr>
                <td>Kode Barang</td>
                <td><input type="text" name="kode_brg" value="<?php echo $kode_brg; ?>"></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama_brg" value="<?php echo $nama_brg; ?>"></td>
            </tr>
            <tr>
                <td>Merk</td>
                <td><input type="text" name="merk" value="<?php echo $merk; ?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" value="<?php echo $harga; ?>"></td>
            </tr>
            <tr>
                <td>Jumlah Stok</td>
                <td><input type="text" name="jumlah" value="<?php echo $jumlah; ?>"></td>
            </tr>

            <tr>
                <td colspan="3"><input type="submit" name="update" value="update"></td>
            </tr>
</body>

</html>