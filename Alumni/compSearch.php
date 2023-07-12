
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
      <?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "psystem";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Search functionality
if (isset($_GET['search'])) {
    $search = mysqli_real_escape_string($conn, $_GET['search']);
    $query = "SELECT * FROM company c natural join criteria cr and c.cname LIKE '%$search%' OR c.email LIKE '%$search%'";
} else {
    $query = "SELECT * FROM company c natural join criteria cr";
}

// Fetch data from table
$result = mysqli_query($conn, $query);

// Display table
echo '<div class="container">';
echo '<h2>Company Details</h2>';
echo '<div class="input-group mb-3">';
echo '<form method="get">';
echo '<input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2" name="search">';
echo '<button class="btn btn-primary" type="submit" id="button-addon2">Search</button>';
echo '</form>';
echo '</div>';
echo '<table class="table">';
echo '<thead>';
echo '<tr>';
echo '<th>Company name</th>';
echo '<th>Email</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
   echo '<td><a href="/psystem/admin/jobsEdit.php?id=' . $row['email'] . '">' . $row['cname'] . '</a></td>';
    echo '<td>' . $row['email'] . '</td>';
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';
echo '</div>';

// Close database connection
mysqli_close($conn);
?>

</div>
</div>

</body>
</html>


    
