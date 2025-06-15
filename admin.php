<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - KEC Events</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="keceventlogo.png" type="image/x-icon">
    <style>
        body{
            font-family: bn;
        }
        .header {
            background-image: url('kecbuild.jpeg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 30px 5px; 
            color: white;
            margin: 2px;
            text-align: center; 
            position: relative;
        }

        .header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(15, 203, 186, 0.7); 
            z-index: 1;
        }

        .header h1 {
            position: relative;
            z-index: 2; /* Place the text above the overlay */
            margin: 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
        }

        .header p {
            margin: 10px 0;
        }
        .navigation {
            background-color: azure;
            padding: 2px;
            text-align: center;
        }

        .navigation ul {
            list-style: none;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            padding: 0;
            margin: 0;
        }

        .navigation ul li {
            position: relative;
        }

        .navigation ul a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            padding: 25px 15px;
            font-family: bn;
            display: block; 
            transition: background-color 0.3s, color 0.3s; 
        }

        .navigation ul a:hover {
            background-color: grey;
            color: white;
        }
        .content-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 10px;
            background-color: white;
            padding: 40px 20px;
        }

        .login-form {
            background-color: white;
            border:2px solid black;
            border-radius: 8px;
            padding: 30px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .login-form h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #343a40;
        }
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #495057;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus {
            border-color: #007bff;
            outline: none;
        }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            font-weight: bold;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .forgot-password {
            text-align: right;
            margin-top: 10px;
        }

        .forgot-password a {
            color: #007bff;
            text-decoration: none;
        }

        .register-link {
            text-align: center;
            margin-top: 25px;
            color: #6c757d;
        }

        .register-link a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .footer {
            background-color: black;
            padding: 20px;
            text-align: center;
            margin-top: 10px;
            color: white;
        }
        .navigation .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .navigation .dropdown-content a:hover {
            background-color: grey;
            color: white;
        }

        .navigation .dropdown:hover .dropdown-content {
            display: block;
        }
        @font-face {
            font-family: 'bn';
            src: url("/BENGUIAB.TTF") format("truetype");
        }
        .container, .container-fluid {
            padding-left: 0;
            padding-right: 0;
        }
        .notification {
            position: fixed;
            top: -100px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #f44336;
            color: white;
            padding: 16px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            z-index: 1000;
            transition: top 0.5s;
            text-align: center;
            width: 300px;
            font-weight: bold;
        }
        
        .notification.show {
            top: 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid p-0">
        <div id="notification" class="notification">Access Denied! Invalid credentials.</div>
        
        <div class="header">
            <h1>
                <p class="mb-0">KONGU ENGINEERING COLLEGE</p>
                <p class="mb-0">Where innovation meets excellence, success is inevitable</p>
            </h1>
        </div>
        
        <div class="navigation">
            <ul class="nav justify-content-center">
                <li class="nav-item"><a href="index.php">Home</a></li>
                <li class="nav-item"><a href="login.php">Account</a></li>
                <li class="nav-item"><a href="dept.php">Departments</a></li>
                <li class="nav-item"><a href="gallery.php">Gallery</a></li>
                <li class="nav-item"><a href="about.php">About</a></li>
                <li class="nav-item"><a href="contact.php">Contact</a></li>
                <li class="nav-item"><a href="admin.php">Admin</a></li>
                <li class="nav-item"><a href="indreg.php">Event Registration</a></li>
            </ul>
        </div>
        
        <div class="content-wrapper">
            <div class="login-form">
                <h2 class="text-center">Enter Admin Credentials</h2>
                <form id="loginForm" action="admin_auth.php" method="post">
                    <div class="form-group mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" id="username" name="username" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary w-100">Access Admin Panel</button>
                </form>
            </div>
        </div>
        
        <div class="footer">
            <p class="mb-2">© 2025 Kongu Engineering College. All Rights Reserved.</p>
            <div class="mt-2">
                <a href="#privacy" class="text-white me-2">Privacy Policy</a> | 
                <a href="#terms" class="text-white mx-2">Terms of Use</a> | 
                <a href="#contact" class="text-white ms-2">Contact Us</a>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <script>
        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('error')) {
                const notification = document.getElementById('notification');
                notification.classList.add('show');

                setTimeout(function(){
                    notification.classList.remove('show');
                }, 3000);
            }
        };
    </script>
</body>
</html>