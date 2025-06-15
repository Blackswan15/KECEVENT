<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - KEC Events</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="keceventlogo.png" type="image/x-icon">
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
    <div class="content-wrapper">
        <div class="login-form">
            <h2>Event Registration form</h2>
            <form action="indddreg.php" method="post">
                <div class="form-group mb-3">
                    <label for="evename" class="form-label">Event Name</label>
                    <input type="text" id="evename" name="evename" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                
                <div class="form-group mb-3">
                    <label for="grade" class="form-label">Class</label>
                    <input type="text" id="grade" name="grade" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="year" class="form-label">year</label>
                    <input type="text" id="year" name="year" class="form-control" required>
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