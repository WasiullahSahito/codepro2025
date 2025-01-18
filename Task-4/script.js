
    (function () {
        'use strict';

        // Fetch the form and the password field
        const form = document.getElementById('loginForm');
        const passwordField = document.getElementById('password');
        const passwordFeedback = passwordField.parentNode.querySelector('.invalid-feedback');

        // Password validation function
        function validatePassword(password) {
            const regex = /^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
            return regex.test(password);
        }

        // Add event listener for form submission
        form.addEventListener('submit', function (event) {
            event.preventDefault();
            const password = passwordField.value;

            // Check if the password is valid
            if (!validatePassword(password)) {
                // Show invalid feedback
                passwordFeedback.textContent = "Password must contain at least one number, one special character, one capital letter, and be at least 8 characters long.";
                passwordField.classList.add('is-invalid');
                passwordField.classList.remove('is-valid');
            } else {
                // If valid, remove invalid class and add valid class
                passwordField.classList.remove('is-invalid');
                passwordField.classList.add('is-valid');
            }

            // Check form validity and add Bootstrap validation classes
            if (!form.checkValidity()) {
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        });
    })();
