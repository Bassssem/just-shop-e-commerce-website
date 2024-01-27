<?php
include 'init.php';
session_start();
if(!isset($_SESSION['id'])){
    header("Location: ../index.php");
}
$_SE
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>my body Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>
  <body>
    
    <div class="container-scroller">
      
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="./../index.php"><u><b>my body admin</b></u></a>
          <a class="navbar-brand brand-logo-mini" href="./../index.php"><u class="mdi mdi-eye"></u></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                
                
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <span class="menu-title">Ajouter</span>
                <i class="mdi mdi-medical-bag menu-icon"></i>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="Supprimer.php">
                <span class="menu-title">Supprimer</span>
                <i class="mdi mdi-delete-forever menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="modifier.php">
                <span class="menu-title">Modifier</span>
                <i class="mdi mdi-border-color menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="command.php">
                <span class="menu-title">command</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            <!--<li class="nav-item">
              <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="menu-title">Tables</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>-->
            
            
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-medical-bag menu-icon"></i>
                </span> AJOUTER
              </h3>
              
            </div>
            
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
<center><h1>ARTICLE :</h1></center>                                         
<form name="f" onload="pass()" method="POST" action="insert.php" enctype="multipart/form-data">
               
  <h3> Nom de produit :</h3><input type="text" name="t1" placeholder="nom de produit ">
  <br><h3> Prix : </h3><input type="text" name="t2" placeholder="prix">
  <br><h3> Prix barre : </h3><input type="text" name="t5" placeholder="prix barre">
  <br><h3> description : </h3><input type="text" name="t6" placeholder="description">
  <br><h3> Image 1 : </h3><input type="file" name="t3" placeholder="" required>
  <br><br><br>
  <div class="options">
      <a><input type="submit" name="t" value="insert"></a>
      <a><input type="reset" value="delete"></a>
  </div>
   
</form>
</div></div></div></div>



<div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <center><h1>PACK :</h1></center>                                           
<form name="f1" method="POST" action="insertp.php" enctype="multipart/form-data">
               
  <h3> Nom de pack :</h3><input type="text" name="t1" placeholder="nom de pack ">
  <br><h3> Prix1 : </h3><input type="text" name="t2" placeholder="prix 1">
  <br><h3> Prix2 : </h3><input type="text" name="t5" placeholder="prix 2">
  <br><h3> Prix3 : </h3><input type="text" name="t6" placeholder="prix 3">
  <br><h3> Prix4 : </h3><input type="text" name="t7" placeholder="prix 4">
  <br><h3> Image 1 : </h3><input type="file" name="t3" placeholder="" required>
  <br><br><br>
  <div class="options">
      <a><input type="submit" name="t" value="insert"></a>
      <a><input type="reset" value="delete"></a>
  </div>
   
</form>      
                  </div>
                </div>
              </div>
            </div>
            
 
<div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <center><h1>VENTE FLASH :</h1></center>                                           
<form name="f1" method="POST" action="insertv.php" enctype="multipart/form-data">
               
  <h3> Nom de produit :</h3><input type="text" name="t1" placeholder="nom de pack ">
  <br><h3> Prix1 : </h3><input type="text" name="t2" placeholder="prix 1">
  <br><h3> Image 1 : </h3><input type="file" name="t3" placeholder="" required>
  <br><br><br>
  <div class="options">
      <a><input type="submit" name="t" value="insert"></a>
      <a><input type="reset" value="delete"></a>
  </div>
   
</form>      
                  </div>
                </div>
              </div>
            </div>
            
           
          </div>
          <!-- content-wrapper ends -->
          
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>