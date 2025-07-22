<?php
$conn = new mysqli("localhost", "root", "", "records");
$id = $_GET['id'];

$conn->query("UPDATE RecordDate SET status = 1 - status WHERE id = $id");

include 'load_table.php';
?>
