// Basic form validation for login and register
document.addEventListener("DOMContentLoaded", function () {
    // Register form validation
    const registerForm = document.querySelector(".register-form form");
    registerForm.addEventListener("submit", function (e) {
        const password = document.getElementById("password").value;
        const confirmPassword = document.getElementById("confirm-password").value;

        if (password !== confirmPassword) {
            e.preventDefault();  // Prevent form submission
            alert("Passwords do not match!");
        }
    });

    // Login form validation (optional)
    const loginForm = document.querySelector(".login-form form");
    loginForm.addEventListener("submit", function (e) {
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;

        if (!email || !password) {
            e.preventDefault();  // Prevent form submission
            alert("Please fill out all fields!");
        }
    });
});
