<?php
$connect = mysqli_connect("localhost","root","","perpustakaan");

if(isset($_POST["submit"])){

    $judul = $_POST["judul"];
    $pengarang = $_POST["pengarang"];
    $kategori = $_POST["kategori"];

    $query = ("INSERT INTO buku VALUES('','$judul','$pengarang','$kategori')");
    $siswa = mysqli_query($connect,$query);
    
    if($siswa>0){
        echo
        "
            <script>
                alert('BERHASIL MENAMBAHKAN DATA MANTAP');
                document.location.href='buku1.php';
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
    <title>Tambah Data Buku</title>
</head>
<body>
    <center>
        <form action="" method="post">
        <h1>FORM TAMBAH DATA BUKU</h1>
        <br>
            <table>
              
                <tr>
                    <td>Judul</td>
                    <td>:</td>
                    <td><input type="text" name="judul" required></td>
                </tr>
                <tr>
                    <td>Pengarang</td>
                    <td>:</td>
                    <td><input type="text" name="pengarang" required></td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td>:</td>
                    <td><input type="text" name="kategori" required></td>
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