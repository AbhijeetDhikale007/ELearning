<?php
// include 'src/components/dBconnection.php';
include 'Icons.php';

$Name = 'Your Name';
$Username = 'Username';
$ImgLink = 'public/Profile.jpg';
$Num = '+91 88056 47422';
?>

<?php include 'AdminAside.php'; ?>
<div class='DashContent w-100%'>
    <h1 class='arsenal-sc'>Profile</h1>
    <div>
        <div class='Profile'>
            <img src=<?php echo $ImgLink; ?> alt="Profile">
            <div class='h-100 flex flex-col gap-20px'>
                <p><?php echo $Name; ?></p>
                <p class='text-0-6'>Instructor/Admin</p>
                <p class='text-0-6'><?php echo $Username; ?></p>
                <p class='text-0-48'><?php echo $Num; ?></p>
                <div class='flex justify-end items-end'>
                    <button><?php echo $Icon_Edit ?></button>
                </div>
            </div>
        </div>
    </div>
</div>