<!DOCTYPE html>
<html lang="en">
<head >
    <title>Coffee Web Menu</title>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
     crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="css/homecss.css">

    <title>Document</title>
</head>
<style>
    
    @import url('https://fonts.googleapis.com/css2?family=Allura&display=swap');
    body::before{
content:'';
display:block ;
height: 60px;
    }
    .navbar-dark .navbar-nav .nav-link{
        color: white;
    }
    .navbar-dark .navbar-nav .nav-link:hover{
        color: #009688;

        background-color:white ;
        border-radius: 10px;
    }

 body{

background-color:#FCF7F4 ;

 }
 
.logo {
 color:white;
 font-size:40px;
 font-weight:bold;
 font-family:'Allura',cursive;
	
 }
</style>
<body>
    

<div style="background-color: lightseagreen;" class="navbar navbar-expand-md  navbar-dark fixed-top"><!-- made the menu bar !-->
    <div class="container">
    <p style="color: white;" class="logo" href="#" class="navbar-brand ">
        Coffee Shop</p>
<!--<img class="d-none d-sm-block img-fluid w-30"src="./img/thec.jpg"width="30"height="30" alt="">!-->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"data-bs-target="#majrmenu"><!-- made the button mobaile  menu bar !-->
            <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse "id="majrmenu"><!-- write item of menu !-->
<ul style="font-weight:bold";style="fount-size:18"; class="navbar-nav ms-auto ">
    <li class="nav-item "><a href="first page -gui.php" class="nav-link">Home</a></li>
    <li class="nav-item "><a href="aboutus2.php " class="nav-link">About us</a></li>
    <li class="nav-item"><a href="offer-web.php" class="nav-link ">Offer</a></li>
    <li class="nav-item"><a href="./contact/book_your_order.php" class="nav-link ">Booking Your Order</a></li>
    <li class="nav-item"><a href="./login-traited/register.php" class="nav-link ">Join Us</a></li>
    <li class="nav-item"><a href="./database/login.php" class="nav-link ">Admin</a></li>
    </ul>
</div>
    </div> 
</div>
<!--box shedow !-->

<section  class="bg- text-secondary  text-ms-start ">
        <div class="container">
<div class="d-lg-flex align-item-center ">
    <div style= "color:#0096D3"; class="">
      <!--  <h1 >Learn <span class="text-success ">To Be Develober </span></h1 >!-->
      <section> 

<div class="content justify-content-center">
<div class="text">
<h2 style="color:lightseagreen;">WEBSITE<span>COFFEE SHOP</span><h2>
<p style="color:#009688">Welcome to our page that offers cakes, ice cream, juices, coffee and tea. We wish you a pleasant visit and a good day.</p>
<a style="background-color: #00796B;" href ="#hero">VIEW MENU</a>
</div>

</div>

</section>

</div>
<!--<img class="d-none d-sm-block img-fluid w-50" src="./img/undraw_getting_coffee_re_f2do.svg " alt="">!-->
<div class="justify-content-center">
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets1.lottiefiles.com/packages/lf20_yvjbhr0f.json" mode="Bounce" background="transparent"  
speed="1.5"  style="width: 500; height: 8000;" hover loop  autoplay></lottie-player>
</div>
</div>
        </div>
    </section>
   
<!-- menu bar!-->


<div class="container">
<div class="content  " id ="hero">

<div class="imgbox ">
<ul style="color:#FCF7F4;">
<li>COFFEE</li><li>TEA</li><li>CAKE</li><li>ICE-CREAM</li><li>JUICE</li>li>COFFEE</li><li>TEA</li><li>CAKE</li><li>ICE-CREAM</li><li>JUICE</li>
</ul>
<img class="d-none d-sm-block" src ="./img/tea__1_-removebg-preview.png" class="imgfood " width="250"height="250" >
</div>

<ul class="intc imgfood ">
<li><a href="coffee2-web.php"><img src="./img/A_small_cup_of_coffee-removebg-preview.png" onclick="slider('./img/A_small_cup_of_coffee-removebg-preview.png')"></a></li>
<li><a href="teaweb2.php"><img src="./img/tea__1_-removebg-preview.png" onclick="slider('./img/tea__1_-removebg-preview.png')"></a></li>
<li><a href="cack2-wep.php"><img src="./img/cack_c-removebg-preview.png" onclick="slider('./img/cack_c-removebg-preview.png')"></a></li>
<li><a href="icecream-web.php"><img src="./img/ice_one-removebg-preview.png" onclick="slider('./img/ice_one-removebg-preview.png')"></a></li>
<li><a href="jus2-web.php"><img src="./img/jous-removebg-preview.png" onclick="slider('./img/jous-removebg-preview.png')"></a></li>
</ul>
</div>
</div>
<script>
function slider(anything)
{
document.querySelector('.imgfood').src = anything;
}

</script>

  <!--foter!-->
  

  <!--foter!-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" 
    crossorigin="anonymous"></script>


</body>
</html>