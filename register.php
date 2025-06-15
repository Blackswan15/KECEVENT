<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
$conn = mysqli_connect("localhost", "root", "", "kecevent");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$showNotification = false;
$notificationType = '';
$notificationMessage = '';
$redirectTo = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($name) || empty($username) || empty($password)) {
        $showNotification = true;
        $notificationType = 'error';
        $notificationMessage = 'All fields are required!';
    } else {

        $check_sql = "SELECT * FROM signin WHERE username = '$username'";
        $check_result = mysqli_query($conn, $check_sql);
        
        if (mysqli_num_rows($check_result) > 0) {

            $showNotification = true;
            $notificationType = 'error';
            $notificationMessage = 'Account already exists! Please log in.';
            $redirectTo = 'login.php';
        } else {
            $sql = "INSERT INTO signin (name, username, password) VALUES ('$name', '$username', '$password')";
            
            if (mysqli_query($conn, $sql)) {
                $showNotification = true;
                $notificationType = 'success';
                $notificationMessage = 'New account created successfully!';
                $redirectTo = 'login.php';
            } else {
                $showNotification = true;
                $notificationType = 'error';
                $notificationMessage = 'Error: ' . mysqli_error($conn);
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - KEC Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="register.css">
    <link rel="icon" href="keceventlogo.png" type="image/x-icon">
    <style>
        .notification-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            background-color: rgba(0, 0, 0, 0.5);
        }
        
        .notification {
            max-width: 400px;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }
        
        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        
        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>
            <center><p>KONGU ENGINEERING COLLEGE</p></center>
            <center><p>Where innovation meets excellence, success is inevitable</p></center>
        </h1>
    </div>
    <div class="navigation">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="login.php">Account</a></li>
            <li><a href="dept.php">Departments</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="admin.php">Admin</a></li>
            <li><a href="indreg.php">Event Registration</a></li>
        </ul>
    </div>
    
    <?php if ($showNotification): ?>
    <div class="notification-wrapper">
        <div class="notification <?php echo $notificationType; ?>">
            <h3><?php echo $notificationType === 'success' ? 'Success!' : 'Error!'; ?></h3>
            <p><?php echo $notificationMessage; ?></p>
        </div>
    </div>
    
    <script>
        <?php if (!empty($redirectTo)): ?>
        setTimeout(function() {
            window.location.href = "<?php echo $redirectTo; ?>";
        }, 5000);
        <?php endif; ?>

        <?php if (empty($redirectTo)): ?>
        setTimeout(function() {
            const notification = document.querySelector('.notification-wrapper');
            if (notification) {
                notification.style.display = 'none';
            }
        }, 5000);
        <?php endif; ?>
    </script>
    <?php endif; ?>
    
    <div class="content-wrapper">
        <div class="login-form">
            <h2>Create An Account</h2>
            <form action="" method="post">
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="username" class="form-label">Email</label>
                    <input type="email" id="username" name="username" class="form-control" required>
                </div>
                
                <div class="form-group mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                
                <button type="submit" class="btn">Register</button>
            </form>
        </div>
    </div>
    
    <div class="footer">
        <p>© 2025 Kongu Engineering College. All Rights Reserved.</p>
        <div style="margin-top: 10px;">
            <a href="#privacy">Privacy Policy</a> | 
            <a href="#terms">Terms of Use</a> | 
            <a href="#contact">Contact Us</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>