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
                  <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                </span> COMMAND
              </h3>
              
            </div>
            
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">COMMAND : </h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> produit </th>
                            <th> nom </th>
                            <th> prix </th>
                            <th> adress </th>
                            <th> numero </th>
                            <th> date</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
include 'init.php';
$req="SELECT * FROM `command` ;";
$rep=mysqli_query($conn,$req);
while($rows=mysqli_fetch_array($rep)){
    $idprod=$rows['idprod'];
    $ref=$rows['ref'];
    if($ref==1){
    $req1="SELECT * FROM `produit` WHERE `id` LIKE '$idprod';";
    $rep1=mysqli_query($conn,$req1);
    $rows1=mysqli_fetch_array($rep1);
    $img=$rows1['img1'];
    }
    if($ref==0){
      $req1="SELECT * FROM `venteflash` WHERE `id` LIKE '$idprod';";
      $rep1=mysqli_query($conn,$req1);
      $rows1=mysqli_fetch_array($rep1);
      $img=$rows1['img'];
      }
    $prix=$rows1['prix'];
    $nomprod=$rows1['nom'];
    $idcom=$rows['id'];
    $nomcl=$rows['nomprenom'];
    $telcl=$rows['num'];
    $adrs=$rows['adress'];
    $date=$rows['date'];



?>
                          <tr>
                            <td>
                              <img src="<?php echo("./../assets/images/products/".$img);?>" width=50 heigth=50 class="me-2" alt="image"><?php echo($nomprod." ");?>
                            </td>
                            <td> <?php echo($nomcl." ");?></td>
                            <td>
                              <label class="badge badge-gradient-success"><?php echo($prix." $");?></label>
                            </td>
                            <td> <?php echo($adrs." ");?></td>
                            <td> <?php echo($telcl." ");?> </td>
                            <td> <?php echo($date);?> </td>
                          </tr>
                          <?php } ?>

                          <?php
include 'init.php';
$req="SELECT * FROM `commandp` ;";
$rep=mysqli_query($conn,$req);
while($rows=mysqli_fetch_array($rep)){
    $idprod=$rows['idprod'];
    $req1="SELECT * FROM `pack` WHERE `id` LIKE '$idprod';";
    $rep1=mysqli_query($conn,$req1);
    $rows1=mysqli_fetch_array($rep1);
    $prix=$rows['prix'];
    $choix=$rows['choix'];
    $nomprod=$rows1['nom'];
    $img=$rows1['img'];

    
    $nomcl=$rows['nomprenom'];
    $telcl=$rows['num'];
    $adrs=$rows['adress'];
    $date=$rows['date'];



?>
                          <tr>
                            <td>
                              <img src="<?php echo("./../assets/images/products/".$img);?>" width=50 heigth=50 class="me-2" alt="image"><?php echo($nomprod." (choix  : ".$choix." ) ");?>
                            </td>
                            <td> <?php echo($nomcl." ");?></td>
                            <td>
                              <label class="badge badge-gradient-success"><?php echo($prix." DT");?></label>
                            </td>
                            <td> <?php echo($adrs." ");?></td>
                            <td> <?php echo($telcl." ");?> </td>
                            <td> <?php echo($date);?> </td>
                          </tr>
                          <?php } ?>
                          
                        </tbody>
                      </table>
                    </div>
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