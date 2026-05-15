<?php
include '../config/db.php';

$query = "SELECT * FROM students";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>List Students</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

<div class="xp-window">

    <div class="xp-titlebar">
        <div class="xp-title">Student List</div>
        <div class="xp-controls">
            <span>_</span><span>□</span><span class="close">X</span>
        </div>
    </div>

    <div class="xp-tabs">
        <a href="../index.php" class="tab">Home</a>
        <a href="add_student.php" class="tab">Add</a>
        <a href="list_students.php" class="tab active">View</a>
    </div>

    <table class="xp-table">
        <thead>
            <tr>
                <th>ID</th><th>Name</th><th>Email</th><th>Course</th><th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo htmlspecialchars($row['name']); ?></td>
                <td><?php echo htmlspecialchars($row['email']); ?></td>
                <td><?php echo htmlspecialchars($row['course']); ?></td>
                <td>
                    <a href="edit_student.php?id=<?php echo $row['id']; ?>" class="xp-btn xp-btn-warn" style="min-width:50px;padding:3px 10px;">Edit</a>
                    <a href="delete_student.php?id=<?php echo $row['id']; ?>" class="xp-btn xp-btn-red" style="min-width:55px;padding:3px 10px;" onclick="return confirm('Delete this student?')">Delete</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

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