<?php

include "../../../../koneksi.php";

$no_induk = $_POST ['no_induk'];
$nama_lengkap = $_POST ['nama_lengkap'];
$username = $_POST ['username'];
$no_hp = $_POST ['no_hp'];
$password = $_POST ['password'];
$ulang_pass = $_POST ['ulang_pass'];
$level = $_POST ['level'];

if ($password == $ulang_pass) {
    $pass_ok = md5($password);
    $proses = mysqli_query($koneksi,"UPDATE tab_user SET 
    nama_lengkap = '$nama_lengkap', 
    username = '$username',
    no_hp = '$no_hp', 
    password = '$pass_ok', 
    ulang_pass = '$ulang_pass', 
    level = '$level' 
    WHERE no_induk = '$no_induk'");

    if ($proses) {
        echo "<script>
                 alert('Berhasil mengubah data, silahkan logout dan  login kembali untuk merefresh!');document.location='edit.php'
             </script>";
    }else {
        echo "<script>
                alert('Gagal mengubah data!');document.location='edit.php'
            </script>";
    }
}else {
    echo "<script>
            alert('Gagal mengubah data!, password dan ulangi password tidak sesuai...!');document.location='edit.php'
        </script>";
}

?>