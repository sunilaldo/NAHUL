<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vaccination Form - Baby Care System</title>
    <link rel="stylesheet" href="vaccination.css">
    <script>
        function validateAgeAndDOB() {
            var ageInput = document.getElementById('baby-age');
            var age = parseFloat(ageInput.value);

            var dobInput = document.getElementById('dob');
            var selectedDate = new Date(dobInput.value);
            var currentDate = new Date();
            var fiveYearsAgo = new Date();
            fiveYearsAgo.setFullYear(currentDate.getFullYear() - 5);

            if (isNaN(age) || age < 0 || age > 5) {
                document.getElementById('age-error').innerText = "Please enter a valid age between 0 and 5 years.";
                ageInput.classList.add('error');
            } else {
                document.getElementById('age-error').innerText = "";
                ageInput.classList.remove('error');
            }

            if (selectedDate > currentDate || selectedDate < fiveYearsAgo) {
                document.getElementById('dob-error').innerText = "Please enter a valid date within the last five years.";
                dobInput.classList.add('error');
            } else {
                document.getElementById('dob-error').innerText = "";
                dobInput.classList.remove('error');
            }
        }
    </script>
</head>
<body>

<div class="main">
    <div class="navbar">
        <div class="icon">
            <h2 class="logo" style="color:red">Baby Care System</h2>
        </div>
    <?php include_once('header.php') ?>
    </div>

    <div class="content">
        <div class="form">
            <h2 style="color:gold">Vaccination Form</h2>
            <form method="post" action="vaccination_insert.php" oninput="validateAgeAndDOB()" enctype="multipart/form-data">
                <div class="textbox">
                    <label for="baby-name">Baby Name:</label>
                    <input type="text" placeholder="Enter Name" id="baby-name" name="baby_name" required>
                </div>
                <div class="textbox">
                    <label for="baby-age">Baby Age:</label>
                    <input type="number" placeholder="Enter age" id="baby-age" name="baby_age" min="0" max="5" step="0.1" required>
                    <span id="age-error" class="error-message"></span>
                </div>
                <div class="textbox">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" id="dob" name="dob" max="<?php echo date('Y-m-d'); ?>" required>
                    <span id="dob-error" class="error-message"></span>
                </div>
                <div class="textbox">
                    <label for="father-name">Father's Name:</label>
                    <input type="text" placeholder="Enter Father Name" id="father-name" name="father_name" required>
                </div>
                <div class="textbox">
                    <label for="mother-name">Mother's Name:</label>
                    <input type="text" placeholder="Enter Mother Name" id="mother-name" name="mother_name" required>
                </div>
                <div class="textbox">
                    <label for="photo">Baby's Photo:</label>
                    <input type="file" id="photo" name="photo" accept="image/*" required>
                </div>
                <div class="textbox">
                    <label>Vaccinations Taken:</label>
                    <div></div>
                    <label for="vaccine1">diphtheria</label>
                    <input type="checkbox" id="vaccine1" name="vaccines[]" value="diphtheria">

                    <label for="vaccine2">tetanus</label>
                    <input type="checkbox" id="vaccine2" name="vaccines[]" value="tetanus">

                    <label for="vaccine3">pertussis</label>
                    <input type="checkbox" id="vaccine3" name="vaccines[]" value="pertussis">
                </div>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
