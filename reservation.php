<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Grahame's Resort - Reservation</title>
</head>
<body>
    <header>
        <h1> Grahame's Resort - Reservation</h1>
            <nav>
            <div class="hamburger" onclick="toggleMenu()">&#9776;</div>
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
        <section class = "reservation-table">
            <form action="#" method="post">
                <table>
                    <tr>
                        <td><label for="firstName">First Name:</label></td>
                        <td><input type="text" id="firstName" name="firstName" required placeholder="John"></td>
                    </tr>

                    <tr>
                        <td><label for="lastName">Last Name:</label></td>
                        <td><input type="text" id="lastName" name="lastName" required placeholder="Smith" ></td>
                    </tr>

                    <tr>
                        <td><strong>Address</strong></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td><label for="streetAddress">Number & Street:</label></td>
                        <td><input type="text" id="streetAddress" name="streetAddress" required></td>
                    </tr>

                    <tr>
                        <td><label for="city">City:</label></td>
                        <td><input type="text" id="city" name="city" required></td>
                    </tr>

                    <tr>
                        <td><label for="state">State:</label></td>
                        <td>
                            <select id="state" name="state" required>
                                <option value="" disabled selected>Select a state</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td><label for="zipCode">Zip Code:</label></td>
                        <td><input type="text" id="zipCode" name="zipCode" required></td>
                    </tr>

                    <tr>
                        <td><label for="checkInDate">Check-in Date:</label></td>
                        <td><input type="date" id="checkInDate" name="checkInDate" required></td>
                    </tr>

                    <tr>
                        <td><label for="checkOutDate">Check-out Date:</label></td>
                        <td><input type="date" id="checkOutDate" name="checkOutDate" required></td>
                    </tr>

                    <tr>
                        <td><label for="phoneNumber">Phone:</label></td>
                        <td><input type="tel" id="phoneNumber" name="phoneNumber" placeholder="(xxx) xxx-xxxx" required></td>
                    </tr>
                    
                    <tr>
                        <td><label for="emailAddress">Email:</label></td>
                        <td><input type="text" id="emailAddress" name="emailAddress" placeholder="name@domain.com" required></td>
                    </tr>

                    <tr>
                        <td><label for="cardNumber">Card Number:</label></td>
                        <td><input type="text" id="cardNumber" name="cardNumber" required></td>
                    </tr>

                    <tr>
                        <td><label for="paymentMethod">Payment Method:</label></td>
                        <td>
                            <select id="paymentMethod" name="paymentMethod" required>
                                <option value="" disabled selected>Choose Card Type:</option>
                                <option value="credit">MC - MasterCard</option>
                                <option value="debit">VISA - Visa</option>
                                <option value="paypal">AMEX - American Express</option>
                                <option value="cash">Discover - Discover Card</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td><label for="specialRequests">Special Requests:</label></td>
                        <td><textarea id="specialRequests" name="specialRequests" rows="4" placeholder="Optional"></textarea></td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Submit">
                            <input type="button" value="Clear" onclick="clearForm()">
                        </td>
                    </tr>
                </table>
            </form>
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
     <script>
        function clearForm() {
            document.querySelector("form").reset(); // Clear all form fields
        }
    </script>
</body>
</html>


   
