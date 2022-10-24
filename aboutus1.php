<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css foter/style.css">
  <title>Hello, world!</title>
  <style>
    html {
      height: 100%;
    }

    body {
      min-height: 100%;
    }
  </style>
</head>



<body>


<header class="header">

    <div class="icons ">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <div id="cart-btn" class="fas fa-shopping-cart"></div>
        <div id="login-btn" class="fas fa-user"></div>
    </div>


    
   
    

</header>

<!-- header section ends -->

<section class="home">

    <div class="slides-container">

        <div class="slide active">
            <div class="content">
                <span>Welcome In Ouer Shop</span>
                <h3>Get To Know People</h3>
                <a href="#" class="btn">shop now</a>
            </div>
            <div class="image">
                <img src="./img/res.jpg" width="400" height="400" alt="">
            </div>
        </div>

        <div class="slide">
            <div class="content">
                <span>welcom in ouer shop</span>
                <h3>Get To Know People</h3>
                <a href="#" class="btn">shop now</a>
            </div>
            <div class="image">
                <img src="./img/res2.jpg" width="400" height="400" alt="">
            </div>
        </div>

        <div class="slide">
            <div class="content">
                <span>welcom in ouer shop</span>
                <h3>Get To Know Our Team</h3>
                <a href="#" class="btn">shop now</a>
            </div>
            <div class="image">
                <img src="./img/res3.jpg" width="400" height="400" alt="">
            </div>
        </div>

    </div>

    <div id="next-slide" class="fas fa-angle-right" onclick="next()"></div>
    <div id="prev-slide" class="fas fa-angle-left" onclick="next()"></div>

</section>












<!-- footer section starts  -->
<!-- footer section ends -->

<!-- custom css file link  -->
<script src="js-foter/script.js"></script>


<!--up is slider!-->

</body>

</html>