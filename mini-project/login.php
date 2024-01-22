<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php include_once('navbar.php'); ?>
        <form action="login.php" method="POST">
            <div class="form-input">
                <input type="text" name="username" placeholder="Enter username">
            </div>
            <div class="form-input">
                <input type="password" name="password" placeholder="Enter password">
            </div>
            <div class="form-input">
                <input type="submit" name="login" value="Login ">
            </div>
        </form>
    </div>
</body>
</html>
<?php
if (isset($_POST['login'])) {
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to the database
    include_once('db-connect.php');

    // Query
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

    // Execute the query
    $result = $database_connection->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header('Location: dashboard.php');
    }else{
        echo "Invalid credentials";
    }
}
?>