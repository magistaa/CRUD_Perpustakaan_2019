<?php
$koneksi = mysqli_connect("localhost","root","","perpustakaan");

$nis = $_GET["nis"];
$querys = mysqli_query($koneksi,"SELECT * FROM siswa where nis=$nis");
$siswa = mysqli_fetch_assoc($querys);

if(isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $alamat = $_POST["alamat"];
    $jurusan = $_POST["jurusan"];
    $email = $_POST["email"];

    $query = ("UPDATE siswa SET nama = '$nama', kelas = '$kelas', alamat = '$alamat', jurusan = '$jurusan', email = '$email' WHERE nis=$nis");
    $siswa = mysqli_query($koneksi,$query);
    
    
     if($siswa>0){
         echo
         "
             <script>
                 alert('BERHASIL MENGUBAH DATA MANTAP');
                 document.location.href='siswa.php';
             </script>
         ";
     }else {
         echo
         "
             <script>
                 alert('GAGAL MENGUBAH DATA MANTAP');
                 document.location.href='siswa.php';
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
    <title>UBAH DATA SISWA</title>
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
                    <td>NIS</td>
                    <td>:</td>
                    <td><input type="text" name="kelas" value="<?php echo $siswa["kelas"] ?>" required></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" value="<?php echo $siswa["alamat"] ?>" required></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><input type="text" name="jurusan" value="<?php echo $siswa["jurusan"] ?>" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="text" name="email" value="<?php echo $siswa["email"] ?>" required></td>
                </tr><tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="submit" value="Tambah Data" required></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>