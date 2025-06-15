<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration - KEC Events</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="keceventlogo.png" type="image/x-icon">
    <style>
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px 25px;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            display: none;
            z-index: 1000;
            animation: fadeIn 0.5s, fadeOut 0.5s 2.5s;
            animation-fill-mode: forwards;
        }
        
        @keyframes fadeIn {
            from {opacity: 0;}
            to {opacity: 1;}
        }
        
        @keyframes fadeOut {
            from {opacity: 1;}
            to {opacity: 0;}
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

    <div id="notification" class="notification">
        Event added successfully!
    </div>
    
    <div class="content-wrapper">
        <div class="login-form">
            <h2>Event Details</h2>
            <form action="event_process.php" method="post">
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Event Name</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                
                <div class="form-group mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" id="date" name="date" class="form-control" required>
                </div>
                
                <div class="form-group mb-3">
                    <label for="time" class="form-label">Time</label>
                    <input type="text" id="time" name="time" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="participant" class="form-label">Participant Count</label>
                    <input type="text" id="participant" name="participant" class="form-control" required>
                </div>
                <button type="submit" class="btn">Post the Event Details</button>
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
    

    <script>

        <?php
        session_start();
        if(isset($_SESSION['success_message'])) {
            echo "document.getElementById('notification').textContent = '" . $_SESSION['success_message'] . "';";
            echo "document.getElementById('notification').style.display = 'block';";
            echo "setTimeout(function() {
                document.getElementById('notification').style.display = 'none';
            }, 3000);";
            unset($_SESSION['success_message']);
        }
        ?>
    </script>
</body>
</html>