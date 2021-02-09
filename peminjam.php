<?php
$connect = mysqli_connect("localhost","root","","perpustakaan");
$query = mysqli_query($connect,"SELECT * FROM peminjam");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <h1>DATA PEMINJAM SMK TELKOM MALANG</h1>
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a href="buku1.php">Buku</a></li>
          <li><a href="siswa.php">Siswa</a></li>
          <li><a href="peminjam.php">Peminjaman</a></li>
        </ul>
<center>
<a href="tambah_peminjam.php">+ TAMBAH DATA</a>
<br></br>
    <table style= "border-collapse : collapse">
        <tr style= "background-color :">
            <td>Id</td>
            <td>Nama</td>
            <td>Tgl_peminjaman</td>
            <td>Tgl_kembali</td>
            <td>Judul</td>
            <td>Aksi</td>
            
        </tr>

        <?php $i=1; ?>
        <?php
        while ($siswa = mysqli_fetch_assoc($query)): ?>
        <tr>
            <td><?php echo $i ?></td>
            
            <td><?php echo $siswa["nama"]?></td>
            <td><?php echo $siswa["tgl_peminjaman"]; 

            // var_dump($siswa['tgl_peminjaman']);

            ?></td>
            <td><?php echo $siswa["tgl_kembali"] ?></td>
            <td><?php echo $siswa["judul"] ?></td>

              <td>
            <button class="ubah"><a href="ubahpeminjam.php?id=<?php echo $siswa['id'];?>">ubah</a></button>
            <button class="hapus"><a href="hapuspeminjaman.php?id=<?php echo $siswa['id'];?>"> hapus</a></button>
            </td>

        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>    
</center>
</body>