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

    $kode_brg = $_GET['id'];

    $sql = "DELETE FROM barang WHERE kode_brg='$kode_brg'";
    $hapus = mysqli_query($koneksi, $sql);

    if ($hapus) {
        echo "Data Berhasil Dihapus";
    } else {
        echo "Data Gagal Dihapus";
    }
    ?>
</body>

</html>