<?php 
error_reporting(0); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

       
  


    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>
<?php date_default_timezone_set('Asia/Jakarta'); ?>
<body class="animsition" >
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
       
        

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1" style="text-align: center;">Selamat Datang <?php echo $_SESSION['namasi']; ?>, Silahkan Absen</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        
                                </div>
                            </div>
                        </div>


                        <!-- FORM -->
                        <div class="row">
                           <div class="table-responsive table--no-card m-b-30">
                            <form action="dt_absen_sv.php" enctype="multipart/form-data" method="post">
                                <div class="form-group">

                                    <?php
                            $id=$_SESSION['idsi'];
                            include "../koneksi.php";
                            $sql="SELECT * FROM guru WHERE nip='$id'";
                            $query=mysqli_query($koneksi,$sql);
                            $r=mysqli_fetch_assoc($query);
                                ?>

                                <table class="table table-borderless table-striped table-earning" >
                                        
                                        <tbody>
                                            <tr>
                                                <td>NIM</td>
                                                <td>
                                                
                                                <input type="text" readonly="" class="form-control" name="id_karyawan" autocomplete="off" size="25px" maxlength="25px" value="<?php echo $_SESSION
                                                ['idsi'];?>">    
                                                
                                            </td>
                                            </tr>
                                           
                                            <tr>
                                                <td>Nama</td>
                                                <td><input type="text" class="form-control" name="nama" autocomplete="off" readonly="" value="<?php echo $_SESSION['namasi']; ?>"></td>
                                            </tr>

                                             <tr>
                                                <td>Waktu</td>
                                                <td><input type="text" class="form-control" value="<?php echo date('l, d-m-Y h:i:s a' ); ?>" name="waktu"></td>
                                            </tr>

                                           <tr>
                                               <td>Klik link ini jika tidak hadir / absen</td>
                                               <td><a href="untitled.php">sara</a></td>
                                           </tr>

                                            <tr>
                                                <td><button type="submit" name="simpan" class="btn btn-primary">Simpan</button></td>
                                                <td><input type="reset" name="" value="Batal" class="btn btn-danger"></td>
                                            </tr>
                                            
                                      </tbody>
                                    </table>
                                        </div>
                            </form>
                                    
                                </div>    
                        </div>

                        <!-- END FORM -->
                        
                        <div class="header-desktop">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Budak Corporate <a href="https://colorlib.com"></a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
