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
  <p style="color:black;"> WELCOME TO DNZ AUTO SALES </p>
  <fieldset>
    <legend> Add New Cars </legend>
    <form method="POST" action= "cars.php">
      <br>



      <label> brand </label>
          <input type="text" name="brand" value="  ">
      <br>
      <br>

          <label> carName: </label>
            <input type="text" name="carName" value="  ">
            <br>
            <br>



        <label> carModel: </label>
            <input type="text" name="carModel" value="  ">
            <br>
            <br>




        <label> mileage: </label>
            <input type="text" name="mileage" value="  ">
            <br>
            <br>



        <label> type: </label>
          <input type="text" name="type" value="  ">
          <br>
          <br>



          <label> year: </label>
            <input type="text" name="year" value="  ">
            <br>
            <br>



          <label> mpg: </label>
            <input type="text" name="mpg" value="  ">
            <br>
            <br>


          <label> engine: </label>
            <input type="text" name="engine" value="  ">
            <br>
            <br>




          <label> color: </label>
            <input type="text" name="color" value="  ">
            <br>
            <br>




          <label> Price: </label>
            <input type="text" name="Price" value="  ">
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

  session_start();

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if(!$conn){
    die("Connection failed: ". $conn->connection_error);
  }



  //WORKS!!

  if(isset($_POST['brand']) && isset($_POST['carName'])
  && isset($_POST['carModel']) && isset($_POST['mileage']) && isset($_POST['type'])
  && isset($_POST['year']) && isset($_POST['mpg']) && isset($_POST['engine'])
  && isset($_POST['color']) && isset($_POST['Price']))

  {
  
    $brand = $_POST['brand'];
    $carName = $_POST['carName'];
    $carModel = $_POST['carModel'];
    $mileage = $_POST['mileage'];
    $type = $_POST['type'];
    $year = $_POST['year'];
    $mpg = $_POST['mpg'];
    $engine = $_POST['engine'];
    $color = $_POST['color'];
    $Price = $_POST['Price'];
	

    $sql_insert = "INSERT INTO cars (carNo, brand, carName, carModel, mileage, type,
    year, mpg, engine, color, Price) VALUES (0, '$brand', '$carName', '$carModel', '$mileage', '$type'
    , '$year', '$mpg', '$engine', '$color', '$Price')";

    if($conn->query($sql_insert) === TRUE){
        echo "Insert success!";
    }
    else{
      echo "Error: " . $sql_insert . "<br>" . $conn->error;
    }

  }

  $sql_select = "SELECT * FROM cars";
  $results = $conn->query($sql_select);


  echo "<table><tr><th>carNo</th><th>brand</th><th>carName</th><th>carModel</th><th>mileage</th>
  <th>type</th><th>year</th><th>mpg</th><th>engine</th><th>color</th><th>Price</th></tr>";
  if($results->num_rows > 0){
    while($row = $results->fetch_assoc()){
      echo
      "<tr><td>".$row['carNo']."</td><td>"
	  .$row['brand']."</td><td>"
      .$row['carName']."</td><td>"
      .$row['carModel']."</td><td>"
      .$row['mileage']."</td><td>"
      .$row['type']."</td><td>"
      .$row['year']."</td><td>"
      .$row['mpg']."</td><td>"
      .$row['engine']."</td><td>"
      .$row['color']."</td><td>"
      .$row['Price']."</td></tr>";

      }
	  
  }
  $sum_Price = "SELECT SUM(Price) FROM cars";
  $resulted = $conn->query($sum_Price);
  echo "<table><tr><th>Total Cost of Inventory </th></tr><br>";
  if($resulted->num_rows > 0){
	while($row1 = mysqli_fetch_array($resulted))
	{
	
	echo "<tr><td>".$row1[0]."</td></tr>";
	}
  }
  
  
  echo"</table>";
  $conn->close();

?>
