<?php
require('fpdf/fpdf.php'); // Include the FPDF library

$servername = "localhost";
$username = "root";
$password = "";
$database = "babycare";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize the input data
    $babyName = mysqli_real_escape_string($conn, $_POST['baby_name']);
    $babyAge = mysqli_real_escape_string($conn, $_POST['baby_age']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $fatherName = mysqli_real_escape_string($conn, $_POST['father_name']);
    $motherName = mysqli_real_escape_string($conn, $_POST['mother_name']);

    // File upload handling
    $target_dir = "image/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["photo"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file and proceed with form data insertion
    } else {
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
            // File uploaded successfully, proceed with form data insertion
            $photoPath = $target_file; // Store the file path in a variable

            // Validate checkboxes
            $vaccines = isset($_POST['vaccines']) ? implode(', ', $_POST['vaccines']) : '';

            // Once you have validated and sanitized all other form fields,
            // insert the data into the database along with the file path
            $sql = "INSERT INTO vaccination_data (baby_name, baby_age, dob, father_name, mother_name, vaccines, image)
                    VALUES ('$babyName', '$babyAge', '$dob', '$fatherName', '$motherName', '$vaccines', '$photoPath')";

            if (mysqli_query($conn, $sql)) {
                // Generate PDF
                $pdf = new FPDF();
                $pdf->AddPage();
                $pdf->SetFont('Arial', 'B', 16);
                $pdf->Cell(40, 10, 'Baby Information Form');

                // Add form data to the PDF
                $pdf->Ln(10);
                $pdf->Cell(0, 10, "Baby Name: $babyName");
                $pdf->Ln(10);
                $pdf->Cell(0, 10, "Baby Age: $babyAge");
                $pdf->Ln(10);
                $pdf->Cell(0, 10, "Date of Birth: $dob");
                $pdf->Ln(10);
                $pdf->Cell(0, 10, "Father's Name: $fatherName");
                $pdf->Ln(10);
                $pdf->Cell(0, 10, "Mother's Name: $motherName");
                $pdf->Ln(10);
                $pdf->Cell(0, 10, "Vaccines: $vaccines");
                $pdf->Ln(10);
                // Add the photo to the PDF
                $pdf->Cell(0, 10, "Photo:");
                $pdf->Ln(10);
                $pdf->Image($photoPath, null, null, 100);

                // Save the PDF
                $pdfFileName = 'baby_form.pdf';
                $pdf->Output($pdfFileName, 'F');

                // Display pop-up message and provide the download link
                echo "<script>
                        var download = confirm('Record inserted successfully. Do you want to download the form?');
                        if (download) {
                            var newTab = window.open('$pdfFileName', '_blank');
                            if (!newTab) {
                                alert('Please allow pop-ups for this site to open the PDF in a new tab.');
                            } else {
                                window.location.href = 'index.php';
                            }
                        } else {
                            window.location.href = 'index.php';
                        }
                      </script>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
} else {
    // Redirect to the form page or perform other actions for GET requests
    header("Location: vaccination.php");
    exit();
}

// Close the database connection
mysqli_close($conn);
?>
