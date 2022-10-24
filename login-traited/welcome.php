<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<style>
*{
	margin:0;
	padding:0;
	font-family:sans-scrif;
	
}
.hero{
	width:100%;
	height:100vh;
	background-image:url(background.png);
	background-size:cover;
	background-position :center;
	position:relative;
	overflow:hidden;
}
.logo{
	width:100px;
	cursor:pointer;
}
.navbar{
	width: 85%;
	height:15%;
	margin:auto;
	display:flex;
	align-items:center;
	justify-content:space-between;
}
button {
	color: #fbfcfd;
	padding: 10px 25px;
	background:transparent;
	border:1px solid #fff;
	border-radius: 20px;
	outline: none;
	cursor:pointer;
    font-size:20px
	}
    button:hover{
        background-color:lightseagreen ;
    }
.content{
	color:#fbfcfd;
	position: absolute;
	top:50%;
	left :8%;
	transform:translatey(-50%);
	z-index:2;
}
h1{
	font-size:80px;
	margin:10px 0 30px;
	line-height:80px;
}
.side-bar{
	width:50px;
	height:100vh;
	background:linear-gradient(#00545d,#000729);
	position: absolute;
	right:0;
	top:0;
}
.menu{
	display:block;
	width:25px;
	margin:40px auto 0;
	cursor:pointer;
}
.social-linkw img, .useful-links img{
	width:25px;
	margin:5px auto;
	cursor:pointer;
}
.social-linkw{
	width:50px;
	text-align:center;
	position:absolute;
	top:50%;
	transform:translatey(-50%);
}
.useful-links{
	width:50px;
	text-align:center;
	position:absolute;
	bottom:30px;
	}
	.bubbles img{
		
		width:50px;
		animation:bubble 7s linear infinite;
	}
	.bubbles{
		width:100%;
		display:flex;
		align-items:center;
		justify-content:space-around;
		position:absolute;
		bottom: -70px;
	}
	@keyframes bubble{
		
		0%{
			transform:translatey(0);
			opacity:0;
		}
		50%{
			
			opacity:1;
		}
		70%{
		
			opacity:1;
		}
		100%{
			transform:translatey(-80vh);
			opacity:0;
		}
	}
	.bubbles img:nth-child(1){
		width:25px;
		animation-delay:2s;
	}
	.bubbles img:nth-child(2){
		
		animation-delay:1s;
	}
	
	.bubbles img:nth-child(3){
		width:25px;
		animation-delay:3s;
	}
	
	.bubbles img:nth-child(4){
		
		animation-delay:4.5s;
	}
	.bubbles img:nth-child(5){
		
		animation-delay:3s;
	}
	.bubbles img:nth-child(6){
		width:20px;
		animation-delay:6s;
	}
	.bubbles img:nth-child(7){
		width:35px;
		animation-delay:7s;
	}
	a{
		color:#fff;
	}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
<div class="hero">
<div class="navbar">
<img src="logo.png"class="logo">
</div >
<div class="content">  
<h1>  <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?> to our</h1>
<h1>coffee<br>website</h1>
<button type ="button "><a href="logout.php">Logout</a> 
</div>
<div class="bubbles">
<img src ="bubble.png">
<img src ="bubble.png">
<img src ="bubble.png">
<img src ="bubble.png">
<img src ="bubble.png">
<img src ="bubble.png">
<img src ="bubble.png">
</div>
</div>
</div >
<?php include "footer.php"?>
</body>
</html>