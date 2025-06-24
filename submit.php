<?php session_start();
if (!isset($_SESSION['user'])) header('Location: login.html');
$conn = new mysqli('localhost','root','password','rmp');
$stmt = $conn->prepare("INSERT INTO ratings (prof_name,rating,comment,username) VALUES (?,?,?,?)");
$stmt->bind_param('siss',$_POST['prof'], $_POST['rating'], $_POST['comment'], $_SESSION['username']);
$stmt->execute();
header('Location: view.php'); exit;
?>
