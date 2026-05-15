=====================================================
SAF PILIHAN SDN. BHD.
Student Management System
Developed by: Ashraf Wajdi bin Abdul Shukor
=====================================================


Project Description
-------------------
This project is a Student Management System developed using:

- PHP (Vanilla PHP)
- MySQL
- Bootstrap
- HTML/CSS
- XAMPP

The system supports complete CRUD functionality:

✓ Add student
✓ View student list
✓ Edit student information
✓ Delete student information

The user interface was designed with a Windows XP-inspired theme for a more interactive experience.


Project Structure
-----------------

student-system/

├── assets/
│   ├── css/
│   └── img/
│
├── config/
│   └── db.php
│
├── database/
│   └── database.sql
│
├── pages/
│   ├── add_student.php
│   ├── edit_student.php
│   ├── delete_student.php
│   └── list_students.php
│
├── index.php
└── README.txt


System Requirements
-------------------

Please ensure the following software is installed:

- XAMPP
- PHP
- MySQL


Installation Guide
------------------

Step 1:

Extract the project folder.

Copy the folder:

student-system

into:

XAMPP/htdocs/


Example:

C:/xampp/htdocs/student-system

or on macOS:

/Applications/XAMPP/xamppfiles/htdocs/student-system


Step 2:

Launch XAMPP Control Panel.

Start:

✓ Apache
✓ MySQL


Step 3:

Open phpMyAdmin:

http://localhost/phpmyadmin


Step 4:

Create a new database:

student_system


Step 5:

Import the SQL file:

database/database.sql


This will automatically create:

- students table
- dummy student records


Step 6:

Open browser and run:

http://localhost/student-system


Notes
-----

Default database configuration:

Host:
localhost

Username:
root

Password:
(empty)

Database:
student_system


Database configuration can be modified inside:

config/db.php


Additional Notes
----------------

The system includes:

- Windows XP-inspired user interface
- Responsive layout
- Dynamic taskbar clock
- Organized folder structure
- Simple and maintainable code structure


Thank you for reviewing my assessment.
Ashraf Wajdi bin Abdul Shukor