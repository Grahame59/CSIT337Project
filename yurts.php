<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Grahame's Resort - Yurts </title> 
</head>
<body>
    <header>
        <h1>Grahame's Resort</h1>
        <nav>
            <div class="hamburger" onclick="toggleMenu()">&#9776;</div> <!-- Hamburger menu icon -->
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="yurts.php">Yurts</a></li>
                <li><a href="activities.php">Activities</a></li>
                <li><a href="reservation.php">Reservation</a></li>
                <li><a href="comments.php">Comments</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class ="yurts-info">
            <h2>Our Cozy Yurts</h2>
            <h3> What is a Yurt? </h3>
            <p1> Our luxary yurts are permanant structures four feet off the ground. Each yurt has
                canvas walls, a wooden floor, and a roof cone that can be opened! Every yurt is also accompanied
                by a balcony and your very own infinity pool! </p1>
            <h4> How are yurts furnished?</h4>
            <p2> Each yurt is furnished with a California-Long bed with down quilt and a gas fired stove.
                The luxary camping experience also includes electricity with hot and cold running water, a indoor
                and outdoor shower and your own bathroom. 
             </p2>
            <h5> What should I bring?</h5>
            <p3> Bring a sense of adventure for our many miles of beautiful wilderness to explore with two different waterfalls
                on the property. Or if its the warmer season pack your bathing suits, flipflops, and tanning oil and relax on 
                our private beach by our customary first two drinks free bar!</p5>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Your Team's Resort. All rights reserved.</p>
    </footer>
    <script>
        function toggleHamMenu() {
            const menu = document.querySelector('nav ul');
            menu.style.display = menu.style.display === 'flex' ? 'none' : 'flex';
        }
    </script>
</body>
</html>
