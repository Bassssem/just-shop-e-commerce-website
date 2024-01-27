<!DOCTYPE html>
<?php
include 'init.php';
$d=$_GET['id'];
if($_GET['num']==1){
    $req="SELECT * FROM `produit` WHERE `id` LIKE '$d';";
    $rep=mysqli_query($conn,$req);
    $rows=mysqli_fetch_array($rep);
    $img=$rows['img1'];
    $ref=1;
}
if($_GET['num']==0){
    $req="SELECT * FROM `venteflash` WHERE `id` LIKE '$d';";
    $rep=mysqli_query($conn,$req);
    $rows=mysqli_fetch_array($rep);
    $img=$rows['img'];
    $ref=0;
}
    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Product Details</title>
</head>
<body>
 




<style>
.buttons {
  display: flex;
  width: 380px;
  gap: 10px;
  --b: 5px;   /* the border thickness */
  --h: 1.8em; /* the height */
}

.buttons button {
  --_c: #88C100;
  flex: calc(1.25 + var(--_s,0));
  min-width: 0;
  font-size: 40px;
  font-weight: bold;
  height: var(--h);
  cursor: pointer;
  color: var(--_c);
  border: var(--b) solid var(--_c);
  background: 
    conic-gradient(at calc(100% - 1.3*var(--b)) 0,var(--_c) 209deg, #0000 211deg) 
    border-box;
  clip-path: polygon(0 0,100% 0,calc(100% - 0.577*var(--h)) 100%,0 100%);
  padding: 0 calc(0.288*var(--h)) 0 0;
  margin: 0 calc(-0.288*var(--h)) 0 0;
  box-sizing: border-box;
  transition: flex .4s;
}
.buttons button + button {
  --_c: #FF003C;
  flex: calc(.75 + var(--_s,0));
  background: 
    conic-gradient(from -90deg at calc(1.3*var(--b)) 100%,var(--_c) 119deg, #0000 121deg) 
    border-box;
  clip-path: polygon(calc(0.577*var(--h)) 0,100% 0,100% 100%,0 100%);
  margin: 0 0 0 calc(-0.288*var(--h));
  padding: 0 0 0 calc(0.288*var(--h));
}
.buttons button:focus-visible {
  outline-offset: calc(-2*var(--b));
  outline: calc(var(--b)/2) solid #000;
  background: none;
  clip-path: none;
  margin: 0;
  padding: 0;
}
.buttons button:focus-visible + button {
  background: none;
  clip-path: none;
  margin: 0;
  padding: 0;
}
.buttons button:has(+ button:focus-visible) {
  background: none;
  clip-path: none;
  margin: 0;
  padding: 0;
}
button:hover,
button:active:not(:focus-visible) {
  --_s: .75;
}
button:active {
  box-shadow: inset 0 0 0 100vmax var(--_c);
  color: #fff;
}







		/* Styles pour la zone de saisie */
		.custom-input {
			background-color: #f2f2f2;
			border: none;
			padding: 5px;
			font-size: 16px;
			border-radius: 5px;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
			width: 300px;
			margin: 0px;
		}

		/* Styles pour le texte d'étiquette */
		.custom-input-label {
			display: block;
			margin-bottom: 5px;
			font-weight: bold;
		}
	</style>

	
	
	<script>
		// JS pour ajouter un effet de focus sur la zone de saisie
		const customInput = document.getElementById("custom-input");
		customInput.addEventListener("focus", function() {
			this.style.border = "2px solid #4CAF50";
			this.style.boxShadow = "0px 0px 5px rgba(0, 0, 0, 0.3)";
		});
		
		customInput.addEventListener("blur", function() {
			this.style.border = "none";
			this.style.boxShadow = "0px 0px 5px rgba(0, 0, 0, 0.1)";
		});
	</script>



    
    

<form name="f" method="POST" action="<?php echo("send.php?ref=".$ref."&&id=".$d);?>">

    <div class="container">
        <div class="box">
            <div class="images">
            
                <div class="img-holder active">
                    <img src="<?php echo("./assets/images/products/".$img);?>">
                </div>
                <!-- image 2
                <div class="img-holder">
                    <img src="<?php echo("./assets/images/products/".$rows['img2']);?>">
                </div> 
                -->
            </div>
            <div class="basic-info">
                <h1><?php echo($rows['nom']);?></h1>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                </div>
                <span>Prix : <?php echo($rows['prix']." $");?></span>
                <label for="custom-input" class="custom-input-label">nom et prenom :</label>
	<input type="text" id="custom-input" name="t1" class="custom-input" placeholder="Saisissez votre texte ici...">
    <label for="custom-input" class="custom-input-label">numero de telephone :</label>
	<input type="text" id="custom-input" name="t2" class="custom-input" placeholder="Saisissez votre texte ici...">
    <label for="custom-input" class="custom-input-label">adress :</label>
	<input type="text" id="custom-input" name="t3" class="custom-input" placeholder="Saisissez votre texte ici...">

                <div class="options">
                    <div class="buttons">
                        <button type="submit" name="t" value="">اشتري الآن</button>
                        <button  type="reset" value="">حذف</button>
                    </div>
                </div>
            </div>
            <!--
            <div class="description">

                <ul class="features">
                    <li><i class="fa-solid fa-circle-check"></i>Supported Feature</li>
                    <li><i class="fa-solid fa-circle-check"></i>Supported Feature</li>
                    <li><i class="fa-solid fa-circle-check"></i>Supported Feature</li>
                    <li><i class="fa-solid fa-circle-xmark"></i>Unsupported Feature</li>
                    <li><i class="fa-solid fa-circle-xmark"></i>Unsupported Feature</li>
                </ul>
                
                <ul class="social">
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                </ul>
                
            </div>
            -->
        </div>
    </div>
</form>
</body>
</html>