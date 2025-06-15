<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "kecevent";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$eventName = mysqli_real_escape_string($conn, $_POST['evename']);
$name = mysqli_real_escape_string($conn, $_POST['name']);
$grade = mysqli_real_escape_string($conn, $_POST['grade']);
$year = mysqli_real_escape_string($conn, $_POST['year']);

$checkEvent = "SELECT * FROM event WHERE name = '$eventName'";
$result = $conn->query($checkEvent);

if ($result->num_rows > 0) {
    $insertQuery = "INSERT INTO indreg (evename, name, grade, year) VALUES ('$eventName', '$name', '$grade', '$year')";
    
    if ($conn->query($insertQuery) === TRUE) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Registration Confirmation - KEC Events</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="login.css">
            <link rel="icon" href="keceventlogo.png" type="image/x-icon">
            <style>
                .certificate-container {
                    width: 800px;
                    margin: 30px auto;
                    border: 2px solid #000;
                    padding: 0;
                }
                
                .certificate {
                    display: flex;
                    height: 300px;
                }
                
                .photo-section {
                    flex: 1;
                    border-right: 2px solid #000;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    background-color: #f8f9fa;
                }
                
                .details-section {
                    flex: 1;
                    padding: 40px;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                }
                
                .details-section h3 {
                    margin-bottom: 15px;
                    font-size: 18px;
                    font-weight: bold;
                }
                
                .details-section p {
                    margin-bottom: 10px;
                    font-size: 18px;
                }
                
                .btn-container {
                    text-align: center;
                    margin-top: 20px;
                    margin-bottom: 40px;
                }
                
                .success-message {
                    background-color: #d4edda;
                    color: #155724;
                    border: 1px solid #c3e6cb;
                    border-radius: 5px;
                    padding: 15px;
                    margin: 20px auto;
                    width: 80%;
                    text-align: center;
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
            
            <div class="container">
                <div class="success-message">
                    <h4>Registration Successful!</h4>
                    <p>You have successfully registered for the event. Please save or print this confirmation for your reference.</p>
                </div>
                
                <div class="certificate-container">
                    <div class="certificate">
                        <div class="photo-section">
                            <h2>event photo</h2>
                        </div>
                        <div class="details-section">
                            <h3>Event Name: <?php echo htmlspecialchars($eventName); ?></h3>
                            <h3>Student Name: <?php echo htmlspecialchars($name); ?></h3>
                            <h3>Grade: <?php echo htmlspecialchars($grade); ?></h3>
                            <h3>Year: <?php echo htmlspecialchars($year); ?></h3>
                        </div>
                    </div>
                </div>
                
                <div class="btn-container">
                    <button class="btn btn-primary" onclick="window.print()">Print Confirmation</button><br>
                    <a href="index.php" class="btn btn-secondary ms-3">Return to Home</a>
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
                setTimeout(function() {
                    window.location.href = 'index.php';
                }, 60000); 
            </script>
        </body>
        </html>
        <?php
    } else {
        echo "<script>
            alert('Registration Failed: " . $conn->error . "');
            window.location.href = 'indreg.php';
        </script>";
    }
} else {
    echo "<script>
        alert('Error: Event \"" . htmlspecialchars($eventName) . "\" does not exist!');
        window.location.href = 'indreg.php';
    </script>";
}

$conn->close();
?>