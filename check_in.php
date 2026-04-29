<?php
include "db.php";

$staff_id = $_POST['staff_id'];
$time = date("Y-m-d H:i:s");

$sql = "INSERT INTO attendance (staff_id, check_in) VALUES ('$staff_id', '$time')";

if ($conn->query($sql) === TRUE) {
    echo "Check-in recorded";
} else {
    echo "Error: " . $conn->error;
}
?>
