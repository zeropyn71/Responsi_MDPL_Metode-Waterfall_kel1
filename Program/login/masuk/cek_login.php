<?php

session_start();
include "../../koneksi.php";

$pass = md5($_POST['password']);
$username = mysqli_escape_string($koneksi, $_POST['username']);
$password = mysqli_escape_string($koneksi, $pass);

$q1 = mysqli_query($koneksi, "SELECT * FROM tab_petugas WHERE username='$username' AND password='$password'");
$r1 = mysqli_fetch_array($q1);
$q2 = mysqli_query($koneksi, "SELECT * FROM tab_anggota WHERE username='$username' AND password='$password'");
$r2 = mysqli_fetch_array($q2);

if (mysqli_num_rows($q1) == 1) {
    if ($password == $r1['password']) {
        $_SESSION['username'] = $r1['username'];
        $_SESSION['password'] = $r1['password'];
        $_SESSION['no_petugas'] = $r1['no_petugas'];
        $_SESSION['nama_petugas'] = $r1['nama_petugas'];
        $_SESSION['ulang_pass'] = $r1['ulang_pass'];
        header('location:../../halaman/petugas/dashboard.php');
    }else {
        echo "<script>alert('Maaf, Login Petugas Gagal, Password anda tidak sesuai!');document.location='index.php'</script>";
    }    
}
elseif (mysqli_num_rows($q2) == 1) {
    if ($password == $r2['password']) {
        $_SESSION['username'] = $r2['username'];
        $_SESSION['password'] = $r2['password'];
        $_SESSION['no_anggota'] = $r2['no_anggota'];
        $_SESSION['nama_anggota'] = $r2['nama_anggota'];
        $_SESSION['email'] = $r2['email'];
        $_SESSION['no_hp'] = $r2['no_hp'];
        $_SESSION['alamat'] = $r2['alamat'];
        $_SESSION['ulang_pass'] = $r2['ulang_pass'];
        header('location:../../halaman/anggota/dashboard.php');
    }else {
        echo "<script>alert('Maaf, Login Anggota Gagal, Password anda tidak sesuai!');document.location='index.php'</script>";
    }  
}else {
    echo "<script>alert('Maaf, Login Gagal, Username anda tidak terdaftar!');document.location='index.php'</script>";
}

?>