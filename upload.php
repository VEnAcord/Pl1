<?php
$target = "uploads/" . basename($_FILES["file"]["name"]);

// Небезпечне завантаження: дозволяє будь-які файли (php теж!)
move_uploaded_file($_FILES["file"]["tmp_name"], $target);

echo "<h1>File uploaded!</h1>";
echo "<p>Path: <a href='$target'>$target</a></p>";

