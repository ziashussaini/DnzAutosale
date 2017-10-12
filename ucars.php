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
<button type="button"><a href="homepage.php">Go To Homepage	</a></button>
  <p> PLEASE BROWSE OUR SELECTION BELOW </p>
</body>
</html>

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

  if(isset($_POST['carNo']) && isset($_POST['brand']) && isset($_POST['carName'])
  && isset($_POST['carModel']) && isset($_POST['mileage']) && isset($_POST['type'])
  && isset($_POST['year']) && isset($_POST['mpg']) && isset($_POST['engine'])
  && isset($_POST['color']) && isset($_POST['Price']))

  {
    $carNo = $_POST['carNo'];
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
      "<tr><td>".$row['carNo']."</td><td>".$row['brand']."</td><td>"
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
  echo"</table>";
  $conn->close();

?>
