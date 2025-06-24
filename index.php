<!DOCTYPE html>
<html>
<head>
  <title>Rate My Professor</title>
  <link rel="stylesheet" href="css/style.css"></head>
<body>
  <div class="container">
    <h2>Rate My Professor</h2>
    <p><a href="login.html">Login</a> or <a href="register.html">Register</a> to give rating.</p>
  </div>
</body>
</html>

<?php
$conn = new mysqli('localhost', 'root', 'password', 'rmp');
if ($conn->connect_error) {
    die("DB error: " . $conn->connect_error);
}

$sql = "SELECT prof_name, rating, comment, submitted_at FROM ratings ORDER BY submitted_at DESC";
$res = $conn->query($sql);

if ($res->num_rows > 0) {
    echo "<h2 style=margin-left: 40px;>Recent Ratings</h2>";
    echo "<table border='3' cellpadding='20' style='width: 80%; border-collapse: collapse; margin-left: 130px;'>
            <tr>
                <th>Professor</th>
                <th>Rating</th>
                <th>Comment</th>
                <th>Submitted At</th>
            </tr>";

    while ($row = $res->fetch_assoc()) {
        echo "<tr>
                <td>{$row['prof_name']}</td>
                <td>{$row['rating']}</td>
                <td>{$row['comment']}</td>
                <td>{$row['submitted_at']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "<p>No ratings available yet.</p>";
}

$conn->close();
?>
