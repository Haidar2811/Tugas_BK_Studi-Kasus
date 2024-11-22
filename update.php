<?php
include 'koneksi.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM tasks WHERE id=$id");
$row = $result->fetch_assoc();

$status = $row['status'] == 'Belum' ? 'Sudah' : 'Belum';
$conn->query("UPDATE tasks SET status='$status' WHERE id=$id");

header("Location: index.php");
?>
