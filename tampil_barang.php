<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Barang</title>
</head>

<body>
    <?php
    include "config.php";
    include "index.php";

    echo "<h3>Tampil Barang</h3>
    <table border='1' width='600'>
    <tr><td>Kode barang</td><td>Nama barang</td><td>Merk</td><td>Harga</td><td>Jumlah</td><td>Aksi</tr>";

    $sql = "SELECT * FROM barang";
    $tampil = mysqli_query($koneksi, $sql);
    $ada = mysqli_num_rows($tampil);
    if ($ada > 0) {
        $no = 1;
        while ($data = mysqli_fetch_array($tampil)) {
            $kode_brg = $data['kode_brg'];
            $nama_brg = $data['nama_brg'];
            $merk = $data['merk'];
            $harga = $data['harga'];
            $jumlah = $data['jumlah'];

            echo "<tr><td>$kode_brg</td><td>$nama_brg</td><td>$merk</td><td>$harga</td><td>$jumlah</td>
            <td><a href= 'edit_brg.php?id=$kode_brg'>Edit</a>
            <td><a href= 'hapus_brg.php?id=$kode_brg'>Hapus</a></td></tr>";

            $no++;
        }
    }
    ?>
</body>

</html>