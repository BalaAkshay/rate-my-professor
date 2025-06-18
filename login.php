<?php session_start();
$conn = new mysqli('localhost','root','Moshniag!@#456','rmp');
if ($conn->connect_error) die('DB error');
$u = $_POST['username']; $p = hash('sha256', $_POST['password']);
$stmt = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
$stmt->bind_param('ss',$u,$p); $stmt->execute();
$res = $stmt->get_result();
if ($res->num_rows===1) {
  $_SESSION['user'] = $u;
  header('Location: rate.html'); exit;
} else {
  echo "<p class='container error'>Login failed. <a href='login.html'>Try again</a></p>";
}
?>
