<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KeMU Account Registration</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="container">
        <div class="image-section">
            <img src="uploads/KeMU_web_Sign_in.png" alt="Kenya Methodist University">
            <h1>The Future Is Here!</h1>
        </div>
        
        <div class="form-section">
            <img src="uploads/KeMU_logo.png" alt="Kenya Methodist University Logo" class="logo">
            <h2>Account Registration</h2>
            <p>To sign up, kindly fill the form below</p>
            <form id="registrationForm" action="signin.php" method="POST" onsubmit="return validateForm()">
                
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter you full name" required>

                <label for="password">Password</label>
                <div class="password-wrapper">
                    <input type="password" id="password" name="password" placeholder="Enter password" required>
                    <span class="toggle-password" onclick="togglePasswordVisibility('password')">👁️</span>
                </div>

                <label for="confirmPassword">Confirm Password</label>
                <div class="password-wrapper">
                    <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm password"  required>
                    <span class="toggle-password" onclick="togglePasswordVisibility('confirmPassword')">👁️</span>
                </div>

                <label>User Type</label>
                <div class="radio-group">
                    <input type="radio" id="student" name="userType" value="student" checked>
                    <label for="student">Student</label>
                    <input type="radio" id="employee" name="userType" value="employee">
                    <label for="employee">Employee</label>
                </div>

                <button type="submit" class="submit-btn">Register</button>
            </form>
        </div>
    </div>
</body>
</html>
