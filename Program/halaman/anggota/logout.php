<?php

session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['no_anggota']);
unset($_SESSION['nama_anggota']);
unset($_SESSION['email']);
unset($_SESSION['no_hp']);
unset($_SESSION['alamat']);
unset($_SESSION['ulang_pass']);

session_destroy();
echo "<script>alert('Berhasil logout!');document.location='../../login/masuk/index.php'</script>";
