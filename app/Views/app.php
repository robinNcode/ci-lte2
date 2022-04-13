<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <?= minifier('app.min.css') ?>
    <?= minifier('jvectormap.min.css') ?>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!--- Header -->
    <?= $this->include('includes/header') ?>

    <!-- Left side column. contains the logo and sidebar -->
    <?= $this->include('includes/sidebar') ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <?= $this->include('includes/contentHeader') ?>

        <!-- Main content -->
            <?= $this->renderSection('content') ?>
        <!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Footer -->
    <?= $this->include('includes/footer') ?>


    <!-- Control Right Sidebar -->
    <?= $this->include('includes/rightSideBar') ?>

</div><!-- ./wrapper -->

<?= minifier('app.min.js') ?>
<?= minifier('jvectormap.min.js') ?>
</body>
</html>
