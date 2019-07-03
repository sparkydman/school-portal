<?php
$conn = new mysqli('localhost', 'root', 'goal', 'cgpdb');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
