<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
<?php
$Username = "user123";
$Password = "password123";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if the provided credentials match the stored credentials
    if ($username === $Username && $password === $Password) {
        echo "Login successful";
    } else {
        echo "Invalid credentials";
    }
}
?>
    <h1>Login</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>