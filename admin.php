<?php
// admin.php

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
// Retrieve registered details from the database
$sql = "SELECT * FROM vaccination_data";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

<div class="main">
    <div class="navbar">
        <div class="icon">
            <h2 class="logo">Admin Panel</h2>
        </div>

        <?php include_once('header.php') ?>
    </div>

    <div class="content">
        <h1>Registered Details</h1>

        <table border="1">
            <tr>
                <th>Baby Name</th>
                <th>Baby Age</th>
                <th>Date of Birth</th>
                <th>Father's Name</th>
                <th>Mother's Name</th>
                <th>Vaccines</th>
                <th>Action</th>
            </tr>

            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['baby_name']}</td>
                        <td>{$row['baby_age']}</td>
                        <td>{$row['dob']}</td>
                        <td>{$row['father_name']}</td>
                        <td>{$row['mother_name']}</td>
                        <td>{$row['vaccines']}</td>
                        <td><a href='generate_pdf.php?id={$row['baby_name']}' target='_blank' class='generate-pdf-btn'>Generate PDF</a></td>
                      </tr>";
            }
            ?>
        </table>
    </div>
</div>

<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>

<?php
// Close the database connection
mysqli_close($conn);
?>
