const passwordInput = document.getElementById("password");
const togglePassword = document.getElementById("togglePassword");
const eyeIcon = document.getElementById("eyeIcon");
const googleBtn = document.getElementById("googleBtn");
const signupLink = document.getElementById("signupLink");

if (passwordInput && togglePassword && eyeIcon) {
    togglePassword.addEventListener("click", () => {
        const visible = passwordInput.type === "password";
        passwordInput.type = visible ? "text" : "password";
        togglePassword.setAttribute(
            "aria-label",
            visible ? "Hide password" : "Show password"
        );

        eyeIcon.innerHTML = visible
            ? '<path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z"/><line x1="3" y1="3" x2="21" y2="21"/>'
            : '<path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z"/><circle cx="12" cy="12" r="3"/>';
    });
}

if (googleBtn) {
    googleBtn.addEventListener("click", () => {
        alert("Google Sign-In is not configured yet.");
    });
}

if (signupLink) {
    signupLink.addEventListener("click", event => {
        event.preventDefault();
        alert("Registration is not available yet.");
    });
}
