<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Grahame's Resort - Comments</title>
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

    <div class="comments-form">
        <form method="POST">
            <table>
                <tr>
                    <td><label for="name">Name:</label></td>
                    <td><input type="text" id="name" name="name" placeholder="Enter your name"></td>
                </tr>
                
                <tr>
                    <td><label for="phone">Phone Number:</label></td>
                    <td><input type="tel" id="phone" name="phone" placeholder="Enter your phone number"></td>
                </tr>

                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" id="email" name="email" placeholder="Enter your email"></td>
                </tr>

                <tr>
                    <td><label for="comments">Comments:</label></td>
                    <td><textarea id="comments" name="comments" placeholder="Enter your comments" rows="4"></textarea></td>
                </tr>

                <tr>
                    <td><input type="submit" value="Submit"></td>
                </tr>
            </table>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get form inputs
            $name = !empty($_POST['name']) ? htmlspecialchars($_POST['name']) : "Guest";
            $comments = htmlspecialchars($_POST['comments']);
            
            // Output the response header
            if (!empty($comments)) {
                echo "<h2>Thank you, $name, for your comment!</h2>";
                echo "<p>Please enter your comment, $name:</p>";
            } else {
                echo "<h2>Please enter your comments, $name.</h2>";
            }
        }
        ?>
    </div>

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
    
</body>
</html>
