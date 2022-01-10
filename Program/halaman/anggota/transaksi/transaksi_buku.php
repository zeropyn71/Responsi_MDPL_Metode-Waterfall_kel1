<?php

session_start();

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Transaksi | Anggota</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../../assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="../../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../../assets/css/custom.css" rel="stylesheet" />
    <!-- TABLE STYLES-->
    <link href="../../assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="">
                    Perpustakaan<h6>SMA N 1 Yogyakarta</h6>
                </a>  
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="../logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="../../assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a href="../dashboard.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table fa-3x"></i>Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../buku/daftar_buku.php">Daftar Buku</a>
                            </li>
                            <li>
                                <a class="active-menu" href="transaksi_buku.php">Transaksi</a>
                            </li>
                    </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Daftar Transaksi</h2>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                 <div class="panel panel-default">
                <div class="panel-heading">
                    <h5>Daftar Transaksi</h5>
                </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Buku</th>
                                            <th>Judul Buku</th>
                                            <th>Petugas</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Jatuh Tempo</th>
                                            <th>Terlambat (Denda)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        
                                        include "../../../koneksi.php";
                                        $no_anggota = $_SESSION['no_anggota'];
                                        $no = 1;
                                        $ambil = mysqli_query($koneksi,"SELECT*FROM tab_transaksi
                                        INNER JOIN tab_buku ON tab_buku.kode_buku = tab_transaksi.kode_buku
                                        INNER JOIN tab_petugas ON tab_petugas.no_petugas = tab_transaksi.no_petugas
                                        INNER JOIN tab_pinjam ON tab_pinjam.kode_pinjam = tab_transaksi.kode_pinjam
                                        WHERE status='Pinjam' and no_anggota = '$no_anggota'");
                                        while ($data = mysqli_fetch_array($ambil)) {
                                            ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $data['kode_buku']; ?></td>
                                                <td><?php echo $data['judul_buku']; ?></td>
                                                <td><?php echo $data['nama_petugas']; ?></td>
                                                <td><?php echo $data['tgl_pinjam']; ?></td>
                                                <td><?php echo $data['jatuh_tempo']; ?></td>
                                                <td>
                                                <?php

                                                    include_once "terlambat_kembali.php";

                                                    $denda = 1000;

                                                    $tanggal_dateline = $data['jatuh_tempo'];

                                                    $tgl_kembali=date('Y-m-d');

                                                    $lambat = terlambat($tanggal_dateline, $tgl_kembali);

                                                    $denda1 = $lambat*$denda;

                                                    if ($lambat>0) {
                                                        echo "<font color='red'>$lambat hari<br>(Rp $denda1) </font>";
                                                    }else{
                                                        echo $lambat . " hari";
                                                    }

                                                ?>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>                                        
                                    </tbody>
                                </table>
                                <a href="histori_transaksi.php" class="btn btn-primary">Riwayat Transaksi</a>
                            </div>
                            
                        </div>
                    </div>
                    
                    
                 <!-- /. ROW -->         
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../../assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../../assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="../../assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="../../assets/js/morris/morris.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="../../assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="../../assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
      $(document).ready(function () {
        $("#dataTables-example").dataTable();
      });
    </script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../../assets/js/custom.js"></script>
    
    
   
</body>
</html>
