<?php

include '../config/db.php';

$id = $_GET['id'];

$query = "DELETE FROM students WHERE id = $id";

mysqli_query($conn, $query);

header("Location: list_students.php");

?>