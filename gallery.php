<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floating Logos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="keceventlogo.png" type="image/x-icon">

    <style>
        @font-face {
            font-family: 'BenguiatBold';
            src: url("./BENGUIAB.TTF") format("truetype");
            font-display: swap;
        }
        
        body {
            font-family: 'BenguiatBold', Arial, sans-serif;
        }
        
        .header {
            background-image: url('./kecbuild.jpeg');
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
            z-index: 2;
            margin: 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .header p {
            position: relative;
            z-index: 2;
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
            display: block;
            transition: background-color 0.3s, color 0.3s;
        }

        .navigation ul a:hover {
            background-color: grey;
            color: white;
        }
        .logo-slider {
            position: relative;
            width: 100%;
            height: 100%; 
            overflow: hidden;
            margin: 50px 0;
        }

        .logo-slide {
            width: 350px;
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            margin: 10px;
            overflow: hidden;
            position: relative;
        }

        .logo-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
                
        .logo-slide-track {
            animation: scroll 40s linear infinite;
            display: flex;
            width: calc(250px * 14);
        }
        
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(calc(-250px * 7));
            }
        }

        .logo-slider-2 .logo-slide-track {
            animation: scroll2 30s linear infinite;
        }
        
        @keyframes scroll2 {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(calc(-250px * 7));
            }
        }

        .logo-slider-3 .logo-slide-track {
            animation: scroll3 35s linear infinite;
        }
        
        @keyframes scroll3 {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(calc(-250px * 7));
            }
        }
        .footer {
            background-color: black;
            padding: 20px;
            text-align: center;
            margin-top: 10px;
            color: white;
        }

        .footer a {
            text-decoration: none;
            color: #e9ecef;
            margin: 0 5px;
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
    </style>
</head>
<body>

    <div class="header container-fluid py-4 shadow">
        <h1 class="display-4 fw-bold">KONGU ENGINEERING COLLEGE</h1>
        <p class="lead">Where innovation meets excellence, success is inevitable</p>
    </div>
    
    <nav class="navigation navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Account</a></li>
                    <li class="nav-item"><a class="nav-link" href="dept.php">Departments</a></li>
                    <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>
                    <li class="nav-item"><a class="nav-link" href="indreg.php">Event Registration</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <!-- First row of logos -->
        <div class="logo-slider mt-4 mb-4">
            <div class="logo-slide-track">
                <div class="logo-slide rounded overflow-hidden shadow-sm">
                    <img src="projectpreswon.jpg" alt="projpreswin" class="img-fluid" />
                </div>
                <div class="logo-slide rounded overflow-hidden shadow-sm">
                    <img src="automobwon.jpeg" alt="KEC Building" class="img-fluid" />
                    
                </div>
                <div class="logo-slide rounded overflow-hidden shadow-sm">
                    <img src="staffwon.jpg" alt="KEC Event Logo" class="img-fluid" />
                </div>
                <div class="logo-slide rounded overflow-hidden shadow-sm">
                    <img src="stuwon.jpg" alt="EIE Department" class="img-fluid" />
                </div>
                <div class="logo-slide rounded overflow-hidden shadow-sm">
                    <img src="SIH_2023.jpg" alt="EEE Department" class="img-fluid" />
                </div>
                <div class="logo-slide rounded overflow-hidden shadow-sm">
                    <img src="37_annaual_award.jpg" alt="ECE Department" class="img-fluid" />
                </div>
                <div class="logo-slide rounded overflow-hidden shadow-sm">
                    <img src="38_sports_award.png" alt="Mechanical Department" class="img-fluid" />
                </div>
                <!-- Duplicate set for seamless loop -->
                <div class="logo-slide rounded overflow-hidden shadow-sm">
                    <img src="projectpreswon.jpg" alt="KEC Logo 1" class="img-fluid" />
                </div>
                <div class="logo-slide rounded overflow-hidden shadow-sm">
                    <img src="automobwon.jpeg" alt="KEC Building" class="img-fluid" />
                </div>
                <div class="logo-slide rounded overflow-hidden shadow-sm">
                    <img src="staffwon.jpg" alt="KEC Event Logo" class="img-fluid" />
                </div>
                <div class="logo-slide rounded overflow-hidden shadow-sm">
                    <img src="stuwon.jpg" alt="EIE Department" class="img-fluid" />
                </div>
                <div class="logo-slide rounded overflow-hidden shadow-sm">
                    <img src="SIH_2023.jpg" alt="EEE Department" class="img-fluid" />
                </div>
                <div class="logo-slide rounded overflow-hidden shadow-sm">
                    <img src="37_annaual_award.jpg" alt="ECE Department" class="img-fluid" />
                </div>
                <div class="logo-slide rounded overflow-hidden shadow-sm">
                    <img src="38_sports_award.png" alt="Mechanical Department" class="img-fluid" />
                </div>
            </div>
        </div>
        <div class="logo-slider logo-slider-3 mt-2 mb-4">
            <div class="logo-slide-track">
                <!-- First set of logos -->
                <div class="logo-slide rounded overflow-hidden shadow-sm">
                    <img src="KonguTrophy_2023.jpeg" alt="KEC Logo 1" class="img-fluid" />
                </div>
                <div class="logo-slide rounded overflow-hidden shadow-sm">
                    <img src="coe_csd_vrar.jpg" alt="KEC Building" class="img-fluid" />
                </div>
                <div class="logo-slide rounded overflow-hidden shadow-sm">
                    <img src="NAANMUDHALVANSCHEMEKEC_2023.jpg" alt="KEC Event Logo" class="img-fluid" />
                </div>
                <div class="logo-slide rounded overflow-hidden shadow-sm">
                    <img src="WheelMoU_2023.jpg" alt="EIE Department" class="img-fluid" />
                </div>
                <div class="logo-slide rounded overflow-hidden shadow-sm">
                    <img src="u15.png" alt="EEE Department" class="img-fluid" />
                </div>
                <div class="logo-slide rounded overflow-hidden shadow-sm">
                    <img src="Arjun.jpg" alt="ECE Department" class="img-fluid" />
                </div>
                <div class="logo-slide rounded overflow-hidden shadow-sm">
                    <img src="lastawa.jpeg" alt="Mechanical Department" class="img-fluid" />
                </div>
                
                <!-- Duplicate set for seamless loop -->
                <div class="logo-slide rounded overflow-hidden shadow-sm">
                    <img src="KonguTrophy_2023.jpeg" alt="KEC Logo 1" class="img-fluid" />
                </div>
                <div class="logo-slide rounded overflow-hidden shadow-sm">
                    <img src="coe_csd_vrar.jpg" alt="KEC Building" class="img-fluid" />
                </div>
                <div class="logo-slide rounded overflow-hidden shadow-sm">
                    <img src="NAANMUDHALVANSCHEMEKEC_2023.jpg" alt="KEC Event Logo" class="img-fluid" />
                </div>
                <div class="logo-slide rounded overflow-hidden shadow-sm">
                    <img src="WheelMoU_2023.jpg" alt="EIE Department" class="img-fluid" />
                </div>
                <div class="logo-slide rounded overflow-hidden shadow-sm">
                    <img src="u15.png" alt="EEE Department" class="img-fluid" />
                </div>
                <div class="logo-slide rounded overflow-hidden shadow-sm">
                    <img src="Arjun.jpg" alt="ECE Department" class="img-fluid" />
                </div>
                <div class="logo-slide rounded overflow-hidden shadow-sm">
                    <img src="lastawa.jpeg" alt="Mechanical Department" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <div class="footer mt-3 py-3">
        <p class="mb-2">© 2025 Kongu Engineering College. All Rights Reserved.</p>
        <div class="mt-2">
            <a href="#privacy" class="text-decoration-none text-light mx-2">Privacy Policy</a> | 
            <a href="#terms" class="text-decoration-none text-light mx-2">Terms of Use</a> | 
            <a href="#contact" class="text-decoration-none text-light mx-2">Contact Us</a>
        </div>
    </div>
</body>
</html>