<?php
$koneksi = mysqli_connect("localhost","root","","perpustakaan");

$id = $_GET["id"];
$querys = mysqli_query($koneksi,"SELECT * FROM peminjam where id=$id");
$siswa = mysqli_fetch_assoc($querys);

if(isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $tgl_peminjaman = $_POST["tgl_peminjaman"];
    $tgl_kembali = $_POST["tgl_kembali"];
    $judul = $_POST["judul"];

    $query = ("UPDATE peminjam SET nama = '$nama', tgl_peminjaman = '$tgl_peminjaman', tgl_kembali = '$tgl_kembali', 
               judul = '$judul' WHERE id='$id' ");
    $siswa = mysqli_query($koneksi,$query);

    var_dump($siswa);

    if($siswa>0){
        echo
        "
            <script>
                alert('BERHASIL MENGUBAH DATA MANTAP');
                document.location.href='peminjam.php';
            </script>
        ";
    }

    else {
        echo
        "
            <script>
                alert('GAGAL MENGUBAH DATA MANTAP');
                document.location.href='peminjam.php';
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
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value="<?php echo $siswa["nama"] ?>" required></td>
                </tr>
                <tr>
                    <td>tgl_peminjaman</td>
                    <td>:</td>
                    <td><input type="date" name="tgl_peminjaman" value="<?php echo $siswa["tgl_peminjaman"] ?>" required></td>
                </tr>
                <tr>
                    <td>tgl_kembali</td>
                    <td>:</td>
                    <td><input type="date" name="tgl_kembali" value="<?php echo $siswa["tgl_kembali"] ?>" required></td>
                </tr>
                <tr>
                    <td>judul</td>
                    <td>:</td>
                    <td><input type="judul" name="judul" value="<?php echo $siswa["judul"] ?>" required></td>
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