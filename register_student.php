<?php
include 'db_connect.php';

$name = $_POST['name'];
$age = $_POST['age'];
$contact = $_POST['contact'];
$room_no = $_POST['room_no'];
$fees_paid = $_POST['fees_paid'];

$sql = "INSERT INTO students (name, age, contact, room_no, fees_paid)
        VALUES ('$name', $age, '$contact', '$room_no', $fees_paid)";

if ($conn->query($sql) === TRUE) {
    echo "Student registered successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
