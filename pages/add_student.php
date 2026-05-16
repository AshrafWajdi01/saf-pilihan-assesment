<?php
include '../config/db.php';

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $query = "INSERT INTO students(name, email, course)VALUES('$name', '$email', '$course')";

    mysqli_query($conn, $query);

    header("Location: list_students.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

<div class="xp-window">

    <div class="xp-titlebar">
        <div class="xp-title">Add Student</div>
        <div class="xp-controls">
            <span>_</span><span>□</span><span class="close">X</span>
        </div>
    </div>

    <div class="xp-tabs">
        <a href="../index.php" class="tab">Home</a>
        <a href="add_student.php" class="tab active">Add Student</a>
        <a href="list_students.php" class="tab">View Students</a>
    </div>

    <div class="xp-content">
        <form method="POST">
            <table class="xp-form-table">
                <tr>
                    <td><label for="name">Name</label></td>
                    <td><input type="text" id="name" name="name" class="xp-input" pattern="[A-Za-z\s]+" title="Please enter a valid name" required></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input type="email" id="email" name="email" class="xp-input" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter a valid email address" required></td>
                </tr>
                <tr>
                    <td><label for="course">Course</label></td>
                    <td><input type="text" id="course" name="course" class="xp-input" pattern="[A-Za-z\s]+" title="Please enter a valid course name" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <div class="xp-btn-row">
                            <button type="submit" name="submit" class="xp-btn xp-btn-blue">Add Student</button>
                            <a href="list_students.php" class="xp-btn xp-btn-green">View Students</a>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <!-- XP TASKBAR -->
    <div class="xp-taskbar">

        <!-- Start Button -->
        <div class="xp-start">
            <div class="xp-logo">
                <span class="r"></span>
                <span class="g"></span>
                <span class="b"></span>
                <span class="y"></span>
            </div>
            start
        </div>

        <!-- Open Windows -->
        <div class="xp-taskbar-items">
            <div class="xp-taskbar-btn active">Student Management System</div>
        </div>

        <!-- System Tray / Clock -->
        <div class="xp-systray">
            <div class="xp-icons">
                <span title="Network">🌐</span>
                <span title="Volume">🔊</span>
                <span title="Security">🛡</span>
                <span title="Battery">🔋</span>
            </div>

            <div id="xp-clock">00:00</div>
        </div>

    </div>

    <!-- Live Clock Script -->
    <script>
        function updateClock() {
            const now = new Date();
            const h = String(now.getHours()).padStart(2, '0');
            const m = String(now.getMinutes()).padStart(2, '0');
            document.getElementById('xp-clock').textContent = h + ':' + m;
        }
        updateClock();
        setInterval(updateClock, 1000);
    </script>

</div>

</body>
</html>