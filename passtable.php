<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbass";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE JetFuel (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nickname VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL,
email VARCHAR(255),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table for autentication created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
        <!--?php
        // put your code here
        ?-->
    </body>
</html>

