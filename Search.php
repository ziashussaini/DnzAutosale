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
<button type="button"><a href="ucars.php">See All Cars</a></button>
  <p style="color:black;"> WELCOME TO DNZ AUTO SALES </p>
  <fieldset>
    <legend> Search Keyword For a Car </legend>
    <form method="POST" action= "search.php">
      <br>



      <label> Keyword </label>
          <input type="text" name="keyword" value="  ">
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

  if(isset($_POST['keyword']))
  {
	  
    $keyword = $_POST['keyword'];
	
    $sql_search = "SELECT * from cars WHERE brand = '$keyword'|| carName = '$keyword' || carModel = '$keyword' || mileage = '$keyword' || type = '$keyword' || year = '$keyword' || mpg = '$keyword' || engine = '$keyword' || color = '$keyword'"; 
    $result= $conn->query($sql_search);
    echo "<table><tr><th>carNo</th><th>brand</th><th>carName</th><th>carModel</th><th>mileage</th><th>type</th><th>year</th><th>mpg</th><th>engine</th><th>color</th><th>Price</th></tr>";
	if($result->num_rows >= 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			echo "<tr><td>".$row[0]."</td><td>"
				   .$row[1]."</td><td>"
				   .$row[2]."</td><td>"
				   .$row[3]."</td><td>"
				   .$row[4]."</td><td>"
				   .$row[5]."</td><td>"
				   .$row[6]."</td><td>"
				   .$row[7]."</td><td>"
				   .$row[8]."</td><td>"
				   .$row[9]."</td><td>"				    
				   .$row[10]."</td></tr>";
	
		}
    }
  }
	$conn->close();
?>