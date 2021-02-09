<?php
$connect = mysqli_connect("localhost","root","","perpustakaan");
$query = mysqli_query($connect,"SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <h1>DATA BUKU SMK TELKOM MALANG</h1>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="buku1.php">Buku</a></li>
          <li><a href="siswa.php">Siswa</a></li>
          <li><a href="Peminjam.php">Peminjaman</a></li>
        </ul>
<center>
<a href="tambah_siswa.php">+ TAMBAH DATA Siswa</a>
<br></br>
    <table style= "border-collapse : collapse">
        <tr style= "background-color :">
            <td>Nis</td>
            <td>Nama</td>
            <td>Kelas</td>
            <td>Alamat</td>
            <td>Jurusan</td>
            <td>Email</td>
            <td>Aksi</td>
        </tr>

        <?php $i=1; ?>
        <?php
        while ($siswa = mysqli_fetch_assoc($query)): ?>
        <tr>
            <td><?php echo $i ?></td>
            
            <td><?php echo $siswa["nama"]?></td>
            <td><?php echo $siswa["kelas"] ?></td>
            <td><?php echo $siswa["alamat"] ?></td>
            <td><?php echo $siswa["jurusan"] ?></td>
            <td><?php echo $siswa["email"] ?></td>

              <td>
            <button class="ubah"><a href="ubahsiswa.php?nis=<?php echo $siswa['nis'];?>">ubah</a></button>
            <button class="hapus"><a href="hapussiswa.php?nis=<?php echo $siswa['nis'];?>"> hapus</a></button>
            </td>

        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>    
</center>
</body>