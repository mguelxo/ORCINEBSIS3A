<?php

session_start();

if (!isset($_SESSION["user_id"], $_SESSION["username"])) {
    header("Location: index.php");
    exit;
}

$username = htmlspecialchars(
    $_SESSION["username"],
    ENT_QUOTES,
    "UTF-8"
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIVINITAS // Access Granted</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="portal-page">
    <div class="portal-background"></div>

    <main class="portal-container">
        <img
            src="assets/divinitas.png"
            alt="DIVINITAS"
            class="portal-logo"
        >

        <p class="status">[ ACCESS GRANTED ]</p>
        <h1>DIVINITAS</h1>
        <p class="portal-subtitle">SYSTEM STATUS // ONLINE</p>

        <div class="portal-line"></div>

        <section class="message">
            <p>DEFACED BY <span class="green">EMY</span></p>
            <p>Welcome, <span class="green"><?= $username ?></span></p>
            <p>This is a fictional defacement-style demonstration.</p>
        </section>

        <section class="terminal" aria-label="System information">
            <p><span class="green">root@divinitas</span>:~$ whoami</p>
            <p><span class="gray">authenticated_user:</span> <?= $username ?></p>
            <p><span class="green">root@divinitas</span>:~$ status</p>
            <p><span class="green">[ ONLINE ]</span></p>
            <p><span class="green">root@divinitas</span>:~$ access_level</p>
            <p><span class="green">AUTHORIZED</span></p>
        </section>

        <p class="message">
            DISCORD:
            <span class="green">divinitas.gg/discord</span>
        </p>

        <a href="logout.php" class="logout">LOGOUT</a>
    </main>
</body>
</html>
