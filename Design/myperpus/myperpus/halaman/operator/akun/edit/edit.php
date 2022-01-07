<?php

include "../../../../koneksi.php";
session_start();

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Akun | Operator</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../../../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../../../assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="../../../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../../../assets/css/custom.css" rel="stylesheet" />
    <!-- TABLE STYLES-->
    <link href="../../../assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">
                    MyPerpus
                </a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="../../../logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="../../../assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a href="../../dashboard.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table fa-3x"></i>Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../../data/buku/data_buku.php">Data Buku</a>
                            </li>
                            <li>
                                <a href="../../data/transaksi/transaksi_buku.php">Data Transaksi</a>
                            </li>
                            <li>
                                <a href="../../data/anggota/data_anggota.php">Data Anggota</a>
                            </li>
                    </li>	
                </ul>
                <li>
                        <a href="#"><i class="fa fa-desktop fa-3x"></i>Akun<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../tambah/tambah_anggota.php">Tambah Akun Anggota</a>
                            </li>
                            <li>
                                <a class="active-menu" href="edit.php">Edit Akun</a>
                            </li>
                    </li>
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Edit Akun</h2>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                 <form role="form" action="proses_edit.php" method="POST">
                    <div class="form-group">
                        <label>No Induk</label>
                        <input class="form-control" name="no_induk" value="<?= $_SESSION['no_induk'] ?>" readonly/>
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input class="form-control" name="nama_lengkap" value="<?= $_SESSION['nama_lengkap'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" name="username" value="<?= $_SESSION['username'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Nomer Handphone</label>
                        <input class="form-control" name="no_hp" value="<?= $_SESSION['no_hp'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" value="<?= $_SESSION['ulang_pass'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Ulangi Password</label>
                        <input type="password" class="form-control" name="ulang_pass" required />
                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        <input class="form-control" name="level" value="Operator" readonly />
                    </div>  
                    <div>
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                        <input type="reset" value="Batal" class="btn btn-danger">
                    </div>
                                                                               
                </form>
                 <!-- /. ROW -->         
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../../../assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../../../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../../../assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="../../../assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="../../../assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../../../assets/js/custom.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="../../../assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="../../../assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
      $(document).ready(function () {
        $("#dataTables-example").dataTable();
      });
    </script>
    
   
</body>
</html>
