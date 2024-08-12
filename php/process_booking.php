<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $guests = $_POST['guests'];
    $requests = $_POST['requests'];

    $stmt = $conn->prepare("INSERT INTO bookings (name, email, phone, date, time, guests, special_requests) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssis", $name, $email, $phone, $date, $time, $guests, $requests);

    if ($stmt->execute()) {
        echo "<script>
                alert('Booking Successful!');
                window.location.href = '../home.php';
              </script>";
    } else {
        echo "<script>
                alert('Error: " . $stmt->error . "');
                window.location.href = '../book.php'; // Redirect back to booking page on error
              </script>";
    }

    $stmt->close();
    $conn->close();
}
?>
