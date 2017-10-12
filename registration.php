
<html>

<head>
  <meta charset="utf-8">
  <title>Registration page Page</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h1>Sign Up Page</h1>
  <fieldset>
    <form action="registration.php" method="post">
      <label>Username</label>
      <input type="text" name="username">
      <br>
      <label>Password</label>
      <input type="password" name="pass">
      <br>
      <input type="text" name="fName" placeholder="fName">
      <br>
      <input type="text" name="lname" placeholder="lName">
      <input type="text" name="dateOfBirth" placeholder="date of birth">
      <input type="text" name="phoneNumber" placeholder="phoneNumber">
      <br>
      <input type="text" name="street" placeholder="street">
      <br>
      <input type="text" name="city" placeholder="city">
      <br>
      <input type="text" name="state" placeholder="state">
      <br>
      <input type="text" name="zipCode" placeholder="zipCode">
      <br>
      <input type="text" name="email" placeholder="email">
      <br>
      <button type="button"><a href="homepage.php">Go Back</a></button>
      <button type="submit" name="register">Submit</button>
    </form>
  </fieldset>
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





if(isset($_POST['register']))
{
    
    $f_Name=$_POST['fName'];
    $l_name=$_POST['lName'];
    $date_Of_Birth=$_POST['dateOfBirth'];
    $phoneNumber=$_POST['phoneNumber'];
    $street=$_POST['street'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zipCode=$_POST['zipCode'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $userpass=$_POST['pass'];



    if($user_name=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the name')</script>";
exit();//this use if first is not work then other will not show
    }

    if($user_pass=='')
    {
        echo"<script>alert('Please enter the password')</script>";
exit();
    }

    if($f_name=='')
    {
        echo"<script>alert('Please enter your Full Name')</script>";
    exit();
    }
  //here query check weather if user already registered so can't register again.
    $check_name_query="SELECT * FROM customers WHERE username='$user_name'";

    $run_query=$conn->query($check_name_query);


    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('user $user_name is already exist in our database, Please try another one!')</script>";
exit();
    }

//insert the user into the database.
    $insert_user="INSERT INTO customers (fname, lName, dateOfBirth, phoneNumber, street, city, state, zipCode, email, username, password) VALUES
    ('$f_name','$l_name','$dateOfBirth','$phoneNumber','$street', '$city','$state', '$zipCode', '$email', '$username', '$userpass')";

    if($conn->query($insert_user) == TRUE)
    {
        echo"<script>window.open('customers.php','_self')</script>";
    }else {
      echo "error: " .$insert_user . "<br>" .$conn->error;
    }
}

?>
