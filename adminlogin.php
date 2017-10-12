<html>
<head>
<title> Credentials</title>
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
button{
  font-size: 45px;
  color: black;
  margin-left: 45%;
  margin-top: 5%;


}
label{
  color:white;
  margin-left: 40%;
}
hover, a {
  color: white;
  background-color: black;
}
</style>
</head>
<body>
  <p> WELCOME TO DNZ AUTO SALES </p>
  <p style="font-size:25px;"> Please supply your ADMIN credentials </p>
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

if(isset($_POST['login']))
{
	$user_name = $_POST['uname'];
	$user_pass = $_POST['psw'];

	$check_user = "SELECT * FROM employees WHERE employeeId = '$user_name' AND password = '$user_pass'";

	$run=$conn->query($check_user);

	if(mysqli_num_rows($run))
	{
		echo "<script>window.open('adminchoice.php','_self')</script>";

		$_SESSION['uname'] =$user_name;
	}
	else
	{
		echo "<script>alert('username or password is incorrect!')</script>";
		}
	}
?>


<form action="adminlogin.php" method="post">


    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
	<br>
  <br>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
	<br/>
  <br>
    <button type="submit" name="login">Login</button>

</form>

</body>
</html>
