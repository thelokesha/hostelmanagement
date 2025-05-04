<?php
include 'db_connect.php';

$result = $conn->query("SELECT * FROM students");

echo "<h2>Registered Students</h2>";
echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Age</th><th>Contact</th><th>Room</th><th>Fees Paid</th></tr>";
while($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['age']}</td>
        <td>{$row['contact']}</td>
        <td>{$row['room_no']}</td>
        <td>{$row['fees_paid']}</td>
    </tr>";
}
echo "</table>";

$conn->close();
?>
