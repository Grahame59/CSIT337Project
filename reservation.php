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
        <section class = "reservation-table">
            <form id="reservationForm" action="#" method="post" onsubmit="submitForm(event)">
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
                        <td><label for="numOfGuests">Number of Guests:</label></td>
                        <td>
                            <select id = "numOfGuests" name ="numOfGuests" required>
                                <option value = "0"> # of Guests?</option>
                                <option value = "1">1 Guest</option>
                                <option value = "2">2 Guests</option>
                                <option value = "3">3 Guests</option>
                                <option value = "4">4 Guests</option>
                                <option value = "5">5 Guests</option>
                                <option value = "6">6 Guests</option>
                            </select>
                        </td>
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
                        <td><input type="tel" id="cardNumber" name="cardNumber" required></td>
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
                        <td><label for="totalCharge">Total Charge:</label></td>
                        <td><span id="totalCharge">$0</span></td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Submit">
                            <input type="button" value="Clear" onclick="clearForm()">
                        </td>
                    </tr>
                </table>
            </form>
            <?php

                    function calcPrice($checkInDate, $checkOutDate, $numOfGuests) 
                    {
                    
                        $checkIn = new DateTime($checkInDate);
                        $checkOut = new DateTime($checkOutDate);
                        $durationOfStay = $checkIn->diff($checkOut)->days;
                        $taxRate = 1.07;
                        $guestIncrementCharge = ($numOfGuests * 50);
                        $pricePerNightPerGuest = 200; 
                        $totalPrice = $durationOfStay * ($pricePerNightPerGuest + $guestIncrementCharge) * $taxRate;
                    
                        return $totalPrice;
                    }

                    if ($_SERVER["REQUEST_METHOD"] == "POST") 
                    {

                    // Get form inputs
                    $firstName = !empty($_POST['firstName']) ? htmlspecialchars($_POST['firstName']) : "Guest";
                    $lastName = !empty($_POST['lastName']) ? htmlspecialchars($_POST['lastName']) : "";
                    $streetAddress = htmlspecialchars($_POST['streetAddress']);
                    $city = htmlspecialchars($_POST['city']);
                    $state = htmlspecialchars($_POST['state']);
                    $zipCode = htmlspecialchars($_POST['zipCode']);
                    $checkInDate = htmlspecialchars($_POST['checkInDate']);
                    $checkOutDate = htmlspecialchars($_POST['checkOutDate']);
                    $numOfGuests = htmlspecialchars($_POST['numOfGuests']);
                    $phoneNumber = htmlspecialchars($_POST['phoneNumber']);
                    $guestEmail = htmlspecialchars($_POST['emailAddress']);
                    $specialRequests = htmlspecialchars($_POST['specialRequests']);
                    $paymentType = htmlspecialchars($_POST['paymentMethod']);
                    $cardNumber = htmlspecialchars($_POST['cardNumber']);
                    $TotalPrice = calcPrice($checkInDate, $checkOutDate, $numOfGuests);
                    
                    // Output the response header
                    echo "<h2>Thank you, $firstName $lastName, for your reservation!</h2>";
                    echo "<p>Here are your reservation details:</p>";
                    echo "<p>Check-in Date: $checkInDate</p>";
                    echo "<p>Check-out Date: $checkOutDate</p>";
                    echo "<p>Number of Guests: $numOfGuests</p>";
                    echo "<p>Phone Number: $phoneNumber</p>";
                    echo "<p>Email Address: $guestEmail</p>";
                    echo "<p>Payment Type: $paymentType</p>";
                    echo "<p>cardNumber: $cardNumber</p>";
                    echo "<p>Total Charge: $" . number_format($TotalPrice, 2) . "</p>";
                    
                    // Optional: Show special requests if any
                    if (!empty($specialRequests)) 
                    {
                        echo "<p>Special Requests: $specialRequests</p>";
                    } else 
                    {
                        echo "<p>No special requests made.</p>";
                    }
                } else 
                {
                    echo "<h2>Please submit your reservation form.</h2>";
                }
            ?>
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

    <script>
        /* function submitForm(event) 
        {
            event.preventDefault(); // Prevent default form submission

            // Form values carried
            const firstName = document.getElementById("firstName").value;
            const lastName = document.getElementById("lastName").value;
            const streetAddress = document.getElementById("streetAddress").value;
            const city = document.getElementById("city").value;
            const state = document.getElementById("state").value;
            const zipCode = document.getElementById("zipCode").value;
            const checkInDate = document.getElementById("checkInDate").value;
            const checkOutDate = document.getElementById("checkOutDate").value;
            const numOfGuests = document.getElementById("numOfGuests").value;
            const phoneNumber = document.getElementById("phoneNumber").value;
            const guestEmail = document.getElementById("emailAddress").value;
            const specialRequests = document.getElementById("specialRequests").value;
            const paymentType = document.getElementById("paymentMethod").value;
            const cardNumber = document.getElementById("cardNumber").value;

            const totalCharge = calcPrice(checkInDate, checkOutDate, numOfGuests);

            // Creates an info table after submit is clicked
            const orderConfirmedTable = `
                <table>
                    <tr>
                        <th>Label</th>
                        <th>Data</th>
                    </tr>
                    <tr>
                        <td>First Name</td>
                        <td>${firstName}</td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td>${lastName}</td>
                    </tr>
                    <tr>
                        <td>Street Address</td>
                        <td>${streetAddress}</td>
                    </tr>
                    <tr>
                        <td>City</td>
                        <td>${city}</td>
                    </tr>
                    <tr>
                        <td>State</td>
                        <td>${state}</td>
                    </tr>
                    <tr>
                        <td>Zip Code</td>
                        <td>${zipCode}</td>
                    </tr>
                    <tr>
                        <td>Check-In Date</td>
                        <td>${checkInDate}</td>
                    </tr>
                    <tr>
                        <td>Check-Out Date</td>
                        <td>${checkOutDate}</td>
                    </tr>
                    <tr>
                        <td>Number of Guests</td>
                        <td>${numOfGuests}</td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td>${phoneNumber}</td>
                    </tr>
                    <tr>
                        <td>Email Address</td>
                        <td>${guestEmail}</td>
                    </tr>
                    <tr>
                        <td>Special Requests</td>
                        <td>${specialRequests}</td>
                    </tr>
                    <tr>
                        <td>Payment Type</td>
                        <td>${paymentType}</td>
                    </tr>
                    <tr>
                        <td>Card Number</td>
                        <td>${cardNumber}</td>
                    </tr>
                    <tr>
                        <td>Total Charge</td>
                        <td>$${totalCharge.toFixed(2)}</td>
                    </tr>
                </table>
            `;

            // Display the table
            document.getElementById("output").innerHTML = orderConfirmedTable;
            document.getElementById("output").style.display = 'block'; // Show the output table
            document.getElementById("reservationForm").style.display = 'none'; // Hide the form
        }
        */
        function clearForm() {
            document.getElementById("reservationForm").reset(); // Clear all form fields
            document.getElementById("totalCharge").innerText = "$0"; // Reset totalCharge to $0 on clear.
            document.getElementById("output").innerHTML = ""; // Clear the output table
            document.getElementById("output").style.display = 'none'; // Hide the output table
        }
  
        /*
        function calcPrice(checkIn, CheckOut, numOfGuests)
        {
            const checkInDate = new Date(checkIn);
            const checkOutDate = new Date(checkOut);
            const numOfGuestsInt = parseInt(numOfGuests);
            let difference = Math.abs(checkOutDate - checkInDate);

            if (difference < 1)
            {
            difference = 1; // Ensure 1 day stays. Only did this due to the instructions b/c I don't really see how in real life you could book a hotel room for 1 day with no night stay or
                            // why you would do this. 
            }

            const ratePerNight = 200;
            const taxRate = 1.07;
            const guestCharge = 50;
            const guestAddOn = guestCharge * numOfGuestsInt; // 50 * numOfPeople

            const totalPrice = Math.ceil(difference * (ratePerNight + guestAddOn)) * taxRate; 
            return totalPrice;
        
        }
        */

    </script>
</body>
</html>


   
