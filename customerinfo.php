<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/C:\Users\Anushree Khanpasole\Desktop\desktop/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<!-- Navigation -->
<nav class="w3-bar w3-black w3-border">
  <a href="file:///C:/Users/Anushree%20Khanpasole/Desktop/home1.html#home" class="w3-button w3-bar-item w3-hover-red">Home</a>
  <a href="file:///C:/Users/Anushree%20Khanpasole/Desktop/desktop/Aboutus.html" class="w3-button w3-bar-item w3-hover-red">About Us</a>
  <a href="file:///C:/Users/Anushree%20Khanpasole/Desktop/desktop/customer.html" class="w3-button w3-bar-item w3-hover-red">All Customers</a>
  <a href="http://localhost/Bank%20system/transaction_history.php" class="w3-button w3-bar-item w3-hover-red">Transaction History</a>
</nav>

<!-- CustomerTable-->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">

      <div class="card mt-5">
        <div class="card-header">
  <h2>ALL CUSTOMERS</h2>
</div>

<div class="card-body">

  <table class="table table-borderd">
   <thead>
      <tr>
        <th>Customer ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Contact No.</th>
      </tr>
    </thead>
<tbody>
  <?php
  

    $con= mysqli_connect("localhost","root","","customer");
    $query=mysqli_query($con,"select *  from customer");
    //$num=mysqli_query($con, $query);

    if(mysqli_num_rows($num)>0)
    {
      foreach($num as $row)
      {
        ?>
        <tr>
          <td><?= $row['customerid']; ?></td>
          <td><?= $row['name']; ?></td>
          <td><?= $row['address']; ?></td>
          <td><?= $row['contactno']; ?></td>
        </tr>
        <?php
      }
    }
    else 
    {
      echo  "not data found";
    }
  ?>

</tbody>
</table>
</div>


<div class="w3-container w3-center w3-padding-48">
  <h3>TO TRANSFER MONEY CLICK THE BUTTON</h3>
  <input type="button" class="w3-button w3-black" value="Transfer Money">
  </div>

<!--Footer-->
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