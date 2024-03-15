<!DOCTYPE html>
<html lang="en">
<head>
    <title>Appointment Booking</title>
    <link rel="stylesheet" href="appointment.css">
</head>
<body>

<div class="main">
    <div class="navbar">
        <div class="icon">
            <h2 class="logo">Baby Care System</h2>
        </div>
        <?php include_once('header.php') ?>
    </div> 

    <div class="content">
        <h1>Welcome To<br><span>Baby Care</span> System!</h1>
        <div class="appointment-form">
            <h2>Book an Appointment</h2>
            <form action="appointment_insert.php" method="post">
                <label for="baby_name">Baby Name:</label><br>
                <input type="text" id="baby_name" name="baby_name" required><br>

                <label for="appointment_date">Date:</label><br>
                <input type="date" id="appointment_date" name="appointment_date" required><br>

                <label for="appointment_time">Time:</label><br>
                <input type="time" id="appointment_time" name="appointment_time" required><br>

                <label for="baby_age">Baby Age:</label><br>
                <input type="number" id="baby_age" name="baby_age" required><br>

                <input type="submit" value="Book Appointment">
            </form>
        </div>
    </div>
</div>

<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>
