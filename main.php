<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Mentorship Program</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <header>
        <div class="college-info">
            <img src="collegelogo.jpeg" alt="College Logo" class="college-logo">
            <span class="college-name">Kiet Group of Institutions</span>
        </div>
        <nav>
            <a href="#">Home</a>
            <a href="about.php">About</a>
            <a href="services.php">Services</a>
        </nav>
    </header>
    <main class="background-image">
        <div class="flexD">
            <a href="index.php">
                <img src="logo.png" id="img" alt="Program Logo">
            </a>
            <h1>Welcome to Online Mentorship Program</h1>
            <a href="index.php" class="btn btn-primary">Login</a>
            <div class="form hide" id="form">
                <!-- Your form content here -->
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 MentorConnect</p>
        <p id="date-time"></p>
    </footer>
    <script>
        function updateDateTime() {
            const now = new Date();
            const datetimeSpan = document.getElementById('date-time');
            datetimeSpan.innerText = now.toLocaleString();
        }
        setInterval(updateDateTime, 1000);
        updateDateTime();
    </script>
    <script src="main1.js"></script>
</body>
</html>
