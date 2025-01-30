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
                    <button class='EditButton'><?php echo $Icon_Edit ?></button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class='ProfileChange flex items-center justify-center absolute w-100 h-100'>
        <form action="AdminProfile.php" method="post">
            <div class='flex w-100 items-end'>
                <button class='CloseButton'><?php echo $Icon_Close; ?></button>
            </div>
            <div>
                <label for="name">Your Name</label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="username">Username</label>
                <input type="text" name="username">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password">
            </div>
            <div>
                <label for="re_password">Confirm Password</label>
                <input type="password" name="re_password">
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