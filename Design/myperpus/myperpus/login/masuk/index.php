<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
    <meta name="generator" content="Hugo 0.88.1" />
    <title>Halaman Login · MyPerpus</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/" />

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet" />
  </head>
  <body class="text-center">
    <main class="form-signin">
      <form method="POST" action="cek_login.php" >
        <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57" /> -->
        <h1 class="h3 mb-3 fw-normal">Silahkan Login</h1>
        <p>Masukan Username dan Password Anda dengan Benar!</p>

        <?php
        if (isset($_GET['pesan'])) {
          if ($_GET['pesan']=="gagal") {
            echo "<div class='alert'>Username dan Password tidak sesuai!</div>";
          }
        }
        ?>

        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="username" id="floatingText" placeholder="Username" required/>
          <label for="floatingText">Username</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required/>
          <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating mb-3">
          <select name="level" type="user-select" class="form-control" id="floatingSelect">
            <option value="Anggota">Anggota</option>
            <option value="Operator">Operator</option>
            <option value="Admin">Admin</option>
          </select>
          <label for="floatingSelect">User Select</label>
        </div>

        <div class="checkbox mb-3">
          <label> <input type="checkbox" value="remember-me" /> Remember me </label>
        </div>
        <div>
          <button class="w-100 btn btn-lg btn-danger" type="submit" name="login">Sign in</button>
        </div>
        <p class="mt-5 mb-3 text-muted">&copy; Kelompok 1 | 2021–2021</p>
      </form>
    </main>
  </body>
</html>
