<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<?php $this->load->view("_partials/head.php") ?>

<head>

</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <?php $this->load->view("_partials/navbar.php") ?>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="http://placehold.it/900x500/39CCCC/ffffff&amp;text=I+Love+Bootstrap" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="http://placehold.it/900x500/3c8dbc/ffffff&amp;text=I+Love+Bootstrap" alt="Second slide">
                                            </div>
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="http://placehold.it/900x500/f39c12/ffffff&amp;text=I+Love+Bootstrap" alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <div class="row">
                        <h1>Daftar Kelas</h1>
                    </div>
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="https://via.placeholder.com/268x180?text=Visit+Blogging.com+Now

C/O https://placeholder.com/" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Deskripsi Kelas</h5>
                                    <p class="card-text">Some quick example text to build on the Deskripsi Kelas and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="https://via.placeholder.com/268x180?text=Visit+Blogging.com+Now

C/O https://placeholder.com/" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Deskripsi Kelas</h5>
                                    <p class="card-text">Some quick example text to build on the Deskripsi Kelas and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="https://via.placeholder.com/268x180?text=Visit+Blogging.com+Now

C/O https://placeholder.com/" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Deskripsi Kelas</h5>
                                    <p class="card-text">Some quick example text to build on the Deskripsi Kelas and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="https://via.placeholder.com/268x180?text=Visit+Blogging.com+Now

C/O https://placeholder.com/" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <?php $this->load->view("_partials/footer.php") ?>

    </div>
    <!-- ./wrapper -->
    <!-- REQUIRED SCRIPTS -->
    <?php $this->load->view("_partials/js.php") ?>
    <script>
        document.getElementById('daerah').value = "<?php echo set_value('daerah'); ?>";
        document.getElementById('pekerjaan').value = "<?php echo set_value('pekerjaan'); ?>";
        document.getElementById('keperluan').value = "<?php echo set_value('keperluan'); ?>";
    </script>


</body>

</html>