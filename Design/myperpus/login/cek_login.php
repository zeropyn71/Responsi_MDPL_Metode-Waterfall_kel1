<?php

session_start();
include "../../koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($koneksi,"SELECT * FROM tab_user WHERE username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    
    $data = mysqli_fetch_assoc($login);

    // jika user admin
    if ($data['level']=="admin") {
        $_SESSION['username'] = $username;
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        header("location:../../halaman/admin/dashboard.php");
    }else if ($data['level']=="operator") {
        //operator
        $_SESSION['username'] = $username;
        $_SESSION['nama_lengkap'] = $nama_lengkap;
        $_SESSION['level'] = "operator";
        header("location:../../halaman/operator/dashboard.php");
    }else if ($data['level']=="anggota") {
        //anggota
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "angggota";
        header("location:../../halaman/anggota/dashboard.php");
    }else {
        echo "<script>alert('Maaf, Login Gagal, Username atau Password anda tidak sesuai!');document.location='index.php'</script>";;
    }
}else {
    echo "<script>alert('Maaf, Login Gagal, Username atau Password anda tidak terdaftar!');document.location='index.php'</script>";;
}

?>