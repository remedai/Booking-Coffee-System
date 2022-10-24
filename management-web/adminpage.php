<!--the shoping card detels!-->
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '.\vendor\phpmailer\phpmailer\src\Exception.php';
require '.\vendor\phpmailer\phpmailer\src\PHPMailer.php';
require '.\vendor\phpmailer\phpmailer\src\SMTP.php';
$mail = new PHPMailer();
$GLOBALS['mail']=$mail;
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->SMTPDebug  = 0;  
$mail->SMTPAuth   = TRUE;
$mail->CharSet='UTF-8';
$mail->SMTPSecure = "ssl";
$mail->Port       = 465;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "Evangolin33@gmail.com";
$mail->Password   = "wobefabpwbxudrht";// "Evano333";

$con=mysqli_connect('localhost','root','','login_register_pure_coding');
$sql="SELECT * FROM users";
$result=mysqli_query($con,$sql);
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(empty($_POST['mail_type'])) return;
    if($_POST['mail_type'] === "all"){
   
        $body =  $_POST['content'];
        function send_email($email,$body){
            $mail = $GLOBALS['mail'];
            $mail->IsHTML(true);
            $mail->AddAddress($email, $email);
            $mail->SetFrom("Evangolin33@gmail.com", "system");
            $mail->Subject = "Notification From Coffee Shope";
            $content = $body;
            $mail->MsgHTML($content); 
            $mail->Send();
        }
        while ($row=mysqli_fetch_array($result)){
            $email = $row['email'];
            send_email($email,$body);
        }
        // $result=mysqli_query($con,$sql);
    }else  if($_POST['mail_type'] === "only"){
      
        $body =  $_POST['mail_content'];
        $email = $_POST['customer_email'];
       
      
        function send_email($email,$body){
            $mail = $GLOBALS['mail'];
            $mail->IsHTML(true);
            $mail->AddAddress($email, $email);
            $mail->SetFrom("Evangolin33@gmail.com", "system");
            $mail->Subject = "Notification From Coffee Shope";
            $content = $body;
            $mail->MsgHTML($content); 
            $mail->Send();
        }
        send_email($email,$body);
      
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title> Admin Dashboard(Mangement Of Web)</title>
</head>

<body >
    <div class="d-flex " id="wrapper"  style="color: darkcyan;background-color: #E0FFFF;">
    
        <!-- Sidebar -->
        <div class="bg-white fixed-left" id="sidebar-wrapper">
            <div style="color: darkcyan;"  class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
             class="fas fa-user-secret me-2"></i>Managment page</div>
            <div class="list-group list-group-flush my-3">

                <a style="color: darkcyan;" href="#Dashboard" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                  class="fas fa-shopping-cart me-2"></i>order of customers</a>
                <a href="/Booking Coffee System/offer-web.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>Time Of Offer</a>
                <a href="#Analytics" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Analytics</a>
                <a href="#Shaw the elment" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-solid fa-table me-2"></i>Shaw the element</a>

                        <a href="#stars" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="bi bi-star-fill me-2"></i>Rating of order</a>
                <i ></i>

             <!--   <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-shopping-cart me-2"></i>Store Mng</a><!-->
                <a href="/Booking Coffee System/database/register.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-solid fa-users me-2"></i>Add Admins</a>
                <a href="#Send messag" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                         class ="fas fa-audio-description me-2"></i>Audio Description</a>
                <a href="#Map" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map-marker-alt me-2"></i>Map</a>
                <a href="/Booking Coffee System/first page -gui.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2 "></i>Logout</a>
                    
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper" style="color: darkcyan;">


<nav class="navbar navbar-expand-lg navbar-light  py-4 px-4 ">
                <div style="color: darkcyan;" class="d-flex align-items-center">
                    <i style="color: darkcyan;" class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0" id ="Dashboard">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i  style="color: darkcyan;" class="fas fa-user me-2"></i>Admin Page
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/Booking Coffee System/cvprofile/cv-admin.php">Profile</a></li>
                                
                                <li><a class="dropdown-item" href="/Booking Coffee System/first page -gui.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div style class="container-fluid px-4 "id=""  style="color: darkcyan;background-color: #E0FFFF;">
                <div class="row g-3 my-2">
            </div>
                <!--add the order!-->   
           


        <h3 class="title2 fs-4 mb-3 text-center">Shopping Cart Details</h3>

        <div class="table-responsive">
</table>
                <table class="table bg-white rounded shadow-sm  table-hover">
<tr style="color:#1ABC9C;">
<!--order of cutomer !-->
<th>id</th>
<th>customer</th>
<th>email</th>
<th>contact</th>
<th>phone_number</th>
<th>number_table</th>
<th>address</th>
<th>your order</th>
<th>price</th>
<th>register_date</th>
<th>payment</th>
</tr>

<?php
  $total=0;$count=0;$dilevery=0;
$conn=mysqli_connect("localhost","root","","test") ;
if($conn->connect_error){
    die("connicted failed :".$conn-> connect_error);
}
$sqldb="SELECT id,customer,email,contact,phonenumper,number_table,address,your_order,price,payment,register_date from registration";
$informatin=$conn->query($sqldb); 

if($informatin->num_rows> 0){
   
            
while($row=$informatin -> fetch_assoc()){
echo "<tr><td>".$row["id"]."</td>".
"<td>".$row["customer"]."</td>".
"<td>".$row["email"]."</td>".
"<td>".$row["contact"]."</td>".
"<td>".$row["phonenumper"]."</td>".
"<td>".$row["number_table"]."</td>".
"<td>".$row["address"]."</td>".
"<td>".$row["your_order"]."</td>".
"<td>".$row["price"]."</td>".
"<td>".$row["payment"]."</td>".
"<td>".$row["register_date"]."</td></tr>";
$total=$total +$row["price"];
$count++;
if($row["contact"]=="online")
{$dilevery++;}
}
echo "</table>"; 
}
else {echo "0 rsule";}
$conn-> close();
?>

                </table>
</div>
</div>
<!--end  order of customer !-->




<!--to send term to customer !-->
<form action=""method="POST" id="send notifications ">
<input name="mail_type" type="hidden" value="only">
<div class="container pxy-5">
    <h1 style="color:darkcyan">To Send term to the customer </h1>
<textarea name="mail_content" ></textarea>
<br>
<br>
<label >email customer </label> 

 <input type="text" name="customer_email" id=""value=""><br><br>
<input style="width: 100%;height: 50px;; background-color:darkcyan; font-size:xx-large;color:white" type="submit" value ="Send notifications ">

</div>


<!-- end to send term to customer !-->


<!--analyst of incoming!-->
</form >
<h3 id="Analytics" class="fs-4 mb-3 text-center ">incoming of coffee shops</h3>
<table class="table table-bordered bg-white">
    <tr></tr>
<th  width="10%">Daily incoming</th>
<th  width="20%">weekly incoming</th>
<th  width="30%">Monthly incoming</th>
</tr>
<tr>
    
    <td><?php echo $total*1000;?>, DENAR</td>
    <td><?php  echo $total*7*1000;?>, DENAR</td>
    <td><?php echo $total *30*1000?>, DENAR</td>
</tr>
</table>
<h3  class="fs-4 mb-3 text-center ">Profit of the coffee shops</h3>
<table class="table table-bordered bg-white">
    <tr></tr>
<th  width="10%">Daily Profit</th>
<th  width="20%">weekly Profit</th>
<th  width="30%">Monthly Profit</th>
</tr>
<tr>
    <td><?php echo ($total*1000)-($count*1000);?>, DENAR</td>
    <td><?php  echo ($total*7*1000)-($count*1000);?>, DENAR</td>
    <td><?php echo ($total *30*1000)-($count*1000)?>, DENAR</td>
</tr>
</table>

                <!--end the order!-->
<!--anliyticali!-->

<div style class="container-fluid px-4 "id=""  style="color: darkcyan;background-color: #E0FFFF;">
                <div class="row g-3 my-2">


                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h6 class="fs-2"><?php echo $count;?></h6>
                                <p class="fs-5">Order</p>
                            </div>
                            <i  style="color: darkcyan;"
                             class="fas fa-gift fs-1 primary-text border rounded-full  p-3"></i>
                        </div>
                    </div>




                    <div class="col-md-3" >
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h6 class="fs-2"><?php echo $total*1000; ?>. <br>.DENAR</h6>
                                <p class="fs-5">Sales</p>
                            </div>
                            <i
                            style="color: darkcyan;"   class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full  p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3" >
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h6 class="fs-2"><?php echo  $dilevery*5000;?>. <br>.DENAR</h6>
                                <p class="fs-5">Delivery</p>
                            </div>
                            <i  style="color: darkcyan;" class="fas fa-truck fs-1 primary-text border rounded-full  p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3" >
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h6 class="fs-2"> <?php echo (($total*1000)-($count*1000)) +$dilevery *5000;?>. <br>.DENAR</h6>
                                <p class="fs-5">Increase</p>
                            </div>
                            <i  style="color: darkcyan;" class="fas fa-chart-line fs-1 primary-text border rounded-full  p-3"></i>
                        </div>
                    </div>
                </div>

<!-- end analyst of incoming!-->
<!--customer whos login in web!-->
                <div class="row my-5  " id="Shaw the elment" >
                    <h3  class="fs-4 mb-3 text-center ">Customer Information</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr  style="color: darkcyan;">  
                                    <th scope="col" width="50">id</th>
                                    <th scope="col">username</th>
                                    <th scope="col">email</th>
                                  
                                </tr>
                            </thead>
                           
                            <tbody>

                            <?php
                            
                            $id=0;
                            
                            while ($row=mysqli_fetch_array($result)){?>
           <tr>
               <td><?php echo $row ['id'] ?></td>
               <td><?php echo $row ['username'] ?></td>
               <td><?php echo $row ['email'] ?></td>
            
           </tr>        

             <?php $id++; }?>
          </tr>


                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
<!-- end customer whos login in web!-->
    <!-- /#page-content-wrapper -->
<!--!table shop the rating of order by customers-->

<h3 id="stars" class="title2 fs-4 mb-3 text-center">Rating Order by Customers</h3>

        <div class="table-responsive">
</table>
                <table class="table bg-white rounded shadow-sm  table-hover">
<tr style="color:#1ABC9C;">

<th>id</th>
<th>customer</th>
<th>your_order</th>
<th>rating_stars</th>
<th>register_time</th>
</tr>

<?php
  $total=0;$count=0;$dilevery=0;
$connr=mysqli_connect("localhost","root","","ratingsystem") ;
if($connr->connect_error){
    die("connicted failed :".$connr-> connect_error);
}
$sqldbr="SELECT id,customer,your_order,rating_stars,register_time from stars";
$informatinr=$connr->query($sqldbr); 

if($informatinr->num_rows> 0){
   
            
while($rowr=$informatinr -> fetch_assoc()){
 
echo "<tr><td>".$rowr["id"]."</td>".
"<td>".$rowr["customer"]."</td>".
"<td>".$rowr["your_order"]."</td>".
"<td>".$rowr["rating_stars"]."</td>".
"<td>".$rowr["register_time"]."</td></tr>";

}
echo "</table>"; 
}
else {echo "0 rsule";}
$connr-> close();
?>

                </table>
</div>
</div>


<!--!end table shop the rating of order by customers-->
    
    </div>
<br>
<br>
<br>
<br>
<br>



<!--send notification to all family of coffee shop!-->

<form action="" method="POST" id="Send messag">
    <input name="mail_type" type="hidden" value="all">
<div class="container pxy-5">
    <h1 style="color:darkcyan">To Send Messag</h1>
<textarea name="content" ></textarea>
<br>
<br>

<input style="width: 100%;height: 50px;; background-color:darkcyan; font-size:xx-large;color:white" type="submit" value ="Send To All Email">

</div>

</form>
<!--end   send notification to all family of coffee shop!-->

<br>
<br>
<br>

<!-- map!-->
<div class="container" id="Map">
<div class="col-md-12">
<div class="map">
<h1 style="color:darkcyan">Map Around Coffee Shop </h1>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26657.366672158085!2d44.39803593221539!3d33.36660577395879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15578280a14bc54d%3A0xcda6f4ae5702d276!2sMustansiriyah%20University!5e0!3m2!1sen!2sin!4v1644599003681!5m2!1sen!2sin" width="100%" height="600px" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>

</div>
</div>
<!--end  map!-->
<br>
<br>
<!--footer!-->
<footer class=" position-relative"> <?php include "footer.php"?>
    <div class="container">
<a href="#" class="position-absolute bottom-0 end-0 px-5">
            <i class="bi bi-arrow-up-circle h2 text-white"></i>
            
</a>
     
    </div>
</footer>
<script src="ckeditor/ckeditor.js"></script>
<script>CKEDITOR.replace('mail_content');</script>
<script>CKEDITOR.replace('content');</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
<!--the card!-->

</body>

</html>