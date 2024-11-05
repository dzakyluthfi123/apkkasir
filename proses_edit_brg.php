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
    include "index.php";

    echo "<h3>Proses Update</h3>";
    if (isset($_POST['update'])) {

        $kode_brg = $_POST['kode_brg'];
        $nama_brg = $_POST['nama_brg'];
        $merk = $_POST['merk'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];

        $update = mysqli_query($koneksi, "UPDATE barang SET kode_brg='$kode_brg', nama_brg='$nama_brg', merk='$merk',
        harga= '$harga', jumlah= '$jumlah' WHERE kode_brg='$kode_brg'");

        if ($update) {
            echo "Berhasil Di Update <b>$nama_brg</b>";
        } else {
            echo "Gagal Untuk Di Update";
        }
    }
    ?>
</body>

</html>