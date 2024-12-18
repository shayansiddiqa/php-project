
<?php
$servername = 'localhost'; // Database host
$username = 'root'; // Your database username
$password = '12345678'; // Your database password
$database = 'crudoperation'; // Your database name

// Create connection
$con = new mysqli($host, $username, $password, $database);


// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>




