<?php
// include 'src/components/dBconnection.php';
// include 'src/components/Icons.php';
?>

<!------------- Aside Content ------------->

<section class='flex w-[18vw] md:w-[22vw]'>
<aside class='fixed top-0 flex justify-center items-center w-[18vw] md:w-[18vw]'>
    <div class='flex flex-col gap-16px justify-center relative text-white'>
        <p class='josefin-sans absolute text-[2.2vw] top-4per w-100 text-white text-center'>E-Learning</p>
        <button id='ProfileButton' class:active={}>
            <?php echo $Icon_Profile ?>
            Profile
        </button>
        <button id='CoursesButton' class:active={}>
            <?php echo $Icon_Courses ?>
            Courses
        </button>
        <a href='index.php' class='absolute bottom-4per w-100 text-1-3 text-white flex justify-center items-center'><?php echo $Icon_Back; ?></a>
    </div>
</aside>
</section>

<!------------- Profile Content ------------->

<div class='DashContent Active w-100%' id='ProfileContent'>
    <?php include 'src/components/Student/StudentProfile.php'; ?>
</div>

<!------------- Courses Content ------------->

<div class='DashContent w-100%' id='CoursesContent'>
    <?php include 'src/components/Student/StudentCourses.php'; ?>
</div>

<script>
    // Profile Button and Content
    const ProfileButton = document.querySelector('#ProfileButton');
    const ProfileContent = document.querySelector('#ProfileContent');

    // Courses Button and Content
    const CoursesButton = document.querySelector('#CoursesButton');
    const CoursesContent = document.querySelector('#CoursesContent');

    // Profile Button
    ProfileButton.addEventListener('click', ()=> {
        ProfileContent.classList.add('Active');
        CoursesContent.classList.remove('Active');

        document.title = 'E-Learning Platform - Profile';
    });

    // Courses Button
    CoursesButton.addEventListener('click', ()=> {
        CoursesContent.classList.add('Active');
        ProfileContent.classList.remove('Active');

        document.title = 'E-Learning Platform - Courses';
    });
</script>