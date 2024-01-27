<!DOCTYPE html>
<html lang="en">
<?php
include 'init.php';
$req="SELECT * FROM `produit`;";
$rep=mysqli_query($conn,$req);
$req1="SELECT * FROM `pack`;";
$rep1=mysqli_query($conn,$req1);
$req2="SELECT * FROM `venteflash`;";
$rep2=mysqli_query($conn,$req2);
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>my-body-nutrition - eCommerce Website</title>
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> 
  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style-prefix.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
<style>
  #gradient-text {
  font-weight: bold;
  background: linear-gradient(to right, #0ff, #0000ff);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

h2 {
  font-size: 40px;
  
  font-family: 'Gambetta', serif;
  letter-spacing: -3px;
  transition: 700ms ease;
  font-variation-settings: "wght" 311;
  margin-bottom: 0.8rem;
  
  outline: none;
  text-align: center;
}

h2:hover {
  font-variation-settings: "wght" 582; 
  letter-spacing: 1px;
 
}

</style>
<script>
alert("just for test !! ");
</script>
</head>

<body>


  <div class="overlay" data-overlay></div>
  <header>

      </div>

    </div>
  
    <div class="header-main">

      <div class="container">

        <a href="#" class="header-logo">
          <!--titre-->
          <h2 contenteditable id="gradient-text">My Body</h2>
          <!--titre-->
        <!--  <img src="./assets/images/logo/logo.svg" alt="Anon's logo" width="120" height="36"> -->
        </a>

        <div class="header-search-container">

          <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>

        </div>
        <style>
/* Wrapper */
.icon-button {
  background-color: white;
  border-radius: 20px;
  cursor: pointer;
  display: inline-block;
  font-size: 1.3rem;
  height: 2.6rem;
  line-height: 2.6rem;
  margin: 0 5px;
  position: relative;
  text-align: center;
  user-select: none;
  width: 2.6rem;
}

/* Circle */
.icon-button span {
  border-radius: 0;
  display: block;
  height: 0;
  left: 50%;
  margin: 0;
  position: absolute;
  top: 50%;
  transition: all 0.3s;
  width: 0;
}
.icon-button:hover span {
  width: 2.6rem;
  height: 2.6rem;
  border-radius: 20px;
  margin: -1.3rem;
}

/* Icons */
.icon-button i {
  background: none;
  color: white;
  height: 2.6rem;
  left: 0;
  line-height: 2.6rem;
  position: absolute;
  top: 0;
  transition: all 0.3s;
  width: 2.6rem;
  z-index: 10;
}

/* Media Query for Mobile Devices */
@media (max-width: 680px) {
  .icon-button {
    border-radius: 1.6rem;
    font-size: 0.8rem;
    height: 1.6rem;
    line-height: 1.6rem;
    width: 1.6rem;
    margin: 5px; /* Adjust spacing for mobile */
  }

  .icon-button:hover span {
    width: 1.6rem;
    height: 1.6rem;
    border-radius: 1.6rem;
    margin: -0.8rem;
  }

  .icon-button i {
    height: 1.6rem;
    line-height: 1.6rem;
    width: 1.6rem;
  }
}

/* Social Media Icons */
.Facebook {
  background-color: rgba(80, 122, 189, 0.7);
}
.Tiktok {
  background-color: rgba(0, 0, 0, 0.7);
}
.Insta {
  background-color: rgba(193, 53, 132, 0.7);
}
/* Add more social media icons and styles as needed */
</style>

<!-- Social Media Icons -->
<a href="tel:+21696128565" class="icon-button">
  <img src="./assets/images/logo/whatsapp.png" height="30" alt="whatsap" />
</a> 
<a href="https://www.facebook.com/profile.php?id=100024454207514" class="icon-button">
  <img src="./assets/images/logo/facebook.png" height="30" alt="facebook" />
</a>
<a href="https://www.tiktok.com/" class="icon-button">
  <img src="./assets/images/logo/tiktok.png" height="30" alt="Tiktok">
</a>
<a href="https://www.instagram.com/dev__art_/" class="icon-button">
  <img src="./assets/images/logo/instagram.png" height="30" alt="insta">
</a>
<a href="login.php" class="icon-button">
  <img src="./assets/images/logo/admin-panel.png" height="80" alt="admin">
</a>
<!-- Add more social media icons and links as needed -->


      </div>

    </div>
  
    



  <!--
    - MAIN
  -->

  <main>

    <!--
      - BANNER
    -->
    <style>
    .imgpos {
  position: relative;
  left: 795px;
  
}</style>
    <div class="banner">

      <div class="container">

        <div class="slider-container has-scrollbar">
        <?php 
while($rows2=mysqli_fetch_array($rep2)){



?>
          <div class="slider-item">

            <img src="<?php echo("./assets/images/products/".$rows2['img']);?>" alt="women's latest fashion sale" width="380px" class="imgpos">

            <div class="banner-content">

              <p class="banner-subtitle">Trending item</p>

              <h2 class="banner-title">"<?php echo($rows2['nom']);?>"</h2>

              <p class="banner-text">
                starting at : <b><?php echo($rows2['prix']);?></b> $
              </p>

              
              <?php 
echo('<a class="banner-btn" href="command.php?num=0&&id='.$rows2['id'].'">اشتري الآن</a>');
?>
            </div>

          </div>
<?php } ?>
        

        </div>

      </div>

    </div>





    <!--
      - CATEGORY
    -->

    <!--
      - PRODUCT
    -->

    <div class="product-container">

      <div class="container">


        

        <div class="product-box">

          <!--
            - PRODUCT MINIMAL
          

          <div class="product-minimal">

            <div class="product-showcase">

              <h2 class="title">New Arrivals</h2>

              <div class="showcase-wrapper has-scrollbar">

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/clothes-1.jpg" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Relaxed Short full Sleeve T-Shirt</h4>
                      </a>

                      <a href="#" class="showcase-category">Clothes</a>

                      <div class="price-box">
                        <p class="price">DT45.00</p>
                        <del>DT12.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">
                  
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/clothes-2.jpg" alt="girls pink embro design top" class="showcase-img" width="70">
                    </a>
                  
                    <div class="showcase-content">
                  
                      <a href="#">
                        <h4 class="showcase-title">Girls pnk Embro design Top</h4>
                      </a>
                  
                      <a href="#" class="showcase-category">Clothes</a>
                  
                      <div class="price-box">
                        <p class="price">DT61.00</p>
                        <del>DT9.00</del>
                      </div>
                  
                    </div>
                  
                  </div>

                  <div class="showcase">
                  
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/clothes-3.jpg" alt="black floral wrap midi skirt" class="showcase-img"
                        width="70">
                    </a>
                  
                    <div class="showcase-content">
                  
                      <a href="#">
                        <h4 class="showcase-title">Black Floral Wrap Midi Skirt</h4>
                      </a>
                  
                      <a href="#" class="showcase-category">Clothes</a>
                  
                      <div class="price-box">
                        <p class="price">DT76.00</p>
                        <del>DT25.00</del>
                      </div>
                  
                    </div>
                  
                  </div>

                  <div class="showcase">
                  
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/shirt-1.jpg" alt="pure garment dyed cotton shirt" class="showcase-img"
                        width="70">
                    </a>
                  
                    <div class="showcase-content">
                  
                      <a href="#">
                        <h4 class="showcase-title">Pure Garment Dyed Cotton Shirt</h4>
                      </a>
                  
                      <a href="#" class="showcase-category">Mens Fashion</a>
                  
                      <div class="price-box">
                        <p class="price">DT68.00</p>
                        <del>DT31.00</del>
                      </div>
                  
                    </div>
                  
                  </div>

                </div>

                <div class="showcase-container">
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/jacket-5.jpg" alt="men yarn fleece full-zip jacket" class="showcase-img"
                        width="70">
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">MEN Yarn Fleece Full-Zip Jacket</h4>
                      </a>
                
                      <a href="#" class="showcase-category">Winter wear</a>
                
                      <div class="price-box">
                        <p class="price">DT61.00</p>
                        <del>DT11.00</del>
                      </div>
                
                    </div>
                
                  </div>
                
                  <div class="showcase">
          
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/jacket-1.jpg" alt="mens winter leathers jackets" class="showcase-img"
                        width="70">
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">Mens Winter Leathers Jackets</h4>
                      </a>
                
                      <a href="#" class="showcase-category">Winter wear</a>
                
                      <div class="price-box">
                        <p class="price">DT32.00</p>
                        <del>DT20.00</del>
                      </div>
                
                    </div>
                
                  </div>
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/jacket-3.jpg" alt="mens winter leathers jackets" class="showcase-img"
                        width="70">
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">Mens Winter Leathers Jackets</h4>
                      </a>
                
                      <a href="#" class="showcase-category">Jackets</a>
                
                      <div class="price-box">
                        <p class="price">DT50.00</p>
                        <del>DT25.00</del>
                      </div>
                
                    </div>
                
                  </div>
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/shorts-1.jpg" alt="better basics french terry sweatshorts" class="showcase-img"
                        width="70">
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">Better Basics French Terry Sweatshorts</h4>
                      </a>
                
                      <a href="#" class="showcase-category">Shorts</a>
                
                      <div class="price-box">
                        <p class="price">DT20.00</p>
                        <del>DT10.00</del>
                      </div>
                
                    </div>
                
                  </div>
                
                </div>

              </div>

            </div>

            <div class="product-showcase">
            
              <h2 class="title">Trending</h2>
            
              <div class="showcase-wrapper  has-scrollbar">
            
                <div class="showcase-container">
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/sports-1.jpg" alt="running & trekking shoes - white" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Running & Trekking Shoes - White</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Sports</a>
            
                      <div class="price-box">
                        <p class="price">DT49.00</p>
                        <del>DT15.00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/sports-2.jpg" alt="trekking & running shoes - black" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Trekking & Running Shoes - black</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Sports</a>
            
                      <div class="price-box">
                        <p class="price">DT78.00</p>
                        <del>DT36.00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/party-wear-1.jpg" alt="womens party wear shoes" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Womens Party Wear Shoes</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Party wear</a>
            
                      <div class="price-box">
                        <p class="price">DT94.00</p>
                        <del>DT42.00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/sports-3.jpg" alt="sports claw women's shoes" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Sports Claw Women's Shoes</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Sports</a>
            
                      <div class="price-box">
                        <p class="price">DT54.00</p>
                        <del>DT65.00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                </div>
            
                <div class="showcase-container">
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/sports-6.jpg" alt="air tekking shoes - white" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Air Trekking Shoes - white</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Sports</a>
            
                      <div class="price-box">
                        <p class="price">DT52.00</p>
                        <del>DT55.00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/shoe-3.jpg" alt="Boot With Suede Detail" class="showcase-img" width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Boot With Suede Detail</h4>
                      </a>
            
                      <a href="#" class="showcase-category">boots</a>
            
                      <div class="price-box">
                        <p class="price">DT20.00</p>
                        <del>DT30.00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/shoe-1.jpg" alt="men's leather formal wear shoes" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Men's Leather Formal Wear shoes</h4>
                      </a>
            
                      <a href="#" class="showcase-category">formal</a>
            
                      <div class="price-box">
                        <p class="price">DT56.00</p>
                        <del>DT78.00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/shoe-2.jpg" alt="casual men's brown shoes" class="showcase-img" width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Casual Men's Brown shoes</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Casual</a>
            
                      <div class="price-box">
                        <p class="price">DT50.00</p>
                        <del>DT55.00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                </div>
            
              </div>
            
            </div>

            <div class="product-showcase">
            
              <h2 class="title">Top Rated</h2>
            
              <div class="showcase-wrapper  has-scrollbar">
            
                <div class="showcase-container">
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/watch-3.jpg" alt="pocket watch leather pouch" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Pocket Watch Leather Pouch</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Watches</a>
            
                      <div class="price-box">
                        <p class="price">DT50.00</p>
                        <del>DT34.00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/jewellery-3.jpg" alt="silver deer heart necklace" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Silver Deer Heart Necklace</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Jewellery</a>
            
                      <div class="price-box">
                        <p class="price">DT84.00</p>
                        <del>DT30.00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/perfume.jpg" alt="titan 100 ml womens perfume" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Titan 100 Ml Womens Perfume</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Perfume</a>
            
                      <div class="price-box">
                        <p class="price">DT42.00</p>
                        <del>DT10.00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/belt.jpg" alt="men's leather reversible belt" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Men's Leather Reversible Belt</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Belt</a>
            
                      <div class="price-box">
                        <p class="price">DT24.00</p>
                        <del>DT10.00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                </div>
            
                <div class="showcase-container">
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/jewellery-2.jpg" alt="platinum zircon classic ring" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">platinum Zircon Classic Ring</h4>
                      </a>
            
                      <a href="#" class="showcase-category">jewellery</a>
            
                      <div class="price-box">
                        <p class="price">DT62.00</p>
                        <del>DT65.00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/watch-1.jpg" alt="smart watche vital plus" class="showcase-img" width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Smart watche Vital Plus</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Watches</a>
            
                      <div class="price-box">
                        <p class="price">DT56.00</p>
                        <del>DT78.00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/shampoo.jpg" alt="shampoo conditioner packs" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">shampoo conditioner packs</h4>
                      </a>
            
                      <a href="#" class="showcase-category">cosmetics</a>
            
                      <div class="price-box">
                        <p class="price">DT20.00</p>
                        <del>DT30.00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/jewellery-1.jpg" alt="rose gold peacock earrings" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Rose Gold Peacock Earrings</h4>
                      </a>
            
                      <a href="#" class="showcase-category">jewellery</a>
            
                      <div class="price-box">
                        <p class="price">DT20.00</p>
                        <del>DT30.00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                </div>
            
              </div>
            
            </div>

          </div>

          -->

          <!--
            - PRODUCT FEATURED
         

          <div class="product-featured">

            <h2 class="title">Deal of the day</h2>

            <div class="showcase-wrapper has-scrollbar">

              <div class="showcase-container">

                <div class="showcase">
                  
                  <div class="showcase-banner">
                    <img src="./assets/images/products/shampoo.jpg" alt="shampoo, conditioner & facewash packs" class="showcase-img">
                  </div>

                  <div class="showcase-content">
                    
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <a href="#">
                      <h3 class="showcase-title">shampoo, conditioner & facewash packs</h3>
                    </a>

                    <p class="showcase-desc">
                      Lorem ipsum dolor sit amet consectetur Lorem ipsum
                      dolor dolor sit amet consectetur Lorem ipsum dolor
                    </p>

                    <div class="price-box">
                      <p class="price">DT150.00</p>

                      <del>DT200.00</del>
                    </div>

                    <button class="add-cart-btn">add to cart</button>

                    <div class="showcase-status">
                      <div class="wrapper">
                        <p>
                          already sold: <b>20</b>
                        </p>

                        <p>
                          available: <b>40</b>
                        </p>
                      </div>

                      <div class="showcase-status-bar"></div>
                    </div>

                    <div class="countdown-box">

                      <p class="countdown-desc">
                        Hurry Up! Offer ends in:
                      </p>

                      <div class="countdown">

                        <div class="countdown-content">

                          <p class="display-number">360</p>

                          <p class="display-text">Days</p>

                        </div>
                        <div class="countdown-content">
                          <p class="display-number">24</p>
                          <p class="display-text">Hours</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Min</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Sec</p>
                        </div>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

              <div class="showcase-container">
              
                <div class="showcase">
              
                  <div class="showcase-banner">
                    <img src="./assets/images/products/jewellery-1.jpg" alt="Rose Gold diamonds Earring" class="showcase-img">
                  </div>
              
                  <div class="showcase-content">
              
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>
              
                    <h3 class="showcase-title">
                      <a href="#" class="showcase-title">Rose Gold diamonds Earring</a>
                    </h3>
              
                    <p class="showcase-desc">
                      Lorem ipsum dolor sit amet consectetur Lorem ipsum
                      dolor dolor sit amet consectetur Lorem ipsum dolor
                    </p>
              
                    <div class="price-box">
                      <p class="price">DT1990.00</p>
                      <del>DT2000.00</del>
                    </div>
              
                    <button class="add-cart-btn">add to cart</button>
              
                    <div class="showcase-status">
                      <div class="wrapper">
                        <p> already sold: <b>15</b> </p>
              
                        <p> available: <b>40</b> </p>
                      </div>
              
                      <div class="showcase-status-bar"></div>
                    </div>
              
                    <div class="countdown-box">
              
                      <p class="countdown-desc">Hurry Up! Offer ends in:</p>
            
                      <div class="countdown">
                         
                        <div class="countdown-content">
                          <p class="display-number">360</p>
                          <p class="display-text">Days</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">24</p>
                          <p class="display-text">Hours</p>
                        </div>
              
                        <div class="countdown-content">
                          <p class="display-number">59</p>
                          <p class="display-text">Min</p>
                        </div>
              
                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Sec</p>
                        </div>
                      </div>
              
                    </div>
              
                  </div>
              
                </div>
              
              </div>

            </div>

          </div>
         
-->


          <!--
            - PRODUCT GRID
          -->

          <div class="product-main">

            <h2 class="title">New Products</h2>
          <!-- sel3a tabda min hna-->
            <div class="product-grid">
<?php 
while($rows=mysqli_fetch_array($rep)){



?>
              <div class="showcase">

                <div class="showcase-banner">

                  <img src="<?php echo("./assets/images/products/".$rows['img1']);?>" alt="product" width="300" class="product-img default">
                  <img src="<?php echo("./assets/images/products/".$rows['img1']);?>" alt="product" width="300" class="product-img hover">
                  <!-- ta5fith-->
                  <p class="showcase-badge">15%</p>

                  <div class="showcase-actions">

                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>

                  </div>

                </div>

                <div class="showcase-content">

                  <a href="#" class="showcase-category"><?php echo($rows['nom']);?></a>

                  <a href="#">
                    <h3 class="showcase-title"><?php echo($rows['desc']);?></h3>
                  </a>

                  <div class="showcase-rating">
                  <?php for ($i = 0; $i < 3; $i++) {
    echo('<ion-icon name="star"></ion-icon>');
} ?>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price"><?php echo($rows['prix']." $");?></p>
                    <del><?php echo($rows['prixdel']." $");?></del>
                    
                  </div>
                  <?php 
echo('<a href="command.php?num=1&&id='.$rows['id'].'"><input type="submit" value="اشتري الآن"></a>');
?>
                </div>
              

              </div>
             
<?php } ?>

            </div>

          </div>

        </div>

      </div>

    </div>
































 


    <div class="product-container">

<div class="container">


  

  <div class="product-box">

    <div class="product-main">

      <h2 class="title">New pack</h2>
    <!-- sel3a tabda min hna-->
      <div class="product-grid">
      
<!-- partial:index.partial.html -->


<?php 
while($rows=mysqli_fetch_array($rep1)){



?>
<ul class="listing1">

  <li class="product">
    <i class="img-wrapper">
      <img class="img-wrapper" src="<?php echo("./assets/images/products/".$rows['img']);?>" alt="Pink running shoe" />
    </i>
   <!-- <div class="note on-sale">On sale</div>-->
    
    <div class="info">
      <div class="title"><a><?php echo($rows['nom']);?></a></div>
      
    </div>
    
    <div class="actions-wrapper">
    <?php 
echo('<a class="add-btn cart" href="commandp.php?id='.$rows['id'].'">اشتري الآن</a>');
?>
      
    </div>
  </li>
  
</ul><?php } ?>
<!-- partial -->
 


  </div>

</div>

</div>
</div>



































    <!--
      - TESTIMONIALS, CTA & SERVICE
    

    <div>

      <div class="container">

        <div class="testimonials-box">

          
            //- TESTIMONIALS
          

          <div class="testimonial">

            <h2 class="title">testimonial</h2>

            <div class="testimonial-card">

              <img src="./assets/images/testimonial-1.jpg" alt="alan doe" class="testimonial-banner" width="80" height="80">

              <p class="testimonial-name">Alan Doe</p>

              <p class="testimonial-title">CEO & Founder Invision</p>

              <img src="./assets/images/icons/quotes.svg" alt="quotation" class="quotation-img" width="26">

              <p class="testimonial-desc">
                Lorem ipsum dolor sit amet consectetur Lorem ipsum
                dolor dolor sit amet.
              </p>

            </div>

          </div>


-->
          <!--
            - CTA
          

          <div class="cta-container">

            <img src="./assets/images/cta-banner.jpg" alt="summer collection" class="cta-banner">

            <a href="#" class="cta-content">

              <p class="discount">25% Discount</p>

              <h2 class="cta-title">Summer collection</h2>

              <p class="cta-text">Starting @ DT10</p>

              <button class="cta-btn">اشتري الآن</button>

            </a>

          </div>


-->
          <!--
            - SERVICE
          

          <div class="service">

            <h2 class="title">Our Services</h2>

            <div class="service-container">

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="boat-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Worldwide Delivery</h3>
                  <p class="service-desc">For Order Over DT100</p>

                </div>

              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="rocket-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">Next Day delivery</h3>
                  <p class="service-desc">UK Orders Only</p>
              
                </div>
              
              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="call-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">Best Online Support</h3>
                  <p class="service-desc">Hours: 8AM - 11PM</p>
              
                </div>
              
              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="arrow-undo-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">Return Policy</h3>
                  <p class="service-desc">Easy & Free Return</p>
              
                </div>
              
              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="ticket-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">30% money back</h3>
                  <p class="service-desc">For Order Over DT100</p>
              
                </div>
              
              </a>

            </div>

          </div>

        </div>

      </div>

    </div>


-->


    <!--
      - BLOG
    

    <div class="blog">

      <div class="container">

        <div class="blog-container has-scrollbar">

          <div class="blog-card">

            <a href="#">
              <img src="./assets/images/blog-1.jpg" alt="Clothes Retail KPIs 2021 Guide for Clothes Executives" width="300" class="blog-banner">
            </a>

            <div class="blog-content">

              <a href="#" class="blog-category">Fashion</a>

              <a href="#">
                <h3 class="blog-title">Clothes Retail KPIs 2021 Guide for Clothes Executives.</h3>
              </a>

              <p class="blog-meta">
                By <cite>Mr Admin</cite> / <time datetime="2022-04-06">Apr 06, 2022</time>
              </p>

            </div>

          </div>

          <div class="blog-card">
          
            <a href="#">
              <img src="./assets/images/blog-2.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle."
                class="blog-banner" width="300">
            </a>
          
            <div class="blog-content">
          
              <a href="#" class="blog-category">Clothes</a>
          
              <h3>
                <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup Battle.</a>
              </h3>
          
              <p class="blog-meta">
                By <cite>Mr Robin</cite> / <time datetime="2022-01-18">Jan 18, 2022</time>
              </p>
          
            </div>
          
          </div>

          <div class="blog-card">
          
            <a href="#">
              <img src="./assets/images/blog-3.jpg" alt="EBT vendors: Claim Your Share of SNAP Online Revenue."
                class="blog-banner" width="300">
            </a>
          
            <div class="blog-content">
          
              <a href="#" class="blog-category">Shoes</a>
          
              <h3>
                <a href="#" class="blog-title">EBT vendors: Claim Your Share of SNAP Online Revenue.</a>
              </h3>
          
              <p class="blog-meta">
                By <cite>Mr Selsa</cite> / <time datetime="2022-02-10">Feb 10, 2022</time>
              </p>
          
            </div>
          
          </div>

          <div class="blog-card">
          
            <a href="#">
              <img src="./assets/images/blog-4.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle."
                class="blog-banner" width="300">
            </a>
          
            <div class="blog-content">
          
              <a href="#" class="blog-category">Electronics</a>
          
              <h3>
                <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup Battle.</a>
              </h3>
          
              <p class="blog-meta">
                By <cite>Mr Pawar</cite> / <time datetime="2022-03-15">Mar 15, 2022</time>
              </p>
          
            </div>
          
          </div>

        </div>

      </div>

    </div>

  </main>



-->

  <!--
    - FOOTER
  -->

  <footer>

    <div class="footer-category">

      <div class="container">

        <h2 class="footer-category-title">Brand directory</h2>

        

        <div class="footer-category-box">
          <h3 class="category-box-title">footwear :</h3>
        
          <a href="#" class="footer-category-link">sport</a>
          <a href="#" class="footer-category-link">formal</a>
          <a href="#" class="footer-category-link">Boots</a>
          <a href="#" class="footer-category-link">body</a>
          <a href="#" class="footer-category-link">nutrition</a>
        </div>

        

      </div>

    </div>

    <div class="footer-nav">

      <div class="container">

        

        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Products</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Prices drop</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">New products</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Best sales</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contact us</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sitemap</a>
          </li>
        
        </ul>

        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Our Company</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Delivery</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Legal Notice</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Terms and conditions</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">About us</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Secure payment</a>
          </li>
        
        </ul>

        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Services</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Prices drop</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">New products</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Best sales</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contact us</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sitemap</a>
          </li>
        
        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Contact</h2>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <address class="content">
              tunisia
            </address>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>

            <a href="tel:+2196128565" class="footer-nav-link">+2196128565</a>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>
            <a href="mailto:Fbassem13@gmail.com" class="footer-nav-link">Fbassem13@gmail.com</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Follow Us</h2>
          </li>

          <li>
            <ul class="social-link">

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>

            </ul>
          </li>

        </ul>

      </div>

    </div>

    <div class="footer-bottom">

      <div class="container">

        <img src="./assets/images/payment.png" alt="payment method" class="payment-img">

        <p class="copyright">
          Copyright &copy; <a href="tel:+21696128565">Farhani Bassem</a> all rights reserved.
        </p>

      </div>

    </div>

  </footer>






  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <style>
*
{
  box-sizing: border-box;
  font-family: 'Open Sans', 'Arial', sans-serif;
}

.listing
{
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  
  /*just for pen positioning*/
  position: absolute;
  top: 20%;
  left: 50%;
  transform: translateX(-50%);
  width: 900px;
}

.product
{
  width: 240px;
  position: relative;
}

.product a
{
  text-decoration: none;
}

.img-wrapper
{
  display: block;
  width: 100%;
  height: 240px;
  border: 1px solid #afafaf;
  border-bottom: 0;
  overflow: hidden;
  text-align: center;
}

.img-wrapper img
{
  
}

.info
{
  width: 100%;
  background: #000;
  color: #fff;
  position: relative;
  padding: 40px 10px 20px 10px;
  text-align: center;
  
  vertical-align: middle;
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0,0,0,0);
  backface-visibility: hidden;
  transition-property: color,height;
  transition-duration: 0.3s,0.4s;
  transition-timing-function: ease-out;
  height: 83px;
}

.info:before
{
  content: "";
  position: absolute;
  z-index: -1;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: #fff;
  transform: scaleY(0);
  transform-origin: 50%;
  transition: transform 0.3s ease-out;
}

.info:after
{
  visibility: hidden;
  pointer-events: none;
  position: absolute;
  z-index: -1;
  content: '';
  border-style: solid;
  transition-duration: 0.3s;
  transition-property: transform;
  left: calc(50% - 11px);
  bottom: 0;
  border-width: 10px 10px 0 10px;
  border-color: black transparent transparent transparent;
}

.product:hover .info
{
  height: 40px;
}

.product:hover .info:before
{
  transform: scaleY(0.7);
}

.product:hover .info:after
{
  visibility: visible;
  transform: translateY(10px);
}

.title
{
  transition: transform 0.3s ease-out;
}
.title a
{
  color: red;
}
.product:hover .title
{
  transform: translateY(-18px);
  font-weight: bold;
  color: #000;
}

.price1
{
  background: #e32d2c;
  position: absolute;
  font-size: 1.3em;
  padding: 4px 13px;
  top: -15px;
  right: 10px;
}

.price1.sale
{
  background: #00ba2f;
}

.price1.old
{
  font-size: 0.95em;
  padding: 4px 6px;
  text-decoration: line-through;
  top: -43px;
}

.actions-wrapper
{
  margin-top: 14px;
  display: flex;
  justify-content: space-around;
  visibility: hidden;
}

.actions-wrapper *
{
  width: 50%;
  padding: 2px 0;
  text-align: center;
  color: #191919;
  font-size: 0.95em;
  font-weight: bold;
}
.actions-wrapper *:before
{
  font-family: "FontAwesome";
  margin-right: 8px;
}
.wishlist
{
  border-right: 1px solid #afafaf;
}
.wishlist:hover
{
  color: #e32d2c;
}
.wishlist:before
{
  content: "\f08a";
}

.cart:hover
{
  color: #0a75b9;
}
.cart:before
{
  content: "\f07a";
}

.product:hover .actions-wrapper *
{
  visibility: visible;
}

.note
{
  position: absolute;
  top: 0;
  left: 0;
  padding: 4px 8px;
  font-size: 0.9em;
}

.note.on-sale
{
  background: #00ba2f;
  color: #fff;
}

.note.no-stock
{
  background: #191919;
  color: #fff;
}
</style>
</body>

</html>