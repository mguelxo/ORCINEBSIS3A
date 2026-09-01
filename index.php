<?php

$error = $_GET["error"] ?? "";
$messages = [
    "empty" => "Please enter your username and password.",
    "invalid" => "Invalid username or password."
];

$errorMessage = $messages[$error] ?? "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baao Community College - Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login-page">
    <div class="background"></div>

    <main class="login-container">
        <section class="login-card" aria-labelledby="login-title">
            <div class="logo-container">
                <img src="assets/logo.jpg" alt="Baao Community College Logo">
            </div>

            <h1 id="login-title">Baao Community College</h1>
            <p class="subtitle">Student Portal</p>

            <?php if ($errorMessage !== ""): ?>
                <div class="error-message" role="alert">
                    <?= htmlspecialchars($errorMessage, ENT_QUOTES, "UTF-8") ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="login.php">
                <div class="input-group">
                    <label class="sr-only" for="username">Username</label>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Username"
                        autocomplete="username"
                        required
                    >
                </div>

                <div class="input-group password-group">
                    <label class="sr-only" for="password">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Password"
                        autocomplete="current-password"
                        required
                    >

                    <button
                        type="button"
                        id="togglePassword"
                        aria-label="Show password"
                    >
                        <svg
                            id="eyeIcon"
                            xmlns="http://www.w3.org/2000/svg"
                            width="18"
                            height="18"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true"
                        >
                            <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                    </button>
                </div>

                <button type="submit" class="signin-btn">Sign In</button>
            </form>

            <div class="divider"><span>OR</span></div>

            <button class="google-btn" id="googleBtn" type="button">
                <svg
                    class="google-icon"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 48 48"
                    width="18"
                    height="18"
                    aria-hidden="true"
                >
                    <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.7 30.47 0 24 0 14.61 0 6.5 5.38 2.56 13.22l7.98 6.2C12.43 13.24 17.74 9.5 24 9.5z"/>
                    <path fill="#4285F4" d="M46.98 24.55c0-1.6-.14-3.14-.41-4.55H24v9.02h12.94c-.56 2.98-2.23 5.5-4.74 7.18l7.73 6c4.51-4.16 7.05-10.28 7.05-17.65z"/>
                    <path fill="#FBBC05" d="M10.54 28.58A14.5 14.5 0 0 1 9.5 24c0-1.59.36-3.13 1.04-4.58l-7.98-6.2A23.95 23.95 0 0 0 0 24c0 3.87.93 7.54 2.56 10.78l7.98-6.2z"/>
                    <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.91-5.8l-7.73-6c-2.14 1.44-4.87 2.3-8.18 2.3-6.26 0-11.57-3.74-13.46-9.08l-7.98 6.2C6.5 42.62 14.61 48 24 48z"/>
                </svg>
                <span>Sign in with Google</span>
            </button>

            <p class="signup-text">
                Don't have an account?
                <a href="#" id="signupLink">Sign up</a>
            </p>
        </section>
    </main>

    <script src="script.js"></script>
</body>
</html>
