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
    ?>
    <h2>Tambah Barang</h2>
    <form action="simpan_barang.php" method="post" enctype="multipart/form-data">
        <div align="center">

            <tr>
                <td>Kode Barang :</td>
                <td><input type="text" name="kode_brg" size="26" required></td>
            </tr>
            <br>
            <tr>
                <td>Nama Barang :</td>
                <td><input type="text" name="nama_brg" size="26" required></td>
            </tr>
            <br>
            <tr>
                <td>Merk :</td>
                <td><input type="text" name="merk" size="26" required></td>
            </tr>
            <br>
            <tr>
                <td>Harga :</td>
                <td><input type="text" name="harga" size="26" required></td>
            </tr>
            <br>
            <tr>
                <td>Jumlah Stok :</td>
                <td><input type="text" name="jumlah" size="26" required></td>
            </tr>
            <br>
            <br>
            <br>

            <tr>
                <td colspan="3"><input type="submit" style="text-decoration: none;" name="tambah" value="simpan">
                    <input type="reset" value="reset">
                </td>
            </tr>
    </form>
</body>

</html>