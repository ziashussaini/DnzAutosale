<?php
 $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "dnz";

  Session_start();

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if(!$conn){
    die("Connection failed: ". $conn->connection_error);
  }

if(isset($_POST['login']))
{
	$username = $_POST['username'];
	$user_pass = $POST['pas'];

	$check_user = "SELECT * FROM customers WHERE cusUserName = 'user_name' AND cPass = '$user_pass'";

	$run=$conn->query($check_user);

	if(mysqli_num_rows($run))
	{
		echo "<script>window.open('cars.php','_self'),</script>";

		$_SESSION['username'] =$user_name;
	}
	else
	{
		echo "<script>alert('username or password is incorrect!')</script>";
		}
	}
?>


<form action="/login.php" method="post">


    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
	<br/>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
	<br/>
    <button type="submit" name = "login">Login</button>



</form>
