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
                        <a  class="active-menu" href="tambahData.php"><i class="fas fa-clipboard-list fa-3x"></i>Form Tambah Data </a>
                    </li>
                    <li>
                        <a  href="hasil.php?sort=semua"><i class="fa fa-shopping-bag fa-3x"></i>Tabel Hasil</a>
                    </li>
					<li>
                        <a   href="bobotData.php"><i class="fas fa-users fa-3x"></i>Tabel Bobot Data</a>
                    </li>
                </ul>              
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->

        <div id="page-wrapper" >
            <div id="page-inner">
                <!-- Form Tambah -->
                <div class="container pt-5 pb-5" style="background-color: white;">
                    <h2 style="text-align: center;">Form Tambah Data</h2>
                    <hr>
                    <br>
                    <h3>Tambah Data Mobil </h3>
                    <form action="prosesTambah.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama Mobil :</label>
                            <input type="text" class="form-control" name="nama_mobil" required="required">
                        </div>
                        <div class="form-group">
                            <label>Jenis Mobil :</label>
                            <div>
                                <select class="custom-select custom-select-sm" name="jenis_mobil" required="required">
                                    <option selected>Pilih</option>
                                    <option value="SUV">SUV</option>
                                    <option value="MPV">MPV</option>
                                    <option value="Hatchback">Hatchback</option>
                                    <option value="Sedan">Sedan</option>
                                    <option value="Double Cabin">Double Cabin</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Grade Mesin Mobil :</label>
                            <div>
                                <select class="custom-select custom-select-sm" name="grade_mesin" required="required">
                                    <option selected>Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Grade Interior Mobil :</label>
                            <div>
                                <select class="custom-select custom-select-sm" name="grade_interior" required="required">
                                    <option selected>Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Grade Eksterior Mobil :</label>
                            <div>
                                <select class="custom-select custom-select-sm" name="grade_eksterior" required="required">
                                    <option selected>Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Usia Mobil (Tahun) :</label>
                            <input type="text" class="form-control" name="usia_mobil" required="required">
                            isi nol (0) untuk mobil baru
                        </div>
                        <div class="form-group">
                            <label>Kapasistas Cilinder (CC) :</label>
                            <input type="text" class="form-control" name="cc_mobil" required="required">
                        </div>
                        <div class="form-group">
                            <label>Harga Mobil (Rp) :</label>
                            <input type="text" class="form-control" name="harga_mobil" required="required">
                        </div>			
                        <input type="submit" name="submit" value="PROSES" class="btn btn-primary">
                    </form>
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