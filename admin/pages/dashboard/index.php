<?php 
 include_once('../authen.php'); 
 $sql_allArticles = "SELECT * FROM articles";
 $sql_showArticles = "SELECT * FROM articles WHERE status = 'true' ";
 $sql_blockArticles = "SELECT * FROM articles WHERE status = 'false' ";
 $sql_admin = "SELECT * FROM admin ";
 $sql_contact = "SELECT * FROM contact ";

 $count_allArticles = $conn->query($sql_allArticles);
 $count_showArticles = $conn->query($sql_showArticles);
 $count_blockArticles = $conn->query($sql_blockArticles);
 $count_admin = $conn->query($sql_admin);
 $count_contact = $conn->query($sql_contact);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="../../dist/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../dist/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../dist/img/favicons/favicon-16x16.png">
  <link rel="manifest" href="../../dist/img/favicons/site.webmanifest">
  <link rel="mask-icon" href="../../dist/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="../../dist/img/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="../../dist/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <?php include_once('../includes/sidebar.php') ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   <!-- Section Blog -->
   <section class="container-fluid py-5">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="border-short-bottom text-center "> Dashboard </h2>
            </div>

            <div class="col-sm-4 mb-3">
             <div class="card h-100">
                 <div class="card-body">
                    <h4 class="card-title"> All articles </h4>
                    <i class="fas fa-book-open py-2 fa-4x text-primary"></i>
                    <p class="card-text"> <?php echo$count_allArticles->num_rows;?>  articles</p>
                 </div>
             </div>
            </div>

            <div class="col-sm-4 mb-3">
             <div class="card h-100">
                 <div class="card-body">
                    <h4 class="card-title"> Show articles</h4>
                    <i class="fas fa-book-open py-2 fa-4x text-success"></i>
                    <p class="card-text"> <?php echo$count_showArticles->num_rows;?> articles</p>
                 </div>
             </div>
            </div>

            <div class="col-sm-4 mb-3">
             <div class="card h-100">
                 <div class="card-body">
                    <h4 class="card-title"> Blocked articles </h4>
                    <i class="fas fa-book-open py-2 fa-4x text-danger"></i>
                    <p class="card-text">  <?php echo$count_blockArticles->num_rows?> articles </p>
                 </div>
             </div>
            </div>

            <div class="col-sm-4 mb-3">
             <div class="card h-100">
                 <div class="card-body">
                    <h4 class="card-title"> All admin </h4>
                    <i class="fas fa-chalkboard-teacher py-2 fa-4x text-dark"></i>
                    <p class="card-text"> <?php echo$count_admin->num_rows?> persons </p>
                 </div>
             </div>
            </div>

            <div class="col-sm-4 mb-3">
             <div class="card h-100">
                 <div class="card-body">
                    <h4 class="card-title"> All contacts </h4>
                    <i class="fas fa-chalkboard-teacher py-2 fa-4x text-warning"></i>
                    <p class="card-text"> <?php echo$count_contact->num_rows?>   persons </p>
                 </div>
             </div>
            </div>

            <div class="col-sm-4 mb-3">
            <a href="./../../logout.php">
             <div class="card h-100">       
                 <div class="card-body btn-danger">
                    <i class="fa fa-sign-out-alt py-2 fa-4x text-light"></i>
                    <h4 class="card-title"> ออกจากระบบ </h4> 
                 </div>      
             </div>
             </a>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- footer -->
  <?php include_once('../includes/footer.php') ?>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

</body>
</html>
