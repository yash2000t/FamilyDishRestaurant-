

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews - Family Dish Restaurant</title>
    <link rel="stylesheet" href="./css/reviews1.css">
    <script src="script.js" defer></script>
</head>
<body>

    <!-- Navigation Bar -->
    <header class="navbar">
        <div class="logo">
            <img src="images/restaurant logo.png" alt="">
            <a href="index.php">Family Dish Restaurant</a>
        </div>
        <ul class="nav-links">
            <li><a href="home.php">Home</a></li>
            <li><a href="book.php">Book</a></li>
            <li><a href="reviews.php" class="active">Reviews</a></li>
            <li><a href="contact.php">Contact</a></li>
            
        </ul>
    </header>

    <!-- Review Form Section -->
    <section class="review-section">
        <h2>Leave a Review</h2>
        <form id="reviewForm" action="php/process_review.php" method="POST" onsubmit="return validateReviewForm()">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="rating">Rating:</label>
            <select id="rating" name="rating" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <label for="comments">Comments:</label>
            <textarea id="comments" name="comments" required></textarea>
            <button type="submit">Submit Review</button>
        </form>
        <div class="reviews">
            <!-- Placeholder for reviews -->
        </div>
    </section>

    <script src="js/main.js"></script>
</body>
</html>

