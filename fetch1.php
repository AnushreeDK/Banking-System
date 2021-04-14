<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="C:\xampp\htdocs\Bank system\w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  
</head>
<body>

<!-- Navigation -->
<nav class="w3-bar w3-black w3-border">
  <a href="C:\xampp\htdocs\Bank system\home1.html" class="w3-button w3-bar-item w3-hover-red">Home</a>
  <a href="C:\xampp\htdocs\Bank system\Aboutus.html" class="w3-button w3-bar-item w3-hover-red">About Us</a>
  <a href="C:\xampp\htdocs\Bank system\fetch1.php" class="w3-button w3-bar-item w3-hover-red">All Customers</a>
  <a href="http://localhost/Bank%20system/transaction_history.php" class="w3-button w3-bar-item w3-hover-red">Transaction History</a>
</nav>

    <div class="container">
  <h2>All Customers</h2>
  
  <table class="table table-hover table-bordered">
    <thead>
      <tr class="info">
        <th>Customer ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Contact No.</th>
        <th>Amount</th>
      </tr>
    </thead>
    
  




	<?php
	include("connection.php");
	error_reporting(0);
	$query="select * from customerinfo";
	$data=mysqli_query($conn,$query);

	$total=mysqli_num_rows($data);
	
	


	if($total!=0)
	{
		while($result=mysqli_fetch_assoc($data))
		{
			echo"
			<tr>
			<td>".$result['customerid']."</td>
			<td>".$result['name']."</td>
			<td>".$result['address']."</td>
			<td>".$result['contactno']."</td>
			<td>".$result['amount']."</td>
			</tr>";
		}
		
	}
	else
	{
	echo "no record";
	}
	?>
	</table>
</div>

<!--transfer money button-->
<div class="w3-container w3-center w3-padding-48">
  <h3>TO TRANSFER MONEY CLICK THE BUTTON</h3>
  <a href="http://localhost/Bank%20system/transfer.php" class="w3-btn w3-black">TRANSFER MONEY</a>
  </div>


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
  <a href="#"><i class="fa fa-facebook-official"></i></a>
  <a href="#"><i class="fa fa-pinterest-p"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-flickr"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <p class="w3-medium">
    Powered by Anushree Khanpasole
  </p>
</footer>


</body>
</html>