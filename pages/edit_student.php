<?php
include '../config/db.php';

$id = $_GET['id'];

$query = "SELECT * FROM students WHERE id = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $updateQuery = "UPDATE students
                    SET name='$name',
                        email='$email',
                        course='$course'
                    WHERE id=$id";

    mysqli_query($conn, $updateQuery);

    header("Location: list_students.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

<div class="xp-window">

    <div class="xp-titlebar">
        <div class="xp-title">Edit Student</div>
        <div class="xp-controls">
            <span>_</span><span>□</span><span class="close">X</span>
        </div>
    </div>

    <div class="xp-tabs">
        <a href="../index.php" class="tab">Home</a>
        <a href="add_student.php" class="tab">Add</a>
        <a href="list_students.php" class="tab active">View</a>
    </div>

    <div class="xp-content">
        <form method="POST">
            <table class="xp-form-table">
                <tr>
                    <td><label for="name">Name</label></td>
                    <td><input type="text" id="name" name="name" class="xp-input" value="<?php echo htmlspecialchars($row['name']); ?>" required></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input type="email" id="email" name="email" class="xp-input" value="<?php echo htmlspecialchars($row['email']); ?>" required></td>
                </tr>
                <tr>
                    <td><label for="course">Course</label></td>
                    <td><input type="text" id="course" name="course" class="xp-input" value="<?php echo htmlspecialchars($row['course']); ?>" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <div class="xp-btn-row">
                            <button type="submit" name="update" class="xp-btn xp-btn-warn">Update</button>
                            <a href="list_students.php" class="xp-btn xp-btn-green">Back</a>
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