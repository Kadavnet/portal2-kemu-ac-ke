# Kenya Methodist University (KeMU) Account Registration Portal

Welcome to the **KeMU Account Registration Portal**. This portal is designed for seamless registration of students and employees at Kenya Methodist University, providing a secure and user-friendly interface for account creation.

---

## Features

### User-Friendly Interface
- **Responsive Design**: The portal is optimized for use on desktop and mobile devices.
- **Interactive Form**: Includes a password toggle for better usability and real-time form validation.

### Secure User Registration
- **Secure Password Storage**: Passwords are encrypted using industry-standard `BCRYPT` hashing.
- **Validation**: Ensures all required fields are completed and passwords match before submission.

### Backend Feedback
- **Dynamic Responses**: Real-time feedback for users, including success and error notifications.

---

## File Overview

### Frontend
1. **`index.php`**: 
   - Contains the HTML structure for the portal, including the registration form and layout.
2. **`styles.css`**:
   - Defines the portal's appearance, including colors, fonts, and layout.
3. **`script.js`**:
   - Handles form validation, password toggle functionality, and submission using AJAX.

### Backend
4. **`signin.php`**:
   - Processes the registration request.
   - Validates inputs, checks for duplicate users, and stores new user data securely in the database.

---

## Requirements

1. **Environment**:
   - PHP-enabled web server (e.g., Apache, XAMPP, or WAMP).
   - MySQL database.

2. **Database Configuration**:
   - Database Name: `kemuhub`.
   - Users Table Structure:
     ```sql
     CREATE TABLE users (
         id INT AUTO_INCREMENT PRIMARY KEY,
         username VARCHAR(255) NOT NULL,
         password VARCHAR(255) NOT NULL,
         user_type ENUM('student', 'employee') NOT NULL,
         created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     );
     ```

---

## Installation

1. **Clone the Repository**:
   Download or clone the project files to your local server directory.

2. **Set Up Database**:
   - Create a database named `kemuhub`.
   - Import the table structure provided above.

3. **Configure Backend**:
   - Update the `signin.php` file with your database connection details:
     ```php
     $host = 'localhost';
     $username = 'root';
     $password = '';
     $dbname = 'kemuhub';
     ```

4. **Run the Portal**:
   - Open your web browser and navigate to the project directory (e.g., `http://localhost/portal2-kemu-ac-ke/index.php`).

---

## Usage

### Registration Process
1. Open the portal and fill out the registration form:
   - Enter your username.
   - Set and confirm your password.
   - Select your user type (Student/Employee).
2. Click the **Register** button to submit the form.

### Feedback
- If registration is successful:
  - A success message is displayed, and the form resets.
- If there are errors (e.g., duplicate username or mismatched passwords):
  - The system displays an appropriate error message.

---

## Key Functionalities

### Frontend
- **Password Visibility Toggle**:
  - Click the eye icon in the password field to show or hide the entered text.
- **Form Validation**:
  - Ensures passwords match before submission.
- **AJAX Submission**:
  - Sends data to the backend without reloading the page.

### Backend
- **Duplicate Check**:
  - Prevents registration with an already existing username.
- **Secure Storage**:
  - Passwords are hashed using `BCRYPT`.

---

## Troubleshooting

1. **Database Connection Error**:
   - Verify your database credentials in `signin.php`.
   - Ensure the MySQL server is running.

2. **Form Not Submitting**:
   - Check the browser console for JavaScript errors.
   - Ensure `script.js` is properly linked and loaded.

3. **Unexpected Errors**:
   - Enable PHP error reporting for debugging:
     ```php
     error_reporting(E_ALL);
     ini_set('display_errors', 1);
     ```

---

## Future Improvements

- **Email Verification**:
  - Add functionality to verify users via email before activation.
- **Forgot Password**:
  - Enable users to reset their passwords.
- **Profile Management**:
  - Allow users to update their details post-registration.

---

## Support

For assistance, contact the **KeMU IT Department** via email at ` info@kemu.ac.ke` or call the IT support line.

---
---
