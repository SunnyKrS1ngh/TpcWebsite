
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
    <?php require '../admin/admin_home_nav.php' ?>
    <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
      <?php session_start();
         $mail = $_GET['id'];
         $servername = "localhost";
$username = "root";
$password = "";
$database = "psystem";

$conn = mysqli_connect($servername, $username, $password,$database);
// Die if connection was not successful

$sql = "select *from alumdet where email = '$mail'";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);



if($num==1){
    $row = mysqli_fetch_assoc($result);
    
    // echo $n;
}else{
    echo "Row not found";
}
    ?>
    <?php
   
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $row['name'];
        $roll = $row['roll'];
        $mail = $_SESSION['email'];
        
        $company = $_POST['company'];
        $cpi = $_POST['cpi'];
        $ctc = $_POST['ctc'];
        $position = $_POST['position'];
        $location = $_POST['location'];
        $tenure = $_POST['tenure'];

        
// Die if connection was not successful

$sql = "update alumdet set name='$name',roll='$roll',email='$mail',company='$company',cpi='$cpi',ctc='$ctc',position='$position',location='$location',tenure='$tenure' ";
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
		<form action="/psystem/admin/alumEdit.php" method="post">

			
			<div class="form-group">
				<label for="company">Company name:</label>
				<input type="text" class="form-control" id="company" value="<?php echo $row['company']?>" required name="company">
			</div>
			<div class="form-group">
				<label for="cpi">CPI:</label>
				<input type="number" class="form-control" id="cpi" value="<?php echo $row['cpi']?>" required name="cpi" step="any">
			</div>
			<div class="form-group">
				<label for="ctc">Enter your CTC:</label>
				<input type="number" class="form-control" id="ctc" value="<?php echo $row['ctc']?>" required name="ctc" step="any">
			</div>
			<div class="form-group">
				<label for="position">Position:</label>
				<input type="text" class="form-control" id="position" value="<?php echo $row['position']?>" required name="position">
			</div>
            
            <div class="form-group">
				<label for="location">Location:</label>
				<input type="text" class="form-control" id="location" value="<?php echo $row['location']?>" required name="location">
			</div>
            <div class="form-group">
				<label for="tenure">Working Tenure</label>
				<input type="number" class="form-control" id="tenure" value="<?php echo $row['tenure']?>" name="tenure">
			</div>
            <br>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>


</div>
</div>

</body>
</html>


    
