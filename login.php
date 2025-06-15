<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - KEC Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
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
        
        .admin-error {
            background-color: #dc3545;
            color: white;
            padding: 15px;
            text-align: center;
            max-width: 400px;
            border-radius: 5px;
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
    
    <?php if (isset($_SESSION['notification'])): ?>
    <div class="notification-wrapper">
        <div class="notification <?php echo $_SESSION['notification']['type']; ?>">
            <?php if ($_SESSION['notification']['type'] == 'error' && isset($_GET['admin'])): ?>
                <h3>Access Denied!</h3>
                <p>Invalid credentials.</p>
            <?php else: ?>
                <h3><?php echo $_SESSION['notification']['type'] === 'success' ? 'Success!' : 'Error!'; ?></h3>
                <p><?php echo $_SESSION['notification']['message']; ?></p>
            <?php endif; ?>
        </div>
    </div>
    
    <script>
        <?php if (isset($_SESSION['redirect_to'])): ?>
        setTimeout(function() {
            window.location.href = "<?php echo $_SESSION['redirect_to']; ?>";
        }, 5000);
        <?php unset($_SESSION['redirect_to']); ?>
        <?php endif; ?>

        setTimeout(function() {
            const notification = document.querySelector('.notification-wrapper');
            if (notification) {
                notification.style.display = 'none';
            }
        }, 5000);
    </script>
    <?php unset($_SESSION['notification']); ?>
    <?php endif; ?>
    
    <div class="content-wrapper">
        <div class="login-form">
            <h2>Login to Your Account</h2>
            <form action="connection.php" method="post">
                <div class="form-group mb-3">
                    <label for="username" class="form-label">Username or Email</label>
                    <input type="text" id="username" name="username" class="form-control" required>
                </div>
                
                <div class="form-group mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                
                <button type="submit" class="btn">Login</button>
                
                <div class="forgot-password">
                    <a href="#forgot-password">Forgot Password?</a>
                </div>
                
                <div class="register-link">
                    Don't have an account? <a href="register.php">Register Now</a>
                </div>
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