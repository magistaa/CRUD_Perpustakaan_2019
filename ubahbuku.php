<?php
$koneksi = mysqli_connect("localhost","root","","perpustakaan");

$id = $_GET["id_buku"];
$querys = mysqli_query($koneksi,"SELECT * FROM buku where id_buku=$id");
$siswa = mysqli_fetch_assoc($querys);

if(isset($_POST["submit"])){
    $judul = $_POST["judul"];
    $pengarang = $_POST["pengarang"];
    $kategori = $_POST["kategori"];

    $query = ("UPDATE buku SET judul = '$judul', pengarang = '$pengarang', kategori = '$kategori' WHERE id_buku=$id");
    $siswa = mysqli_query($koneksi,$query);
    
    if($siswa>=0){
        echo
        "
            <script>
                alert('BERHASIL MENGUBAH DATA MANTAP');
                document.location.href='buku1.php';
            </script>
        ";
    }else {
        echo
        "
            <script>
                alert('GAGAL MENGUBAH DATA MANTAP');
                document.location.href='buku1.php';
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UBAH DATA BUKU</title>
</head>
<body>
    <center>
        <form action="" method="post">
        <h1>FORM TAMBAH DATA</h1>
        <br>
            <table>
                <tr>
                    <td>Judul</td>
                    <td>:</td>
                    <td><input type="text" name="judul" value="<?php echo $siswa["judul"] ?>" required></td>
                </tr>
                <tr>
                    <td>Pengarang</td>
                    <td>:</td>
                    <td><input type="text" name="pengarang" value="<?php echo $siswa["pengarang"] ?>" required></td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td>:</td>
                    <td><input type="text" name="kategori" value="<?php echo $siswa["kategori"] ?>" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="submit" value="Tambah Data" required></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>