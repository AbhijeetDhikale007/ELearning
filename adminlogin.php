<?php
// include 'src/components/dBconnection.php';
include 'src/components/Icons.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning Platform - Admin Login</title>
    <link rel="icon" type='img/png' href="public/Logo.png">

    <link rel="stylesheet" href="src/styles/main.css">
    <link rel="stylesheet" href="src/styles/login.css">
</head>
<body>
    <?php echo include 'src/components/Header.php'; ?>

    <main class='flex flex-col z-0 justify-center items-center'>
        <?php include 'src/components/AdminLogin.php'; ?>
    </main>

    <script src="src/js/jquery-3.7.1.js"></script>
</body>
</html>