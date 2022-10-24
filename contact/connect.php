<?php
	$customer = $_POST['customer'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$phonenumper = $_POST['phonenumper'];
	$number_table = $_POST['number_table'];
	$address = $_POST['address'];
    $order=$_POST['your_order'];
	$price=$_POST['price'];
	$payment=$_POST['payment'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration  (customer, email, contact, phonenumper, number_table, address,your_order,price,payment) values(?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param('sssiissis',$customer, $email, $contact, $phonenumper, $number_table, $address,$order,$price,$payment);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
   		header("Location:/Booking%20Coffee%20System/stars/Roting-customer.php?". $_SERVER['QUERY_STRING']);
		$stmt->close();
		$conn->close();
	}	
	

?>

