<?php
$conn = new mysqli("localhost", "root", "", "records"); // records = your DB name
if ($conn->connect_error) die("Connection failed");

$name = $_POST['name'];
$age = $_POST['age'];

$sql = "INSERT INTO RecordDate (name, age, status) VALUES ('$name', $age, 0)";
$conn->query($sql);

header("Location: Record.php"); // redirect back to form
?>
