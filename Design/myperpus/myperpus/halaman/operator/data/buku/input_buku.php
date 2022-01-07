<?php

include '../../../../koneksi.php';

$kode_buku = $_POST ['kode_buku'];
$judul_buku = $_POST ['judul_buku'];
$penulis_buku = $_POST ['penulis_buku'];
$penerbit_buku = $_POST ['penerbit_buku'];
$tahun_terbit = $_POST ['tahun_terbit'];
$jumlah_buku = $_POST ['jumlah_buku'];

$sql = "INSERT INTO tab_buku (kode_buku,judul_buku,penulis_buku,penerbit_buku,tahun_terbit,jumlah_buku) VALUES ('$kode_buku', '$judul_buku', '$penulis_buku', '$penerbit_buku', '$tahun_terbit', '$jumlah_buku')";
if (mysqli_query($koneksi, $sql)) {
      echo "<script>alert('Berhasil menambahkan data!');document.location='data_buku.php'</script>";
} else {
      echo "<script>alert('Gagal menambahkan data!');document.location='data_buku.php'</script>";
}

?>