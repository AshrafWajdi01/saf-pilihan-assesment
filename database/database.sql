CREATE DATABASE student_system;

USE student_system;

CREATE TABLE students (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100),
    email VARCHAR(100),
    course VARCHAR(100)
);

INSERT INTO students (name, email, course) VALUES
('Ali', 'ali@gmail.com', 'Computer Science'),
('Abu', 'abu@gmail.com', 'Information Technology'),
('Siti', 'siti@gmail.com', 'Software Engineering'),
('Nur', 'nur@gmail.com', 'Data Science');