<?php

include '../../../koneksi.php';

$judul_buku = $_POST ['judul_buku'];
$no_induk = $_POST ['no_induk'];
$nama_lengkap = $_POST ['nama_lengkap'];
$tgl_pinjam = $_POST ['tgl_pinjam'];
$tgl_kembali = $_POST ['tgl_kembali'];
$status = $_POST ['status'];

$sql = "INSERT INTO tab_transaksi (judul_buku,no_induk,nama_lengkap,tgl_pinjam,tgl_kembali,status) VALUES ('$judul_buku', '$no_induk', '$nama_lengkap', '$tgl_pinjam', '$tgl_kembali', '$status')";
if (mysqli_query($koneksi, $sql)) {
      echo "<script>alert('Berhasil meminjam buku!');document.location='transaksi_buku.php'</script>";
} else {
      echo "<script>alert('Gagal meminjam data!');document.location='transaksi_buku.php'</script>";
}

?>