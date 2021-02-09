<?php

$koneksi = mysqli_connect("localhost","root","","perpustakaan");

$id = $_GET["id_buku"];

$query = mysqli_query($koneksi,"DELETE FROM buku where id_buku=$id");

if($query>=0){
    echo
    "
        <script>
            alert('BERHASIL MENGHAPUS DATA MANTAP');
            document.location.href='buku1.php';
        </script>
    ";
}else {
    echo
    "
        <script>
            alert('GAGAL MENGHAPUS DATA MANTAP');
            document.location.href='buku1.php';
        </script>
    ";
}

?>