<?php
// Establish database connection (modify these parameters according to your database setup)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "babycare";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $baby_name = $conn->real_escape_string($_POST['baby_name']);
    $appointment_date = $conn->real_escape_string($_POST['appointment_date']);
    $appointment_time = $conn->real_escape_string($_POST['appointment_time']);
    $baby_age = $conn->real_escape_string($_POST['baby_age']);

    // SQL query to insert data into the database
    $sql = "INSERT INTO appointments (baby_name, appointment_date, appointment_time, baby_age)
            VALUES ('$baby_name', '$appointment_date', '$appointment_time', '$baby_age')";

    if ($conn->query($sql) === TRUE) {
        // Appointment booked successfully, show pop-up message and redirect
        echo "<script>alert('Appointment booked successfully!'); window.location='index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>
