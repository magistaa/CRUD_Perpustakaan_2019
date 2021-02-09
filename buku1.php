<?php
$connect = mysqli_connect("localhost","root","","perpustakaan");
$query = mysqli_query($connect,"SELECT * FROM buku");
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
          <li><a href="index.php">HOME</a></li>
          <li><a href="buku1.php">Buku</a></li>
          <li><a href="siswa.php">Siswa</a></li>
          <li><a href="Peminjam.php">Peminjaman</a></li>
        </ul>
<center>
<a href="tambah.php">+ TAMBAH DATA</a>
<br></br>
    <table style= "border-collapse : collapse">
        <tr style= "background-color :">
            <td>ID Buku</td>
            <td>Judul</td>
            <td>Pengarang</td>
            <td>Kategori</td>
            <td>Aksi</td>
        </tr>

        <?php $i=1; ?>
        <?php
        while ($siswa = mysqli_fetch_assoc($query)): ?>
        <tr>
            <td><?php echo $i ?></td>
            
            <td><?php echo $siswa["judul"]?></td>
            <td><?php echo $siswa["pengarang"] ?></td>
            <td><?php echo $siswa["kategori"] ?></td>

              <td>
            <a href="ubahbuku.php?id_buku=<?php echo $siswa['id_buku'];?>"><button class="ubah">ubah</button></a>
            <a href="hapusbuku.php?id_buku=<?php echo $siswa['id_buku'];?>"><button class="hapus"> hapus</button></a>
            </td>

        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>    
</center>
</body>
</html>