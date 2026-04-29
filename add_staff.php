<?php
include "db.php";

$name = $_POST['name'];

$sql = "INSERT INTO staff (name) VALUES ('$name')";

if ($conn->query($sql) === TRUE) {
    echo "Staff added successfully";
} else {
    echo "Error: " . $conn->error;
}
?>
