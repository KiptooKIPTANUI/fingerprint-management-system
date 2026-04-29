<?php
include "db.php";

$sql = "SELECT a.id, s.name, a.check_in, a.check_out
        FROM attendance a
        JOIN staff s ON a.staff_id = s.id
        ORDER BY a.id DESC";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "Name: " . $row['name'] . "<br>";
    echo "Check-in: " . $row['check_in'] . "<br>";
    echo "Check-out: " . $row['check_out'] . "<br><hr>";
}
?>
