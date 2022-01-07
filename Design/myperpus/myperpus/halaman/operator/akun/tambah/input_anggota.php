<?php

include '../../../../koneksi.php';

$no_induk = $_POST ['no_induk'];
$nama_lengkap = $_POST ['nama_lengkap'];
$username = $_POST ['username'];
$no_hp = $_POST ['no_hp'];
$password = $_POST ['password'];
$ulang_pass = $_POST ['ulang_pass'];
$level = $_POST ['level'];

if ($password == $ulang_pass) {
      $pass_ok = md5($_POST['password']);
      $sql = mysqli_query($koneksi, "INSERT INTO tab_user 
      (no_induk,nama_lengkap,username,no_hp,password,ulang_pass,level) 
      VALUES ('$no_induk', '$nama_lengkap', '$username', '$no_hp', '$pass_ok', '$ulang_pass', '$level')");
      if ($sql) {
            echo "<script>
                        alert('Berhasil menambahkan data!');document.location='tambah_anggota.php'
                  </script>";
      }else {
            echo "<script>
                  alert('Gagal menambahkan data!');document.location='tambah_anggota.php'
            </script>";
      }
}else {
      echo "<script>
                  alert('Gagal menambahkan data!, password dan ulangi password tidak sesuai!');document.location='tambah_anggota.php'
            </script>";
}

?>