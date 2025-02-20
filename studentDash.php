<?php
include 'src/components/dBconnection.php';
include 'src/components/Icons.php';

// By default set to 1, change it with login.
$Login_id = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning Platform - Dashboard</title>
    <link rel="icon" type='img/png' href="https://raw.githubusercontent.com/AbhijeetDhikale007/ELearning/refs/heads/main/public/Logo.png">

    <link rel="stylesheet" href="src/styles/main.css">
    <link rel="stylesheet" href="src/styles/Dashboard.css">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class='bg-whitish'>
    <main class='flex z-0 items-center'>
        <?php include 'src/components/Student/StudentDash.php'; ?>
    </main>

    <script src="src/js/jquery-3.7.1.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
</body>
</html>