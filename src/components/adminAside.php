<?php
include 'Icons.php';
?>

<aside class='flex justify-center items-center'>
    <div class='flex flex-col gap-16px justify-center relative text-white'>
        <p class='absolute top-4per w-100 text-1-4 text-white text-center'>E-Learning</p>
        <a href="adminDash.php" class:active={}>
            <?php echo $Icon_Dashboard ?>
            Dashboard
        </a>
        <a href="adminProfile.php" class:active={}>
            <?php echo $Icon_Profile ?>
            Profile
        </a>
        <a href="adminCourses.php" class:active={}>
            <?php echo $Icon_Courses ?>
            Courses
        </a>
        <a href="adminStudents.php" class:active={}>
            <?php echo $Icon_Students ?>
            Students
        </a>
        <!-- <a href="" class:active={}>


        </a>
        <a href="" class:active={}>


        </a> -->
        <a href='index.php' class='absolute bottom-4per w-100 text-1-3 text-white flex justify-center items-center'><?php echo $Icon_Back; ?></a>
    </div>
</aside>