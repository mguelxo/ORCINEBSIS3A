<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "bsis3a";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    exit("Database connection failed.");
}

mysqli_set_charset($conn, "utf8mb4");
