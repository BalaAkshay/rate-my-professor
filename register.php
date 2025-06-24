<?php
session_start();

$conn = new mysqli('localhost', 'root', 'password', 'rmp');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if passwords match
    if ($password !== $confirm_password) {
        header("Location: register.html?error=Passwords do not match");
        exit();
    }

    // Check if username already exists
    $check_username = "SELECT id FROM users WHERE username = '$username'";
    $result = $conn->query($check_username);
    if ($result->num_rows > 0) {
        header("Location: register.html?error=Username already exists");
        exit();
    }

    // Check if email already exists
    $check_email = "SELECT id FROM users WHERE email = '$email'";
    $result = $conn->query($check_email);
    if ($result->num_rows > 0) {
        header("Location: register.html?error=Email already exists");
        exit();
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert new user
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
    
    if ($conn->query($sql) === TRUE) {
        $_SESSION['username'] = $username;
        header("Location: index.php?success=Registration successful!");
        exit();
    } else {
        header("Location: register.html?error=Error creating account");
        exit();
    }
}

$conn->close();
?>
