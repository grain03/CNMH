<?php
// Database connection parameters
$servername = "localhost:3306"; // Change this to your MySQL server address
$username = "root"; // Change this to your MySQL username
$password = "Apple2006@"; // Change this to your MySQL password
$dbname = "labdebugage"; // Change this to the name of your MySQL database

// Create a MySQLi connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully!";
}

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=labdebugage", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }






?>