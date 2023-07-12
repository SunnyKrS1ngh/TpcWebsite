<?php
session_start();

if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true){
    header("location : login.php");
    exit;
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
    <?php require '../company/c_home_nav.php' ?>
    <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
  
    <?php
   
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $mail = $_SESSION['email'];
        $job = $_POST['job'];
        $branch = $_POST['branch'];
        $tenth = $_POST['10th'];
        $twelfth = $_POST['12th'];
        $cpi = $_POST['cpi'];
        $year = $_POST['year'];
        $mode = $_POST['mode'];
        $salary = $_POST['salary'];

        $servername = "localhost";
$username = "root";
$password = "";
$database = "psystem";

// Create a connection
$conn = mysqli_connect($servername, $username, $password,$database);
// Die if connection was not successful

$sql = "insert into criteria(email,job,10th,12th,cpi,batch,mode,branch,salary) values('$mail','$job','$tenth','$twelfth','$cpi','$year','$mode','$branch','$salary')";
$result = mysqli_query($conn,$sql);
if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Successfully submitted</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
}else{
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Submission failed</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
}
        
      // Submit these to a database
    }
    ?>

	<div class="container mt-5">
		<h2>Criteria</h2>
		<form action="/psystem/company/criteria.php" method="post">
            <div class="form-group">
				<label for="job">Type of job:</label>
				<input type="text" class="form-control" id="job" placeholder="Enter type of job" required name="job">
			</div>
			<div class="form-group">
				<label for="branch">Branch Of Study:</label>
                    <select id="branch" name="branch">
                        <option value="cs">CSE</option>
                        <option value="ai">AI&DS</option>
                        <option value="electrical">Electrical</option>
                        <option value="mnc">MNC</option>
                    </select>
			</div>
			<div class="form-group">
				<label for="10th">10th Aggregate:</label>
				<input type="number" class="form-control" id="10th" placeholder="Enter 10th percentage" required name="10th" min = "1" max="100">
			</div>
			<div class="form-group">
				<label for="12th">12th Aggregate:</label>
				<input type="number" class="form-control" id="12th" placeholder="Enter 12th percentage" required name="12th" min = "1" max="100">
			</div>
			<div class="form-group">
				<label for="cpi">Enter your current CPI:</label>
				<input type="number" class="form-control" id="cpi" placeholder="Enter your current CPI" required name="cpi" step="any">
			</div>
			<div class="form-group">
				<label for="year">Eligible batch:</label>
				<input type="number" class="form-control" id="year" placeholder="Enter from which batch" required name="year">
			</div>
            <div class="form-group">
				<label for="mode">Mode of interview:</label>
                    <select id="mode" name="mode">
                        <option value="online">ONLINE</option>
                        <option value="offline">OFFLINE</option>
                    </select>
			</div>
            <div class="form-group">
				<label for="salary">Expected Salary:</label>
				<input type="number" class="form-control" id="salary" placeholder="Expected salary in LPA" required name="salary">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>

</div>
</div>

</body>
</html>


    