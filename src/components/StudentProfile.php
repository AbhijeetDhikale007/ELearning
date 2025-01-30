<?php
// include 'src/components/dBconnection.php';
include 'Icons.php';

$Name = 'Your Name';
$Email = 'xyz.cct@gmail.com';
$ImgLink = 'public/Profile.jpg';
$Num = '+91 88056 47422';
$Address = 'House No. 108, Near College, Nashik, Maharashtra ';
$College = 'MET Bhujbal Knowledge City';
?>

<?php include 'StudentAside.php'; ?>
<div class='DashContent w-100%'>
    <h1 class='arsenal-sc'>Profile</h1>
    <div>
        <div class='Profile'>
            <img src=<?php echo $ImgLink; ?> alt="Profile">
            <div class='h-100 flex flex-col gap-16px'>
                <p><?php echo $Name; ?></p>
                <p class='text-0-6'>Student</p>
                <p class='text-0-6'><?php echo $Email; ?></p>
                <p class='text-0-48'><?php echo $Num; ?></p>
                <p class='text-0-48'><?php echo $Address; ?></p>
                <p class='text-0-48'><?php echo $College; ?></p>
                <div class='flex justify-end items-end'>
                    <button><?php echo $Icon_Edit ?></button>
                </div>
            </div>
        </div>
    </div>
</div>