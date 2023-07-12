<!DOCTYPE html>
<html lang="en">
<head>
<title>Placement Management System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
</head>
<body>
<?php require '../student/studnav.php' ?>
<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $pass = $_POST['password'];


        $servername = "localhost";
$username = "root";
$password = "";
$database = "psystem";

// Create a connection
$conn = mysqli_connect($servername, $username, $password,$database);
// Die if connection was not successful

$sql = "select *from student where email ='$email' and pass = '$pass' ";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);

if($num==1){
    
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['email'] = $email;
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>You are Successfully Registered! Now you can login</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">x</span>
        </button>
      </div>';
      header("location: studHome.php");
}else{
    echo '<div class="alert alert-danger" role="alert">
  Invalid credentials!
</div>';
}
        
      // Submit these to a database
    }
    ?>
    <div class="beut">
    <h2>Student Login</h2>
		<form action="/psystem/student/login.php" method="post">
			
			<div class="form-group">
				<label for="email">Email:</label>
        <br>
				<input type="email" class="form-control" id="email" placeholder="Enter Email" required name="email">
				<div class="invalid-feedback">Please enter a valid email address.</div>
			</div>
      <br>
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" class="form-control" id="password" placeholder="Enter Password" required name="password">
			</div>
			<br>
			<button type="submit" class="btn btn-primary">Login</button>
		</form>

  </div>
  </div>
</div>

</body>
</html>

    