<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Grahame's Resort - Activites</title>
</head>
<body>
    <header>
        <h1>GRAHAME'S RESORT</h1> <!-- Header Title --> 
        <nav>
            <div class="hamburger" onclick="toggleHamMenu()">☰</div>
            <ul id = "nav-links"> <!-- Nav links -->
                <li><a href="index.php">Home</a></li>
                <li><a href="yurts.php">Yurts</a></li>
                <li><a href="activities.php">Activities</a></li>
                <li><a href="reservation.php">Reservation</a></li>
                <li><a href="comments.php">Comments</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="activities">
            <h2> Activities</h2>
            <div class = "activity-grid">
                <img src = "resources/BeachBar.jpg" alt = "Bar" onclick = "showImage(this.src)">
                <img src = "resources/InfinityPool.jpg" alt = "Pool" onclick = "showImage(this.src)">
                <img src = "resources/PrettyWaterfall.jpg" alt = "Waterfall" onclick = "showImage(this.src)">
                <img src = "resources/Yurt.jpg" alt = "Yurt" onclick = "showImage(this.src)">
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Grahame's Resort. All rights reserved.</p>
    </footer>

    <div id="overlay" class="overlay" onclick="hideImage()">
        <img id="fullImage" class="full-image">
    </div>

    <script>
        function showImage(src) 
        {
            const overlay = document.getElementById('overlay');
            const fullImage = document.getElementById('fullImage');
            fullImage.src = src;
            overlay.style.display = 'block'; // Show overlay
        }

        function hideImage() 
        {
            const overlay = document.getElementById('overlay');
            overlay.style.display = 'none'; // Hide overlay
        }

       
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
    </script>
</body>
</html>