<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Inital zoom and device view -->
    <link rel="stylesheet" href="style.css"> <!-- CSS link -->
    <title>Grahame's Resort Home Page</title>
</head>
<body>
    <header>
        <h1>GRAHAME'S RESORT</h1> <!-- Header Title --> 
        <nav>
            <div class="hamburger" onclick="toggleHamMenu()">☰</div>
            <ul> <!-- Nav links -->
                <li><a href="index.php">Home</a></li>
                <li><a href="yurts.php">Yurts</a></li>
                <li><a href="activities.php">Activities</a></li>
                <li><a href="reservation.php">Reservation</a></li>
                <li><a href="comments.php">Comments</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class = "info-section">
                <p>Grahame's Resort offers a special lodging experience on the Northern New Jersey East Coast.
                    Relax in serenity with Panormaic views of the Atlantic Ocean. Enjoy the Grahame's priavte beach
                to the personal balconies and infinity pools that come with each room! </p>
                <h2> Our Amentities: </h2>
                <ul>
                    <li> Cozy Yurts with balcony views of the Atlantic </li>
                    <li> Activities lodge with fireplace and gift shop</li>
                    <li> Nightly fine dining with a great selection on high end wines at our Beachfront cafe</li>
                    <li> Heated outdoor pool and hot tubs as well as your own perosonal infinity pool</li>
                    <li> Guided hiking tour of our beautiful 600 achor property </li>
                </ul>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Grahame's Resort. All rights reserved.</p>
    </footer>


<script>
    function toggleHamMenu() 
    {
        const navLinks = document.getElementById("nav-links");
        // Turn off and on the menu
        if (navLinks.style.display === "flex") {
            navLinks.style.display = "none";
        } else {
            navLinks.style.display = "flex";
        }
    }
</script>
