<?php require_once "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Test Vulnerable Site</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Welcome to Vulnerable Test Site</h1>

<h2>1. XSS Test</h2>
<form method="GET" action="">
    <input type="text" name="q" placeholder="Enter text">
    <button type="submit">Submit</button>
</form>

<p>Output:
<b>
<?php
// НАВМИСНА ВРАЗЛИВІСТЬ: Виводимо текст без фільтрації
echo $_GET["q"] ?? "";
?>
</b>
</p>

<hr>

<h2>2. SQL Injection Login</h2>
<form method="POST" action="login.php">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button>Login</button>
</form>

<hr>

<h2>3. File Upload (Unsafe)</h2>
<form method="POST" action="upload.php" enctype="multipart/form-data">
    <input type="file" name="file">
    <button>Upload</button>
</form>

<hr>

<h2>4. Directory Listing</h2>
<p><a href="uploads/">Open uploads folder</a></p>

</body>
</html>

