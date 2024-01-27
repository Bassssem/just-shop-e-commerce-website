<?php 
include 'init.php';
$req="SELECT * FROM `produit`;";
$rep=mysqli_query($conn,$req);
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
        <a class="navbar-brand brand-logo" href="./../index.php"><u><b>my body admin
          
        </b></u></a>
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
            </li>            <!--<li class="nav-item">
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
                  <i class="mdi mdi-delete-forever menu-icon"></i>
                </span> supprimer
              </h3>
              
            </div>
            
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">supprimer : </h4>
                    <div class="table-responsive">
                      <!-- table product -->
                      <center><h1>ARTICLE : </h1></center>
                      <table class="table">
                     
                        <thead>
                          <tr>
                            <th> produit </th>
                            <th> titre </th>
                            <th> prix </th>
                            <th> prix barre </th>
                            <th> description </th>
                            <th> date de creation</th>
                            <th> supprimer</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
while($rows=mysqli_fetch_array($rep)){
  $img1=$rows['img1'];
  $img2=$rows['img2'];
  $nom=$rows['nom'];
  $prix=$rows['prix'];
  $prixdel=$rows['prixdel'];
  $date=$rows['date'];
  $descr=$rows['desc'];
  



?>
                          <tr>
                            <td>
                              <img src="<?php echo("./../assets/images/products/".$img1);?>" width=50 heigth=50 class="me-2" alt="image">
                            </td>
                            <td> <?php echo($nom." ");?></td>
                            <td>
                              <label class="badge badge-gradient-success"><?php echo($prix." $");?></label>
                            </td>
                            <td> <label class="badge badge-danger"><?php echo($prixdel." $");?></td>
                            <td> <?php echo($descr);?> </td>
                            <td> <?php echo($date);?> </td>
                            <td> <?php 
echo('<a href="supp.php?num=0&&id='.$rows['id'].'"><u name="t" class="mdi mdi-delete-forever menu-icon"></u></a>');
?> </td>
                          </tr>
                          <?php } ?>







                        </tbody>
                       
                      </table>
                      <!-- table product -->
                     <!-- table pack -->
                     <p><center><h1>PACK : </h1></center> 
                     <table class="table">
                        <thead>
                          <tr>
                            <th> produit </th>
                            <th> titre </th>
                            <th> prix 1 </th>
                            <th> prix 2 </th>
                            <th> prix 3 </th>
                            <th> prix 4 </th>
                            <th> date  </th>
                            <th> supprimer</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
$req="SELECT * FROM `pack`;";
$rep=mysqli_query($conn,$req);
while($rows=mysqli_fetch_array($rep)){
  $img1=$rows['img'];
  $nom=$rows['nom'];
  $prix1=$rows['prix1'];
  $prix2=$rows['prix2'];
  $prix3=$rows['prix3'];
  $prix4=$rows['prix4'];
  $date=$rows['date'];

?>
                          <tr>
                            <td>
                              <img src="<?php echo("./../assets/images/products/".$img1);?>" width=50 heigth=50 class="me-2" alt="image">
                            </td>
                            <td> <?php echo($nom." ");?></td>
                            <td>
                              <label class="badge badge-gradient-success"><?php echo($prix1." DT");?></label>
                            </td>
                            <td>
                              <label class="badge badge-gradient-success"><?php echo($prix2." DT");?></label>
                            </td>
                            <td>
                              <label class="badge badge-gradient-success"><?php echo($prix3." DT");?></label>
                            </td>
                            <td>
                              <label class="badge badge-gradient-success"><?php echo($prix4." DT");?></label>
                            </td>
                            <td> <?php echo($date);?> </td>
                            <td> <?php 
echo('<a href="supp.php?num=1&&id='.$rows['id'].'"><u name="t" class="mdi mdi-delete-forever menu-icon"></u></a>');
?> </td>
                          </tr>
                          <?php } ?>







                        </tbody>
                      </table>
                      <!-- table pack -->
                    
        
                     <!-- table venteflash -->
                     <p><center><h1>VENTEFLASH : </h1></center> 
                     <table class="table">
                        <thead>
                          <tr>
                            <th> produit </th>
                            <th> titre </th>
                            <th> prix </th>
                            <th> date  </th>
                            <th> supprimer</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
$req="SELECT * FROM `venteflash`;";
$rep=mysqli_query($conn,$req);
while($rows=mysqli_fetch_array($rep)){
  $img1=$rows['img'];
  $nom=$rows['nom'];
  $prix=$rows['prix'];
  $date=$rows['date'];

?>
                          <tr>
                            <td>
                              <img src="<?php echo("./../assets/images/products/".$img1);?>" width=50 heigth=50 class="me-2" alt="image">
                            </td>
                            <td> <?php echo($nom." ");?></td>
                            <td>
                              <label class="badge badge-gradient-success"><?php echo($prix." DT");?></label>
                            </td>
                            
                            <td> <?php echo($date);?> </td>
                            <td> <?php 
echo('<a href="supp.php?num=2&&id='.$rows['id'].'"><u name="t" class="mdi mdi-delete-forever menu-icon"></u></a>');
?> </td>
                          </tr>
                          <?php } ?>







                        </tbody>
                      </table>
                      <!-- table venteflash -->


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