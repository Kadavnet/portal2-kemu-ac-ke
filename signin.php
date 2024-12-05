<?php
header('Content-Type: application/json');

// Database connection
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'kemuhub';

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo json_encode(['status' => 'error', 'message' => 'Database connection failed.']);
    exit;
}

// Validate input
$user = trim($_POST['username']);
$pass = trim($_POST['password']);
$userType = trim($_POST['userType']);

if (!in_array($userType, ['student', 'employee'])) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid user type.']);
    exit;
}

// Check if username exists
$query = $conn->prepare("SELECT id FROM users WHERE username = ?");
$query->bind_param("s", $user);
$query->execute();
$result = $query->get_result();

if ($result->num_rows > 0) {
    echo json_encode(['status' => 'error', 'message' => 'User already registered.']);
} else {
    // Insert new user
    $hashedPassword = password_hash($pass, PASSWORD_BCRYPT);
    $insert = $conn->prepare("INSERT INTO users (username, password, user_type) VALUES (?, ?, ?)");
    $insert->bind_param("sss", $user, $hashedPassword, $userType);

    if ($insert->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Registration successful.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error registering user.']);
    }
}

$conn->close();
?>
