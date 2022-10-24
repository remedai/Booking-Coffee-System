<?php
	$customer = $_POST['customer'];
	$your_order = $_POST['your_order'];
	$rating_stars = $_POST['rating_stars'];

	// Database connection
	$conn = new mysqli('localhost','root','','ratingsystem');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into stars  (customer, your_order, rating_stars) values(?, ?, ?)");
		$stmt->bind_param("ssi", $customer, $your_order, $rating_stars);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>