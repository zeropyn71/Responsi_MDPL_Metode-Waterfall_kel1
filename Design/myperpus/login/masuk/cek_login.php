<?php

//panggil koneksi database
include "../../koneksi.php";

$pass = md5($_POST['password']);
$username = mysqli_escape_string($koneksi, $_POST['username']);
$password = mysqli_escape_string($koneksi, $pass);
$level = mysqli_escape_string($koneksi, $_POST['level']);

//cek username, terdaftar atau tidak
$cek_user = mysqli_query($koneksi, "SELECT * FROM tab_user WHERE username = '$username' and level='$level' ");
$user_valid = mysqli_fetch_array($cek_user);
//uji jika username terdaftar
if ($user_valid) {
    //jika username terdaftar
    //cek password sesuai atau tidak
    if ($password == $user_valid['password']) {
        //jika password sesuai
        //buat session
        session_start();
        $_SESSION['username'] = $user_valid['username'];
        $_SESSION['nama_lengkap'] = $user_valid['nama_lengkap'];
        $_SESSION['ulang_pass'] = $user_valid['ulang_pass'];
        $_SESSION['no_induk'] = $user_valid['no_induk'];
        $_SESSION['no_hp'] = $user_valid['no_hp'];
        $_SESSION['level'] = $user_valid['level'];

        //uji level user
        if ($level == "Anggota") {
            header('location:../../halaman/anggota/dashboard.php');
        } elseif ($level == "Operator") {
            header('location:../../halaman/operator/dashboard.php');
        } elseif ($level == "Admin") {
            header('location:../../halaman/admin/dashboard.php');
        }
    } else {
        echo "<script>alert('Maaf, Login Gagal, Password anda tidak sesuai!');document.location='index.php'</script>";
    }
} else {
    echo "<script>alert('Maaf, Login Gagal, Username anda tidak terdaftar!');document.location='index.php'</script>";
}
