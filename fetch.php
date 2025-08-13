<?php
// Establishing a connection to the database
$mysqli = new mysqli("localhost", "root", "", "test1");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Performing a SELECT query
$sql = "SELECT dob, class, name FROM results";
$result = $mysqli->query($sql);

// Checking if the query was successful
if ($result === false) {
    die("Error executing the query: " . $mysqli->error);
}

// Fetching multiple rows
while ($row = $result->fetch_assoc()) {
    // Process each row as needed
    echo "Column1: " . $row['name'] . ", Column2: " . $row['class'] . "<br>";
}

// Free result set
$result->free();

// Closing connection
$mysqli->close();
?>
