<?php
include 'config.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$userData = "<table>";
$userData .= "<tr><th>ID</th><th>Username</th><th>Password</th><th>Phone</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    $userData .= "<tr>";
    $userData .= "<td>" . $row["ids"] . "</td>";
    $userData .= "<td>" . $row["usernames"] . "</td>";
    $userData .= "<td>" . $row["passwords"] . "</td>";
    $userData .= "<td>" . $row["phone"] . "</td>";
    $userData .= "</tr>";
}
$userData .= "</table>";

echo $userData;
