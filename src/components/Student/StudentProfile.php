<?php
// include 'src/components/dBconnection.php';
include 'src/components/Icons.php';

$Name = 'Your Name';
$Email = 'xyz.cct@gmail.com';
$ImgLink = 'public/Profile.jpg';
$Num = '+91 88056 47422';
$Address = 'House No. 108, Near College, Nashik, Maharashtra ';
$College = 'MET Bhujbal Knowledge City';
?>

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
                    <button class='EditButton'><?php echo $Icon_Edit ?></button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class='ProfileChange flex items-center justify-center absolute w-100 h-100'>
    <form action="StudentProfile.php" method="post">
        <div class='flex w-100 items-end'>
                <button class='CloseButton'><?php echo $Icon_Close; ?></button>
        </div>
        <div class='flex flex-row'>
            <div>
                <label for="profilelink">Profile url</label>
                <input type="text" name="profilelink">
            </div>
            <div>
                <label for="name">Your Name</label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email">
            </div>
        </div>
        <div class='flex flex-row'>
            <div>
                <label for="number">Number</label>
                <input type="number" name="number">
            </div>
            <div>
                <label for="location">Location</label>
                <input type="text" name="location">
            </div>
            <div>
                <label for="college">College</label>
                <input type="text" name="college">
            </div>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <div class='items-center'>
            <button class='submitButton' type="submit">Submit</button>
        </div>
    </form>
</div>

<script>
    const EditButton = document.querySelector('.EditButton');
    const CloseButton = document.querySelector('.CloseButton');
    const Profile = document.querySelector('.ProfileChange');

    EditButton.addEventListener('click', ()=> {
        Profile.classList.add('Active');
    });

    CloseButton.addEventListener('click', ()=> {
        Profile.classList.remove('Active');
    });
</script>