<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "database"; 

// $conn = new mysqli($servername, $username, $password);

// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

include 'src/components/Icons.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning Platform</title>

    <link rel="stylesheet" href="src/styles/main.css">
    <link rel="stylesheet" href="src/styles/startLearning.css">
</head>
<body>
    <?php echo include 'src/components/Header.php'; ?>

    <main class='flex flex-col z-0 justify-center items-center'>
        <div class='WelcomeContainer flex justify-center items-center'>
            <!-- <video class='z--1 w-100%' playsinline autoplay muted loop>
                <source src='/public/Background.mp4'>
            </video> -->
            <div class='WelcomeDiv flex absolute flex-col justify-center items-center'>
                <h1 class='text-4xl'>Welcome To E-Learning Platform</h1>
                <p>Learn and Implement</p>
                <a class='Button2 text-lg mt-2' href="/Elearning/courses.php">Get Started</a>
            </div>
        </div>
        <div class='DetailsDiv bg-orange-600 flex justify-between items-center'>
            <div>
                <?php echo $Icon_cources; ?>
                <p>100+ Cources</p>
            </div>
            <div>
                <?php echo $Icon_experts; ?>
                <p>Expert Instructors</p>
            </div>
            <div>
                <?php echo $Icon_access; ?>
                <p>Lifetime Access</p>
            </div>
            <div>
                <?php echo $Icon_guarantee; ?>
                <p>Moneyback Guarantee</p>
            </div>
        </div>

        <h1 class='text-4xl mt-20'>Popular Courses</h1>
        <?php include 'src/components/PopularCourses.php'; ?>
        <?php include 'src/components/StartLearning.php'; ?>
        <?php include 'src/components/Contact.php'; ?>
        <?php include 'src/components/Footer.php'; ?>
    </main>

    <script src="src/js/jquery-3.7.1.js"></script>
</body>
</html>