<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Family Dish Restaurant</title>
    <link rel="stylesheet" href="./css/contact.css">
    <script src="script.js" defer></script>
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="logo">
            <img src="images/restaurant logo.png" alt="">
            <a href="index.php">Family Dish Restaurant</a>
        </div>
        <ul class="nav-links">
            <li><a href="home.php">Home</a></li>
            <li><a href="book.php">Book a Table</a></li>
            <li><a href="reviews.php">Reviews</a></li>
            <li><a href="contact.php" class="active">Contact Us</a></li>
        </ul>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>

    <!-- Contact Section -->
    <section class="contact-section">
        <h2>Contact Us</h2>
        <form id="contactForm" action="php/process_contact.php" method="POST" onsubmit="return validateContactForm()">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
        <div class="contact-info">
            <p>Address: No. 53, Dalugama, Kelaniya</p>
            <p>Phone Number: 0112 253 253</p>
            <p>Email: familydish@gmail.com</p>
        </div>
    </section>

    <script src="js/main.js"></script>
</body>
</html>
