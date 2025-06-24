<?php session_start();
if (!isset($_SESSION['username'])) header('Location: login.html');
$conn = new mysqli('localhost','root','password','rmp');
$res = $conn->query("SELECT prof_name, rating, comment, submitted_at FROM ratings ORDER BY submitted_at DESC");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>View Ratings</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
<body>
  <div class="container2">
  <h2>All Ratings</h2>
  <p>User: <?php echo htmlspecialchars($_SESSION['username']); ?> | <a href="logout.php">Logout</a></p>
  <table>
    <tr>
      <th>Prof</th>
      <th>Rating</th>
      <th>Comment</th>
      <th>Time</th>
    </tr>
  <?php while ($r = $res->fetch_assoc()) {
    echo "<tr>
            <td>{$r['prof_name']}</td>
            <td>{$r['rating']}</td>
            <td>".htmlspecialchars($r['comment'])."</td>
            <td>{$r['submitted_at']}</td>
          </tr>";
  } ?>
  </table>
</div></body></html>