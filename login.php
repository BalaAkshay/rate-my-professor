<?php
session_start();

$conn = new mysqli('localhost', 'root', 'password', 'rmp');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];
    $sql = "SELECT id, username, password FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            header("Location: rate.html?success=Login successful!");
            exit();
        }
    }
    header("Location: login.html?error=Invalid username or password");
    exit();
}

$conn->close();
?>
