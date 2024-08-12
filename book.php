
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Table</title>
    <link rel="stylesheet" href="./css/book1.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header class="navbar">
        <div class="logo">
            <img src="images/restaurant logo.png" alt="">
            <a href="index.php">Family Dish Restaurant</a>
        </div>
        <ul class="nav-links">
            <li><a href="home.php">Home</a></li>
            <li><a href="book.php" class="active">Book</a></li>
            <li><a href="reviews.php">Reviews</a></li>
            <li><a href="contact.php">Contact</a></li>
            
        </ul>
    </header>

    <section class="booking-section">
        <h2>Book a Table</h2>
        <form id="bookingForm" action="php/process_booking.php" method="POST" onsubmit="return validateBookingForm()">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="time">Time:</label>
            <input type="time" id="time" name="time" required>

            <label for="guests">Number of Guests:</label>
            <input type="number" id="guests" name="guests" required max="12">

            <label for="requests">Special Requests:</label>
            <textarea id="requests" name="requests"></textarea>

            <button type="submit">Book Now</button>
        </form>
    </section>
    
</body>
</html>
