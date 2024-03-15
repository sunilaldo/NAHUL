<?php
// generate_pdf.php

require('fpdf/fpdf.php'); // Include the FPDF library

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

if(isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']); // Change 'baby_name' to 'id' here

    $sql = "SELECT * FROM vaccination_data WHERE baby_name = '$id'"; // Change 'baby_name' to 'id' here
    $result = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(40, 10, 'Baby Information Form');

        // Add more cells with the form data
        $pdf->Cell(40, 10, 'Baby Name: ' . $row['baby_name'] . "\n");
        $pdf->Cell(40, 10, 'Baby Age: ' . $row['baby_age']. "\n");
        $pdf->Cell(40, 10, 'Date of Birth: ' . $row['dob']. "\n");
        $pdf->Cell(40, 10, 'Father\'s Name: ' . $row['father_name']. "\n");
        $pdf->Cell(40, 10, 'Mother\'s Name: ' . $row['mother_name']. "\n");
        $pdf->Cell(40, 10, 'Vaccines: ' . $row['vaccines']);

        // Output the PDF
        $pdf->Output('baby_form_'.$row['baby_name'].'.pdf', 'D');
    }
}

// Close the database connection
mysqli_close($conn);
?>
