<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "index.php";
    include "config.php";
    echo "<h3>Proses Simpan Barang</h3>";
    if (isset($_POST['tambah'])) {

        $kode_brg = $_POST['kode_brg'];
        $nama_brg = $_POST['nama_brg'];
        $merk = $_POST['merk'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];

        $cek = mysqli_query($koneksi, "SELECT * FROM barang WHERE kode_brg= 'kode_brg'");
        if (mysqli_num_rows($cek) > 0) {
            echo "Data sudah ada, silahkan ganti yang lain";
        } else {
            $simpan = mysqli_query($koneksi, "INSERT INTO barang VALUES ('$kode_brg', '$nama_brg', '$merk', '$harga', '$jumlah')");
            if ($simpan) {
                echo "Berhasil Menyimpan <b>$nama_brg</b>";
            } else {
                echo "Gagal Menyimpan";
            }
        }
    }
    ?>
</body>

</html>