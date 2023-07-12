
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
  </head>
  <body>
    <?php require '../student/stud_home_nav.php' ?>
    <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
       <?php session_start();
         $mail = $_SESSION['email'];
         $servername = "localhost";
$username = "root";
$password = "";
$database = "psystem";

$conn = mysqli_connect($servername, $username, $password,$database);
// Die if connection was not successful

$sql = "select *from sdetails where email = '$mail'";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);



if($num==1){
    $row = mysqli_fetch_assoc($result);
    // echo $n;
}else{
    header("location: details.php");
}
    ?>
    <?php
   
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $row['name'];
        $roll = $row['roll'];
        $mail = $_SESSION['email'];
        
        $tenth = $_POST['10th'];
        $twelfth = $_POST['12th'];
        $cpi = $_POST['cpi'];
        $year = $_POST['year'];
        $interest = $_POST['interest'];
        $branch = $_POST['branch'];
        $salary = $_POST['salary'];

        
// Die if connection was not successful

$sql = "update sdetails set name='$name',roll='$roll',email='$mail',10th='$tenth',12th='$twelfth',cpi='$cpi',year='$year',interest='$interest',branch='$branch',salary='$salary' where email = '$mail' ";
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
		<h2>Fill info</h2>
		<form action="/psystem/student/editDetails.php" method="post">

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
				<input type="number" class="form-control" id="10th" value="<?php echo $row['10th'] ?>" required name="10th" step="any">
			</div>
			<div class="form-group">
				<label for="12th">12th Aggregate:</label>
				<input type="number" class="form-control" id="12th" value="<?php echo $row['12th'] ?>" required name="12th" step="any">
			</div>
			<div class="form-group">
				<label for="cpi">Enter your current CPI:</label>
				<input type="number" class="form-control" id="cpi" value="<?php echo $row['cpi'] ?>" required name="cpi" step="any">
			</div>
			<div class="form-group">
				<label for="year">Current year:</label>
				<input type="number" class="form-control" id="year" value="<?php echo $row['year'] ?>" required name="year">
			</div>
            
            <div class="form-group">
				<label for="interest">Area of interest:</label>
				<input type="text" class="form-control" id="interest" value="<?php echo $row['interest'] ?>" required name="interest">
			</div>
            <div class="form-group">
				<label for="salary">Salary</label>
				<input type="number" class="form-control" id="salary" value="<?php echo $row['salary'] ?>" name="salary">
			</div>
            <br>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>


</div>
</div>

</body>
</html>


