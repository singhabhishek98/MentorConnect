<?php include "nav.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Our Services</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; /* Light background color */
            margin: 0;
            padding: 0;
            overflow-x: hidden; /* Prevent horizontal scroll */
        }

        header {
            background-color: #007bff; /* Blue header background color */
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        h1 {
            font-weight: bold;
            margin: 0;
            padding: 0;
            font-size: 2.5rem;
        }

        section {
            padding: 20px;
            text-align: center;
        }

        p {
            font-style: italic;
            font-size: 1.2rem;
            margin: 10px 0;
            opacity: 0; /* Initially hidden */
            animation: fadeInUp 1s forwards; /* Animation to fade in */
        }

        /* Keyframes for fade in animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

    <header>
        <h1>Our Services</h1>
    </header>

    <section>
        <p>1. Mentorship Programs</p>
        <p>2. Career Guidance</p>
        <p>3. Academic Support</p>
        <p>4. Personal Development</p>
        <p>5. Networking Opportunities</p>
        <p>6. Skill Development</p>
        <p>7. Feedback and Coaching</p>
        <p>8. Life Skills</p>
        <p>9. Entrepreneurship Support</p>
        <p>10. Diversity and Inclusion Initiatives</p>
    </section>

</body>

</html>
