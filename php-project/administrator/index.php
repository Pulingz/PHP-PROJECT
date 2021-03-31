<?php
session_start();

//CEK APAKAH ada sesi ada atau sesi di kenal
// jika sesi tidak di kenali atau kosong
// maka arahkan ke halaman login.php
if(empty($_SESSION["tiket_user"])){
    // jika sesi tidak di kenali
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - CMS</title>
        <link href="theme/dist/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <!-- navigasi.php-->
        <?php include "pages/navigasi.php"; ?>

        <div id="layoutSidenav">
           <!-- sidebar.php-->
           <?php include "pages/sidebar.php"; ?>


            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="alert-primary text-center mt-3" role="alert">
                        <h4><strong><marquee>WELCOME TO CMS</marquee></strong> </h4>
                        </div>
                        
                       
                        <!-- Membuat Halaman dinamis ( dynamic pages ) -->
                        <?php
                        if(isset($_GET["tdata"])){
                                include "input-data.php";
                        } else if(isset($_GET["ldata"])){
                            include "tampil-data.php";
                        } else if(isset($_GET["kode_jurusan"])){
                            include "filter-data.php";
                        }  else if(isset($_GET["edit_aku"])){
                            include "edit-data.php";
                        } else if(isset($_GET["team"])){
                            include "team.php";
                        } else if (isset($_GET["cari"])){
                            include "cari-data.php";
                        }

                         else {
                            include "pages/home.php";
                        }
                        ?>
                    </div>
                </main>
                <!--Footer.php-->
                <?php include "pages/footer.php"; ?>

            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="theme/dist/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="theme/dist/assets/demo/chart-area-demo.js"></script>
        <script src="theme/dist/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="theme/dist/assets/demo/datatables-demo.js"></script>
    </body>
</html>
