<?php
if(isset($_POST['t'])){
include 'init.php';
$id=$_GET['id'];
$ref=$_GET['ref'];
$nomcl=$_POST['t1'];
$tel=$_POST['t2'];
$adrs=$_POST['t3'];

$req="INSERT INTO `command` ( `id` , `nomprenom` , `num` , `adress` , `idprod` , `date` , `ref` )
VALUES ('', '$nomcl', '$tel', '$adrs', '$id', now(), '$ref');";
$rep=mysqli_query($conn,$req);
header("index.php");
}
?>
<center>
<h1>
    c'est bon !!!
</h1>
</center>