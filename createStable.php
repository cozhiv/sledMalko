<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

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
$sql ="CREATE TABLE CocaCall (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
startingOn DATE,
startingAt TIME NOT NULL,
endingOn DATE,
endingAt TIME,
highlights VARCHAR(256) NOT NULL,
description VARCHAR(256) NOT NULL,
firstLink VARCHAR(256),
secondLink VARCHAR(256),
thirdLink VARCHAR(256),
fourthLink VARCHAR(256),
fiftLink VARCHAR(256),
sixthLink VARCHAR(256),
mainstream INT(2),
additionalRanking INT(2)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table CocaCola created successfully";
} else {
    echo "Error creating table coca cola: " . $conn->error;
}

$conn->close();

        ?>
    </body>
</html>
