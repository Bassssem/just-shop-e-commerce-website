<?php
if(isset($_GET['id'])){
include 'init.php';
$id=$_GET['id'];
if($_GET['num']==0){
    $req="SELECT * FROM `produit`;";
    $rep=mysqli_query($conn,$req);
    $chemin_image="./../assets/images/products/".$rows['img1'];
    $req="DELETE FROM `produit` WHERE `id` LIKE '$id';";
    mysqli_query($conn,$req);
    
  

header("index.php");
}
if($_GET['num']==1){
    $req="SELECT * FROM `pack`;";
    $rep=mysqli_query($conn,$req);
    $rows=mysqli_fetch_array($rep);
    $chemin_image="./../assets/images/products/".$rows['img'];
    $req="DELETE FROM `pack` WHERE `id` LIKE '$id';";
    mysqli_query($conn,$req);
    
header("index.php");
}
if($_GET['num']==2){
    $req="SELECT * FROM `venteflash`;";
    $rep=mysqli_query($conn,$req);
    $chemin_image="./../assets/images/products/".$rows['img'];
    $req="DELETE FROM `venteflash` WHERE `id` LIKE '$id';";
    mysqli_query($conn,$req);
header("index.php");
}

if (file_exists($chemin_image)) { // vérifie si le fichier existe
    unlink($chemin_image); // supprime le fichier
    echo "L'image a été supprimée avec succès.";
    } else {
    echo "Le fichier n'existe pas ou est inaccessible.";
    }
}
?>
<center>
<h1>
    c'est bon !!!
</h1>
</center>