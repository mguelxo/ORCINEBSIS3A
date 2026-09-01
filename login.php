<?php

session_start();
require_once "database.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

$username = trim($_POST["username"] ?? "");
$password = $_POST["password"] ?? "";

if ($username === "" || $password === "") {
    header("Location: index.php?error=empty");
    exit;
}

$stmt = mysqli_prepare(
    $conn,
    "SELECT id, username, password FROM users WHERE username = ? LIMIT 1"
);

if (!$stmt) {
    exit("Unable to process the request.");
}

mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

mysqli_stmt_close($stmt);

if (!$user || $password !== $user['password']) {
    header("Location: index.php?error=invalid");
    exit;
}

session_regenerate_id(true);

$_SESSION["user_id"] = $user["id"];
$_SESSION["username"] = $user["username"];

header("Location: deface.php");
exit;
