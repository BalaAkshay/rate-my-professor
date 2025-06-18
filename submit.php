<?php session_start();
if (!isset($_SESSION['user'])) header('Location: login.html');
$conn = new mysqli('localhost','root','Moshniag!@#456','rmp');
$stmt = $conn->prepare("INSERT INTO ratings (prof_name,rating,comment,user) VALUES (?,?,?,?)");
$stmt->bind_param('siss',$_POST['prof'], $_POST['rating'], $_POST['comment'], $_SESSION['user']);
$stmt->execute();
header('Location: view.php'); exit;
?>
