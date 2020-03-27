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

        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <?php $this->load->view("_partials/footer.php") ?>

    </div>
    <!-- ./wrapper -->
    <!-- REQUIRED SCRIPTS -->
    <?php $this->load->view("_partials/js.php") ?>


</body>

</html>