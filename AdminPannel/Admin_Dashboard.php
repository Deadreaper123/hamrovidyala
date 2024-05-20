<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Admin Dashboard</title>
    <link rel="stylesheet" href="Admin_Dashboard.css">
    <script src="scripts.js" defer></script>
</head>
<body>

<div class="dashboard">
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="#overview">Overview</a></li>
            <li><a href="#students">Students</a></li>
            <li><a href="#teachers">Teachers</a></li>
            <li><a href="#classes">Classes</a></li>
        </ul>
    </div>

    <div class="main-content">
        <div id="overview" class="content-section">
            <h2>Overview</h2>
            <div class="stats">
                <div class="stat-item">
                    <h3>Students</h3>
                    <p><?php echo $conn->query("SELECT COUNT(*) FROM students")->fetch_row()[0]; ?></p>
                </div>
                <div class="stat-item">
                    <h3>Teachers</h3>
                    <p><?php echo $conn->query("SELECT COUNT(*) FROM teachers")->fetch_row()[0]; ?></p>
                </div>
                <div class="stat-item">
                    <h3>Classes</h3>
                    <p><?php echo $conn->query("SELECT COUNT(*) FROM classes")->fetch_row()[0]; ?></p>
                </div>
            </div>
        </div>

        <div id="students" class="content-section">
            <h2>Students</h2>
            <button onclick="toggleForm('studentForm')">Add Student</button>
            <div id="studentForm" class="form-popup">
                <form action="add_student.php" method="post">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <button type="submit">Submit</button>
                </form>
            </div>
            <!-- Add student list here -->
        </div>

        <div id="teachers" class="content-section">
            <h2>Teachers</h2>
            <button onclick="toggleForm('teacherForm')">Add Teacher</button>
            <div id="teacherForm" class="form-popup">
                <form action="add_teacher.php" method="post">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <button type="submit">Submit</button>
                </form>
            </div>
            <!-- Add teacher list here -->
        </div>

        <div id="classes" class="content-section">
            <h2>Classes</h2>
            <button onclick="toggleForm('classForm')">Add Class</button>
            <div id="classForm" class="form-popup">
                <form action="add_class.php" method="post">
                    <label for="name">Class Name:</label>
                    <input type="text" id="name" name="name" required>
                    <button type="submit">Submit</button>
                </form>
            </div>
            <!-- Add class list here -->
        </div>
    </div>
</div>
<<script src="Admin_Dashboard.js">
    
</script>
</body>
</html>
