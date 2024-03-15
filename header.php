<div class="menu">
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="food.php">FOOD AND NUTRITION</a></li>
        <li><a href="vaccination.php" onclick="checkLoginAndRedirect('index.php')">VACCINATION</a></li>
        <li><a href="appointment.php">APPOINTMENT</a></li>
        <li><a href="aboutus.php">ABOUT US</a></li>
        <?php
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if (isset($_SESSION['name'])) {
            // User is logged in
            $uppercaseName = strtoupper($_SESSION['name']);
            echo '<li><span class="username">' . $uppercaseName . '</span></li>';
            echo '<li><img src="image2.jpg" alt="User Face" class="user-face"></li>';
            echo '<li><a href="logout.php">LOGOUT</a></li>';
        } else {
            // User is not logged in
            echo '<li><a href="login.php">LOGIN</a></li>';
        }
        ?>
    </ul>
</div>

<script>
    function checkLoginAndRedirect(destination) {
        // Check if the user is not logged in using JavaScript
        var isLoggedIn = <?php echo json_encode(isset($_SESSION['name'])); ?>;

        if (!isLoggedIn) {
            alert("Please log in to access this page.");
            setTimeout(function() {
                window.location.href = destination; // Redirect to the specified destination after the alert
            }, 0);
            return false;
        }
    }
</script>
