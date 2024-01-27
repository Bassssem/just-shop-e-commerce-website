<?php
if(isset($_POST['t'])){
include 'init.php';
$id=$_GET['id'];
$req="SELECT * FROM `pack` WHERE `id` LIKE '$id';";
$rep=mysqli_query($conn,$req);
$rows=mysqli_fetch_array($rep);
$nomcl=$_POST['t1'];
$tel=$_POST['t2'];
$adrs=$_POST['t3'];
$prix=0;
$choix="";
if(isset($_POST['choix1'])){
    $choix=$choix." 1 ";
    $prix=$prix+$rows['prix1'];
}
if(isset($_POST['choix2'])){
    $choix=$choix." 2 ";
    $prix=$prix+$rows['prix2'];
}
if(isset($_POST['choix3'])){
    $choix=$choix." 3 ";
    $prix=$prix+$rows['prix3'];
}
if(isset($_POST['choix4'])){
    $choix=$choix." 4 ";
    $prix=$prix+$rows['prix4'];
}



$req="INSERT INTO `commandp` ( `id` , `nomprenom` , `num` , `adress` , `idprod` , `prix` , `choix` , `date` )
VALUES ('', '$nomcl', '$tel', '$adrs', '$id', '$prix' , '$choix' , now());";
$rep=mysqli_query($conn,$req);
header("index.php");
}
?>
<center>
<h1>
    c'est bon !!!
</h1>
</center>