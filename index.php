<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Management System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<div class="xp-window">

    <!-- TITLE BAR -->
    <div class="xp-titlebar">
        <div class="xp-title">
            Student Management System
        </div>

        <div class="xp-controls">
            <span>_</span>
            <span>□</span>
            <span class="close">X</span>
        </div>
    </div>

    <!-- TABS -->
    <div class="xp-tabs">
        <a href="index.php" class="tab active">Home</a>
        <a href="pages/add_student.php" class="tab">Add Student</a>
        <a href="pages/list_students.php" class="tab">View Students</a>
    </div>

    <!-- CONTENT -->
    <div class="xp-content text-center">

        <div class="header">
            <div class="logo-header">
                <img src="assets/img/saf.png" alt="Saf Pilihan Sdn. Bhd. Logo">
            </div>
            <p>Student Management System</p>
            <small>Built by Ashraf Wajdi bin Abdul Shukor</small>
        </div>

        <div class="mt-4">
            <a href="pages/add_student.php" class="xp-btn xp-btn-blue">Add Student</a>
            <a href="pages/list_students.php" class="xp-btn xp-btn-green">View Students</a>
        </div>

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