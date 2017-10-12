<html>
<head>
  <title> Represented </title>
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
  <p style="color:black;"> WELCOME TO DNZ AUTO SALES </p>
  <fieldset>
    <legend> Represented </legend>
    <form method="POST" action= "represented.php">
      <br>

    <label> Employee ID </label>
          <input type="text" name="employeeId" value="  ">
      <br>
      <br>
	  
	  <label> Customer ID </label>
          <input type="text" name="customerId" value="  ">
      <br>
      <br>



      
	<input name = "Represented"  type="Submit" value="Submit"/>

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
  
  if(isset($_POST['employeeId']) && isset($_POST['customerId']))
  {
	$employeeId = $_POST['employeeId'];
    $customerId = $_POST['customerId'];
	
	$sql_insert = "INSERT INTO represented (employeeId, customerId) VALUES ('$employeeId', '$customerId')";
	if($conn->query($sql_insert) === TRUE){
        echo "Insert success!";
    }
    else{
      echo "Error: " . $sql_insert . "<br>" . $conn->error;
   }
  }
  
  $sql_select = "SELECT employeeId, customerId FROM represented";
  $results = $conn->query($sql_select);
  
  echo "<table><tr><th>Employee ID</th><th>Customer ID</th></tr>";
   if($results->num_rows > 0){
    while($row = $results->fetch_assoc()){
      echo
      "<tr><td>".$row['employeeId']."</td><td>"
      .$row['customerId']."</td></tr>";

      }
  }
  

  
  
  $representedBy = "SELECT e.firstName, e.lastName, cus.fName, cus.lName FROM employees e INNER JOIN represented r INNER JOIN customers cus ON r.employeeId = e.employeeId AND r.customerId = cus.customerId";
  $result1= $conn->query($representedBy);
  echo "<table><tr><th>Emoloyee First Name </th><th>Employee Last Name</th><th>Customer First Name</th><th>Customer Last Name</th></tr><br>";
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