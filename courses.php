<?php
include 'src/components/Icons.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning Platform - Courses</title>

    <link rel="stylesheet" href="src/styles/main.css">
</head>
<body>
    <?php include 'src/components/Header.php'; ?>
    <main class='flex flex-col z-0 justify-center items-center mt-20'>
        <h1 class='text-5xl'>Courses</h1>
        <?php include 'src/components/PopularCourses.php'; ?>
        <?php include 'src/components/Footer.php'; ?>
    </main>
</body>
</html>