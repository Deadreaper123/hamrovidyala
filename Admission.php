<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <link rel="stylesheet" href="Admission.css">
    <script src="scripts.js" defer></script>
</head>
<body>

<div class="form-container">
    <h1>HAMRO VIDYALAYA</h1>
    <h2>Admission Form</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $permanentaddress = htmlspecialchars($_POST['permanentaddress']);
        $temporaryaddress = htmlspecialchars($_POST['temporaryaddress']);
        $dob_bs = htmlspecialchars($_POST['dob_bs']);
        $dob_ad = htmlspecialchars($_POST['dob_ad']);
        $fathers_name = htmlspecialchars($_POST['fathers_name']);
        $mothers_name = htmlspecialchars($_POST['mothers_name']);
        $class = htmlspecialchars($_POST['class']);

        // Simple validation
        if (empty($name) || empty($email) || empty($phone) || empty($permanentaddress) || empty($temporaryaddress) || empty($dob_bs) || empty($dob_ad) || empty($fathers_name) || empty($mothers_name) || empty($class)) {
            echo "<p class='error'>All fields are required.</p>";
        } else {
            // Display the submitted data
            echo "<div id='form-data'>";
            echo "<p class='success'>Thank you for your submission, $name.</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Phone:</strong> $phone</p>";
            echo "<p><strong>Permanent Address:</strong> $permanentaddress</p>";
            echo "<p><strong>Temporary Address:</strong> $temporaryaddress</p>";
            echo "<p><strong>Date of Birth (B.S):</strong> $dob_bs</p>";
            echo "<p><strong>Date of Birth (A.D):</strong> $dob_ad</p>";
            echo "<p><strong>Father's Name:</strong> $fathers_name</p>";
            echo "<p><strong>Mother's Name:</strong> $mothers_name</p>";
            echo "<p><strong>Class:</strong> $class</p>";
            echo "</div>";

            // Provide options to download and print
            echo "<button onclick='printForm()'>Print Form</button>";
            echo "<button onclick='downloadForm()'>Download Form</button>";
        }
    }
    ?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required>

        <div class="dob-container">
            <div class="dob-item">
                <label for="dob_bs">Date of Birth (B.S):</label>
                <input type="date" id="dob_bs" name="dob_bs" required>
            </div>
            <div class="dob-item">
                <label for="dob_ad">Date of Birth (A.D):</label>
                <input type="date" id="dob_ad" name="dob_ad" required>
            </div>
        </div>

        <label for="permanentaddress">Permanent Address:</label>
        <input type="text" id="permanentaddress" name="permanentaddress" required>

        <label for="temporaryaddress">Temporary Address:</label>
        <input type="text" id="temporaryaddress" name="temporaryaddress" required>

        <label for="fathers_name">Father's Name:</label>
        <input type="text" id="fathers_name" name="fathers_name" required>

        <label for="mothers_name">Mother's Name:</label>
        <input type="text" id="mothers_name" name="mothers_name" required>

        <label for="class">Class:</label>
        <select id="class" name="class" required>
            <option value="">Select a class</option>
            <option value="Play Group">Play Group</option>
            <option value="Nursery">Nursery</option>
            <option value="UKG">UKG</option>
            <option value="One">One</option>
            <option value="Two">Two</option>
            <option value="Three">Three</option>
            <option value="Four">Four</option>
            <option value="Five">Five</option>
            <option value="Six">Six</option>
            <option value="Seven">Seven</option>
            <option value="Eight">Eight</option>
            <option value="Nine">Nine</option>
            <option value="Ten">Ten</option>
        </select>

        <button type="submit">Submit</button>
    </form>
</div>

<script src="Admission.js"></script>
</body>
</html>
