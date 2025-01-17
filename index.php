<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning Platform</title>

    <link rel="stylesheet" href="/src/styles/main.css">
</head>
<body>
    <header class='flex absolute top-0 items-center justify-between px-20'>
        <p class="text-3xl select-none">E-Learning</p>
        <nav class='flex text-xl'>
            <a class='Button' href="#">Home</a>
            <a class='Button' href="#">Course</a>
            <a class='Button' href="#">Login</a>
            <a class='Button' href="#">Signup</a>
            <a class='Button' href="#">Contact</a>
        </nav>
    </header>

    <main class='flex flex-col z-0 justify-center items-center'>
        <div class='WelcomeContainer flex justify-center items-center'>
            <!-- <video class='z--1 w-100%' playsinline autoplay muted loop>
                <source src='/public/Background.mp4'>
            </video> -->
            <div class='WelcomeDiv flex absolute flex-col justify-center items-center'>
                <h1 class='text-4xl'>Welcome To E-Learning Platform</h1>
                <p>Learn and Implement</p>
                <a class='Button2 text-lg mt-2' href="#">Get Started</a>
            </div>
        </div>
        <div class='flex justify-between items-center'>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><path fill="#fff" d="M202.24 74C166.11 56.75 115.61 48.3 48 48a31.36 31.36 0 0 0-17.92 5.33A32 32 0 0 0 16 79.9V366c0 19.34 13.76 33.93 32 33.93c71.07 0 142.36 6.64 185.06 47a4.11 4.11 0 0 0 6.94-3V106.82a15.9 15.9 0 0 0-5.46-12A143 143 0 0 0 202.24 74m279.68-20.7A31.33 31.33 0 0 0 464 48c-67.61.3-118.11 8.71-154.24 26a143.3 143.3 0 0 0-32.31 20.78a15.93 15.93 0 0 0-5.45 12v337.13a3.93 3.93 0 0 0 6.68 2.81c25.67-25.5 70.72-46.82 185.36-46.81a32 32 0 0 0 32-32v-288a32 32 0 0 0-14.12-26.61"/></svg>
                <p>100+ Cources</p>
            </div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </main>

    <script src="src/js/jquery-3.7.1.js"></script>
</body>
</html>