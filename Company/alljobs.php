
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
session_start();
?>
        <?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "psystem";
$mail = $_SESSION['email'];
// Create a connection
$conn = mysqli_connect($servername, $username, $password,$database);
// Die if connection was not successful

$sql = "select *from criteria where email = '$mail'";
$result = mysqli_query($conn,$sql);
$c=1;
while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <div class="card">
        <div class="card-body">
            <h5><?php echo $c."."; ?></h5>
            <h5 class="card-title"><?php echo "Job : ".$row["job"]; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo "Batch : ".$row["batch"]; ?></h6>
            <p class="card-text"><?php echo "Salary : ".$row["salary"]; ?></p>
            <a href="../company/eligStud.php?id=<?php echo $row['cid']; ?>" class="btn btn-primary">Eligible Students</a>
            <a href="../company/EligEdit.php?id=<?php echo $row['cid']; ?>" class="btn btn-primary">Edit criteria</a>
            <a href="../company/deleteCrit.php?id=<?php echo $row['cid']; ?>" class="btn btn-danger">Delete</a>
        </div>
    </div>
    <?php $c++; ?>
    <?php
}

?>

</div>
</div>

</body>
</html>


    