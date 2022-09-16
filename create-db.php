<?php

include 'data.php';

//create database
$sql = "CREATE DATABASE putri_cute";
if ($conn->query($sql) === TRUE) {
    echo "Database sudah dibuat";
} else {
    echo "Error data sudah dibuat: " .  $coon->error;
}

$conn->close();
?>