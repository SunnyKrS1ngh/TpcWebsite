
<!-- 
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/psystem/company/c_home.php">Company</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/psystem/student/logSign.php">Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/psystem/alumni/logSign.php">Alumni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/psystem/admin/logSign.php">Admin</a>
        </li>
      
      </ul>
    </div>
  </div>
</nav> -->

<!DOCTYPE html>
<html lang="en">
<head>
<title>Placement Management System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}

.background-image {
  background-image: url('https://images.unsplash.com/photo-1462536943532-57a629f6cc60?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=873&q=80');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
}

.about {
  background-image: url('rainbow.png');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
}


</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
   
    <a href="/psystem/company/c_home.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Company</a>
    <a href="/psystem/student/logSign.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Student</a>
    <a href="/psystem/alumni/logSign.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Alumni</a>
    <a href="/psystem/admin/logSign.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Admin</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="/psystem/company/c_home.php" class="w3-bar-item w3-button w3-padding-large">Company</a>
    <a href="/psystem/student/logSign.php" class="w3-bar-item w3-button w3-padding-large">Student</a>
    <a href="/psystem/alumni/logSign.php" class="w3-bar-item w3-button w3-padding-large">Alumni</a>
    <a href="/psystem/admin/logSign.php" class="w3-bar-item w3-button w3-padding-large">Admin</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center background-image" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">Welcome To Training and Placement Cell</h1>
  
</header>

<!-- First Grid -->

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container about">
  <div class="w3-content">
    <!-- <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
    </div> -->

    <div class="w3-twothird ">
      <h3>ABOUT</h3>
      <p>Welcome to IITP's Placement Website, where students, alumni, and recruiters can connect and explore new career opportunities. Our platform provides a seamless and user-friendly experience for both job seekers and recruiters to connect, network, and exchange relevant information. With a rich and diverse talent pool of students and alumni, we strive to bring forth the best opportunities for our students to kick-start their careers. Our website features up-to-date job postings, company profiles, and personalized dashboards to manage applications and track progress. Our team works tirelessly to ensure that our students are equipped with the necessary skills and resources to succeed in their professional journeys. Join us and take the first step towards building a successful career.</p>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>

