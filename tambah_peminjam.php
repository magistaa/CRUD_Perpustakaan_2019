<?php
$connect = mysqli_connect("localhost","root","","perpustakaan");

$query_nama = mysqli_query($connect, "SELECT * FROM siswa");

$query_judul = mysqli_query($connect, "SELECT * FROM buku");

if(isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $judul = $_POST["judul"];
    $tgl_peminjaman = $_POST["tgl_peminjaman"];
    $hari = $_POST['hari'];

    $tgl_kembali = date('Y-m-d',strtotime("+$hari Day",strtotime(date($tgl_peminjaman))));

    $query = ("INSERT INTO peminjam VALUES('','$nama','$tgl_peminjaman','$tgl_kembali','$judul')");
    $siswa = mysqli_query($connect,$query);
    
    if($siswa>0){
        echo
        "
            <script>
                alert('BERHASIL MENAMBAHKAN DATA MANTAP');
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
    <title>Tambah Data peminjaman</title>
    
</head>
<body>
    <center>
        <form action="" method="post">
        <h1>FORM TAMBAH DATA BUKU</h1>
        <br>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>
                        <select name="nama" style="width:100%;">
                            <option value="">PILIH NAMA SISWA</option>
                            <?php while ($siswa2 = mysqli_fetch_assoc($query_nama)):?>

                            <option value="<?php echo $siswa2['nama'];?>"><?php echo $siswa2["nama"];?></option>

                            <?php endwhile; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Judul</td>
                    <td>:</td>
                    <td>
                    <select name="judul" style="width:100%;">
                            <option value="">PILIH JUDUL BUKU</option>
                            <?php while ($siswa3 = mysqli_fetch_assoc($query_judul)):?>

                            <option value="<?php echo $siswa3['judul'];?>"><?php echo $siswa3["judul"];?></option>

                            <?php endwhile; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Pinjam</td>
                    <td>:</td>
                    <td><input type="date" name="tgl_peminjaman" value="<?php echo date('Y-m-d');?>" required></td>
                </tr>
                <tr>
                    <td>Jumlah Hari Pinjam</td>
                    <td>:</td>
                    <td><input type="text" name="hari" required></td>
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