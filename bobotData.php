<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Pendukung Keputusann (Weight Product)</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
     <link rel="stylesheet" type="text/css" href="../fontawesome-free-5.15.2-web/css/all.min.css">
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
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
                <a class="navbar-brand" style="font-size: 12px;" href="index.php">Sistem Pendukung Keputusann (Weight Product) Pembelian Mobil</a> 
            </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				    <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                        <h3 style="color : white;"></h3>
					</li>
                    <li>
                        <a  href="index.php"><i class="fas fa-tachometer-alt fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a  href="tambahData.php"><i class="fas fa-clipboard-list fa-3x"></i>Form Tambah Data </a>
                    </li>
                    <li>
                        <a  href="hasil.php?sort=semua"><i class="fa fa-shopping-bag fa-3x"></i>Tabel Hasil</a>
                    </li>
					<li>
                        <a  class="active-menu" href="bobotData.php"><i class="fas fa-users fa-3x"></i>Tabel Bobot Data</a>
                    </li>
                </ul>              
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="container pt-5 pb-5" style="background-color: white;">
                    <h2 style="text-align: center;">Tabel Bobot Data</h2>
                    <hr>
                    <br>

                        <br><br>
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm">
                                <tr class="table-warning" >
                                    <th>Nama Mobil</th>
                                    <th>Grade Mesin</th>
                                    <th>Grade Interior</th>
                                    <th>Grade Eksterior</th>
                                    <th>Usia</th>
                                    <th>Kapasitas Mesin</th>
                                    <th>Harga</th>
                                </tr>


                                    <?php
                                    include("basisdata.php");
                                    $query = "SELECT * FROM bobot_data INNER JOIN data_mobil ON bobot_data.id_mobil = data_mobil.id"; 
                                    $hasil_mysql = mysqli_query($sambungan, $query) or die (mysqli_error($sambungan));
                                    while($baris = mysqli_fetch_row($hasil_mysql)) 
                                    { 
                                        $id_mobil = $baris[1]; 
                                        $bobot_mesin = $baris[2];
                                        $bobot_interior = $baris[3];
                                        $bobot_eksterior = $baris[4];
                                        $usia_bobot = $baris[5]; 
                                        $cc_bobot = $baris[6]; 
                                        $harga_bobot = $baris[7];

                                        $nama_mobil =$baris[9]; 
    
                                        ?>

                                        <tr>
                                            <td><?php echo ("$nama_mobil"); ?></td>
                                            <td><?php echo ("$bobot_mesin"); ?></td>
                                            <td><?php echo ("$bobot_interior"); ?></td>
                                            <td><?php echo ("$bobot_eksterior"); ?></td>
                                            <td><?php echo ("$usia_bobot"); ?></td>
                                            <td><?php echo ("$cc_bobot"); ?></td>
                                            <td><?php echo ("$harga_bobot"); ?></td>
                                        </tr>

                                        <?php
                                    } 
                                    ?> 
                           </table>
                        </div>
                </div>                        
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->







    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>