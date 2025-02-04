<?php
// include 'src/components/dBconnection.php';
include 'src/components/Icons.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="icon" type='img/png' href="https://raw.githubusercontent.com/AbhijeetDhikale007/ELearning/refs/heads/main/public/Logo.png">

    <link rel="stylesheet" href="src/styles/main.css">
    <link rel="stylesheet" href="src/styles/Dashboard.css">
</head>
<body class='bg-whitish'>
    <main class='flex z-0 items-center gap-20px'>
        <?php include 'src/components/Admin/AdminDash.php'; ?>
    </main>

    <script src="src/js/jquery-3.7.1.js"></script>
</body>
</html>