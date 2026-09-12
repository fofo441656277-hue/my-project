<?php
$conn = new mysqli("localhost", "root", "", "testdb");
if ($conn->connect_error) die("خطأ: " . $conn->connect_error);
?>