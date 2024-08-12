<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $rating = $_POST['rating'];
    $comments = $_POST['comments'];

    $stmt = $conn->prepare("INSERT INTO reviews (name, email, rating, comments) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $name, $email, $rating, $comments);

    if ($stmt->execute()) {
        echo "<script>
                alert('Review Submitted Successful!');
                window.location.href = '../home.php';
              </script>";
    } else {
        echo "<script>
                alert('Error: " . $stmt->error . "');
                window.location.href = '../reviews.php'; // Redirect back to booking page on error
              </script>";

        $stmt->close();
        $conn->close();
    }
}
?>
