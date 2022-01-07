<?php

include '../../../../koneksi.php';

$kembali =  mysqli_query($koneksi,"UPDATE tab_transaksi SET judul_buku='$_POST[judul_buku]', 
no_induk='$_POST[no_induk]', 
nama_lengkap='$_POST[nama_lengkap]', 
tgl_pinjam='$_POST[tgl_pinjam]', 
tgl_kembali='$_POST[tgl_kembali]', 
status='$_POST[status]' WHERE id_transaksi='$_POST[id_transaksi]' ");

if($kembali){
    echo "<script>alert('Berhasil mengembalikan buku!');document.location='transaksi_buku.php'</script>";
}else {
    echo "<script>alert('Gagal mengembalikan buku!');document.location='transaksi_buku.php'</script>";
}

?>