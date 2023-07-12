<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>
	<script>
		function checkPasswordStrength() {
			var password = $("#password").val();
			var result = zxcvbn(password);
			var strength = result.score;
			var message = "";

			if (strength == 0) {
				message = "Password strength: Very weak";
			} else if (strength == 1) {
				message = "Password strength: Weak";
			} else if (strength == 2) {
				message = "Password strength: Fair";
			} else if (strength == 3) {
				message = "Password strength: Good";
			} else if (strength == 4) {
				message = "Password strength: Strong";
			}

			$("#password-strength").html(message);
		}
        function validatePasswordMatch() {
			var password = $("#password").val();
			var confirm_password = $("#confirm-password").val();

			if (password != confirm_password) {
				$("#confirm-password").addClass("is-invalid");
				$("#password-match-error").removeClass("d-none");
			} else {
				$("#confirm-password").removeClass("is-invalid");
				$("#password-match-error").addClass("d-none");
			}
		}
	</script>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];


        $servername = "localhost";
$username = "root";
$password = "";
$database = "dblab8";

// Create a connection
$conn = mysqli_connect($servername, $username, $password,$database);
// Die if connection was not successful

$sql = "insert into users(first_name,last_name,email,password) values('$fname','$lname','$email','$pass')";
$result = mysqli_query($conn,$sql);
if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>You are Successfully Registered! Now you can login</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
}else{
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Registration Failed</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
}
        
      // Submit these to a database
    }
    ?>

	<div class="container mt-5">
		<h2>Sign Up</h2>
		<form action="/mydata/signup.php" method="post">
			<div class="form-group">
				<label for="fname">First Name:</label>
				<input type="text" class="form-control" id="fname" placeholder="Enter First Name" required name="fname">
			</div>
			<div class="form-group">
				<label for="lname">Last Name:</label>
				<input type="text" class="form-control" id="lname" placeholder="Enter Last Name" required name="lname">
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" placeholder="Enter Email" required name="email">
				<div class="invalid-feedback">Please enter a valid email address.</div>
			</div>
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" class="form-control" id="password" placeholder="Enter Password" required onkeyup="checkPasswordStrength();" name="password">
				<div id="password-strength"></div>
			</div>
			<div class="form-group">
				<label for="confirm-password">Confirm Password:</label>
				<input type="password" class="form-control" id="confirm-password" placeholder="Confirm Password" required onkeyup="validatePasswordMatch();">
				<div class="invalid-feedback">Passwords do not match.</div>
			</div>
			<button type="submit" class="btn btn-primary">SignUp</button>
		</form>
	</div>
</body>
</html>
