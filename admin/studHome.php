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

$sql2 = "select c.cname, c.email,cr.job,cr.salary from sdetails s,criteria cr,company c where s.email = '$mail' and c.email=cr.email and s.10th>=cr.10th and s.12th>=cr.12th and s.cpi>=cr.cpi and cr.batch-s.year<=4 and cr.batch-s.year>=0";
$result2 = mysqli_query($conn,$sql2);

$ncomp = mysqli_num_rows($result2);

if($num==1){
    $row = mysqli_fetch_assoc($result);
    // echo $n;
}else{
    header("location: login.php");
}
    ?>
    
    <h3><center>Welcome <?php echo $row['name']?>!</center></h3>
    <h5><center>Companies eligible for : <?php echo $ncomp ?></center></h5>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</div>
</div>

</body>
</html>


    