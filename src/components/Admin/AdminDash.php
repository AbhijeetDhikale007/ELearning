<?php
// include 'src/components/dBconnection.php';
include 'src/components/Icons.php';
?>

<aside class='flex justify-center items-center'>
    <div class='flex flex-col gap-16px justify-center relative text-white'>
        <p class='arsenal-sc absolute top-4per w-100 text-1-4 text-white text-center'>Admin</p>
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
        <button id='StudentsButton' class:active={}>
            <?php echo $Icon_Students ?>
            Students
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
    <?php include 'src/components/Admin/AdminProfile.php'; ?>
</div>

<div class='DashContent w-100%' id='CoursesContent'>
    <?php include 'src/components/Admin/AdminCourses.php'; ?>
</div>

<div class='DashContent w-100%' id='StudentsContent'>
    <?php include 'src/components/Admin/AdminStudents.php'; ?>
</div>

<script>
    const DashButton = document.querySelector('#DashButton');
    const DashContent = document.querySelector('#DashContent');

    const ProfileButton = document.querySelector('#ProfileButton');
    const ProfileContent = document.querySelector('#ProfileContent');

    const CoursesButton = document.querySelector('#CoursesButton');
    const CoursesContent = document.querySelector('#CoursesContent');

    const StudentsButton = document.querySelector('#StudentsButton');
    const StudentsContent = document.querySelector('#StudentsContent');

    DashButton.addEventListener('click', ()=> {
        DashContent.classList.remove('Active');
        ProfileContent.classList.remove('Active');
        CoursesContent.classList.remove('Active');
        StudentsContent.classList.remove('Active');

        document.title = 'Admin Dashboard';
    });

    ProfileButton.addEventListener('click', ()=> {
        ProfileContent.classList.add('Active');
        DashContent.classList.add('Active');
        CoursesContent.classList.remove('Active');
        StudentsContent.classList.remove('Active');

        document.title = 'Admin Profile';
    });

    CoursesButton.addEventListener('click', ()=> {
        CoursesContent.classList.add('Active');
        DashContent.classList.add('Active');
        ProfileContent.classList.remove('Active');
        StudentsContent.classList.remove('Active');

        document.title = 'Admin Courses';
    });

    StudentsButton.addEventListener('click', ()=> {
        StudentsContent.classList.add('Active');
        DashContent.classList.add('Active');
        ProfileContent.classList.remove('Active');
        CoursesContent.classList.remove('Active');

        document.title = 'Admin Students';
    });
</script>