
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://unpkg.com/xterm/css/xterm.css" />
    <script src="https://unpkg.com/xterm/lib/xterm.js"></script>
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
$servername = "localhost"; // Replace with your server name
$username = "username"; // Replace with your MySQL username
$password = "password"; // Replace with your MySQL password
$dbname = "psystem"; // Replace with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if user has entered a SQL command
if (isset($_POST["sql"])) {
    // Sanitize user input to prevent SQL injection
    $sql = $conn->real_escape_string($_POST["sql"]);
    
    // Execute SQL command
    $result = $conn->query($sql);
    
    // Check if command was executed successfully
    if ($result) {
        // Display results in a table
        echo "<table border='3' style='border-spacing: 10px 5px;'>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>  " . $value . "  </td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Error: ";
    }
}

// Close connection
$conn->close();
?>
<form method="post" action="">
    <textarea name="sql" cols="50" rows="10"></textarea><br>
    <input type="submit" value="Execute SQL">
</form>

</div>
</div>

</body>
</html>


    