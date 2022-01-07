<?php
include '../../../../koneksi.php';
$hapus = mysqli_query($koneksi,"DELETE FROM tab_buku WHERE kode_buku = '$_GET[id]'");

if($hapus){
    echo "<script>alert('Berhasil menghapus data!');document.location='data_buku.php'</script>";
}else {
    echo "<script>alert('Gagal menghapus data!');document.location='data_buku.php'</script>";
}


?>