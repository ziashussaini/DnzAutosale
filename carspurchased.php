<html>
<head>
  <title> Cars </title>
  <style>
    table, tr, th, td{
      border: solid white 1px;
      margins: 5px;
      padding: 5px;
      text-align: center;
      color: black;
      background-color: grey;
      margin: auto;
      width: 60%;



    }
    fieldset, form{
      background-color: none;
      color: white;
      borders: none;
      text-align:left;
      width:50%;
      margin-left: 25%
    }
    body{
      background-color: silver;
    }
    p{
      color:black;
      font-size: 35px;
      text-align: center;
      margin-top:20px;
    }
    </style>
</head>
<body>
<button type="button"><a href="adminchoice.php">Go To Terminal</a></button>
  <p style="color:blak;"> WELCOME TO DNZ AUTO SALES </p>
  <fieldset>
    <legend> Cars Purchased by Customers </legend>
    <form method="POST" action= "carspurchased.php">
      <br>

    <label> Customer ID </label>
          <input type="text" name="customerId" value="  ">
      <br>
      <br>
	  
	  <label> Car ID </label>
          <input type="text" name="carNo" value="  ">
      <br>
      <br>



      
	<input name = "Car Bought"  type="Submit" value="Submit"/>

    </form>
  </fieldset>
  
</body>
</html>
<br>
<br>

<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "dnz";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if(!$conn){
    die("Connection failed: ". $conn->connection_error);
  }
  
  if(isset($_POST['customerId']) && isset($_POST['carNo']))
  {
	$customerId = $_POST['customerId'];
    $carNo = $_POST['carNo'];
	
	$sql_insert = "INSERT INTO purchased (customerId, carNo) VALUES ('$customerId', '$carNo')";
	if($conn->query($sql_insert) === TRUE){
        echo "Insert success!";
    }
    else{
      echo "Error: " . $sql_insert . "<br>" . $conn->error;
   }
  }
  
  $sql_select = "SELECT customerId, carNo FROM purchased";
  $results = $conn->query($sql_select);
  
  echo "<table><tr><th>Customer ID</th><th>Car ID</th></tr>";
   if($results->num_rows > 0){
    while($row = $results->fetch_assoc()){
      echo
      "<tr><td>".$row['customerId']."</td><td>"
      .$row['carNo']."</td></tr>";

      }
  }
  
  $count_cars = "SELECT COUNT(carNo) FROM purchased";
  $resulted = $conn->query($count_cars);
  echo "<table><tr><th>Total Cars Sold</th></tr>";
  if($resulted->num_rows > 0){
	while($row1 = mysqli_fetch_array($resulted))
	{
	
	echo "<tr><td>".$row1[0]."</td></tr><br>";;
	}
  }
  
  $boughtBy = "SELECT cus.fName, cus.lName, c.carName, c.Price FROM cars c INNER JOIN purchased p INNER JOIN customers cus ON c.carNo = p.carNo AND p.customerId = cus.customerId";
  $result1= $conn->query($boughtBy);
  echo "<table><tr><th>First Name </th><th>Last Name</th><th>Car Name</th><th>Price</th></tr><br><br>";
  if($result1->num_rows > 0){
	while($row1 = mysqli_fetch_array($result1))
	{
	
	echo "<tr><td>".$row1[0]."</td><td>"
				   .$row1[1]."</td><td>"
				   .$row1[2]."</td><td>"
				   .$row1[3]."</td></tr>";
	
	}	
  }
  
  
   
   $conn->close();
?>