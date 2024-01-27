<?php
include 'init.php';
if(isset($_POST['t'])){
$nomprod=$_POST['t1'];
$prix1=$_POST['t2'];
$prix2=$_POST['t5'];
$prix3=$_POST['t6'];
$prix4=$_POST['t7'];









$img_name = $_FILES['t3']['name'];
$img_size = $_FILES['t3']['size'];
$tmp_name = $_FILES['t3']['tmp_name'];
$error = $_FILES['t3']['error'];

$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
$img_ex_lc = strtolower($img_ex);
$allowed_exs = array("jpg", "jpeg", "png","jfif");
if (in_array($img_ex_lc, $allowed_exs)) {
$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
$img_upload_path = './../assets/images/products/'.$new_img_name;
move_uploaded_file($tmp_name, $img_upload_path);
}


$req="INSERT INTO `pack` ( `id` , `nom` , `prix1` , `prix2` , `prix3` , `prix4` , `img` , `date`)
VALUES (NULL, '$nomprod', '$prix1', '$prix2', '$prix3', '$prix4', '$new_img_name', now());";
$rep=mysqli_query($conn,$req);
}

?>
<center>
    <h1>
        c'est bon !!!
    </h1>
</center>