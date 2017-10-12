<html>
<head>
  <title> Customers </title>
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
  <p style = "color: black;"> WELCOME TO DNZ AUTO SALES </p>
  <fieldset>
    <legend> Add New Customers </legend>
    <form method="POST" action= "customers.php">

      <br>





          <label> firstName: </label>
            <input type="text" name="fName" value="  ">
            <br>
            <br>



        <label> lastName: </label>
            <input type="text" name="lName" value="  ">
            <br>
            <br>




        <label> date of birth: </label>
            <input type="text" name="dateOfBirth" value="  ">
            <br>
            <br>



        <label> phone number: </label>
          <input type="text" name="phoneNumber" value="  ">
          <br>
          <br>



          <label> street: </label>
            <input type="text" name="street" value="  ">
            <br>
            <br>



          <label> city: </label>
            <input type="text" name="city" value="  ">
            <br>
            <br>




          <label> state: </label>
            <input type="text" name="state" value="  ">
            <br>
            <br>




          <label> zip code: </label>
            <input type="text" name="zipCode" value="  ">
            <br>
            <br>




          <label> email: </label>
            <input type="text" name="email" value="  ">
            <br>
            <br>


            <input type="submit" value="Submit"/>


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

  if(isset($_POST['fName']) && isset($_POST['lName'])
  && isset($_POST['dateOfBirth']) && isset($_POST['phoneNumber']) && isset($_POST['street'])
  && isset($_POST['city']) && isset($_POST['state']) && isset($_POST['zipCode'])
  && isset($_POST['email']))

  {
    //$customerId = $_POST['customerId'];
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $phoneNumber = $_POST['phoneNumber'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipCode = $_POST['zipCode'];
    $email = $_POST['email'];
    $sql_insert = "INSERT INTO customers (customerId, fname, lName, dateOfBirth, phoneNumber, street, city, state, zipCode, email) VALUES (0, '$fName', '$lName', '$dateOfBirth', '$phoneNumber', '$street','$city', '$state', '$zipCode', '$email')";

    if($conn->query($sql_insert) === TRUE){
        echo "Insert success!";
    }
    else{
      echo "Error: " . $sql_insert . "<br>" . $conn->error;
    }

  }

  $sql_select = "SELECT * FROM customers";
  $results = $conn->query($sql_select);


  echo "<table><tr><th>customerId</th><th>fName</th><th>lName</th><th>dateOfBirth</th><th>phoneNumber</th>
  <th>street</th><th>city</th><th>state</th><th>zipCode</th><th>email</th></tr>";
  if($results->num_rows > 0){
    while($row = $results->fetch_assoc()){
      echo
      "<tr><td>".$row['customerId']."</td><td>".$row['fName']."</td><td>"
      .$row['lName']."</td><td>"
      .$row['dateOfBirth']."</td><td>"
      .$row['phoneNumber']."</td><td>"
      .$row['street']."</td><td>"
      .$row['city']."</td><td>"
      .$row['state']."</td><td>"
      .$row['zipCode']."</td><td>"
      .$row['email']."</td></tr>";

      }
  }
  
  
  echo"</table>";
  $conn->close();


?>
