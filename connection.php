<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "kecevent");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $_SESSION['notification'] = [
            'type' => 'error',
            'message' => 'Username and password are required!'
        ];
        header("Location: login.php");
        exit();
    } else {
        $sql = "SELECT * FROM signin WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['notification'] = [
                'type' => 'success',
                'message' => 'Login successful!'
            ];
            $_SESSION['redirect_to'] = 'index.php';
            header("Location: login.php");
            exit();
        } else {
            $_SESSION['notification'] = [
                'type' => 'error',
                'message' => 'Invalid username or password. Please create an account if you don\'t have one.'
            ];
            $_SESSION['redirect_to'] = 'register.php';
            header("Location: login.php");
            exit();
        }
    }

    mysqli_close($conn);
}
?>