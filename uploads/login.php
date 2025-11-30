<?php
if (!empty($_POST["username"]) && !empty($_POST["password"])) {
    $users = file("users.txt", FILE_IGNORE_NEW_LINES);

    foreach ($users as $user) {
        list($u, $p) = explode(":", $user);
        if ($_POST["username"] === $u && $_POST["password"] === $p) {
            echo "Welcome admin!";
            echo "<br><a href='admin.php'>Go to admin panel</a>";
            return;
        }
    }

    echo "Invalid login!";
}
?>

<form action="" method="POST">
    <h2>Login</h2>
    <input type="text" name="username" placeholder="Username"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <button type="submit">Login</button>
</form>
