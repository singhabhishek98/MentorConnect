<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            overflow-x: hidden;
        }

        /* Navbar styles */
        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: #007bff;
        }

        .navbar-nav .nav-link {
            font-size: 1rem;
            margin-right: 15px;
            color: #555;
        }

        /* Container styles */
        .container {
            padding-top: 20px;
        }

        /* Section Title styles */
        .section-title {
            font-size: 2.5rem;
            color: #007bff;
            margin-top: 50px;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Content styles */
        p {
            font-size: 1.2rem;
            line-height: 1.6;
            color: #555;
            margin-bottom: 20px;
        }

        /* Background animation */
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #f3e0e0, #e0f3f3, #e0e0f3, #f3e0e0);
            background-size: 400% 400%;
            z-index: -1;
            animation: gradient 15s ease infinite;
        }
    </style>
    <title>About Mentor Connect</title>
</head>

<body>

    <!-- Navbar -->
    <?php
    include "nav.php"; 
    ?>

    <div class="container mt-4">
        <!-- Overview Section -->
        <section id="overview">
            <h2 class="section-title">Overview</h2>
            <p>
                Mentor Connect is a platform designed to provide comprehensive support and guidance to students in their academic, personal, and professional development journey. Our mentors are experienced professionals dedicated to helping students achieve their goals and navigate through the challenges of college life.
            </p>
        </section>

        <!-- Key Features Section -->
        <section id="features">
            <h2 class="section-title">Key Features</h2>
            <ul class="feature-list">
                <li>Academic Guidance: Help students set academic goals and create a plan for achieving them.</li>
                <li>Personal Development: Act as a supportive listener for personal challenges and concerns.</li>
                <li>Career Development: Assist in exploring career paths and identifying potential areas of interest.</li>
                <li>Building Confidence: Recognize and celebrate achievements, provide constructive feedback.</li>
        </section>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>

</html>
