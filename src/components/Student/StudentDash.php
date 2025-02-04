<?php
// include 'src/components/dBconnection.php';
include 'src/components/Icons.php';
?>

<aside class='flex justify-center items-center'>
    <div class='flex flex-col gap-16px justify-center relative text-white'>
        <p class='absolute top-4per w-100 text-1-4 text-white text-center'>E-Learning</p>
        <button id='DashButton' class:active={}>
            <?php echo $Icon_Dashboard ?>
            Dashboard
        </button>
        <button id='ProfileButton' class:active={}>
            <?php echo $Icon_Profile ?>
            Profile
        </button>
        <button id='CoursesButton' class:active={}>
            <?php echo $Icon_Courses ?>
            Courses
        </button>
        <!-- <a href="" class:active={}>


        </a>
        <a href="" class:active={}>


        </a> -->
        <a href='index.php' class='absolute bottom-4per w-100 text-1-3 text-white flex justify-center items-center'><?php echo $Icon_Back; ?></a>
    </div>
</aside>

<div class='DashContent w-100%' id='DashContent'>
    <h1 class='arsenal-sc'>Dashboard</h1>
</div>

<div class='DashContent w-100%' id='ProfileContent'>
    <?php include 'src/components/Student/StudentProfile.php'; ?>
</div>

<div class='DashContent w-100%' id='CoursesContent'>
    <?php include 'src/components/Student/StudentCourses.php'; ?>
</div>

<script>
    const DashButton = document.querySelector('#DashButton');
    const DashContent = document.querySelector('#DashContent');

    const ProfileButton = document.querySelector('#ProfileButton');
    const ProfileContent = document.querySelector('#ProfileContent');

    const CoursesButton = document.querySelector('#CoursesButton');
    const CoursesContent = document.querySelector('#CoursesContent');

    DashButton.addEventListener('click', ()=> {
        DashContent.classList.remove('Active');
        ProfileContent.classList.remove('Active');
        CoursesContent.classList.remove('Active');

        document.title = 'E-Learning Platform - Dashboard';
    });

    ProfileButton.addEventListener('click', ()=> {
        ProfileContent.classList.add('Active');
        DashContent.classList.add('Active');
        CoursesContent.classList.remove('Active');

        document.title = 'E-Learning Platform - Profile';

    });

    CoursesButton.addEventListener('click', ()=> {
        CoursesContent.classList.add('Active');
        DashContent.classList.add('Active');
        ProfileContent.classList.remove('Active');

        document.title = 'E-Learning Platform - Courses';
    });
</script>