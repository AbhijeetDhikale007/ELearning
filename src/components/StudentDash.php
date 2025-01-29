<?php
// include 'src/components/dBconnection.php';
include 'Icons.php';

$Name = 'Your Name';
$Username = 'Username';
$ImgLink = 'public/Profile.jpg';
?>

<?php include 'StudentAside.php'; ?>
<div class='DashContent w-100%'>
    <h1 class='arsenal-sc'>Student Dashboard</h1>
    <div>
        <div class='Profile'>
            <img src=<?php echo $ImgLink; ?> alt="Profile">
            <div class='h-100 flex flex-col gap-20px'>
                <p><?php echo $Name; ?></p>
                <p class='text-0-6'>Student</p>
                <p class='text-0-6'><?php echo $Username; ?></p>
                <div class='flex justify-end items-end'>
                    <button><?php echo $Icon_Edit ?></button>
                </div>
            </div>
        </div>
    </div>
</div>