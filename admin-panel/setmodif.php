<?php
include 'init.php';
if(isset($_POST['t'])){
$id=$_GET['id'];
if($_GET['num']==0){
    $nom=$_POST['t1'];
    $prix=$_POST['t2']; 
    $prixdel=$_POST['t5'];
    $descr=$_POST['t6'];
    $req="UPDATE `produit` SET `nom` = '$nom', `prix` = '$prix', `prixdel` = '$prixdel', `desc` = '$descr', `date` = 'now()' WHERE `id` = '$id' LIMIT 1;";
    mysqli_query($conn,$req);
    header("index.php");}
if($_GET['num']==1){
    $nom=$_POST['t1'];
    $prix1=$_POST['t2'];
    $prix2=$_POST['t5'];
    $prix3=$_POST['t6'];
    $prix4=$_POST['t7'];
    
    $req="UPDATE `pack` SET `nom` = '$nom', `prix1` = '$prix1', `prix2` = '$prix2', `prix3` = '$prix3', `prix4` = '$prix4', `date` = 'now()' WHERE `id` = '$id' LIMIT 1;";
    mysqli_query($conn,$req);
    header("index.php");}
}
?>