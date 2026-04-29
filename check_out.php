<?php
include "db.php";

$staff_id = $_POST['staff_id'];
$time = date("Y-m-d H:i:s");

$sql = "SELECT * FROM attendance 
        WHERE staff_id='$staff_id' AND check_out IS NULL 
        ORDER BY id DESC LIMIT 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $id = $row['id'];

    $update = "UPDATE attendance 
               SET check_out='$time' 
               WHERE id='$id'";

    if ($conn->query($update) === TRUE) {
        echo "Check-out recorded";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "No active check-in found";
}
?>
