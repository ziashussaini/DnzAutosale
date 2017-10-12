
<html>
<head>
  <title> Admin Choice </title>
  <style>
  body{
    background-color: silver;
  }
  p{
    color:black;
    font-size: 35px;
    text-align: center;
    margin-top:20px;
  }
  .g{
    font-size: 30px;
    color: white;
    margin-left: 5%;
    margin-top: 3%;


  }
   a{
    color: black;
    }

    [type = 'button']{
      display: block;
      padding: 5px;
      white-space: 5px;
    }
  </style>
</head>


  <body>
  <button type="button"><a href="homepage.php">Go To Homepage	</a></button>

	
    <p> Choose which database to access </p>


    <button type="button" class="g"><a href="customers.php">Customers</a></button>
    <button type="button" class="g"><a href="cars.php">Cars</a></button>
    <button type="button" class="g"><a href="employees.php">Employees</a></button>
	<button type="button" class="g"><a href="carspurchased.php">Purchases</a></button>
	<button type="button" class="g"><a href="represented.php">Represented</a></button>



  </body>
</html>
