<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Login Form Of Admin</title>
</head>
<body>
	

<div class="resume">
<div ><a style="	
 border: 2px solid #0bb5f4;
  color: #fff;
text-decoration:none;
	padding: 10px 25px;
	background:#0bb5f4;
	border:1px solid #fff;
	border-radius: 20px;
	outline: none;
	cursor:pointer;
    font-size:20px"  href="/Booking Coffee System/first page -gui.php"> </button>BACK</button></a></div>

	<section class="justify-cotent-center">
	<div class="container ">

		<form action="" method="POST" class="login-email ">
			<p class="login-text" style="font-size: 2rem; font-weight: 800; color:lightskyblue">Login Admin</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input  type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
		<!--	<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>-->
		</form>
	</div>
</section>
</body>

</html>