<?php
require_once "db.php";

$username = $_POST["username"] ?? "";
$password = $_POST["password"] ?? "";

// НАВМИСНО ВРАЗЛИВИЙ SQL
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

echo "<h1>Executed SQL:</h1>";
echo "<pre>$sql</pre>";

$result = $pdo->query($sql)->fetch();

if ($result) {
    echo "<h2 style='color:green;'>Login SUCCESS</h2>";
} else {
    echo "<h2 style='color:red;'>Login FAILED</h2>";
}

