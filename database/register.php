<?php 

include 'config.php';

error_reporting(0);

session_start();

		$sql2 = "INSERT INTO users (username, email, password)
					VALUES ('admin2', 'coffeeshop@gmail.com', 'shop1')";
					$result=mysqli_query($conn,$sql2);
if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);



	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";

		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {

			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";

			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
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

	<title>Register Of Admin Form </title>
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
    font-size:20px"  href="/Booking Coffee System/management-web/adminpage.php"> </button>BACK</button></a></div>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;color:lightskyblue;">ِِAdd New Admin</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
		<!--	<p class="login-register-text">Have an account? <a href="login.php">Login To Admin Here</a>.</p>-->
		</form>
	</div>
</body>
</html>