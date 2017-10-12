<<html>
<head>
  <title> PHP MySQL </title>
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
      color:red;
      font-size: 35px;
      text-align: center;
      margin-top:20px;
    }
    </style>
</head>
<body>
<button type="button"><a href="adminchoice.php">Go To Terminal</a></button>
  <p> WELCOME TO DNZ AUTO SALES </p>

  <fieldset>
    <legend> Add New Employee </legend>
    <form method="POST" action= "employees.php">

      <br>


      <label> Employee ID: </label>
	  <br>
          <input type="text" name="employeeId" value="  ">
          <br>
          <br>




          <label> firstName: </label>
		  <br>
            <input type="text" name="firstName" value="  ">
            <br>
            <br>




        <label> lastName: </label>
		<br>
            <input type="text" name="lastName" value="  ">
              <br>
              <br>


        <label> email: </label>
		<br>
            <input type="text" name="email" value="  ">
            <br>
            <br>


        <label> phone number: </label>
		<br>
          <input type="text" name="phoneNumber" value="  ">
          <br>
          <br>




          <label> position: </label>
		  <br>
            <input type="text" name="position" value="  ">
            <br>
            <br>




          <label> address: </label>
		  <br>
            <input type="text" name="address" value="  ">
            <br>
            <br>


          <label> city: </label>
		  <br>
            <input type="text" name="city" value="  ">
            <br>
            <br>


          <label> state: </label>
		  <br>
            <input type="text" name="state" value="  ">
            <br>
            <br>



          <label> zip code: </label>
		  <br>
            <input type="text" name="zipcode" value="  ">
            <br>
            <br>

         <label> salary: </label>
		 <br>
            <input type="text" name="salary" value="  ">
            <br>
            <br>



            <input name = "Add Employee"  type="Submit" value="Submit"/>


    </form>
  </fieldset>
  <fieldset>
    <legend> Remove an Employee </legend>
    <form method="POST" action= "employees.php">

      <br>


      <label> Employee ID: </label>

          <input type="text" name="did" value="  ">
          <br>
          <br>


            <input name = "Remove Employee"  type="Submit" value="Submit"/>


    </form>
  </fieldset>
  <fieldset>
    <legend> Update Salary </legend>
    <form method="POST" action= "employees.php">

      <br>


      <label> Employee ID: </label>
		  <br>
          <input type="text" name="ueid" value="  ">
          <br>
          <br>


            
			
	 <label> New Employee Salary: </label>
		<br>
          <input type="text" name="newSalary" value="  ">
          <br>
          <br>


            <input name = "Remove Employee"  type="Submit" value="Submit"/>


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
	if(isset($_POST['did']))
	{
		$did = $_POST['did'];
		
		$sql_delete = "DELETE FROM employees WHERE employeeId= $did";
   
		if ($conn->query($sql_delete) === TRUE) 
		{
			echo "Record deleted successfully";
		} 
		else 
		{
			echo "Error deleting record: " . $conn->error;
		}
	}
	
	if(isset($_POST['ueid']) && isset($_POST['newSalary']))
	{
		$ueid = $_POST['ueid'];
		$newSalary = $_POST['newSalary'];
		
		$sql_update = "UPDATE employees SET salary = $newSalary WHERE employeeId = $ueid";
		
		if ($conn->query($sql_update) === TRUE) 
		{
			echo "Record updated successfully";
		} else {
			echo "Error updating record: " . $conn->error;
		}
	}

  if(isset($_POST['employeeId']) && isset($_POST['firstName']) && isset($_POST['lastName'])
  && isset($_POST['email']) && isset($_POST['phoneNumber']) && isset($_POST['position'])
  && isset($_POST['address']) && isset($_POST['city']) && isset($_POST['state'])
  && isset($_POST['zipcode']) && isset($_POST['salary']))

  {
    $employeeId = $_POST['employeeId'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $position = $_POST['position'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
    $salary = $_POST['salary'];
	
	

    $sql_insert = "INSERT INTO employees (employeeId, firstname, lastName, email, phoneNumber, position,
    address, city, state, zipcode, salary) VALUES ('$employeeId', '$firstName', '$lastName', '$email', '$phoneNumber', '$position'
    , '$address', '$city', '$state', '$zipcode', '$salary')";

    if($conn->query($sql_insert) === TRUE){
        echo "Insert success!";
    }
    else{
      echo "Error: " . $sql_insert . "<br>" . $conn->error;
    }
	
  }
    
  

  $sql_select = "SELECT * FROM employees";
  $results = $conn->query($sql_select);


  echo "<table><tr><th>employeeId</th><th>firstName</th><th>lastName</th><th>email</th><th>phoneNumber</th>
  <th>position</th><th>address</th><th>city</th><th>state</th><th>zipcode</th><th>salary</th></tr>";
  if($results->num_rows > 0){
    while($row = $results->fetch_assoc()){
      echo
      "<tr><td>".$row['employeeId']."</td><td>"
      .$row['firstName']."</td><td>"
      .$row['lastName']."</td><td>"
      .$row['email']."</td><td>"
      .$row['phoneNumber']."</td><td>"
      .$row['position']."</td><td>"
      .$row['address']."</td><td>"
      .$row['city']."</td><td>"
      .$row['state']."</td><td>"
      .$row['zipcode']."</td><td>"
      .$row['salary']."</td></tr>";

      }
  }
  echo"</table>";
  $conn->close();


?>