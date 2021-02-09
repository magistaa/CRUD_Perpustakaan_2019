<?php

$koneksi = mysqli_connect("localhost","root","","perpustakaan");

$nis = $_GET["nis"];

$query = mysqli_query($koneksi,"DELETE FROM siswa where nis=$nis");

if($query>=0){
    echo
    "
        <script>
            alert('BERHASIL MENGHAPUS DATA MANTAP');
            document.location.href='siswa.php';
        </script>
    ";
}else {
    echo
    "
        <script>
            alert('GAGAL MENGHAPUS DATA MANTAP');
            document.location.href='siswa.php';
        </script>
    ";
}

?>