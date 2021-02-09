<?php
$connect = mysqli_connect("localhost","root","","perpustakaan");

if(isset($_POST["submit"])){

    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $alamat = $_POST["alamat"];
    $jurusan = $_POST["jurusan"];
    $email = $_POST["email"];

    $query = ("INSERT INTO siswa VALUES('','$nama','$kelas','$alamat','$jurusan','$email')");
    $siswa = mysqli_query($connect,$query);
    
    if($siswa>0){
        echo
        "
            <script>
                alert('BERHASIL MENAMBAHKAN DATA MANTAP');
                document.location.href='siswa.php';
            </script>
        ";
    }
    var_dump($siswa);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Siswa</title>
</head>
<body>
    <center>
        <form action="" method="post">
        <h1>FORM TAMBAH DATA SISWA</h1>
        <br>
            <table>
              
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas" required></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" required></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><input type="text" name="jurusan" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="text" name="email" required></td>
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