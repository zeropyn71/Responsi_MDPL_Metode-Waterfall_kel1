<?php

include '../../../../koneksi.php';

$update =  mysqli_query($koneksi,"UPDATE tab_buku SET judul_buku='$_POST[judul_buku]',
penulis_buku='$_POST[penulis_buku]',
penerbit_buku='$_POST[penerbit_buku]',
tahun_terbit='$_POST[tahun_terbit]' 
WHERE kode_buku='$_POST[id]'")or die(mysqli_error($koneksi));

if($update){
    echo "<script>alert('Berhasil mengubah data!');document.location='data_buku.php'</script>";
}else {
    echo "<script>alert('Gagal mengubah data!');document.location='data_buku.php'</script>";
}

?>