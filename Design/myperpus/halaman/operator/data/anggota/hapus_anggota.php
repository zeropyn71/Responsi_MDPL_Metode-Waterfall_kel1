<?php
include '../../../../koneksi.php';
$hapus = mysqli_query($koneksi,"DELETE FROM tab_user WHERE no_induk = '$_GET[id]'");

if($hapus){
    echo "<script>alert('Berhasil menghapus data!');document.location='data_anggota.php'</script>";
}else {
    echo "<script>alert('Gagal menghapus data!');document.location='data_anggota.php'</script>";
}


?>